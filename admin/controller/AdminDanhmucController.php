<?php

class AdminDanhmucController {
    public $model ;
    public function __construct(){
        $this -> model = new AdminDanhmucModel ;
    }
    public function index(){
        $list = $this->model->getlist();
        require_once '../admin/view/Danhmuc/list.php';
    }

    public function create(){
        require_once '../admin/view/Danhmuc/add.php';
    }
    public function store(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];
        // xử lý lỗi
            $error = [];
            if(empty($ten_danh_muc)){
                $error['ten_danh_muc'] = 'bạn chưa nhập tên danh mục';
            }else if(empty($mo_ta)){
                $error['mo_ta'] = 'bạn chưa nhập mô tả';
            }

            if(empty($error)){
                $this->model->addList($ten_danh_muc,$mo_ta);
                header('location :'.BASE_URL_ADMIN);
            }else{
                require_once '../admin/view/Danhmuc/add.php';
            }


        }
    }
    public function edit(){
        $id = $_GET['id'];
        $list= $this->model->getproductid($id);
        require_once '../admin/view/Danhmuc/edit.php';
    }
    public function update(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];
        // xử lý lỗi
            $error = [];
            if(empty($ten_danh_muc)){
                $error['ten_danh_muc'] = 'bạn chưa nhập tên danh mục';
            }else if(empty($mo_ta)){
                $error['mo_ta'] = 'bạn chưa nhập mô tả';
            }

            if(empty($error)){
                $this->model->addproductid($id,$ten_danh_muc,$mo_ta);
                header('?act=danhmuc');
            }else{
                require_once '../admin/view/Danhmuc/add.php';
            }


        }
    }
    public function destroy(){
        
    }

}
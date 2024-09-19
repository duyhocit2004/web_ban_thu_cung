<?php

 class AdminSanphamController{
    public $model ;
    public function __construct(){
        $this -> model = new AdminSanphamModel() ;
    }
    public function index(){
        $list = $this->model->GetlistAll();
        require_once '../admin/view/Sanpham/list.php';
    }
    public function create(){
        require_once '../admin/view/Sanpham/add.php';
    }
    public function store(){
        var_dump($_POST);
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
 }
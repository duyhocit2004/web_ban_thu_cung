<?php

class AdminDanhmucModel {

    public $data ;
    public function __construct(){
        $this ->data = connectDB();
    }

    public function getlist (){
        $sql ="SELECT * FROM `danh_mucs`";
        
        $stmt = $this->data->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
    public function addlist($ten_danh_muc,$mo_ta){
        $sql = "INSERT INTO danh_mucs   (`ten_danh_muc` , `mo_ta`) values ('$ten_danh_muc' ,'$mo_ta' )";
        $stmt = $this->data ->prepare($sql);
        $stmt -> execute();
        return true;
    }
    public function getproductid($id){
        $sql = "SELECT * FROM danh_mucs WHERE id=$id";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetch();
    }

        public function addproductid($id , $ten_danh_muc , $mo_ta){
            $sql = "UPDATE `danh_mucs` SET `ten_danh_muc`='$ten_danh_muc',`mo_ta`='$mo_ta' WHERE $id";
            $stmt = $this->data->prepare($sql);
            $stmt->execute();
        }
}
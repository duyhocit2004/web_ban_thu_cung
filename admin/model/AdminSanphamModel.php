<?php
 class AdminSanphamModel {
    public $data ;

    public function __construct(){
        $this->data = connectDB();
    }

    public function GetlistAll(){
        // $sql = "SELECT *, danh_muc_id as danh_mucs.name FROM danh.muc "
        $sql = "SELECT * FROM san_phams";
        $stmt = $this->data->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
    
 }
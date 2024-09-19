<?php

class SanphamModel{
    public $model ;
    public function __construct(){
        $this ->model = connectDB();
    }
    public function getlist (){
        $sql = 'SELECT * FROM san_phams';
        $stmt = $this -> model ->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

}
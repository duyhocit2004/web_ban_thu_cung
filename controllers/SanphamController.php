<?php

class SanphamController {

    public $model ;

    public function __construct(){
        $this->model = new SanphamModel();
    }
    public function index(){
        $listproduct = $this->model ->getlist();
        // var_dump($listproduct);die();
        require_once './views/index.php';
        
    }
}
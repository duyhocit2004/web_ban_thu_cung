<?php


// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once '../admin/controller/AdminDanhmucController.php';
require_once '../admin/controller/AdminSanphamController.php';
// Require toàn bộ file Models
require_once '../admin/model/AdminDanhmucModel.php';
require_once '../admin/model/AdminSanphamModel.php';


// Route
$act = $_GET['act'] ?? '/';

// if($_GET['act']){
//     $act = $_GET['act'];
// }else{
//     $act = "/";
// }
// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'=> (new AdminSanphamController())->index(),

    //sản phẩm
    'sanpham' => (new AdminSanphamController())->index(),
    'form-them-sanpham' => (new AdminSanphamController())->create(),
    'them_san_sanpham' => (new AdminSanphamController())->store(),
    'form-sua-sanpham' => (new AdminSanphamController())->edit(),
    'sua-sanpham' => (new AdminSanphamController())->update(),
    'xoa-sanpham' => (new AdminSanphamController())->destroy(),

    //danh mục
    'danhmuc' => (new AdminDanhmucController())->index(),
    'form-them-danhmuc' => (new AdminDanhmucController())->create(),
    'them-danhmuc' => (new AdminDanhmucController())->store(),
    'form-sua-danhmuc' => (new AdminDanhmucController())->edit(),
    'sua-danhmuc' => (new AdminDanhmucController())->update(),
    'xoa-danhmuc' => (new AdminDanhmucController())->destroy(),
};  
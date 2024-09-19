<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/web_ban_thu_cung/');
define('BASE_URL_ADMIN'       , 'http://localhost/web_ban_thu_cung/admin/');


define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'web_ban_thu_cung');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');

<?php
session_start();

// Tự động load các controllers
spl_autoload_register(function ($class_name) {
    if (file_exists('controllers/' . $class_name . '.php')) {
        require_once 'controllers/' . $class_name . '.php';
    }
});

// Xác định controller và action
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'sinhvien';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Khởi tạo controller tương ứng


// Gọi phương thức tương ứng
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    // // Mặc định là trang chủ
    // $controller = new SinhVienController();
    // $controller->index();
}
?>
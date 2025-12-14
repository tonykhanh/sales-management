<?php
/**
 * Database Configuration File
 * Hỗ trợ nhiều môi trường: Local, Development, Production
 */

// Phát hiện môi trường
function getEnvironment() {
    $host = $_SERVER['HTTP_HOST'];
    
    // Kiểm tra Localhost
    if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
        return 'local';
    } 
    // Kiểm tra InfinityFree (thêm domain infinityfreeapp.com)
    elseif (strpos($host, 'infinityfree') !== false || strpos($host, '.rf.gd') !== false || strpos($host, '.epizy.com') !== false) {
        return 'infinityfree';
    } 
    // Kiểm tra 000WebHost
    elseif (strpos($host, '000webhostapp.com') !== false) {
        return '000webhost';
    } 
    else {
        return 'infinityfree'; // Mặc định về InfinityFree cho an toàn trên server này
    }
}

$env = getEnvironment();

// Khởi tạo biến mặc định để tránh lỗi Undefined variable
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Cấu hình theo môi trường
switch ($env) {
    case 'local':
        // Môi trường Local (XAMPP/WAMP/MAMP)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbanhang";
        break;
        
    case 'infinityfree':
        // InfinityFree Hosting - CONFIGURED
        $servername = "sql103.infinityfree.com";
        $username = "if0_40677164";
        $password = "YwTpzJPnj336c";
        $dbname = "if0_40677164_db_sale_management";
        break;
        
    case '000webhost':
        // 000WebHost Hosting
        $servername = "localhost";
        $username = "id_XXXXXXXX";
        $password = "YOUR_PASSWORD_HERE";
        $dbname = "id_XXXXXXXX_webbanhang";
        break;
        
    default:
        // Fallback về InfinityFree nếu không nhận diện được
        $servername = "sql103.infinityfree.com";
        $username = "if0_40677164";
        $password = "YwTpzJPnj336c";
        $dbname = "if0_40677164_db_sale_management";
        break;
}

// Kết nối database
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    // Trong production, không hiển thị chi tiết lỗi
    if ($env === 'local') {
        die("Kết nối thất bại: " . $conn->connect_error);
    } else {
        // TEMPORARY: Enable error display to debug connection issues
        die("Không thể kết nối database: " . $conn->connect_error); 
    }
}

// Set charset UTF-8 để hỗ trợ tiếng Việt
$conn->set_charset("utf8mb4");

// Error reporting configuration
if ($env !== 'local') {
    // TEMPORARY: Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    // Original production settings (commented out for debugging)
    // error_reporting(0);
    // ini_set('display_errors', 0);
}

// Debug mode (chỉ bật trong local)
define('DEBUG_MODE', $env === 'local');

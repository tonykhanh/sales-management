<?php
// Bật hiển thị lỗi để debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>🔍 Debug Website</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Current Directory: " . getcwd() . "</p>";

// 1. Kiểm tra cấu trúc thư mục
echo "<h2>1. Kiểm tra file hệ thống</h2>";
$paths_to_check = [
    'admin/php/db_connect.php', // File database quan trọng
    'php/header.php',           // File giao diện
    'php/footer.php',
    'admin/db_connect.php'      // Kiểm tra xem có file cũ nằm sai chỗ không
];

foreach ($paths_to_check as $path) {
    if (file_exists($path)) {
        echo "<span style='color:green'>✅ Tìm thấy file: <b>$path</b></span><br>";
    } else {
        echo "<span style='color:red'>❌ KHÔNG tìm thấy file: <b>$path</b></span><br>";
        // Gợi ý nếu thiếu
        if ($path == 'admin/php/db_connect.php') {
            echo "👉 Lỗi này sẽ khiến category.php bị 500 error. Hãy kiểm tra folder 'admin' có nằm cùng cấp với file này không.<br>";
        }
    }
}

// 2. Kiểm tra kết nối Database
echo "<h2>2. Test Kết Nối Database</h2>";

try {
    // Thử include file kết nối
    if (file_exists('admin/php/db_connect.php')) {
        echo "Example require: <code>require_once('admin/php/db_connect.php');</code><br>";
        require_once('admin/php/db_connect.php');
        echo "✅ Require file thành công!<br>";
        
        if (isset($conn) && $conn instanceof mysqli) {
            echo "Attempting ping... ";
            if ($conn->ping()) {
                echo "<span style='color:green; font-weight:bold'>✅ KẾT NỐI DATABASE THÀNH CÔNG!</span><br>";
                echo "Host info: " . $conn->host_info . "<br>";
            } else {
                echo "<span style='color:red'>❌ Kết nối Database THẤT BẠI (Ping failed)!</span><br>";
                echo "Error: " . $conn->error;
            }
        } else {
            echo "<span style='color:red'>❌ Biến connection ($conn) không tồn tại hoặc không hợp lệ sau khi require.</span><br>";
        }
    } else {
        echo "<span style='color:red'>❌ Bỏ qua test database vì không tìm thấy file db_connect.php.</span><br>";
    }
} catch (Throwable $e) {
    echo "<div style='background-color: #ffe6e6; border: 1px solid red; padding: 10px; margin-top: 10px;'>";
    echo "<h3 style='color:red; margin-top:0'>❌ Exception/Error Gây Ra Lỗi 500:</h3>";
    echo "<b>Lỗi:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . "<br>";
    echo "<b>Line:</b> " . $e->getLine() . "<br>";
    echo "</div>";
}
?>

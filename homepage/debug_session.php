<?php
// Bật hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

echo "<h1>System Health Check</h1>";

// 1. Session Check
echo "<h2>1. Session Test</h2>";
echo "Session ID: " . session_id() . "<br>";
if (!isset($_SESSION['test_counter'])) {
    $_SESSION['test_counter'] = 0;
    echo "Status: 🟡 Initialized (Reload to verify persistence)<br>";
} else {
    $_SESSION['test_counter']++;
    echo "Status: 🟢 Working (Counter: " . $_SESSION['test_counter'] . ")<br>";
}

if (!empty($_SESSION['cart'])) {
    echo "Cart Data: 🟢 Found (" . count($_SESSION['cart']) . " items)<br>";
} else {
    echo "Cart Data: ⚪ Empty<br>";
}

// 2. Environment Check
echo "<h2>2. Environment Check</h2>";
$host = $_SERVER['HTTP_HOST'];
echo "Domain: " . $host . "<br>";

// 3. Database Check
echo "<h2>3. Database Connection Test</h2>";
echo "Attempting to connect...<br>";

// Include logic manually to debug variables
$servername = "sql103.infinityfree.com";
$username = "if0_40677164";
$password = "YwTpzJPnj336c";
$dbname = "if0_40677164_db_sale_management";

// Detect env logic validation
if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    echo "Detected Environment: LOCAL (Warning: This script is running on Local config logic?)<br>";
} elseif (strpos($host, 'infinityfree') !== false || strpos($host, '.rf.gd') !== false || strpos($host, '.epizy.com') !== false) {
    echo "Detected Environment: InfinityFree<br>";
} else {
    echo "Detected Environment: Unknown (Defaulting to InfinityFree)<br>";
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection Status: 🔴 FAILED<br>";
    echo "Error: " . $conn->connect_error . "<br>";
    echo "<strong>Fix:</strong> Please check your database password/username in `admin/php/db_connect.php`.<br>";
} else {
    echo "Connection Status: 🟢 SUCCESS<br>";
    echo "Host Info: " . $conn->host_info . "<br>";
}

echo "<hr>";
echo "<a href='debug_session.php'>Reload Page</a> | <a href='cart.php'>Go to Cart</a>";
?>

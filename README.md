# Website Quản Lý Bán Hàng / Sales Management Website

> Website quản lý bán hàng điện thoại di động với giao diện người dùng và trang quản trị viên
> 
> E-commerce website for mobile phone sales with customer interface and admin panel

![PHP Website](https://github.com/KenTyler1/next-portfolio/blob/main/public/images/projects/sales_manage.png)

## 📋 Mô Tả Dự Án / Project Description

**Tiếng Việt:**
Website quản lý bán hàng là một hệ thống thương mại điện tử hoàn chỉnh được xây dựng bằng PHP, MySQL, HTML, CSS và JavaScript. Dự án cung cấp nền tảng để bán các sản phẩm điện thoại di động với đầy đủ tính năng quản lý sản phẩm, đơn hàng, khách hàng và nhân viên.

**English:**
This Sales Management Website is a complete e-commerce system built with PHP, MySQL, HTML, CSS, and JavaScript. The project provides a platform for selling mobile phone products with comprehensive features for managing products, orders, customers, and employees.

## ✨ Tính Năng Chính / Key Features

### 🛍️ Giao Diện Người Dùng / Customer Interface
- **Trang chủ với slider ảnh** / Homepage with image slider
- **Danh mục sản phẩm theo thương hiệu** / Product categories by brand (Samsung, iPhone, Xiaomi, OPPO, Realme)
- **Tìm kiếm sản phẩm** / Product search functionality
- **Giỏ hàng** / Shopping cart
- **Đặt hàng và thanh toán** / Order placement and checkout
- **Quản lý tài khoản khách hàng** / Customer account management
- **Theo dõi đơn hàng** / Order tracking

### 👨‍💼 Trang Quản Trị / Admin Panel
- **Quản lý sản phẩm** / Product management (Add, Edit, Delete)
- **Quản lý đơn hàng** / Order management
- **Quản lý khách hàng** / Customer management
- **Quản lý nhân viên** / Employee management
- **Quản lý danh mục** / Category management
- **Cập nhật trạng thái đơn hàng** / Order status updates
- **Quản lý hình ảnh sản phẩm** / Product image management

## 🛠️ Công Nghệ Sử Dụng / Tech Stack

- **Backend:** PHP 7.3+
- **Database:** MySQL (MariaDB 10.4+)
- **Frontend:** HTML5, CSS3, JavaScript
- **Server:** Apache (XAMPP/WAMP/LAMP)
- **Security:** Password hashing with bcrypt

## 📦 Cấu Trúc Cơ Sở Dữ Liệu / Database Schema

Dự án sử dụng 8 bảng chính / The project uses 8 main tables:

1. **hanghoa** - Sản phẩm / Products
2. **loaihanghoa** - Danh mục sản phẩm / Product categories
3. **hinhhanghoa** - Hình ảnh sản phẩm / Product images
4. **khachhang** - Khách hàng / Customers
5. **nhanvien** - Nhân viên / Employees
6. **dathang** - Đơn hàng / Orders
7. **chitietdathang** - Chi tiết đơn hàng / Order details
8. **diachikh** - Địa chỉ khách hàng / Customer addresses

## 🚀 Hướng Dẫn Cài Đặt / Installation Guide

### Yêu Cầu Hệ Thống / System Requirements
- PHP 7.3 trở lên / PHP 7.3 or higher
- MySQL 5.7+ hoặc MariaDB 10.4+ / MySQL 5.7+ or MariaDB 10.4+
- Apache Web Server
- XAMPP/WAMP/LAMP (khuyến nghị / recommended)

### Các Bước Cài Đặt / Installation Steps

1. **Clone hoặc tải dự án** / Clone or download the project
   ```bash
   git clone https://github.com/yourusername/Website-sales-management.git
   ```

2. **Di chuyển thư mục vào htdocs** / Move folder to htdocs
   ```bash
   # Đối với XAMPP / For XAMPP
   cp -r Website-sales-management /Applications/XAMPP/htdocs/
   
   # Hoặc / Or
   mv Website-sales-management /Applications/XAMPP/htdocs/
   ```

3. **Tạo cơ sở dữ liệu** / Create database
   - Mở phpMyAdmin: `http://localhost/phpmyadmin`
   - Import file `webbanhang.sql` vào MySQL

4. **Cấu hình kết nối database** / Configure database connection
   - Mở file `/homepage/admin/php/db_connect.php`
   - Cập nhật thông tin kết nối nếu cần / Update connection info if needed:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "webbanhang";
   ```

5. **Khởi động Apache và MySQL** / Start Apache and MySQL
   - Mở XAMPP Control Panel
   - Start Apache và MySQL

6. **Truy cập website** / Access the website
   - Trang chủ / Homepage: `http://localhost/Website-sales-management/homepage/`
   - Trang admin / Admin panel: `http://localhost/Website-sales-management/homepage/admin/`

## 👤 Tài Khoản Mặc Định / Default Accounts

### Tài Khoản Admin / Admin Account
- **Username:** `cochictu`
- **Password:** (được mã hóa trong database / encrypted in database)

### Tài Khoản Khách Hàng / Customer Account
- **Username:** `hungctu`
- **Password:** (được mã hóa trong database / encrypted in database)

> **Lưu ý:** Bạn có thể đăng ký tài khoản mới hoặc cập nhật mật khẩu trong database
> 
> **Note:** You can register new accounts or update passwords in the database

## 📁 Cấu Trúc Thư Mục / Directory Structure

```
Website-sales-management/
├── homepage/
│   ├── admin/              # Trang quản trị / Admin panel
│   │   ├── image/          # Hình ảnh sản phẩm / Product images
│   │   ├── php/            # PHP scripts cho admin
│   │   ├── register/       # Đăng ký sản phẩm
│   │   └── register-admin/ # Đăng ký admin
│   ├── php/                # PHP components
│   │   ├── header.php      # Header template
│   │   ├── footer.php      # Footer template
│   │   └── component.php   # Reusable components
│   ├── index.php           # Trang chủ / Homepage
│   ├── category.php        # Trang danh mục / Category page
│   ├── product.php         # Trang sản phẩm / Product page
│   ├── cart.php            # Giỏ hàng / Shopping cart
│   ├── delivery.php        # Đặt hàng / Checkout
│   ├── style.css           # Stylesheet chính
│   └── script.js           # JavaScript
├── webbanhang.sql          # Database schema
└── README.md               # Tài liệu này / This documentation
```

## 🎯 Hướng Dẫn Sử Dụng / Usage Guide

### Cho Khách Hàng / For Customers
1. Duyệt sản phẩm theo danh mục / Browse products by category
2. Tìm kiếm sản phẩm / Search for products
3. Thêm sản phẩm vào giỏ hàng / Add products to cart
4. Đăng ký/Đăng nhập tài khoản / Register/Login account
5. Đặt hàng và thanh toán / Place order and checkout
6. Theo dõi trạng thái đơn hàng / Track order status

### Cho Quản Trị Viên / For Administrators
1. Đăng nhập vào trang admin / Login to admin panel
2. Quản lý sản phẩm: Thêm, sửa, xóa / Manage products: Add, Edit, Delete
3. Cập nhật trạng thái đơn hàng / Update order status
4. Quản lý khách hàng và nhân viên / Manage customers and employees
5. Xem báo cáo và thống kê / View reports and statistics

## 🔒 Bảo Mật / Security

- Mật khẩu được mã hóa bằng bcrypt / Passwords encrypted with bcrypt
- Prepared statements để phòng chống SQL injection / Prepared statements for SQL injection prevention
- Session management cho xác thực người dùng / Session management for user authentication
- Input validation và sanitization / Input validation and sanitization

## 🐛 Khắc Phục Sự Cố / Troubleshooting

**Lỗi kết nối database / Database connection error:**
- Kiểm tra Apache và MySQL đã chạy chưa / Check if Apache and MySQL are running
- Xác nhận thông tin kết nối trong `db_connect.php` / Verify connection info in `db_connect.php`

**Không hiển thị hình ảnh / Images not displaying:**
- Kiểm tra đường dẫn thư mục `admin/image/` / Check `admin/image/` directory path
- Đảm bảo quyền truy cập thư mục / Ensure directory permissions

**Lỗi session / Session errors:**
- Xóa cookies và cache trình duyệt / Clear browser cookies and cache
- Kiểm tra cấu hình session trong php.ini / Check session configuration in php.ini

## ☁️ Deploy to InfinityFree

Dự án này đã được cấu hình tối ưu để chạy trên **InfinityFree** (hoặc các Shared Hosting tương tự).
This project is optimized for deployment on **InfinityFree** (or similar Shared Hosting).

1. **Upload Code:**
   - Upload toàn bộ nội dung trong thư mục `homepage` vào `htdocs` trên server.
   
2. **Setup Database:**
   - Tạo database trên hosting.
   - Import file `webbanhang_infinityfree.sql`.

3. **Configure:**
   - Hệ thống tự động nhận diện môi trường (Local/Hosting) thông qua file `admin/php/db_connect.php`, không cần sửa code thủ công.
   - The system automatically detects the environment (Local/Hosting) via `admin/php/db_connect.php`, no manual code changes needed.

## 📝 Giấy Phép / License

Dự án này được phát triển cho mục đích học tập và nghiên cứu.

This project is developed for educational and research purposes.

## 👨‍💻 Tác Giả / Author

**Tony Khanh**
- GitHub: [@tonykhanh](https://github.com/tonykhanh)

## 🤝 Đóng Góp / Contributing

Mọi đóng góp đều được chào đón! Vui lòng tạo pull request hoặc mở issue để thảo luận.

All contributions are welcome! Please create a pull request or open an issue for discussion.

---

⭐ Nếu dự án hữu ích, hãy cho một ngôi sao! / If you find this project useful, please give it a star!

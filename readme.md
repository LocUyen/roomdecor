---Để mở được website cho khách hàng thì vào---

1. vào config -> config.php -> $config['base_url'] -> đổi đường dẫn thư mục nơi bạn để dự án

$config['base_url'] = "http://locuyen.com/roomdecor.com/";(là đường dẫn trên website)

có thể thay bằng http://localhost/roomdecor.com/ (ko có tên miền ảo thì không thể thanh toán vnpay)
nơi tôi để thư mục: D:\xampp\htdocs\roomdecor.com

-Tài khoản vnpay
NCB
9704198526191432198
NGUYEN VAN A
07/15
123456

2. vào config->config.php -> database.php
$db = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'db_decorroom', (tên các bảng dữ liệu)
);

3. đường dẫn trên web http://locuyen.com/roomdecor.com/
----có thể thay bằng http://localhost/roomdecor.com/ (nhưng không thanh toán vnpay được)

-TÀI KHOẢN KHÁCH HÀNG CÓ đăng bài decor	
	username:ThuyTrang
      password:Thuytrang!@#




###Để mở website quản lý admin####

1. vào admin/config->config.php ->$config['base_url'] -> đổi đường dẫn nên bạn để dự án

$config['base_url'] = "http://locuyen.com/roomdecor.com/admin";(là đường dẫn trên website)

(--------có thể thay bằng http://localhost/roomdecor.com/admin-----)
nơi tôi để thư mục: D:\xampp\htdocs\roomdecor.com\admin

2. vào admin/config->config.php -> database.php
$db = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'db_decorroom', (tên các bảng dữ liệu)
);
3. đường dẫn trên web http://locuyen.com/roomdecor.com/admin/

----có thể thay bằng http://localhost/roomdecor.com/admin/

-TÀI KHOẢN ADMIN
	username:Admin
      password:Admin!@#

-TÀI KHOẢN NHÂN VIÊN
	baongoc
	Baongoc



####Để vào chatbot###
1.Làm theo trang web https://duythanhcse.wordpress.com/2021/08/23/cai-dat-platform-tri-tue-nhan-tao-rasa-tren-windows/
để Cài đặt platform Trí tuệ nhân tạo Rasa trên Windows

2. mở 2 tab anaconda vào nhập lệnh
TAB 1
---1.cd D:
---2.cd xampp/htdocs/project/roomdecor.com
---3.conda activate rasa_install_demo (tên thư mục chứa rasa)
---4.rasa run actions
TAB2
---1.cd D:
---2.cd xampp/htdocs/project/roomdecor.com
---3.conda activate rasa_install_demo (tên thư mục chứa rasa)
---5.rasa run -m models --enable-api --cors "*"

đường dẫn trên web http://localhost/roomdecor.com/ sẽ thấy hội thoại


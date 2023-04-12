<!DOCTYPE html>
<html>
    <head>
        <title>Roomdecor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <!-- <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.20.0/ckeditor.js" integrity="sha512-BcYkQlDTKkWL0Unn6RhsIyd2TMm3CcaPf0Aw1vsV28Dj4tpodobCPiriytfnnndBmiqnbpi2EelwYHHATr04Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <script src="public/js/plugins/ckeditor/ckeditor.js"></script>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

        <!-- Libraries Stylesheet -->
        <link href="public/lib_service_decor/animate/animate.min.css" rel="stylesheet">
        <link href="public/lib_service_decor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <!-- <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Template Stylesheet -->
        <link href="public/lib_service_decor/style.css" rel="stylesheet">
    </head>
    <?php
    //function nằm trong helper/header.php
    //ds danh mục sp
    $list_product_cate = get_by_product_cat();
    // show_array($list_product_cate);

    //ds danh mục bài viết
    $list_post_cate = get_by_post_cat();
    // show_array($list_post_cate);

    //thông tin thành viên
    $info_user = info_user();
    // show_array($info_user);

    
    // show_array($get_user_id);

    ?>
    <body style="margin:0;">
    <!-- chatbot -->
    
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">Nhập mã: <strong>VNWOW</strong> giảm <strong>10%</strong> vào dịp trung thu này</a>

                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix" style="margin-bottom: -1rem ;">
                                    <li>
                                        <a href="?mod=home&action=index" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="?mod=page&controller=index&action=about" title="">Giới thiệu</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropbtn" title="">Sản phẩm  <i class="fa-solid fa-caret-down"></i></a>
                                        <div class="dropdown-content">
                                        <?php
                                        foreach($list_product_cate as $item){
                                            // show_array($item);
                                        ?>
                                            <a href="?mod=product&action=index&id_cat=<?php echo $item['product_cate_id']; ?>"><?php echo $item['product_cate_title']; ?></a>
                                            
                                            <?php
                                        }
                                        ?>    
                                        </div>
                                        
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a class="dropbtn" title="">Blog  <i class="fa-solid fa-caret-down"></i></i></a>
                                        <div class="dropdown-content">
                                        <?php
                                        foreach($list_post_cate as $item){
                                            // show_array($item);
                                        ?>
                                            <a href="?mod=post&action=index&id_cat=<?php echo $item['post_cate_id']; ?>"><?php echo $item['post_cate_title']; ?></a>
                                            
                                            <?php
                                        }
                                        ?>    
                                        </div>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="?mod=decor_service&controller=index&action=index" title="">Thuê người Decor</a>
                                    </li>
                                    
                                    <?php 
                                    //khi đã đăng nhập
                                    if(isset($_SESSION['user_login'])){
                                        $get_user_id = get_user_id_service($info_user['user_id']);
                                    ?>
                                    <li class="dropdown">
                                        <a class="dropbtn" href="" title=""><i class="fa-solid fa-circle-user"></i> <?php echo $info_user['user_fullname']; ?></a>
                                        <div class="dropdown-content">
                                            <?php 
                                            if(!empty($get_user_id)){

                                            ?>
                                            <a href="?mod=decor_service&action=intro&id=<?php echo $info_user['user_id']; ?>">Bài đăng dịch vụ</a>
                                            <?php } ?>
                                            <a href="?mod=user&action=logout">Thoát</a>
                                        </div>
                                    </li>
                                    <?php
                                    //chưa đăng nhập
                                    } else{
                                    ?>

                                    <li >
                                        <a href="?mod=user&action=reg" title="">Đăng ký</a>
                                    </li>
                                    <li style="color:#000 !important; transform: translateY(40%);">
                                        |
                                    </li>
                                    <li>
                                        <a href="?mod=user&action=login" title="">Đăng nhập</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="container-xxl bg-white p-0">
        
        <!-- Search Start -->
        <div class="container-fluid  wow fadeIn" data-wow-delay="0.1s" style="padding: 20px; background:#fafafa; border-bottom: 1px solid #dddd;">
            <div class="container">
            <form action="">
            <div class="row g-2">
                    <div class="col-md-10">
                        
                        <div class="row g-2">
                            <!-- <div id="search-wp" class="fl-left">
                                <form action="?mod=home" method="GET">
                                    <input type="hidden" name="action" value="search">
                                    <input type="text" name="key" id="s" placeholder="Tìm kiếm sản phẩm!">
                                    <button class="btn" type="submit" name="btn_search" value="Search" id="sm-s">Tìm kiếm</button>
                                </form>
                            </div> -->
                            <form action="?mod=decor_service" method="GET">
                            <div class="col-md-6">
                                
                                    <input type="hidden" name="mod" value="decor_service">
                                    <input type="hidden" name="action" value="search_decor">
                                    <input type="text" name="keyd"  class="form-control border-0 size1 rounded-0" placeholder="Tên muốn tìm" />
                                
                            </div>
                           
                            <div class="col-md-6">
                                <select class="form-select border-0 size2" name="key_location">
                                    <option selected><i class="fa-sharp fa-solid fa-location-dot"></i>Tỉnh</option>
                                    <option value="An Giang">An Giang
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                    <option value="Bắc Giang">Bắc Giang
                                    <option value="Bắc Kạn">Bắc Kạn
                                    <option value="Bạc Liêu">Bạc Liêu
                                    <option value="Bắc Ninh">Bắc Ninh
                                    <option value="Bến Tre">Bến Tre
                                    <option value="Bình Định">Bình Định
                                    <option value="Bình Dương">Bình Dương
                                    <option value="Bình Phước">Bình Phước
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Cà Mau">Cà Mau
                                    <option value="Cao Bằng">Cao Bằng
                                    <option value="Đắk Lắk">Đắk Lắk
                                    <option value="Đắk Nông">Đắk Nông
                                    <option value="Điện Biên">Điện Biên
                                    <option value="Đồng Nai">Đồng Nai
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Gia Lai">Gia Lai
                                    <option value="Hà Giang">Hà Giang
                                    <option value="Hà Nam">Hà Nam
                                    <option value="Hà Tĩnh">Hà Tĩnh
                                    <option value="Hải Dương">Hải Dương
                                    <option value="Hậu Giang">Hậu Giang
                                    <option value="Hòa Bình">Hòa Bình
                                    <option value="Hưng Yên">Hưng Yên
                                    <option value="Khánh Hòa">Khánh Hòa
                                    <option value="Kiên Giang">Kiên Giang
                                    <option value="Kon Tum">Kon Tum
                                    <option value="Lai Châu">Lai Châu
                                    <option value="Lâm Đồng">Lâm Đồng
                                    <option value="Lạng Sơn">Lạng Sơn
                                    <option value="Lào Cai">Lào Cai
                                    <option value="Long An">Long An
                                    <option value="Nam Định">Nam Định
                                    <option value="Nghệ An">Nghệ An
                                    <option value="Ninh Bình">Ninh Bình
                                    <option value="Ninh Thuận">Ninh Thuận
                                    <option value="Phú Thọ">Phú Thọ
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Ngãi">Quảng Ngãi
                                    <option value="Quảng Ninh">Quảng Ninh
                                    <option value="Quảng Trị">Quảng Trị
                                    <option value="Sóc Trăng">Sóc Trăng
                                    <option value="Sơn La">Sơn La
                                    <option value="Tây Ninh">Tây Ninh
                                    <option value="Thái Bình">Thái Bình
                                    <option value="Thái Nguyên">Thái Nguyên
                                    <option value="Thanh Hóa">Thanh Hóa
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                    <option value="Tiền Giang">Tiền Giang
                                    <option value="Trà Vinh">Trà Vinh
                                    <option value="Tuyên Quang">Tuyên Quang
                                    <option value="Vĩnh Long">Vĩnh Long
                                    <option value="Vĩnh Phúc">Vĩnh Phúc
                                    <option value="Yên Bái">Yên Bái
                                    <option value="Phú Yên">Phú Yên
                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                    <option value="Tp.Hà Nội">Tp.Hà Nội
                                    <option value="TP  HCM">TP HCM
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 btnn-hover rounded-0" type="submit" name="btn_search" value="Search"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
                        
                    </div>
                </div>            
            </form>
                
            </div>
        </div>
        <!-- Search End -->
<!-- <div id="webchat">
</div> -->
 

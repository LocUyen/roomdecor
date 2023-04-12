<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo base_url();?>">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="public/contact.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
        

    </head>
    <?php
        //ds danh mục sp
        $list_product_cate = get_by_product_cat();
        // show_array($list_product_cate);

        //ds danh mục bài viết
        $list_post_cate = get_by_post_cat();
        // show_array($list_post_cate);


        //ds giỏ hàng
        $get_list_cart = get_list_cart();
        // show_array($get_list_cart);

        //tổng tiền giỏ hàng
        $total_cart = total_cart();

        // thông tin đăng ký của thành viên
        $info_user = info_user();

    ?>
    <body style="margin:0;">
    <!-- chatbot -->
    <style>
        .rw-conversation-container .rw-header{
            background-color: #b5875a;
            color: black;
        }
        .rw-conversation-container .rw-messages-container .rw-message .rw-client{
            background-color: #b5875a;
            color: black;
        }
        .rw-launcher{
            background-color: black;
        }
        .rw-open-launcher{
            margin-left: 6px;
        }
        .rw-replies .rw-reply{
            background-color: #b5875a;
            color: black;
            border: 1px solid #b5875a;
        }
    </style>
  
    <script> 
        !(function () {
            let e = document.createElement("script"),
                t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
                "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
                // Replace 1.x.x with the version that you want
                (e.async = !0),
                (e.onload = () => {
                    window.WebChat.default(
                        {
                            initPayload:'/greet',
                            customData: { language: "en" },
                            socketUrl: "http://localhost:5005",
                            title: "RoomDecor"
                            // add other props here
                        },
                        null
                    );
                }),
                t.insertBefore(e, t.firstChild);
        })();
    </script>    
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">Nhập mã: <strong>VNWOW</strong> giảm <strong>10%</strong> vào dịp trung thu này</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    <li>
                                        <a href="trang-chu.html" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="lien-he.html" title="">Liên Hệ</a>
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
                                        <a class="dropbtn" title="">Bài viết <i class="fa-solid fa-caret-down"></i></i></a>
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
                                    // show_array($_SESSION);
                                    //khi đã đăng nhập
                                    if(isset($_SESSION['user_login'])){
                                    ?>
                                    <li class="dropdown">
                                        <a class="dropbtn" href="" title=""><i class="fa-solid fa-circle-user"></i> <?php echo $info_user['user_fullname']; ?></a>
                                        <div class="dropdown-content">
                                            <?php 
                                            if(!empty($get_user_id)){
                                            ?>
                                            <a href="">Thông tin</a>
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
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?page=home" title="" id="logo" class="fl-left" style="width:200px"><img src="public/images/logo-12.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form action="?mod=home" method="GET">
                                    <input type="hidden" name="action" value="search">
                                    <input type="text" name="key" class="timkiem" id="s" placeholder="Tìm kiếm sản phẩm!">
                                    <button class="btn" type="submit" name="btn_search" value="Search" id="sm-s">Tìm kiếm</button>
                                </form>
                                
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart" >
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <?php 
                                        $num_order = get_num_order_cart();
                                        if($num_order>0) {
                                        ?>
                                        
                                        <span id="num"><?php echo $num_order; ?></span>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">Có <span><?php echo $num_order; ?> sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <?php
                                            if(!empty($get_list_cart)){
                                            foreach($get_list_cart as $item){
                                            ?>
                                            <li class="clearfix">
                                                <a href="" title="" class="thumb fl-left">
                                                    <img src="admin/public/uploads/<?php echo $item['product_image']; ?>" alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="" title="" class="product-name"><?php echo $item['product_title']; ?></a>
                                                    <p class="price"><?php echo currency_format($item['product_discount']); ?></p>
                                                    <p class="qty">Số lượng: <span><?php echo $item['product_quality']; ?></span></p>
                                                </div>
                                            </li>
                                            <?php }} ?>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">Tổng:</p>
                                            
                                            <p class="price fl-right"><?php echo currency_format($total_cart); ?></p>
                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?mod=cart&action=index" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href="?mod=cart&action=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- <div id="webchat">
</div> -->
 

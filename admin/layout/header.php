<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý Hệ thống </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
        
        <?php 
        
        //kiểm tra đường dẫn phân quyền
        // function checkPrivilege($uri = false){
        //     $uri = $uri != false ? $uri : $_SERVER['REQUEST_URI'];
        //     // if(empty($_SESSION['privileges'])){
        //     //     return false;
        //     // }
        //     $privileges = $_SESSION['user_privileges'];
        //     $privileges = implode("|", $privileges);
        //     preg_match('/\?mod=home|'.'\?mod=users&action=login'.$privileges.'/', $uri, $matches);
        //     return !empty($matches);

        // }
        // // show_array($_SESSION);
        // $regex = checkPrivilege();
        // if(!$regex){
        //     echo 'Bạn Không đủ quyền để truy cập';
        //     exit;
        // }
        ?>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="?mod=home&action=index" title="" id="logo" class="fl-left">RoomDecor</a>
                        <ul id="main-menu" class="fl-left" style="margin-bottom: 0;">
 
                            <?php
                            // if(checkPrivilege('\?mod=posts&action=index') | checkPrivilege('\?mod=posts&controller=cate&action=index')){
                            ?>
                            <li>
                                <a href="?mod=posts&action=index" title="">Bài viết</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=posts&action=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=posts&action=index" title="">Danh sách bài viết</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=posts&controller=cate&action=index" title="">Danh mục bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <?php 
                            // }
                             ?>
                            <?php
                            // // // if(checkPrivilege('\?mod=products&action=index') | checkPrivilege('\?mod=products&controller=cate&action=index') | checkPrivilege('\?mod=products&controller=rating&action=index')| checkPrivilege('\?mod=products&controller=cate&action=index') | checkPrivilege('\?mod=products&controller=unit')){
                            ?>
                            <li>
                                <a href="?mod=products&action=index" title="">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=products&action=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=products&action=index" title="">Danh sách sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=products&controller=cate&action=index" title="">Danh mục sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=products&controller=unit" title="">Đơn vị sản phẩm</a> 
                                    </li>
                                </ul>
                            </li>
                            <?php 
                            // }
                             ?>
                            <?php
                            // if(checkPrivilege('\?mod=orders&action=index')){
                            ?>
                            <li>
                                <a href="?mod=orders&action=index" title="">Bán hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=orders&action=index" title="">Danh sách đơn hàng</a> 
                                    </li>
                                    
                                </ul>
                            </li>
                            <?php 
                            // }
                             ?>
                            <?php
                            // if(checkPrivilege('\?mod=import_goods&action=index')){
                            ?>
                            <li>
                                <a href="?mod=import_goods&action=index" title="">Nhập hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=import_goods&action=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=import_goods&action=index" title="">Danh sách đã nhập hàng</a> 
                                    </li>
                                    
                                </ul>
                            </li>
                            <?php 
                            // }
                             ?>
                            <?php
                            // if(checkPrivilege('\?mod=chart')){
                            ?>
                            <li>
                                <a href="?mod=chart&action=chart_money" title="">Thống kê doanh thu</a>
                                
                            </li>
                            <?php 
                            // }
                             ?>
                        
                        </ul>
                        <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                            <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div id="thumb-circle" class="fl-left">
                                    <img src="public/images/img-admin.png">
                                </div>
                                <h3 id="account" class="fl-right"><?php if(!empty(user_login())) echo user_login(); ?></h3>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                // if(checkPrivilege('\?mod=users&controller=team&action=index')){
                                ?>
                                <li><a href="?mod=users&controller=team&action=index" title="Nhóm quản trị">Nhóm người dùng</a></li>
                                <?php 
                                // }
                                ?>
                                <?php
                                // if(checkPrivilege('\?mod=users&action=update')){
                                ?>
                                <li><a href="?mod=users&action=update" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                <?php 
                                // }
                                ?>
                                <li><a href="?mod=users&action=logout" title="Thoát">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
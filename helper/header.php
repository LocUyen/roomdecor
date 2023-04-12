<?php
//lấy ds danh mục sp
function get_by_product_cat(){
    $result = db_fetch_array("SELECT * FROM `tbl_product_category`");
    return $result;
}

//lấy ds danh mục bài viết
function get_by_post_cat(){
    $result = db_fetch_array("SELECT * FROM `tbl_post_category`");
    return $result;
}
//lấy số lượng sp trong giỏ
function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}
//lấy ds sp, sl trong giỏ hàng
function get_list_cart(){
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['buy'];
    }
    return false;
}
//tổng tiền giỏ hàng
function total_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}
//thông tin đăng kí của thành viên
function info_user() {
    if(!empty($_SESSION['user_login'])){
        $user_login = $_SESSION['user_login'];
        $user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$user_login}'");
        return $user;
    }
}
function get_user_id_service($id){
    $user = db_fetch_row("SELECT * FROM `tbl_decor_service` WHERE `user_id`= '{$id}'");
    return $user;
}
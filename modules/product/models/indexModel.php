<?php
//lấy ds sp
function get_list_product_by_id($id) {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id` = {$id}");
    return $result;
}

// lấy title danh mục
function info_product_cate_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_product_category` WHERE `product_cate_id` = {$id}");
    return $item;
}
// lấy 1 sp
function get_product_by_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    
    // $item['url_add_cart'] = "?mod=cart&action=add&id={$id}";
    
    return $item;
}

function get_cate_title_by_id($id){
    $result = db_fetch_array("SELECT * FROM `tbl_products`,`tbl_product_category` WHERE `product_cate_id` = {$id} AND `tbl_products`.`product_cate_id`= `tbl_product_category`.`product_cate_id`");

    return $result;
}

function get_list_gallery_by_id_product($id){
    $item = db_fetch_array("SELECT * FROM `tbl_gallery` WHERE `product_id` = {$id}");
    
    // $item['url_add_cart'] = "?mod=cart&action=add&id={$id}";
    
    return $item;
}
// danh mục liên quan trong chi tiết bài viết
function get_list_product_connect($id) {
    
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id`= {$id}");
    return $result;
}

##rating
function get_info_user($label){
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$label}'");
    return $item;

}
function get_order($user_id, $product_id){
    $item = db_fetch_array("SELECT * FROM `tbl_orders`,`tbl_order_detail` WHERE `user_id`= $user_id and `tbl_orders`.`order_id` = `tbl_order_detail`.`order_id`AND `product_id` = $product_id");
    return $item;

}

function add_rating($data){
    return db_insert("tbl_ratings", $data);
}


function get_list_rating($product_id){
    $item = db_fetch_array("SELECT * FROM `tbl_ratings`,`tbl_users` WHERE `product_id` = $product_id AND `tbl_ratings`.`user_id` = `tbl_users`.`user_id`;
    ");
    return $item;

}

//lọc rating khi bình luận nhiều lần
function row($product_id,$user_id){
    return db_num_rows("SELECT * FROM `tbl_ratings` WHERE `product_id` = $product_id AND `user_id`= $user_id");
}

//trung bình số sao
function avg_star($id){
    return db_fetch_row("SELECT AVG(rating_star) FROM `tbl_ratings` WHERE product_id = {$id}");
}

//sl 5 sao
function star_5(){
    return db_fetch_row("SELECT count(rating_star) FROM `tbl_ratings` WHERE `rating_star`= 5 ");
}
//sl 4 sao
function star_4(){
    return db_fetch_row("SELECT count(rating_star) FROM `tbl_ratings` WHERE `rating_star`= 4 ");
}
//sl 3 sao
function star_3(){
    return db_fetch_row("SELECT count(rating_star) FROM `tbl_ratings` WHERE `rating_star`= 3 ");
}
//sl 2 sao
function star_2(){
    return db_fetch_row("SELECT count(rating_star) FROM `tbl_ratings` WHERE `rating_star`= 2 ");
}
//sl 1 sao
function star_1(){
    return db_fetch_row("SELECT count(rating_star) FROM `tbl_ratings` WHERE `rating_star`= 1 ");
}

#recomendation đề xuất
//cập nhật
function update_product($data, $id){
    return db_update("tbl_products", $data, "`product_id` = {$id}");
}

//filter lọc sản phẩm
function get_product_ascending($id){
    $item = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id` = {$id} GROUP BY product_discount ASC");
    return $item;
}
function get_product_reduce($id){
    $item = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id` = {$id} GROUP BY product_discount DESC");
    return $item;
}
function get_product_A_Z($id){
    $item = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id` = {$id} GROUP BY product_title ASC");
    return $item;
}
function get_product_Z_A($id){
    $item = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_cate_id` = {$id} GROUP BY product_title DESC");
    return $item;
}
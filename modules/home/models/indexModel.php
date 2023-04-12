<?php

function get_list_cate() {
    $result = db_fetch_array("SELECT * FROM `tbl_product_category`");
    return $result;
}

function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `tbl_products`");
    return $result;
}

function search_product($key){
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_title` LIKE '%$key%' ORDER BY product_id DESC");
    return $result;
}
function search_post($key){
    $result = db_fetch_array("SELECT * FROM `tbl_posts` WHERE `post_title` LIKE '%$key%' ORDER BY post_id DESC");
    return $result;
}
<?php

function get_list_cat_by_id($id) {
    $result = db_fetch_array("SELECT * FROM `tbl_posts` WHERE `post_cate_id` = {$id}");
    return $result;
}

function get_cat_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_post_category` WHERE `post_cate_id` = {$id}");
    return $item;
}

function get_post_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_posts` WHERE `post_id` = {$id}");
    return $item;
}
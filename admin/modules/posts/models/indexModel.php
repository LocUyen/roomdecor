<?php

function get_list_posts($start = 1, $num_per_page = 10) {
    // if(!empty($where)){
    //     $where = "WHERE {$where}";
    // }
    $result = db_fetch_array("SELECT * FROM `tbl_posts`,`tbl_post_category`,`tbl_users` WHERE tbl_posts.post_cate_id=tbl_post_category.post_cate_id AND tbl_users.user_id = tbl_posts.user_id ORDER BY tbl_posts.post_id DESC LIMIT {$start},{$num_per_page} ");
    return $result;
}

//thêm
function add_post($data){
    return db_insert("tbl_posts", $data);
}
//cập nhật
function update_post($data, $id){
    return db_update("tbl_posts", $data, "`post_id` = {$id}");
}
//xoá
function delete_post($id){
    db_delete('tbl_posts', "`post_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_post_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_posts` WHERE `post_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_post_num_row(){
    return db_num_rows("SELECT * FROM `tbl_posts`");
}

//lấy danh mục sản phẩm
function get_list_post_cate() {
    
    $result = db_fetch_array("SELECT * FROM `tbl_post_category` ORDER BY `post_cate_id` DESC");
    return $result;
}
//lấy user
function get_list_user() {
    $result = db_fetch_array("SELECT * FROM `tbl_users` WHERE tbl_users.role_id >= 1 ORDER BY `user_id` DESC");
    return $result;
}

//search
function search_post($key){
    $result = db_fetch_array("SELECT * FROM `tbl_posts`,`tbl_post_category`,`tbl_users` WHERE tbl_posts.post_cate_id=tbl_post_category.post_cate_id AND tbl_posts.user_id=tbl_users.user_id AND `post_title` LIKE '%$key%' ORDER BY post_id DESC");
    return $result;
}
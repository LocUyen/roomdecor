<?php

//thêm
function add_post_service($data){
    return db_insert("tbl_decor_service", $data);
}
//cập nhật
function update_post_service($data, $id){
    return db_update("tbl_decor_service", $data, "`service_id` = {$id}");
}
//xoá
function delete_post_service($id){
    db_delete('tbl_decor_service', "`post_cate_id` = {$id}");
    
}
// function get_list_posts($start = 1, $num_per_page = 10) {
//     // if(!empty($where)){
//     //     $where = "WHERE {$where}";
//     // }
//     $result = db_fetch_array("SELECT * FROM `tbl_posts`,`tbl_post_category` WHERE tbl_posts.post_cate_id=tbl_post_category.post_cate_id ORDER BY tbl_posts.post_id DESC LIMIT {$start},{$num_per_page} ");
//     return $result;
// }
function get_list_service() {
    $result = db_fetch_array("SELECT * FROM `tbl_decor_service`");
    return $result;
}
// function get_post_by_id($id) {
//     $check = db_fetch_row("SELECT * FROM `tbl_decor_service` WHERE `post_id` = {$id}");
//     if(!empty($check)){
//         return $check;
//     }
// }

function user_id($user_login){
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$user_login}'");
    return $item;
}
function get_list_service_by_id($id){
    return db_fetch_row("SELECT * FROM `tbl_decor_service` WHERE `service_id` = {$id}");
}

function get_list_service_by_user_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_decor_service` WHERE `user_id`= '{$id}'");
    return $item;
}
function search_decor_service($key){
    $result = db_fetch_array("SELECT * FROM `tbl_decor_service` WHERE `service_team_name` LIKE '%$key%' ORDER BY service_id DESC");
    return $result;
}
function search_decor_service_location($key){
    $result = db_fetch_array("SELECT * FROM `tbl_decor_service` WHERE `service_location` LIKE '%$key%' ORDER BY service_id DESC");
    return $result;
}
//lọc bài đăng
function get_decor_service_num_row($id){
    return db_num_rows("SELECT * FROM `tbl_decor_service` WHERE `user_id`={$id}");
}
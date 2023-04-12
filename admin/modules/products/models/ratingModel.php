<?php
// lấy tất cả ds danh mục sản phẩm

function get_list_rating($start = 1, $num_per_page = 10) {
    // if(!empty($where)){
    //     $where = "WHERE {$where}";
    // }
    $result = db_fetch_array("SELECT * FROM `tbl_ratings`,`tbl_products`,`tbl_users` WHERE tbl_ratings.user_id=tbl_users.user_id AND tbl_ratings.product_id=tbl_products.product_id LIMIT {$start},{$num_per_page}");
    return $result;
}
//thêm
function add_rating($data){
    return db_insert("tbl_ratings", $data);
}
//cập nhật
function update_rating($data, $id){
    return db_update("tbl_ratings", $data, "`rating_id` = {$id}");
}
//xoá
function delete_rating($id){
    db_delete('tbl_ratings', "`rating_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_rating_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_ratings` WHERE `rating_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_rating_num_row(){
    return db_num_rows("SELECT * FROM `tbl_ratings`");
}
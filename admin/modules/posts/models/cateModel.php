<?php
// lấy tất cả ds danh mục sản phẩm

function get_list_post_cate($start = 1, $num_per_page = 10, $where="") {
    if(!empty($where)){
        $where = "WHERE {$where}";
    }
    $result = db_fetch_array("SELECT * FROM `tbl_post_category` {$where} LIMIT {$start},{$num_per_page}");
    return $result;
}
//thêm
function add_post_cate($data){
    return db_insert("tbl_post_category", $data);
}
//cập nhật
function update_post_cate($data, $id){
    return db_update("tbl_post_category", $data, "`post_cate_id` = {$id}");
}
//xoá
function delete_post_cate($id){
    db_delete('tbl_post_category', "`post_cate_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_post_cate_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_post_category` WHERE `post_cate_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_post_cate_num_row(){
    return db_num_rows("SELECT * FROM `tbl_post_category`");
}
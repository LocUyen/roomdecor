<?php
// lấy tất cả ds danh mục sản phẩm

function get_list_product_cate($start = 1, $num_per_page = 10, $where="") {
    if(!empty($where)){
        $where = "WHERE {$where}";
    }
    $result = db_fetch_array("SELECT * FROM `tbl_product_category` {$where} LIMIT {$start},{$num_per_page}");
    return $result;
}
//thêm
function add_product_cate($data){
    return db_insert("tbl_product_category", $data);
}
//cập nhật
function update_product_cate($data, $id){
    return db_update("tbl_product_category", $data, "`product_cate_id` = {$id}");
}
//xoá
function delete_product_cate($id){
    db_delete('tbl_product_category', "`product_cate_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_product_cate_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_product_category` WHERE `product_cate_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_product_cate_num_row(){
    return db_num_rows("SELECT * FROM `tbl_product_category`");
}
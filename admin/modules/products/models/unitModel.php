<?php
// lấy tất cả ds danh mục sản phẩm

function get_list_unit($start = 1, $num_per_page = 10, $where="") {
    if(!empty($where)){
        $where = "WHERE {$where}";
    }
    $result = db_fetch_array("SELECT * FROM `tbl_units` {$where} LIMIT {$start},{$num_per_page}");
    return $result;
}
//thêm
function add_unit($data){
    return db_insert("tbl_units", $data);
}
//cập nhật
function update_unit($data, $id){
    return db_update("tbl_units", $data, "`unit_id` = {$id}");
}
//xoá
function delete_unit($id){
    db_delete('tbl_units', "`unit_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_unit_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_units` WHERE `unit_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_unit_num_row(){
    return db_num_rows("SELECT * FROM `tbl_units`");
}
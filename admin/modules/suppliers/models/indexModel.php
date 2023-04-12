<?php
// lấy tất cả ds nhà cung cấp
function get_list_supplier() {
    $result = db_fetch_array("SELECT * FROM `tbl_suppliers` ORDER BY `supplier_id` DESC");
    return $result;
}
//lấy số bản ghi
function get_supplier_num_row(){
    return db_num_rows("SELECT * FROM `tbl_suppliers`");
}

function search_supplier($key){
    $result = db_fetch_array("SELECT * FROM `tbl_suppliers` WHERE `supplier_name` LIKE '%$key%' ORDER BY supplier_id DESC");
    return $result;
}
//thêm
function add_supplier($data){
    return db_insert("tbl_suppliers", $data);
}
//cập nhật
function update_supplier($data, $id){
    return db_update("tbl_suppliers", $data, "`supplier_id` = {$id}");
}
//xoá
function delete_supplier($id){
    db_delete('tbl_suppliers', "`supplier_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_supplier_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_suppliers` WHERE `supplier_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

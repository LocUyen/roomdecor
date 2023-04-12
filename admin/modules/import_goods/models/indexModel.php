<?php
//lấy ds nhà cung cấp
function get_list_supplier() {
    $result = db_fetch_array("SELECT * FROM `tbl_suppliers` ORDER BY `supplier_id` DESC");
    return $result;
}

//lấy ds sp
function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` ORDER BY `product_id` DESC");
    return $result;
}
function get_list_user(){
    $result = db_fetch_array("SELECT * FROM `tbl_users` ORDER BY `user_id` DESC");
    return $result;
}
//lấy ds sp
function get_list_unit() {
    $result = db_fetch_array("SELECT * FROM `tbl_units` ORDER BY `unit_id` DESC");
    return $result;
}

//lấy 1 sp qua id
function get_product_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
} 
//lấy 1 tên đơn vị qua id
function get_unit_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_units` WHERE `unit_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
} 

// lấy tất cả ds danh mục sản phẩm
function get_list_import_good($start = 1, $num_per_page = 10) {
    $result = db_fetch_array("SELECT * FROM `tbl_import_goods`, `tbl_suppliers`, `tbl_users` WHERE tbl_import_goods.supplier_id=tbl_suppliers.supplier_id AND tbl_users.user_id=tbl_import_goods.import_created_by ORDER BY tbl_import_goods.import_id DESC LIMIT {$start},{$num_per_page} ");
    return $result;
}

//lấy số bản ghi
function get_import_good_num_row(){
    return db_num_rows("SELECT * FROM `tbl_import_goods`");
}

function search_import_good($key){
    $result = db_fetch_array("SELECT * FROM `tbl_import_goods`,`tbl_users`,`tbl_suppliers` WHERE tbl_users.user_id=tbl_import_goods.import_created_by AND tbl_import_goods.supplier_id =tbl_suppliers.supplier_id  AND`supplier_name` LIKE '%$key%' ORDER BY import_id DESC");
    return $result;
}

//thêm đơn nhập
function add_import_good($data){
    return db_insert("tbl_import_goods", $data);
}

function get_import_good_id() {
    $item = db_fetch_row("SELECT * FROM `tbl_import_goods` ORDER BY import_id DESC LIMIT 1");
    return $item;
} 
//thêm chi tiết đơn nhập
function add_import_detail($data){
    return db_insert("tbl_import_detail", $data);
}

//xoá
function delete_import_good($id){
    db_delete('tbl_import_goods', "`import_id` = {$id}");
    
}
function delete_import_detail($id){
    db_delete('tbl_import_detail', "`import_id` = {$id}");
    
}
//cập nhật chi tiết nhập hầng
function update_import_good($data, $id){
    return db_update("tbl_import_goods", $data, "`import_id` = {$id}");
}

function get_import_good_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_import_goods` , `tbl_suppliers` WHERE tbl_import_goods.supplier_id = tbl_suppliers.supplier_id  and `import_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}
function get_import_detail_by_id($id) {
    $check = db_fetch_array("SELECT * FROM `tbl_import_detail`, `tbl_products` WHERE `import_id` = {$id} AND tbl_import_detail.product_id = tbl_products.product_id");
    if(!empty($check)){
        return $check;
    }
}



//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_supplier_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_suppliers` WHERE `supplier_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}
//cập nhật sl sản phẩm
function update_product($data, $id){
    return db_update("tbl_products", $data, "`product_id` = {$id}");
}
//search
function search_product($key){
    $result = db_fetch_array("SELECT * FROM `tbl_products`,`tbl_product_category` WHERE `product_title` LIKE '%$key%' ORDER BY product_id DESC LIMIT 5");
    return $result;
}




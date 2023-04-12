<?php
// lấy tất cả ds sản phẩm


function get_list_products($start = 1, $num_per_page = 10) {
    // if(!empty($where)){
    //     $where = "WHERE {$where}";
    // }
    $result = db_fetch_array("SELECT * FROM `tbl_products`,`tbl_product_category`,`tbl_units`,`tbl_users` WHERE tbl_products.product_cate_id=tbl_product_category.product_cate_id  AND tbl_products.unit_id=tbl_units.unit_id AND tbl_products.user_id=tbl_users.user_id ORDER BY tbl_products.product_id DESC LIMIT {$start},{$num_per_page} ");
    return $result;
}
// SELECT * FROM `tbl_products`,`tbl_product_category`,`tbl_import_goods`,`tbl_import_detail`,`tbl_suppliers` WHERE tbl_products.product_cate_id = tbl_product_category.product_cate_id AND tbl_import_detail.product_id=tbl_products.product_id AND tbl_suppliers.supplier_id = tbl_import_goods.supplier_id GROUP BY tbl_products.product_id;
//thêm
function add_product($data){
    return db_insert("tbl_products", $data);
}
//cập nhật
function update_product($data, $id){
    return db_update("tbl_products", $data, "`product_id` = {$id}");
}
//xoá
function delete_product($id){
    db_delete('tbl_products', "`product_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_product_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

function get_unit_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_units` WHERE `unit_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

function get_supplier_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_suppliers` WHERE `supplier_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_product_num_row(){
    return db_num_rows("SELECT * FROM `tbl_products`");
}

//lấy danh mục sản phẩm
function get_list_product_cate() {
    
    $result = db_fetch_array("SELECT * FROM `tbl_product_category` ORDER BY `product_cate_id` DESC");
    return $result;
}

//lấy đơn vị
function get_list_unit() {
    
    $result = db_fetch_array("SELECT * FROM `tbl_units` ORDER BY `unit_id` DESC");
    return $result;
}

//lấy danh mục sản phẩm
function get_list_supplier() {
    
    $result = db_fetch_array("SELECT * FROM `tbl_suppliers` ORDER BY `supplier_id` DESC");
    return $result;
}

//search
function search_product($key){
    $result = db_fetch_array("SELECT * FROM `tbl_products`,`tbl_product_category`,`tbl_users` WHERE tbl_products.product_cate_id=tbl_product_category.product_cate_id AND tbl_users.user_id=tbl_products.user_id AND `product_title` LIKE '%$key%' ORDER BY product_id DESC");
    return $result;
}

//lấy id product cho ảnh
function get_product_for_images(){
    $item = db_fetch_row("SELECT * FROM `tbl_products` ORDER BY product_id DESC LIMIT 1");
    return $item;
}

function add_product_images($data){
    return db_insert("tbl_gallery", $data);
}

//lấy ds loạt ảnh sản phẩm ở gallery theo id_product
function get_list_gallery_by_product_image($id){
    $result = db_fetch_array("SELECT * FROM `tbl_gallery` WHERE `product_id` = {$id}");
    return $result;
}

//cập nhật
function update_product_images($data, $id){
    return db_update("tbl_gallery", $data, "`product_id` = {$id}");
}
function delete_product_images($id){
    db_delete('tbl_gallery', "`product_id` = {$id}");
    
}
// danh sách người dùng
function get_list_user(){
    $result = db_fetch_array("SELECT * FROM `tbl_users` WHERE tbl_users.role_id >= 1  ORDER BY `user_id` DESC");
    return $result;
}
<?php
// lấy tất cả ds danh mục sản phẩm
function get_list_order($start = 1, $num_per_page = 10) {
    $result = db_fetch_array("SELECT * FROM `tbl_orders`, `tbl_status` WHERE tbl_orders.status_id = tbl_status.status_id ORDER BY `order_id` DESC LIMIT {$start},{$num_per_page}");
    return $result;
}

//lấy số bản ghi
function get_order_num_row(){
    return db_num_rows("SELECT * FROM `tbl_orders`");
}

function get_order_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_orders` WHERE `order_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}
function delete_order($id){
    db_delete('tbl_orders', "`order_id` = {$id}");
    
}
function get_order_detail($id) {
    $check = db_fetch_array("SELECT * FROM `tbl_order_detail`,`tbl_products` WHERE `order_id` = {$id} AND `tbl_products`.`product_id`=`tbl_order_detail`.`product_id`");
    if(!empty($check)){
        return $check;
    }
}

function update_order_detail($data, $id){
    return db_update("tbl_orders", $data, "`order_id` = {$id}");
}

function search_order($key){
    $result = db_fetch_array("SELECT * FROM `tbl_orders`, `tbl_status` WHERE tbl_orders.status_id = tbl_status.status_id AND `order_fullname` LIKE '%$key%' ORDER BY order_id DESC");
    return $result;
}
function get_list_status(){
    $result = db_fetch_array("SELECT * FROM `tbl_status`");
    return $result;
}

//thêm chi tiết trạng thái đơn
function add_status_detail($data){
    return db_insert("tbl_status_detail", $data);
}

//lấy ds chi tiết đơn theo id đơn hàng
function get_list_status_by_id($id){
    $result = db_fetch_array("SELECT * FROM `tbl_status_detail`,`tbl_status` WHERE `order_id` = {$id} AND tbl_status_detail.status_id = tbl_status.status_id");
    return $result;
}
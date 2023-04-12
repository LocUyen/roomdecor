<?php
// lấy tất cả ds danh mục sản phẩm
function get_list_order() {
    $result = db_fetch_array("SELECT * FROM `tbl_orders`, `tbl_status` WHERE tbl_orders.status_id = tbl_status.status_id ORDER BY `order_id` DESC LIMIT 10");
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

function get_order_detail($id) {
    $check = db_fetch_array("SELECT * FROM `tbl_order_detail`,`tbl_products` WHERE `order_id` = {$id} AND `tbl_products`.`product_id`=`tbl_order_detail`.`product_id`");
    if(!empty($check)){
        return $check;
    }
}

function update_order_detail($data, $id){
    return db_update("tbl_orders", $data, "`order_id` = {$id}");
}

function get_list_status(){
    $result = db_fetch_array("SELECT * FROM `tbl_status`");
    return $result;
}
//thống kê
function get_order_num_row_success(){
    return db_fetch_row("SELECT COUNT(status_id) FROM `tbl_orders` WHERE `status_id` = 3 ");
}
function get_order_num_row_transport(){
    return db_fetch_row("SELECT COUNT(status_id) FROM `tbl_orders` WHERE `status_id` = 2");
}
function get_order_num_row_cancel(){
    return db_fetch_row("SELECT COUNT(status_id) FROM `tbl_orders` WHERE `status_id` = 4");
}
function get_order_num_row_sale(){
    return db_fetch_row("SELECT SUM(order_total) FROM `tbl_orders` WHERE `status_id` = 3 ");
}
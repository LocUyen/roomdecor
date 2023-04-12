<?php
//lấy 1 sp 
function get_product_by_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = {$id}");
    
    // $item['url_product'] = "?mod=product&action=detail&id={$id}";
    return $item;
}

function add_cart($id){

    $get_product = get_product_by_id($id);
    $get_product['url_product'] = "?mod=product&action=detail&id={$id}";
    // show_array($get_product);
    $qty = 1;
    //số lượng sp trong giỏ không vượt số lượng tồn kho
    $GLOBALS['changed_cart'] =  false;

    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        if(empty($_SESSION['cart']['buy'][$id]['num_order'])){
            
            $qty = $_SESSION['cart']['buy'][$id]['product_quality'] + 1 ;
        } else {

            if($_SESSION['cart']['buy'][$id]['num_order'] > $get_product['product_num']){
                $qty = $get_product['product_num'];
                //số lượng sp trong giỏ đã vượt số lượng tồn kho
                $GLOBALS['changed_cart'] =  true;
            } else {
                $qty = $_SESSION['cart']['buy'][$id]['num_order'];
            }
            
        }    
    }
    $_SESSION['cart']['buy'][$id] = array(
        'product_id' => $get_product['product_id'],
        'url_product' => $get_product['url_product'],
        'product_title' => $get_product['product_title'],
        'product_discount' => $get_product['product_discount'],
        'product_num' => $get_product['product_num'],
        'product_image' => $get_product['product_image'],
        'product_code' => $get_product['product_code'],
        'product_quality' => $qty,
        'product_sub_total' => $get_product['product_discount'] * $qty,
        'changed_cart' => $GLOBALS['changed_cart'],
    );
    update_info_cart();
    
}
function update_cart($qty) {
    foreach ($qty as $id => $new_qty) {
        $_SESSION['cart']['buy'][$id]['product_quality'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['product_sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['product_discount'];
        update_info_cart();
    }
}
function update_info_cart() {
    //cập nhật thông tin giỏ hàng
    $num_order = 0;
    $total = 0;
    
    foreach ($_SESSION['cart']['buy'] as $item) {

        $num_order += $item['product_quality'];
        $total += $item['product_sub_total'];
        // if($total < 300000){
        //     $ship = 30000;
        // } else {
        //     $ship = 0;
        // }
    }
    
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
        // 'ship' => $ship
    );
    
}
//lấy ds giỏ hàng đã mua
function get_list_buy_cart() {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&action=delete&id={$item['product_id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

// tổng tiền giỏ hàng
function get_total_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

function get_total_info_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
    return false;
}
function delete_cart($id) {
    if (isset($_SESSION['cart'])) {
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else {
            unset($_SESSION['cart']);
        }
    }
}


//thêm đơn hàng
function add_order($data){
    return db_insert("tbl_orders", $data);
}
//thêm chi tiết trạng thái đơn
function add_status_detail($data){
    return db_insert("tbl_status_detail", $data);
}

//ds đơn hàng
function get_list_order(){
    $result = db_fetch_array("SELECT * FROM `tbl_orders`");
    return $result;
}

//lấy id trong ds khách hàng
function get_info_user($label){
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$label}'");
    return $item;

}

//lấy id ds order
function get_order_id(){
    $item = db_fetch_row("SELECT * FROM `tbl_orders` ORDER BY order_id DESC LIMIT 1");
    return $item;
}

//thêm chi tiết đơn hàng
function add_order_detail($data){
    return db_insert("tbl_order_detail", $data);
}
//thêm vnpay
function add_vnpay($data){
    return db_insert("tbl_vnpay", $data);
}

//ds chi tiết đơn
function get_order_detail(){
    $item = db_fetch_row("SELECT * FROM `tbl_order_detail` ORDER BY order_id DESC LIMIT 1");
    return $item;
}

//cập nhật sản phẩm
function update_product($data, $id){
    return db_update("tbl_products", $data, "`product_id` = {$id}");
}
<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
   
    $list_order = get_list_order();
    

    foreach($list_order as &$item){
        $item['url_order_detail'] = "?mod=orders&action=detail&id={$item['order_id']}";
        $item['url_delete'] = "?mod=orders&action=delete&id={$item['order_id']}";

    }
    // show_array($list_order);
    $data['list_order'] = $list_order;

    //thống kê
    $num_success = get_order_num_row_success();
    $num_transport = get_order_num_row_transport();
    $num_cancel = get_order_num_row_cancel();
    $num_sale = get_order_num_row_sale();
    
    $data['num_success'] = $num_success;
    $data['num_transport'] = $num_transport;
    $data['num_cancel'] = $num_cancel;
    $data['num_sale'] = $num_sale;


    load_view('index', $data);
    
}



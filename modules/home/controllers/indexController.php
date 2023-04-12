<?php
function construct(){
    load_model('index');
}
// bảng hiển thị
function indexAction(){
    $get_list_cate = get_list_cate();
    $data['get_list_cate'] = $get_list_cate;
    // show_array($get_list_cate);

    $get_list_product = get_list_product();
    foreach($get_list_product as &$item){
        $item['url_detail'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";

    }
    $data['get_list_product'] = $get_list_product;

    // show_array($get_list_product);

    load_view('index', $data);
}

function searchAction(){
    if(isset($_GET['btn_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_product = search_product($key);
        foreach($search_product as &$item){
            $item['url_detail'] = "?mod=product&action=detail&id={$item['product_id']}";
            $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
    
        }
        // show_array($search_product);
        $data['search_product'] = $search_product;

        // $search_post = search_post($key);
        // $data['search_post'] = $search_post;

    }
    
    load_view('search', $data);
}
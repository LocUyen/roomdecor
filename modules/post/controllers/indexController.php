<?php
function construct(){
    load_model('index');
}
// bảng hiển thị
function indexAction(){
    
    $id_cat = $_GET['id_cat'];
    
    $get_cat_by_id = get_cat_by_id($id_cat);
    $get_list_cat_by_id = get_list_cat_by_id($id_cat);

    foreach($get_list_cat_by_id as &$item){
        $item['url_detail'] = "?mod=post&action=detail&id={$item['post_id']}";
    }

    $data['get_cat_by_id'] = $get_cat_by_id;
    $data['get_list_cat_by_id'] = $get_list_cat_by_id;
    // show_array($get_list_cat_by_id);


    load_view('index', $data);
}
function detailAction(){

    $id = $_GET['id'];
    
    $get_post_by_id = get_post_by_id($id);
    // show_array($get_post_by_id);

    $data['get_post_by_id'] = $get_post_by_id;


    load_view('detail',$data);
}

<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_decor_service_num_row();
    // echo $num_rows;
    
    #Phân trang
    // số dòng mỗi trang
    $num_per_page = 10; 
    #Tổng số bảng ghi
    $total_page = $num_rows;
    #lấy số trang mỗi bảng ghi
    $num_page = ceil($total_page / $num_per_page);
    #lấy page
    $page = isset($_GET['page'])? (int)$_GET['page']: 1;
    // echo $page;
    #lấy miền giá trị
    $start = ($page-1) * $num_per_page;
    // echo $start;
    $list_decor_service = get_list_decor_service($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;

    foreach($list_decor_service as &$item){
        // $item['url_update'] = "?mod=posts&controller=index&action=update&id={$item['post_id']}";
        $item['url_delete'] = "?mod=decor_service&action=delete&id={$item['service_id']}";
    }
    // show_array($list_decor_service);
    $data['list_decor_service'] = $list_decor_service;
    load_view('index', $data);
}

function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có đội ngũ  này";
        } else{
            $key = $_GET['key'];
        }

        $search_decor_service = search_decor_service($key);
        foreach($search_decor_service as &$item){
            // $item['url_update'] = "?mod=posts&controller=index&action=update&id={$item['post_id']}";
            $item['url_delete'] = "?mod=decor_service&action=delete&id={$item['service_id']}";
        }
        // show_array($search_decor_service);
        $data['search_decor_service'] = $search_decor_service;

        
        // $data['search_post'] = $search_post;

    }
    load_view('search', $data);
}
function deleteAction(){
    $id = (int)$_GET['id'];
    delete_decor_service($id);
    redirect("?mod=decor_service&action=index");

}
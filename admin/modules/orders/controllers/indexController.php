<?php
function construct(){
    load_model('index');
    load('lib','email');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_order_num_row();
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
    $list_order = get_list_order($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;

    foreach($list_order as &$item){
        $item['url_order_detail'] = "?mod=orders&action=detail&id={$item['order_id']}";
        $item['url_delete'] = "?mod=orders&action=delete&id={$item['order_id']}";

    }
    // show_array($list_order);
    $data['list_order'] = $list_order;
    load_view('index', $data);
}
function deleteAction(){

    $id = (int)$_GET['id'];
    delete_order($id);
    redirect("?mod=orders&action=index");

}
function detailAction(){

    $order_id = (int)$_GET['id'];

    $get_order_id = get_order_id($order_id);
    
    $get_list_order_detail = get_order_detail($order_id);

    $get_list_status = get_list_status();

    $get_list_status_by_id = get_list_status_by_id($order_id);

    if(isset($_POST['sm_status'])){
        
        if(!empty($_POST['status'])){
            $status = $_POST['status'];
            
        }
        if(!empty($_POST['note'])){
            $note = $_POST['note'];
            
        }
        $data = array(
            'status_id' => $status
        );

        update_order_detail($data, $order_id);

        $data_status = array(
                        
            'order_id' => $order_id,
            'status_id' => $status,
            'note' => $note
        );
        //thêm chi tiết trạng thái đơn
        add_status_detail($data_status);
        // $data['status'] = $status;
        redirect("?mod=orders&action=detail&id={$order_id}");


    }
    
    $data['get_order_id'] = $get_order_id;
    $data['get_list_order_detail'] = $get_list_order_detail;
    $data['get_list_status'] = $get_list_status;
    $data['get_list_status_by_id'] = $get_list_status_by_id;

    load_view('detail', $data);
}

function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_order = search_order($key);
        foreach($search_order as &$item){
            $item['url_order_detail'] = "?mod=orders&action=detail&order_id={$item['order_id']}";

    
        }
        // show_array($search_order);
        $data['search_order'] = $search_order;
    }
    load_view('search', $data);
}

function addAction(){
    load_view('add');
}
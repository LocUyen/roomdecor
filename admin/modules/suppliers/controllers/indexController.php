<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_supplier_num_row();
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
    $list_supplier = get_list_supplier($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;

    foreach($list_supplier as &$item){
        $item['url_update'] = "?mod=suppliers&action=update&id={$item['supplier_id']}";
        $item['url_delete'] = "?mod=suppliers&action=delete&id={$item['supplier_id']}";
    
    }
    // show_array($list_supplier);
    $data['list_supplier'] = $list_supplier;
    load_view('index', $data);
}
function addAction() {
   
    global $error, $supplier_name, $email, $phone_number, $address;

    if(isset($_POST['btn-add'])){
        $error = array();
    
        if (empty($_POST['supplier_name'])) {
            $error['supplier_name'] = "Không được để trống";
        } else {
            $supplier_name = $_POST['supplier_name'];
        }

        if (empty($_POST['supplier_email'])) {
            $error['supplier_email'] = "Không được để trống";
        } else {
            $supplier_email = $_POST['supplier_email'];
        }
        
        if (empty($_POST['supplier_phone'])) {
            $error['supplier_phone'] = "Không được để trống";
        } else {
            if (!is_phone_number($_POST['supplier_phone']) ) {
                $error['supplier_phone'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $supplier_phone = $_POST['supplier_phone'];
            }
        }
        
        if (empty($_POST['supplier_address'])) {
            $error['supplier_address'] = "Không được để trống";
        } else {
            $supplier_address = $_POST['supplier_address'];
        }
        
        if (empty($error)) {
            $data = array(
                'supplier_name' => $supplier_name,
                'supplier_email' => $supplier_email,
                'supplier_phone' => $supplier_phone,
                'supplier_address' => $supplier_address
            );
            // show_array($data);
            add_supplier($data);
            redirect("?mod=suppliers&action=index");
        }
    }
    

    load_view('add');
}
function updateAction() {
    $id = $_GET['id'];
    global $error, $supplier_name, $email, $phone_number, $address;

    if(isset($_POST['btn-update'])){
        $error = array();
    
        if (empty($_POST['supplier_name'])) {
            $error['supplier_name'] = "Không được để trống";
        } else {
            $supplier_name = $_POST['supplier_name'];
        }

        if (empty($_POST['supplier_email'])) {
            $error['supplier_email'] = "Không được để trống";
        } else {
            $supplier_email = $_POST['supplier_email'];
        }
        
        if (empty($_POST['supplier_phone'])) {
            $error['supplier_phone'] = "Không được để trống";
        } else {
            if (!is_phone_number($_POST['supplier_phone']) ) {
                $error['supplier_phone'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $supplier_phone = $_POST['supplier_phone'];
            }
        }
        
        if (empty($_POST['supplier_address'])) {
            $error['supplier_address'] = "Không được để trống";
        } else {
            $supplier_address = $_POST['supplier_address'];
        }
        
        if (empty($error)) {
            $data = array(
                'supplier_name' => $supplier_name,
                'supplier_email' => $supplier_email,
                'supplier_phone' => $supplier_phone,
                'supplier_address' => $supplier_address
            );
            // show_array($data);
            update_supplier($data,$id);
            redirect("?mod=suppliers&action=index");
        }
    }
    $get_supplier_by_id = get_supplier_by_id($id);
    // show_array($get_supplier_by_id);
    $data['get_supplier_by_id'] = $get_supplier_by_id;


    load_view('update',$data);
}
function deleteAction(){
    $id = (int)$_GET['id'];
    delete_supplier($id);
    redirect("?mod=suppliers&action=index");

}
function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_supplier = search_supplier($key);
        foreach($search_supplier as &$item){
            $item['url_update'] = "?mod=suppliers&action=update&id={$item['supplier_id']}";
            $item['url_delete'] = "?mod=suppliers&action=delete&id={$item['supplier_id']}";
        
        }
        // show_array($search_supplier);
        $data['search_supplier'] = $search_supplier;

        
        // $data['search_post'] = $search_post;

    }
    load_view('search', $data);
}
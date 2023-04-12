<?php
function construct(){
    load_model('index');
    
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_import_good_num_row();
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
    $list_import_good = get_list_import_good($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;

    foreach($list_import_good as &$item){
        $item['url_detail'] = "?mod=import_goods&action=detail&id={$item['import_id']}";
        $item['url_print'] = "?mod=import_goods&action=print&id={$item['import_id']}";
        $item['url_delete'] = "?mod=import_goods&action=delete&id={$item['import_id']}";
    
    }
    $data['list_import_good'] = $list_import_good;
    
    load_view('index', $data);
}
function addAction() {
   
    global $error, $get_list_supplier_id, $get_product_id, $import_price, $import_quality,  $import_date, $import_status, $import_created_by;

    $get_list_supplier = get_list_supplier();
    $data['get_list_supplier'] = $get_list_supplier;

    $get_list_product = get_list_product();
    $data['get_list_product'] = $get_list_product;

    $get_list_user = get_list_user();
    $data['get_list_user'] = $get_list_user;
    // show_array($get_list_product);
    
    
    //xử lý chi tiết nhập hàng
    if(isset($_POST['btn-create'])){
        $error = array();

        if(isset($_POST['get_list_product_id'])){
            if(empty($_POST['get_list_product_id'])){
                $error['get_list_product_id'] = "Vui lòng chọn sản phẩm";
            }
            else{
                $get_product_id = $_POST['get_list_product_id'];
            }
        }

        
        if (empty($_POST['import_price'])) {
            $error['import_price'] = "Không được để trống";
        } else {
            $import_price = $_POST['import_price'];
        }

        if (empty($_POST['import_quality'])) {
            $error['import_quality'] = "Không được để trống";
        } else {
            $import_quality = $_POST['import_quality'];
        }


        $get_product = get_product_by_id($get_product_id);

        if (empty($error)) {
            //thêm 1 sp vào chi tiết nhập hàng
            $_SESSION['import_goods']['add'][$get_product_id] = array(
                'product_id' => $get_product_id,
                'product_title' => $get_product['product_title'],
                'product_num' => $get_product['product_num'],
                'import_price' => $import_price,
                'import_quality' => $import_quality,
                'sub_total' => $import_price * $import_quality
            );
            //tính tổng các sp đã nhập
            $total = 0;
            foreach ($_SESSION['import_goods']['add'] as $item) {
                $total += $item['sub_total'];
            }
            $_SESSION['import_goods']['info'] = array(
                'total' => $total
            );
        } 
        // show_array($_SESSION['import_goods']);

        //thêm url xóa vào 1 sp của chi tiết đơn hàng
        foreach($_SESSION['import_goods']['add'] as &$item){
            $item['url_delete'] = "?mod=import_goods&action=delete_good&id={$item['product_id']}";
        }  
    }
   
    //nhập hàng
    if(isset($_POST['btn-add'])){
        $error = array();
        if(isset($_POST['get_list_supplier_id'])){
            if(empty($_POST['get_list_supplier_id'])){
                $error['get_list_supplier_id'] = "Vui lòng chọn nhà cung cấp";
            }
            else{
                $get_list_supplier_id = $_POST['get_list_supplier_id'];
            }
        }

        if (empty($_POST['import_date'])) {
            $error['import_date'] = "Vui lòng chọn ngày nhập";
        } else {
            $import_date = $_POST['import_date'];
        }
        
        if(isset($_POST['import_status'])){
            if(empty($_POST['import_status'])){
                $error['import_status'] = "Vui lòng chọn nhà cung cấp";
            }
            else{
                $import_status = $_POST['import_status'];
            }
        }
        
        if (empty($_POST['get_list_user_id'])) {
            $error['get_list_user_id'] = "Không được để trống";
        } else {
            $import_created_by = $_POST['get_list_user_id'];
        }
        
        

        if (empty($error)) {
            //nhập hàng
            $data = array(
                'import_date' => $import_date,
                'import_created_by' => $import_created_by,
                'supplier_id' => $get_list_supplier_id,
                'import_total' => $_SESSION['import_goods']['info']['total'],
                'import_status' => $import_status
            );
            add_import_good($data);

            $get_list_import_good_id = get_import_good_id();
            
            //chi tiết nhập
            foreach($_SESSION['import_goods']['add'] as $item){
                $data_detail = array(
                    'product_id' => $item['product_id'],
                    'import_price' => $item['import_price'],
                    'import_quality' => $item['import_quality'],
                    
                    'import_id' => $get_list_import_good_id['import_id'],
                        
                );
                add_import_detail($data_detail);

                $data_product = array(
                
                    'product_num' => $item['product_num'] + $item['import_quality']
                    
                );
                update_product($data_product, $item['product_id']);
            }
            // foreach($get_list_product as $item){
                

                
            // }
            

            
            redirect("?mod=import_goods&action=index");
        }
        unset($_SESSION['import_goods']);

    }
    

    load_view('add', $data);
}
//xóa chi tiết nhập hàng
function delete_goodAction(){
    $id = $_GET['id'];
    unset($_SESSION['import_goods']['add'][$id]);
    redirect("?mod=import_goods&action=add");

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_import_good($id);
    delete_import_detail($id);
    redirect("?mod=import_goods&action=index");

}

function detailAction(){
    $id = (int)$_GET['id'];

    $get_import_good_by_id = get_import_good_by_id($id);
    $data['get_import_good_by_id'] = $get_import_good_by_id;

    $get_import_detail_by_id = get_import_detail_by_id($id);
    $data['get_import_detail_by_id'] = $get_import_detail_by_id;
    // show_array($get_import_detail_by_id);
    if(isset($_POST['sm_status'])){


        if(!empty($_POST['status'])){
            $status = $_POST['status'];
            
        }
        $data_detail = array(
            'import_status' =>$status
        );

        update_import_good($data_detail, $id);
        
        redirect("?mod=import_goods&action=index");


    }

    load_view('detail', $data);
}
function printAction(){
    $id = (int)$_GET['id'];

    $get_import_good_by_id = get_import_good_by_id($id);
    $data['get_import_good_by_id'] = $get_import_good_by_id;

    $get_import_detail_by_id = get_import_detail_by_id($id);
    $data['get_import_detail_by_id'] = $get_import_detail_by_id;
    load_view('print', $data);
    
}
function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_import_good = search_import_good($key);
        foreach($search_import_good as &$item){
            $item['url_detail'] = "?mod=import_goods&action=detail&id={$item['import_id']}";
            $item['url_print'] = "?mod=import_goods&action=print&id={$item['import_id']}";
            $item['url_delete'] = "?mod=import_goods&action=delete&id={$item['import_id']}";
        
        }
        // show_array($search_supplier);
        $data['search_import_good'] = $search_import_good;

        
        // $data['search_post'] = $search_post;

    }
    load_view('search', $data);
}


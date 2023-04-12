<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_product_num_row();
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
    // $list_products = get_list_products($start, $num_per_page);
    $list_products = get_list_products($start, $num_per_page, "tbl_products.product_cate_id=tbl_product_category.product_cate_id");

    // show_array($list_products);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_products as &$item){
        $item['url_update'] = "?mod=products&controller=index&action=update&id={$item['product_id']}";
        $item['url_delete'] = "?mod=products&controller=index&action=delete&id={$item['product_id']}";
    
    }
    // show_array($list_products);
    $data['list_products'] = $list_products;


    load_view('index', $data);
}
//thêm
function addAction(){
    global $error, $product_title, $product_code, $price, $product_num, $list_supplier, $list_unit ,$price_in ,$product_image, $price_discount,$description,$detail, $product_cate_id;
    
    $list_product_cate = get_list_product_cate();
    $data['list_product_cate'] = $list_product_cate;

    $list_unit = get_list_unit();
    $data['list_unit'] = $list_unit;

    $list_supplier = get_list_supplier();
    $data['list_supplier'] = $list_supplier;

    $get_list_user = get_list_user();
    $data['get_list_user'] = $get_list_user;
    // show_array($get_list_user);

    if(isset($_POST['btn-add'])){

        $error = array();

        if(empty($_POST['product_title'])){
            $error['product_title'] = "Không được để trống";
        }else{
            $product_title = $_POST['product_title'];
        }


        if(empty($_POST['product_code'])){
            $error['product_code'] = "Không được để trống";
        }else{
            $product_code = $_POST['product_code'];
        }


        if(empty($_POST['price'])){
            $error['price'] = "Không được để trống";
        }else{
            $price = $_POST['price'];
        }

        if(empty($_POST['price-discount'])){
            $error['price-discount'] = "Không được để trống";
        }else{
            $price_discount = $_POST['price-discount'];
        }

        // if(empty($_POST['product_num'])){
        //     $error['product_num'] = "Không được để trống";
        // }else{
            // $product_num = $_POST['product_num'];
        // }
        if(empty($_POST['description'])){
            $error['description'] = "Không được để trống";
        }else{
            $description = $_POST['description'];
        }

        if(empty($_POST['detail'])){
            $error['detail'] = "Không được để trống";
        }else{
            $detail = $_POST['detail'];
        }

        if (isset($_FILES['product_image'])) {
            // show_array($_FILES);
        
            //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
            // Đường dẫn của file khi upload
            $upload_file = $upload_dir . $_FILES['product_image']['name'];
        
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $upload_file)) {
                // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['product_image']['name']}</a>";
                $product_image = $_FILES['product_image']['name'];
            } else {
                $error['product_image'] = 'upload không thành công';
            }
        }


        if (isset($_FILES['product_images'])) {
            // show_array($_FILES);
        
            //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
            // Đường dẫn của file khi upload

            $product_images = $_FILES['product_images']['name'];

            foreach($product_images as $image => $value){
                $upload_file = $upload_dir . $value;
                move_uploaded_file($_FILES['product_images']['tmp_name'][$image], $upload_file);
            }
           
        }

        if(isset($_POST['list_product_cate_id'])){

            if(empty($_POST['list_product_cate_id'])){
                $error['list_product_cate_id'] = "Vui lòng chọn danh mục";
            }
            else{
                $product_cate_id = $_POST['list_product_cate_id'];
            }
        
        }

        if(isset($_POST['list_unit'])){

            if(empty($_POST['list_unit'])){
                $error['list_unit'] = "Vui lòng chọn đơn vị";
            }
            else{
                $list_unit = $_POST['list_unit'];
            }
        
        }

        // if(isset($_POST['list_supplier'])){

        //     if(empty($_POST['list_supplier'])){
        //         $error['list_supplier'] = "Vui lòng chọn nhà cung cấp";
        //     }
        //     else{
        //         $list_supplier = $_POST['list_supplier'];
        //     }
        
        // }

        if (empty($_POST['get_list_user_id'])) {
            $error['get_list_user_id'] = "Không được để trống";
        } else {
            $user_id = $_POST['get_list_user_id'];
        }
        
        if(empty($error)){
            $data = array(
                'product_code' => $product_code,
                'product_title' => $product_title,
                'product_price' => $price,
                'product_discount' => $price_discount,
                'product_image' => $product_image,
                'product_description' => $description,
                'product_detail' => $detail,
                'product_cate_id' => $product_cate_id,
                'user_id' => $user_id,
                'unit_id' => $list_unit,
                'product_num' => 0,
                'product_recommendation' => 0,
            );
            add_product($data);
            
            $get_product_for_images = get_product_for_images();
            $get_product_id = $get_product_for_images['product_id'];

            foreach($product_images as $item => $value){
                $data_image = array(

                    'gallery_image' => $value,
                    'product_id' => $get_product_id
                    
                );
                add_product_images($data_image);
            }
        
            redirect("?mod=products&controller=index");
        }
    }
    load_view('add', $data);

}

//cập nhật
function updateAction(){
    $id = (int)$_GET['id'];
    // echo $id;
    $list_product_cate = get_list_product_cate();
    $data['list_product_cate'] = $list_product_cate;

    $list_unit = get_list_unit();
    $data['list_unit'] = $list_unit;

    $list_supplier = get_list_supplier();
    $data['list_supplier'] = $list_supplier;

    $get_list_gallery_by_product_image = get_list_gallery_by_product_image($id);
    $data['get_list_gallery_by_product_image'] = $get_list_gallery_by_product_image;

    $info_product = get_product_by_id($id);
    $data['info_product'] = $info_product;

    $get_list_user = get_list_user();
    $data['get_list_user'] = $get_list_user;
    
    if(isset($_POST['btn-update'])){

        $error = array();

        if(empty($_POST['product_title'])){
            $error['product_title'] = "Không được để trống";
        }else{
            $product_title = $_POST['product_title'];
        }


        if(empty($_POST['product_code'])){
            $error['product_code'] = "Không được để trống";
        }else{
            $product_code = $_POST['product_code'];
        }


        if(empty($_POST['price'])){
            $error['price'] = "Không được để trống";
        }else{
            $price = $_POST['price'];
        }

        if(empty($_POST['product_num'])){
            $error['product_num'] = "Không được để trống";
        }else{
            $product_num = $_POST['product_num'];
        }

        if(empty($_POST['price-discount'])){
            $error['price-discount'] = "Không được để trống";
        }else{
            $price_discount = $_POST['price-discount'];
        }


        if(empty($_POST['description'])){
            $error['description'] = "Không được để trống";
        }else{
            $description = $_POST['description'];
        }

        if(empty($_POST['detail'])){
            $error['detail'] = "Không được để trống";
        }else{
            $detail = $_POST['detail'];
        }


        if (isset($_FILES['product_image'])) {
            // show_array($_FILES);
        
        //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
        // Đường dẫn của file khi upload
            $upload_file = $upload_dir . $_FILES['product_image']['name'];
            if(empty($_FILES['product_image'])){
                $product_image = $info_product['product_image'];
                
            } else{
                if (move_uploaded_file($_FILES['product_image']['tmp_name'], $upload_file)) {
                    // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['product_image']['name']}</a>";
                    $product_image = $_FILES['product_image']['name'];
                } else {
                    echo 'upload không thành công';
                }
            }
        }
        

        if (isset($_FILES['product_images'])) {
            // show_array($_FILES);
        
            //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
            // Đường dẫn của file khi upload

            $product_images = $_FILES['product_images']['name'];

            foreach($product_images as $image => $value){
                $upload_file = $upload_dir . $value;
                move_uploaded_file($_FILES['product_images']['tmp_name'][$image], $upload_file);
            }
           
        }

        if(isset($_POST['list_unit'])){

            if(empty($_POST['list_unit'])){
                $error['list_unit'] = "Vui lòng chọn đơn vị";
            }
            else{
                $list_unit = $_POST['list_unit'];
            }
        
        }

        if(isset($_POST['list_supplier'])){

            if(empty($_POST['list_supplier'])){
                $error['list_supplier'] = "Vui lòng chọn nhà cung cấp";
            }
            else{
                $list_supplier = $_POST['list_supplier'];
            }
        
        }

        if(isset($_POST['list_product_cate_id'])){
            if(empty($_POST['list_product_cate_id'])){
                $error['list_product_cate_id'] = "Vui lòng chọn tiêu đề";

            }
            else{
                $product_cate_id = $_POST['list_product_cate_id'];
                // echo $list_courses_id;

            }
        
        }


        if(empty($error)){
            $data = array(
                
                'product_code' => $product_code,
                'product_title' => $product_title,
                'product_price' => $price,
                'product_discount' => $price_discount,
                'product_image' => $product_image,
                'product_description' => $description,
                'product_detail' => $detail,
                'product_cate_id' => $product_cate_id,
                'unit_id' => $list_unit,
                'supplier_id' => $list_supplier,
                'product_num' => $product_num,
                // 'product_price_in' => $price_in

            );
            update_product($data, $id);
            

            foreach($product_images as $item => $value){
                $data_image = array(

                    'gallery_image' => $value
                    
                );
                update_product_images($data_image, $id);
            }

            redirect("?mod=products&controller=index");

        }
    }    
    
    // show_array($info_product);
    load_view('update',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_product($id);
    delete_product_images($id);
    
    redirect("?mod=products&controller=index");

}

function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_product = search_product($key);
        foreach($search_product as &$item){
            $item['url_update'] = "?mod=products&controller=index&action=update&id={$item['product_id']}";
            $item['url_delete'] = "?mod=products&controller=index&action=delete&id={$item['product_id']}";
    
        }
        // show_array($search_product);
        $data['search_product'] = $search_product;

        
        // $data['search_post'] = $search_post;

    }
    load_view('search', $data);
}


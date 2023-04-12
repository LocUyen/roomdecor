<?php
function construct(){
    load_model('index');
    load('lib','validation');
   }
// bảng hiển thị

function indexAction(){
    $list_service = get_list_service();
    // show_array($list_service);
    foreach($list_service as &$item){
        $item['url_detail'] = "?mod=decor_service&action=detail&id={$item['service_id']}";
    
    }
    $data['list_service'] = $list_service;
    load_view('index', $data);
}

function postAction(){
    global $error, $service_address, $service_image, $service_team_name, $service_experience, $service_project, $service_area, $service_location, $service_facebook, $service_youtube,$service_into, $service_detail_project;
    $get_user_id = user_id($_SESSION['user_login']);
    $data['get_user_id'] = $get_user_id;
    // show_array($get_user_id);

    
    if(isset($_POST['btn_post'])){
        $error = array();
        if (isset($_FILES['service_image'])) {
        //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
        // Đường dẫn của file khi upload
            $upload_file = $upload_dir . $_FILES['service_image']['name'];
        
            if (move_uploaded_file($_FILES['service_image']['tmp_name'], $upload_file)) {
                // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['post_image']['name']}</a>";
                $service_image = $_FILES['service_image']['name'];
            } else {
                $error['service_image'] = 'upload không thành công';
            }
        }

        if(empty($_POST['service_address'])){
            $error['service_address'] = "Không được để trống";
        }else{
            $service_address = $_POST['service_address'];
        }

        if(empty($_POST['service_team_name'])){
            $error['service_team_name'] = "Không được để trống";
        }else{
            $service_team_name = $_POST['service_team_name'];
        }

        if(empty($_POST['service_experience'])){
            $error['service_experience'] = "Không được để trống";
        }else{
            $service_experience = $_POST['service_experience'];
        }

        if(empty($_POST['service_project'])){
            $error['service_project'] = "Không được để trống";
        }else{
            $service_project = $_POST['service_project'];
        }

        if(empty($_POST['service_area'])){
            $error['service_area'] = "Không được để trống";
        }else{
            $service_area = $_POST['service_area'];
        }

        if(empty($_POST['service_location'])){
            $error['service_location'] = "Không được để trống";
        }else{
            $service_location = $_POST['service_location'];
        }


        if(empty($_POST['service_phone'])){
            $error['service_phone'] = "Không được để trống";
        }else{
            $service_phone = $_POST['service_phone'];
        }


        if(empty($_POST['service_facebook'])){
            $error['service_facebook'] = "Không được để trống";
        }else{
            $service_facebook = $_POST['service_facebook'];
        }
        if(empty($_POST['service_youtube'])){
            $error['service_youtube'] = "Không được để trống";
        }else{
            $service_youtube = $_POST['service_youtube'];
        }

        if(empty($_POST['service_into'])){
            $error['service_into'] = "Không được để trống";
        }else{
            $service_into = $_POST['service_into'];
        }

        if(empty($_POST['service_detail_project'])){
            $error['service_detail_project'] = "Không được để trống";
        }else{
            $service_detail_project = $_POST['service_detail_project'];
        }

        if(empty($error)){
            $data = array(
                'service_image' => $service_image,
                'service_team_name' => $service_team_name,
                'service_experience' => $service_experience,
                'service_project' => $service_project,
                'service_area' => $service_area,
                'service_location' => $service_location,
                'service_phone' => $service_phone,
                'service_address' => $service_address,
                'service_facebook' => $service_facebook,
                'service_youtube' => $service_youtube,
                'service_into' => $service_into,
                'service_detail_project' => $service_detail_project,
                'user_id' => $get_user_id['user_id'],
                'service_status' => 'yes'
                
            );
            $row = get_decor_service_num_row($get_user_id['user_id']);
            if($row < 1){
                add_post_service($data);
            }
           
            redirect("?mod=decor_service&controller=index&action=index");
        }
       
    }
    
    load_view('post');
}
function updateAction(){
    $id = (int)$_GET['id'];
    global $error, $service_address, $service_image, $service_team_name, $service_experience, $service_project, $service_area, $service_location, $service_facebook, $service_youtube,$service_into, $service_detail_project;
    // $get_user_id = user_id($_SESSION['user_login']);
    // $data['get_user_id'] = $get_user_id;
    
    $get_list_service_by_id = get_list_service_by_id($id);
    $data['get_list_service_by_id'] = $get_list_service_by_id;
    if(isset($_POST['btn_update'])){
        $error = array();
        // if (isset($_FILES['service_image'])) {
        // //Thư mục chứa file upload
        //     $upload_dir = 'public/uploads/';
        // // Đường dẫn của file khi upload
        //     $upload_file = $upload_dir . $_FILES['service_image']['name'];
        
        //     if (move_uploaded_file($_FILES['service_image']['tmp_name'], $upload_file)) {
        //         // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['post_image']['name']}</a>";
        //         $service_image = $_FILES['service_image']['name'];
        //     } else {
        //         $error['service_image'] = 'upload không thành công';
        //     }
        // }

        if(empty($_POST['service_address'])){
            $error['service_address'] = "Không được để trống";
        }else{
            $service_address = $_POST['service_address'];
        }

        if(empty($_POST['service_team_name'])){
            $error['service_team_name'] = "Không được để trống";
        }else{
            $service_team_name = $_POST['service_team_name'];
        }

        if(empty($_POST['service_experience'])){
            $error['service_experience'] = "Không được để trống";
        }else{
            $service_experience = $_POST['service_experience'];
        }

        if(empty($_POST['service_project'])){
            $error['service_project'] = "Không được để trống";
        }else{
            $service_project = $_POST['service_project'];
        }

        if(empty($_POST['service_area'])){
            $error['service_area'] = "Không được để trống";
        }else{
            $service_area = $_POST['service_area'];
        }

        if(empty($_POST['service_location'])){
            $error['service_location'] = "Không được để trống";
        }else{
            $service_location = $_POST['service_location'];
        }


        if(empty($_POST['service_phone'])){
            $error['service_phone'] = "Không được để trống";
        }else{
            $service_phone = $_POST['service_phone'];
        }


        if(empty($_POST['service_facebook'])){
            $error['service_facebook'] = "Không được để trống";
        }else{
            $service_facebook = $_POST['service_facebook'];
        }
        if(empty($_POST['service_youtube'])){
            $error['service_youtube'] = "Không được để trống";
        }else{
            $service_youtube = $_POST['service_youtube'];
        }

        if(empty($_POST['service_into'])){
            $error['service_into'] = "Không được để trống";
        }else{
            $service_into = $_POST['service_into'];
        }

        if(empty($_POST['service_detail_project'])){
            $error['service_detail_project'] = "Không được để trống";
        }else{
            $service_detail_project = $_POST['service_detail_project'];
        }

        if(empty($error)){
            $data = array(
                // 'service_image' => $service_image,
                'service_team_name' => $service_team_name,
                'service_experience' => $service_experience,
                'service_project' => $service_project,
                'service_area' => $service_area,
                'service_location' => $service_location,
                'service_phone' => $service_phone,
                'service_address' => $service_address,
                'service_facebook' => $service_facebook,
                'service_youtube' => $service_youtube,
                'service_into' => $service_into,
                'service_detail_project' => $service_detail_project,
                // 'user_id' => $get_user_id['user_id'],
                // 'service_status' => 'no'
                
            );
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            update_post_service($data, $id);
           
            redirect("?mod=decor_service&action=intro&id={$get_list_service_by_id['user_id']}");
        }
       
    }
    
    load_view('update', $data);
}
function detailAction(){
    $id= (int)$_GET['id'];
    // echo $id;
    $get_list_service_by_id = get_list_service_by_id($id);
    $data['get_list_service_by_id'] = $get_list_service_by_id;
    // show_array($get_list_service_by_id);
    load_view('detail', $data);
}
function introAction(){
    $id= (int)$_GET['id'];
    $get_list_service_by_user_id = get_list_service_by_user_id($id);
    $data['get_list_service_by_user_id'] = $get_list_service_by_user_id;
    // show_array($get_list_service_by_user_id);

    load_view('intro', $data);
}
function examlAction(){
    load_view('exam');
}

function search_decorAction(){
    if(isset($_GET['btn_search'])){
        
        if(!empty($_GET['keyd'])){
            $key = $_GET['keyd'];
            $search_decor_service = search_decor_service($key);
        }
            
        if(!empty($_GET['key_location'])){
            $key = $_GET['key_location'];
            $search_decor_service = search_decor_service_location($key);
        }
            
        
        foreach($search_decor_service as &$item){
            $item['url_detail'] = "?mod=decor_service&action=detail&id={$item['service_id']}";
            // $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
        }
        // show_array($search_product);
        $data['search_decor_service'] = $search_decor_service;

        // $search_post = search_post($key);
        // $data['search_post'] = $search_post;

    }
    
    load_view('search', $data);
}
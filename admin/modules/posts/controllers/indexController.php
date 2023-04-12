<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_post_num_row();
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
    // $list_posts = get_list_posts($start, $num_per_page);
    $list_posts = get_list_posts($start, $num_per_page);

    // show_array($list_posts);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_posts as &$item){
        $item['url_update'] = "?mod=posts&controller=index&action=update&id={$item['post_id']}";
        $item['url_delete'] = "?mod=posts&controller=index&action=delete&id={$item['post_id']}";
    
    }
    // show_array($list_posts);
    $data['list_posts'] = $list_posts;
    load_view('index', $data);
}
//thêm
function addAction(){
    global $error, $post_title, $post_short_desc, $post_image, $post_detail, $post_cate_id;
    $list_post_cate = get_list_post_cate();
    // show_array($list_post_cate);
    $data['list_post_cate'] = $list_post_cate;

    $get_list_user = get_list_user();
    $data['get_list_user'] = $get_list_user;

    if(isset($_POST['btn-add'])){
        $error = array();
        if(empty($_POST['post_title'])){
            $error['post_title'] = "Không được để trống";
        }else{
            $post_title = $_POST['post_title'];
        }

        if (isset($_FILES['post_image'])) {
            // show_array($_FILES);
        
        //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
        // Đường dẫn của file khi upload
            $upload_file = $upload_dir . $_FILES['post_image']['name'];
        
            if (move_uploaded_file($_FILES['post_image']['tmp_name'], $upload_file)) {
                // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['post_image']['name']}</a>";
                $post_image = $_FILES['post_image']['name'];
            } else {
                $error['post_image'] = 'upload không thành công';
            }
        }
    
        
        if(empty($_POST['post_short_desc'])){
            $error['post_short_desc'] = "Không được để trống";
        }else{
            $post_short_desc = $_POST['post_short_desc'];
        }

        if(empty($_POST['post_detail'])){
            $error['post_detail'] = "Không được để trống";
        }else{
            $post_detail = $_POST['post_detail'];
        }

        
        if(isset($_POST['list_post_cate_id'])){
            if(empty($_POST['list_post_cate_id'])){
                $error['list_post_cate_id'] = "Vui lòng chọn danh mục";

            }
            else{
                $post_cate_id = $_POST['list_post_cate_id'];
                // echo $list_courses_id;

            }
        
        }

        if(empty($_POST['get_list_user_id'])){
            $error['get_list_user_id'] = "Không được để trống";
        }else{
            $get_list_user_id = $_POST['get_list_user_id'];
        }
        
        if(empty($error)){
            $data = array(
                'post_title' => $post_title,
                'post_image' => $post_image,
                'post_short_desc' => $post_short_desc,
                'post_detail' => $post_detail,
                'post_cate_id' => $post_cate_id,
                'user_id' => $get_list_user_id

            );
            add_post($data);
            
            redirect("?mod=posts&controller=index");
        }
    }
    load_view('add', $data);

}
//cập nhật
function updateAction(){
    $id = (int)$_GET['id'];
    // echo $id;
    $list_post_cate = get_list_post_cate();
    $data['list_post_cate'] = $list_post_cate;

    $get_list_user = get_list_user();
    $data['get_list_user'] = $get_list_user;

    if(isset($_POST['btn-update'])){
        $error = array();
        if(empty($_POST['post_title'])){
            $error['post_title'] = "Không được để trống";
        }else{
            $post_title = $_POST['post_title'];
        }

        if (isset($_FILES['post_image'])) {
            // show_array($_FILES);
        
        //Thư mục chứa file upload
            $upload_dir = 'public/uploads/';
        // Đường dẫn của file khi upload
            $upload_file = $upload_dir . $_FILES['post_image']['name'];
        
            if (move_uploaded_file($_FILES['post_image']['tmp_name'], $upload_file)) {
                // echo "<a href='$upload_file'>DDOWWWLOAND : {$_FILES['post_image']['name']}</a>";
                $post_image = $_FILES['post_image']['name'];
            } else {
                $error['post_image'] = 'upload không thành công';
            }
        }
    
        
        if(empty($_POST['post_short_desc'])){
            $error['post_short_desc'] = "Không được để trống";
        }else{
            $post_short_desc = $_POST['post_short_desc'];
        }

        if(empty($_POST['post_detail'])){
            $error['post_detail'] = "Không được để trống";
        }else{
            $post_detail = $_POST['post_detail'];
        }

        
        if(isset($_POST['list_post_cate_id'])){
            if(empty($_POST['list_post_cate_id'])){
                $error['list_post_cate_id'] = "Vui lòng chọn danh mục";

            }
            else{
                $post_cate_id = $_POST['list_post_cate_id'];
                // echo $list_courses_id;

            }
        
        }

        if(empty($_POST['get_list_user_id'])){
            $error['get_list_user_id'] = "Không được để trống";
        }else{
            $get_list_user_id = $_POST['get_list_user_id'];
        }
        
        if(empty($error)){
            $data = array(
                'post_title' => $post_title,
                'post_image' => $post_image,
                'post_short_desc' => $post_short_desc,
                'post_detail' => $post_detail,
                'post_cate_id' => $post_cate_id,
                'user_id' => $get_list_user_id

            );
            update_post($data, $id);
            
            redirect("?mod=posts&controller=index");
        }
    }    
    $info_post = get_post_by_id($id);
    $data['info_post'] = $info_post;
    // show_array($info_post);
    load_view('update',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_post($id);
    redirect("?mod=posts&controller=index");
}

function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_post = search_post($key);
        foreach($search_post as &$item){
            $item['url_update'] = "?mod=posts&controller=index&action=update&id={$item['post_id']}";
            $item['url_delete'] = "?mod=posts&controller=index&action=delete&id={$item['post_id']}";
    
        }
        $data['search_post'] = $search_post;


    }
    load_view('search', $data);
}
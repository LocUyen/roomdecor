<?php
function construct(){
    load_model('cate');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_post_cate_num_row();
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
    $list_post_cate = get_list_post_cate($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_post_cate as &$item){
        $item['url_update'] = "?mod=posts&controller=cate&action=update&id={$item['post_cate_id']}";
        $item['url_delete'] = "?mod=posts&controller=cate&action=delete&id={$item['post_cate_id']}";
    
    }
    // show_array($list_post_cate);
    $data['list_post_cate'] = $list_post_cate;
    load_view('cateIndex', $data);
}
//thêm
function addAction(){
    global $error, $post_cate_id, $title;
    if(isset($_POST['btn-add'])){
        $error = array();
        if(empty($_POST['post_cate_id'])){
            $error['post_cate_id'] = "Không được để trống";
        }else{
            $post_cate_id = $_POST['post_cate_id'];
        }

        if(empty($_POST['post_cate_title'])){
            $error['post_cate_title'] = "Không được để trống";
        }else{
            $post_cate_title = $_POST['post_cate_title'];
        }

        if(empty($error)){
            $data = array(
                'post_cate_id' => $post_cate_id,
                'post_cate_title' => $post_cate_title
            );
            add_post_cate($data);
            
            redirect("?mod=posts&controller=cate");
        }
    }
    load_view('cateAdd');

}
//cập nhật
function updateAction(){
    $id = (int)$_GET['id'];
    // echo $id;
    
    if(isset($_POST['btn-update'])){
        $error = array();
        if(empty($_POST['post_cate_id'])){
            $error['post_cate_id'] = "Không được để trống";
        }else{
            $post_cate_id = $_POST['post_cate_id'];
        }

        if(empty($_POST['post_cate_title'])){
            $error['post_cate_title'] = "Không được để trống";
        }else{
            $post_cate_title = $_POST['post_cate_title'];
        }

        if(empty($error)){
            $data = array(
                'post_cate_id' => $post_cate_id,
                'post_cate_title' => $post_cate_title
            );
            update_post_cate($data, $id);
            
            redirect("?mod=posts&controller=cate");
        }
    }    
    $info_post_cate = get_post_cate_by_id($id);
    $data['info_post_cate'] = $info_post_cate;
    // show_array($info_post_cate);
    load_view('cateUpdate',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_post_cate($id);
    redirect("?mod=posts&controller=cate");

}
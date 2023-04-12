<?php
function construct(){
    load_model('rating');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_rating_num_row();
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
    $list_rating = get_list_rating($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_rating as &$item){
        $item['url_delete'] = "?mod=products&controller=rating&action=delete&id={$item['rating_id']}";
    
    }
    // show_array($list_rating);
    $data['list_rating'] = $list_rating;
    load_view('ratingIndex', $data);
}
//thêm
function addAction(){
    global $error, $id, $title;
    if(isset($_POST['btn-add'])){
        $error = array();
        if(empty($_POST['id'])){
            $error['id'] = "Không được để trống";
        }else{
            $id = $_POST['id'];
        }

        if(empty($_POST['title'])){
            $error['title'] = "Không được để trống";
        }else{
            $title = $_POST['title'];
        }

        if(empty($error)){
            $data = array(
                'rating_id' => $id,
                'rating_title' => $title
            );
            add_rating($data);
            
            redirect("?mod=products&controller=cate");
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
        if(empty($_POST['id'])){
            $error['id'] = "Không được để trống";
        }else{
            $id = $_POST['id'];
        }

        if(empty($_POST['title'])){
            $error['title'] = "Không được để trống";
        }else{
            $title = $_POST['title'];
        }

        if(empty($error)){
            $data = array(
                'rating_id' => $id,
                'rating_title' => $title
            );
            update_rating($data, $id);
            
            redirect("?mod=products&controller=cate");
        }
    }    
    $info_rating = get_rating_by_id($id);
    $data['info_rating'] = $info_rating;
    // show_array($info_rating);
    load_view('cateUpdate',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_rating($id);
    redirect("?mod=products&controller=cate");

}
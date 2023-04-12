<?php
function construct(){
    load_model('cate');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_product_cate_num_row();
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
    $list_product_cate = get_list_product_cate($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_product_cate as &$item){
        $item['url_update'] = "?mod=products&controller=cate&action=update&id={$item['product_cate_id']}";
        $item['url_delete'] = "?mod=products&controller=cate&action=delete&id={$item['product_cate_id']}";
    
    }
    // show_array($list_product_cate);
    $data['list_product_cate'] = $list_product_cate;
    load_view('cateIndex', $data);
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
                'product_cate_id' => $id,
                'product_cate_title' => $title
            );
            add_product_cate($data);
            
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
                'product_cate_id' => $id,
                'product_cate_title' => $title
            );
            update_product_cate($data, $id);
            
            redirect("?mod=products&controller=cate");
        }
    }    
    $info_product_cate = get_product_cate_by_id($id);
    $data['info_product_cate'] = $info_product_cate;
    // show_array($info_product_cate);
    load_view('cateUpdate',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_product_cate($id);
    redirect("?mod=products&controller=cate");

}
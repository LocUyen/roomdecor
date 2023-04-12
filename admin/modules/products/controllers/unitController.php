<?php
function construct(){
    load_model('unit');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_unit_num_row();
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
    $list_unit = get_list_unit($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;



    foreach($list_unit as &$item){
        $item['url_update'] = "?mod=products&controller=unit&action=update&id={$item['unit_id']}";
        $item['url_delete'] = "?mod=products&controller=unit&action=delete&id={$item['unit_id']}";
    
    }
    // show_array($list_unit);
    $data['list_unit'] = $list_unit;
    load_view('unitIndex', $data);
}
//thêm
function addAction(){
    global $error, $id, $title;
    if(isset($_POST['btn-add'])){
        $error = array();
        

        if(empty($_POST['title'])){
            $error['title'] = "Không được để trống";
        }else{
            $title = $_POST['title'];
        }

        if(empty($error)){
            $data = array(
                'unit_name' => $title
            );
            add_unit($data);
            
            redirect("?mod=products&controller=unit");
        }
    }
    load_view('unitAdd');

}
//cập nhật
function updateAction(){
    $id = (int)$_GET['id'];
    // echo $id;
    
    if(isset($_POST['btn-update'])){
        $error = array();
        

        if(empty($_POST['title'])){
            $error['title'] = "Không được để trống";
        }else{
            $title = $_POST['title'];
        }

        if(empty($error)){
            $data = array(
                
                'unit_name' => $title
            );
            update_unit($data, $id);
            
            redirect("?mod=products&controller=unit");
        }
    }    
    $info_unit = get_unit_by_id($id);
    $data['info_unit'] = $info_unit;
    // show_array($info_unit);
    load_view('unitUpdate',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_unit($id);
    redirect("?mod=products&controller=unit");

}
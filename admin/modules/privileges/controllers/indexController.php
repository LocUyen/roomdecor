<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_role_num_row();
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
    $list_role = get_list_role($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;
    foreach($list_role as &$item){
        $item['url_update'] = "?mod=privileges&action=update&id={$item['role_id']}";
        $item['url_delete'] = "?mod=privileges&action=delete&id={$item['role_id']}";
    }
    // show_array($list_role);
    $data['list_role'] = $list_role;
    load_view('roleIndex', $data);
}
//thêm
function addAction(){
    global $error, $id, $title;
    if(isset($_POST['btn-add'])){
        $error = array();
        // if(empty($_POST['id'])){
        //     $error['id'] = "Không được để trống";
        // }else{
        //     $id = $_POST['id'];
        // }

        if(empty($_POST['name'])){
            $error['name'] = "Không được để trống";
        }else{
            $name = $_POST['name'];
        }

        if(empty($error)){
            $data = array(
                // 'role_id' => $id,
                'role_name' => $name
            );
            add_role($data);
            
            redirect("?mod=privileges&action=index");
        }
    }
    load_view('roleAdd');

}
//cập nhật
function updateAction(){
    $id = (int)$_GET['id'];
    // echo $id;
    $permissions = get_list_permission();
    $data['permissions'] = $permissions;
    // show_array($permissions);
    if(isset($_POST['submit'])){
        $error = array();

        if(empty($_POST['name'])){
            $error['name'] = "Không được để trống";
        }else{
            $name = $_POST['name'];
        }

        if(empty($error)){
            $data = array(
                'role_id' => $id,
                'role_name' => $name
            );
            update_role($data, $id);
            
            // redirect("?mod=privileges&action=update");
            delete_role_permission($id);

            $permission = $_POST['permission'];
            if(!empty($permission)){
                foreach($permission as $item){
                    $data_permission = array(
                        'role_id' => $id,
                        'permission_id' => $item
                    );
                    add_role_permission($data_permission);
                }
                // show_array($privilege);

            }
            redirect("?mod=privileges&action=update&id={$id}");

        }
    }    
    $info_role = get_role_by_id($id);
    $data['info_role'] = $info_role;

    $get_role_permission_by_id = get_role_permission_by_id($id);
    $data['get_role_permission_by_id'] = $get_role_permission_by_id;
    // show_array($info_role);
    load_view('roleUpdate',$data);

}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_role($id);
    redirect("?mod=privileges&controller=role");

}



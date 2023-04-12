<?php
function construct(){
   load_model('index');
}

// bảng hiển thị ds
function indexAction(){
    // echo ($_SESSION['user_login']);
    $list_user = get_list_user($_SESSION['user_login']);
//    show_array($list_user);
    foreach($list_user as &$item){
        $item['url_update'] = "?mod=users&controller=team&action=update&id={$item['user_id']}";
        $item['url_delete'] = "?mod=users&controller=team&action=delete&id={$item['user_id']}";
        $item['url_privilege'] = "?mod=users&controller=team&action=privilege&id={$item['user_id']}";
    
    }
    // show_array($list_user);
    $data['list_user'] = $list_user;
    load_view('teamIndex', $data);
}
function addAction() {
   
    global $error, $fullname, $username, $password;

    if(isset($_POST['btn-add'])){
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống";
        } else {
            $username = $_POST['username'];
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống";
        } else {
            $password = md5($_POST['password']);
        }

        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = "Không được để trống";
        } else {
            $confirm_pass = md5($_POST['confirm-pass']);
        }
        
        
        if (empty($error) && $password ==  $confirm_pass) {
            
                $data = array(
                    'user_fullname' => $fullname,
                    'user_username' => $username,
                    'user_password' => $password,
                );
                // show_array($data);
                add_user($data);
                redirect("?mod=users&controller=team");
            
        }
    }
    

    load_view('teamAdd');
}
function updateAction() {
    $id = $_GET['id'];

    $get_user_by_id = get_user_by_id($id);
    $data['get_user_by_id'] = $get_user_by_id;
//    show_array($get_user_by_id);
    $get_list_role = get_list_role();
    $data['get_list_role'] = $get_list_role;
    // show_array($get_list_role);
    if(isset($_POST['btn-update'])){
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }

        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống";
        } else {
            $address = $_POST['address'];
        }
        
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Không được để trống";
        } else {
            if (!is_phone_number($_POST['phone_number']) ) {
                $error['phone_number'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $phone_number = $_POST['phone_number'];
            }
        }
        if (empty($_POST['role'])) {
            $error['role'] = "Không được để trống";
        } else {
            $role = $_POST['role'];
        }
        
        if (empty($error)) {
            $data = array(
                'user_fullname' => $fullname,
                'user_phone_number' => $phone_number,
                'user_address' => $address,
                'role_id' => $role
            );
            update_user($data, $id);
            // delete_user_privilege($id);
            // if(!empty($role)){
            //     // foreach($role as $item){
            //         // echo $item;
            //         $data_role = array(
            //             'role_id' => $role
            //         );
            //         update_role($data_role, $id);
            //         // redirect("?mod=users&controller=team&action=privilege&id={$id}");
            //     // }
    
            // }
            redirect("?mod=users&controller=team&action=update&id={$id}");

        }
    

    }
    load_view('teamUpdate',$data);
}
function deleteAction(){
    $id = (int)$_GET['id'];
    delete_user($id);
    redirect("?mod=users&controller=team");

}

function searchAction(){
    if(isset($_GET['s_search'])){
        $error = array();

        if(empty($_GET['key'])){
            $error['key'] = "Không có sản phẩm này";
        } else{
            $key = $_GET['key'];
        }

        $search_user = search_user($key);
        foreach($search_user as &$item){
            $item['url_update'] = "?mod=users&controller=index&action=update&id={$item['user_id']}";
            $item['url_delete'] = "?mod=users&controller=index&action=delete&id={$item['user_id']}";
    
        }
        // show_array($search_user);
        $data['search_user'] = $search_user;

        
        // $data['search_post'] = $search_post;

    }
    load_view('search', $data);
}
?>
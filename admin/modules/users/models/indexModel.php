<?php
//đăng kí thành viên

function user_exists($username, $email){
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `user_email`= '{$email}' OR `user_username` = '{$username}'");
    // echo $check_user;
    if($check_user > 0) {
        return true;
    }
    return false;
}
function get_list_user($username) {
    $result = db_fetch_array("SELECT * FROM `tbl_users` WHERE `user_username` != '{$username}' GROUP BY tbl_users.user_id DESC");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

//login
function check_login($username, $password){
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `user_password`= '{$password}' AND `user_username` = '{$username}'");
    echo $check_user;
    if($check_user > 0) {
        return true;
    }
    return false;
}
//logout
function info_user($label = 'id') {
    $user_login = $_SESSION['user_login'];
    $user = db_fetch_array("SELECT * FROM `tbl_users` WHERE `user_username`= '{$user_login}'");
    return $user[$label];
}


//cập nhật mật khẩu
function get_user_by_username($username){
    $check = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$username}'");
    if(!empty($check)){
        return $check;
    }
}

function update_user_login($username, $data) {
    db_update('tbl_users', $data, "`user_username` = '{$username}' ");
}



//lấy số bản ghi
function get_user_num_row(){
    return db_num_rows("SELECT * FROM `tbl_users`");
}

function search_user($key){
    $result = db_fetch_array("SELECT * FROM `tbl_users` WHERE `user_fullname` LIKE '%$key%' ORDER BY user_id DESC");
    return $result;
}

##quản lý người dùng
//thêm
function add_user($data){
    return db_insert("tbl_users", $data);
}

//cập nhật
function update_user($data, $id){
    return db_update("tbl_users", $data, "`user_id` = {$id}");
}
//xoá
function delete_user($id){
    return db_delete('tbl_users', "`user_id` = {$id}");
    
}


##phân quyền
function privileges($id){
    $result = db_fetch_array("SELECT * FROM `tbl_users`,`tbl_role_permission`,`tbl_permissions` WHERE `tbl_users`.`role_id` = `tbl_role_permission`.`role_id` AND `tbl_permissions`.`permission_id` = `tbl_role_permission`.`permission_id` AND `tbl_users`.`user_id` = {$id}");
    return $result;
}

//xoá
function delete_user_privilege($id){
    return db_delete('tbl_user_privilege', "`user_id` = {$id}");
    
}

##nhóm quyền
function get_list_role() {
    $result = db_fetch_array("SELECT * FROM `tbl_roles`");
    return $result;
}

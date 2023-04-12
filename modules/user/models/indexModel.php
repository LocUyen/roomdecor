<?php
//đăng kí thành viên
function add_user($data){
    return db_insert('tbl_users', $data);
}

//ktra thành viên có tồn tại trong ds hay không
function user_exists($password, $username){
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `user_username`= '{$username}' OR `user_password` = '{$password}'");
    // echo $check_user;
    if($check_user > 0) {
        return true;
    }
    return false;
}

//login
function check_login($username, $password){
    $check_user = db_num_rows("SELECT * FROM `tbl_users` WHERE `user_username`= '{$username}' AND `user_password` = '{$password}'");
    echo $check_user;
    if($check_user > 0) {
        return true;
    }
    return false;
}

//lấy id user
function get_user_id() {
    $result = db_fetch_array("SELECT * FROM `tbl_users` ORDER BY user_id DESC LIMIT 1");
    return $result;
}
// function info_user($label = 'id') {
//     $user_login = $_SESSION['user_login'];
//     $user = db_fetch_array("SELECT * FROM `tbl_users` WHERE `user_username`= '{$user_login}'");
//     return $user[$label];
// }

// //lấy fullname
// function info_user() {
//     $user_login = $_SESSION['user_login'];
//     $user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_username`= '{$user_login}'");
//     return $user;
// }








// function get_user_by_id($id) {
//     $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
//     return $item;
// }
// function active_user($active_token) {
//     db_update('tbl_users', array('is_active' => 1), "`active_token`= '{$active_token}' ");
// }
// function check_active_token($active_token) {
//     $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `active_token`= '{$active_token}' AND `is_active`='0'");
//     if($check> 0) {
//         return true;
//     }
//     return false;
// }

// function is_login() {
//     if(!empty($_SESSION['is_login'])) {
//         return true;
//     }
//     return false;
// }
//reset password

function check_email($email){
    $check_email = db_num_rows("SELECT * FROM `tbl_users` WHERE `user_email`= '{$email}'");
    // echo $check_email;
    if($check_email > 0) {
        return true;
    }
    return false;
}
function update_reset_token($data, $email){
    db_update('tbl_users', $data, "`user_email` = '{$email}'");
}
function check_reset_token($reset_token){
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `reset_token`= '{$reset_token}'");
    if($check> 0) {
        return true;
    }
    return false;
}
function update_pass($data, $reset_token){
    db_update('tbl_users', $data, "`reset_token` = '{$reset_token}'");

}


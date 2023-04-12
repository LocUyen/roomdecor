<?php
// lấy tất cả ds danh mục sản phẩm

function get_list_role($start = 1, $num_per_page = 10, $where="") {
    if(!empty($where)){
        $where = "WHERE {$where}";
    }
    $result = db_fetch_array("SELECT * FROM `tbl_roles` {$where} LIMIT {$start},{$num_per_page}");
    return $result;
}
//thêm
function add_role($data){
    return db_insert("tbl_roles", $data);
}
//cập nhật
function update_role($data, $id){
    return db_update("tbl_roles", $data, "`role_id` = {$id}");
}
//xoá
function delete_role($id){
    db_delete('tbl_roles', "`role_id` = {$id}");
    
}
//lấy id 1 danh mục sp cho cập nhật từng loại sản phẩm
function get_role_by_id($id) {
    $check = db_fetch_row("SELECT * FROM `tbl_roles` WHERE `role_id` = {$id}");
    if(!empty($check)){
        return $check;
    }
}

//lấy số bản ghi
function get_role_num_row(){
    return db_num_rows("SELECT * FROM `tbl_roles`");
}

###phân quyền
//danh sách
function get_list_permission() {
    $result = db_fetch_array("SELECT * FROM `tbl_permissions`");
    return $result;
}
//thêm
function add_role_permission($data){
    return db_insert("tbl_role_permission", $data);
}
//lấy danh sách phân quyền theo id
function get_role_permission_by_id($id){
    $result = db_fetch_array("SELECT * FROM `tbl_role_permission` WHERE `role_id`= {$id}");
    return $result;
}
//xoá
function delete_role_permission($id){
    return db_delete('tbl_role_permission', "`role_id` = {$id}");
    
}
##phân quyền
// function privileges($id){
//     $result = db_fetch_array("SELECT * FROM `tbl_user_privilege` INNER JOIN `tbl_privileges` ON `tbl_user_privilege`.`privilege_id` = `tbl_privileges`.`privilege_id` WHERE `tbl_user_privilege`.`user_id` = {$id}");
//     return $result;
// }
// function get_list_privilege() {
//     $result = db_fetch_array("SELECT * FROM `tbl_privileges`");
//     return $result;
// }
// function get_list_privilege_group() {
//     $result = db_fetch_array("SELECT * FROM `tbl_privilege_group` ORDER BY `tbl_privilege_group`.`group_position` ASC");
//     return $result;
// }
// function add_user_privilege($data){
//     return db_insert("tbl_user_privilege", $data);
// }
// function get_user_privilege_by_id($id){
//     $result = db_fetch_array("SELECT * FROM `tbl_user_privilege` WHERE `user_id`= {$id}");
//     return $result;
// }
// //xoá
// function delete_user_privilege($id){
//     return db_delete('tbl_user_privilege', "`user_id` = {$id}");
    
// }
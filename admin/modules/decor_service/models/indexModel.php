<?php
// lấy tất cả ds danh mục sản phẩm
function get_list_decor_service($start = 1, $num_per_page = 10) {
    $result = db_fetch_array("SELECT * FROM `tbl_decor_service` ORDER BY `service_id` DESC LIMIT {$start},{$num_per_page}");
    return $result;
}

//lấy số bản ghi
function get_decor_service_num_row(){
    return db_num_rows("SELECT * FROM `tbl_decor_service`");
}
//xoá
function delete_decor_service($id){
    db_delete('tbl_decor_services', "`service_id` = {$id}");
    
}
function search_decor_service($key){
    $result = db_fetch_array("SELECT * FROM `tbl_decor_service` WHERE `service_team_name` LIKE '%$key%' ORDER BY service_id DESC");
    return $result;
}
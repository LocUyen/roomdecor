<?php
// lấy tất cả ds danh mục sản phẩm
function get_list_feedback() {
    $result = db_fetch_array("SELECT * FROM `tbl_feedback`");
    return $result;
}
//lấy số bản ghi
function get_feedback_num_row(){
    return db_num_rows("SELECT * FROM `tbl_feedback`");
}

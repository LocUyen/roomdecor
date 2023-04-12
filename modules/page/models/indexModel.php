<?php

//thêm
function add_feedback($data){
    return db_insert("tbl_feedback", $data);
}
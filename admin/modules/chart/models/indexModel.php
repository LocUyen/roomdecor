<?php

function get_list_money_30($max_date) {
    $result = db_fetch_array("SELECT DATE_FORMAT(order_created_date,'%e-%m') as 'ngay', SUM(order_total) as 'doanh_thu' FROM `tbl_orders` WHERE DATE(order_created_date) >= CURRENT_DATE() - INTERVAL 30 DAY AND status_id = 3 group by DATE_FORMAT(order_created_date,'%e-%m')");
    return $result;
}
function get_list_money_year() {
    $result = db_fetch_array("SELECT DATE_FORMAT(order_created_date,'%m-%Y') as 'thang', sum(order_total) as 'doanh_thu' FROM `tbl_orders` WHERE status_id = 3 GROUP BY month(order_created_date)");
    return $result;
}
function get_list_money_month($month) {
    $result = db_fetch_array("SELECT DATE_FORMAT(order_created_date, '%d-%m') as 'ngay', SUM(order_total) as 'doanh_thu' FROM `tbl_orders` WHERE DATE_FORMAT(order_created_date,'%Y-%m') = '$month' AND status_id = 3 GROUP by DATE_FORMAT(order_created_date, '%d-%m');");
    return $result;
}

function get_list_money_day($day) {
    $result = db_fetch_array("SELECT hour(order_created_date) as 'ngay', SUM(order_total) as 'doanh_thu' FROM `tbl_orders` WHERE DATE_FORMAT(order_created_date,'%Y-%m-%d') = '$day' AND status_id = 3 GROUP by hour(order_created_date)");
    return $result;
}



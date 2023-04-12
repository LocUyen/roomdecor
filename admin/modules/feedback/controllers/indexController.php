<?php
function construct(){
    load_model('index');
}
// bảng hiển thị ds
function indexAction(){
    #Lấy số lượng bản ghi
    $num_rows = get_feedback_num_row();
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
    $list_feedback = get_list_feedback($start, $num_per_page);
    $data['start'] = $start;
    $data['num_rows'] = $num_rows;
    $data['num_page'] = $num_page;
    $data['page'] = $page;

   
    // show_array($list_feedback);
    $data['list_feedback'] = $list_feedback;
    load_view('index', $data);
}


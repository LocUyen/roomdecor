<?php
function construct(){
    load_model('index');
   }
// bảng hiển thị
function chart_moneyAction(){
    $max_date = 30;
    $money = get_list_money_30($max_date);
    // show_array($money); 
    $arr = [];
    $today = date('d');
    if($today < $max_date){
        $get_day_last_moth = $max_date - $today;
        $last_month = date('m', strtotime("-1 month"));
        $last_month_date = date('Y-m-d', strtotime("-1 month"));
        $max_day_last_month = (new DateTime($last_month_date)) -> format('t');
        $start_day_last_month = $max_day_last_month - $get_day_last_moth;
        for($i = $start_day_last_month; $i<= $max_day_last_month; $i++){
            $key = $i .'-'. $last_month;
            $arr[$key] = 0;
        }
        $start_date_this_month = 1;
    } else {
        $start_date_this_month = $today - $max_date;
    }   
    $this_month = date('m');
    for($i = $start_date_this_month; $i <= $today; $i++){
        $key = $i .'-'. $this_month;
        $arr[$key] = 0;
    }
    foreach($money as $each){
        $arr[$each['ngay']] = (float)$each['doanh_thu'];
    }
    $arrX = array_keys($arr);
    $arrY = array_values($arr);
    // echo json_encode($arrX);
   
    $data['arrX'] = $arrX;
    $data['arrY'] = $arrY;
    load_view('money',$data);
}

function chart_yearAction(){
    $money = get_list_money_year();
    
    $data['money'] = $money;
    load_view('chart_year',$data);
    

    // load_view('chart_year');
    
}


function chart_monthAction(){
    if(isset($_GET['month'])){
        $month = $_GET['month'];
        $money = get_list_money_month($month);
        $data['money'] = $money;
        
    }
    load_view('chart_month', $data);
}

function chart_dayAction(){
    if(isset($_GET['day'])){
        $day = $_GET['day'];
        $money = get_list_money_day($day);
        // echo $day;
        // show_array($money);
        $data['money'] = $money;
        
    }
    load_view('chart_day', $data);
}




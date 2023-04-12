<?php
function construct(){
    load_model('index');
    load('lib','validation');
    load('lib','email');


}
// bảng hiển thị
function addAction(){
    $id = (int)$_GET['id'];

    add_cart($id);

    redirect("?mod=cart&action=index");

}
function indexAction(){
    $list_buy_cart = get_list_buy_cart();
    
    $data['list_buy_cart'] = $list_buy_cart;
    
    // show_array($list_buy_cart);
    load_view('index', $data);
    
}
function deleteAction(){
    $id = (int)$_GET['id'];

    delete_cart($id);
    redirect("?mod=cart&action=index");

}

function delete_allAction(){
    unset($_SESSION['cart']);
    redirect("?mod=cart&action=index");

}

function updateAction(){
    if(isset($_POST['btn_update_cart'])) {
        update_cart($_POST['qty']);
        redirect("?mod=cart&action=index");
    }
    
}

function checkoutAction(){
    global $error, $fullname, $email, $address, $phone, $note, $show_payment, $payment, $show_status, $status;
    
    $list_buy_cart = get_list_buy_cart();
    $get_total_info_cart = get_total_info_cart();

    $get_info_user = get_info_user($_SESSION['user_login']);
    // show_array($_SESSION['cart']);
    // show_array($get_info_user);
    $data['list_buy_cart'] = $list_buy_cart;
    $data['get_total_info_cart'] = $get_total_info_cart;
    $data['get_info_user'] = $get_info_user;


    // echo $_SESSION['user_login'];
    

    if(isset($_POST['order'])){
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }

        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống";
        } else {
            $address = $_POST['address'];
        }

        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống";
        } else {
            $phone = $_POST['phone'];
            
        }

        $note = $_POST['note'];

        $show_payment = array(
            'payment-home' => 'Thanh toán tại nhà',
            'direct-payment' => 'Thanh toán chuyển khoản',
            'payment-vnpay' => 'Thanh toán vnpay',
            'payment-momo' => 'Thanh toán momo',
            'payment-paypal' => 'Thanh toán paypal',
        );
        if (empty($_POST['payment-method'])) {
            $error['payment-method'] = "Bạn chưa chọn phương thức thanh toán";
        } else {
            $payment = $_POST['payment-method'];
            
        }
        
        // $show_status = array(
        //     'pending' => 'Chờ duyệt',
        // );
        // $status = $_POST['status'];

        $num_order = $get_total_info_cart['num_order'];
        
       
        $total_order = $get_total_info_cart['total'];
        
       
        
        $user_id = $get_info_user['user_id'];



        if(empty($error)){
            // dữ liệu order
            if($payment == 'payment-home' || $payment == 'direct-payment'){
                    $data = array(
                        
                        'order_fullname' => $fullname,
                        'order_phone' => $phone,
                        'order_address' => $address,
                        'order_email' => $email,
                        'order_num' => $num_order,
                        'order_total' => $total_order,
                        'order_note' => $note,
                        'order_payment' => $show_payment[$payment],
                        'status_id' => 1,
                        'user_id' => $user_id,
                        
                    );
                    //thêm đơn hàng
                    add_order($data);
                    
                    
                    
                    $list_buy_cart = get_list_buy_cart();

                    $get_order_item = get_order_id();
                    $order_id = $get_order_item['order_id'];

                    $data_status = array(
                        
                        'order_id' => $order_id,
                        'status_id' => 1,
                        'note' => $note

                    );
                    //thêm chi tiết trạng thái đơn
                    add_status_detail($data_status);

                    foreach($list_buy_cart as $item){
                        $data_order_detail = array(
                            
                            'order_id' => $order_id,
                            'product_id' => $item['product_id'],
                            'quatity' => $item['product_quality'],
                            'price' => $item['product_sub_total']
                            
                        );
                        //chi tiết đơn
                        add_order_detail($data_order_detail);
                        
                        $data_product = array(
                            'product_num' => $item['product_num'] - $item['product_quality']
                        );
                        update_product($data_product, $item['product_id']);

                    }
                    
                    $content = "
                    
                    <p>Xin chào {$get_order_item['order_fullname']}</p>
                    <p>CHI TIẾT ĐƠN ĐẶT HÀNG</p>
                    <p>Địa chỉ nhận: <strong>{$get_order_item['order_address']}</strong></p>
                    <p>Số điện thoại: {$get_order_item['order_phone']}</p>
                    <table style='border: 1px solid black;border-collapse: collapse;text-align:center;width:100%'>
                        <thead>
                            <tr style='border: 1px solid black;border-collapse: collapse; font-weight: bold;'>
                                <td>Tên sản phẩm</td>
                                <td>Đơn giá</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                            </tr>
                        </thead>";
                        
                        foreach($list_buy_cart as $item_detail){
                            $content.= "
                        
                        <tbody>
                            <tr style='border: 1px solid black;border-collapse: collapse;'>
                                
                                <td>" .$item_detail['product_title']. " </td>
                                <td> " .currency_format($item_detail['product_discount']). "</td>
                                <td>". $item_detail['product_quality']. "</td>
                                <td>".currency_format($item_detail['product_sub_total'])." </td>
                            </tr>
                            
                        </tbody>";
                         } 
                         $content.= "
                    </table>
                
                    <strong><p style='color:red'>Tổng tiền: ".currency_format($get_total_info_cart['total'])."</p></strong>
                    <p>Nếu có bất kì vấn đề gì hãy liên hệ cho chúng tôi qua mail này hoặc số điện thoại: 0932222202</p>
                    <p>Rất cảm ơn đã tin tưởng và lựa chọn sản phẩm dịch vụ của RoomDecor</p>
                    ";
                    // send_mail('trinhlocuyen@gmail.com', "Trịnh Lộc Uyển", 'Kích hoạt tài khoản PHP', $content);
                    echo send_mail($get_order_item['order_email'], $get_order_item['order_fullname'], 'Xác nhận đặt hàng thành công', $content);
                    unset($_SESSION['cart']);
                    redirect("?mod=cart&action=success_order");

            } 
            elseif($payment == 'payment-vnpay') {
                $data = array(
                        
                    'order_fullname' => $fullname,
                    'order_phone' => $phone,
                    'order_address' => $address,
                    'order_email' => $email,
                    'order_num' => $num_order,
                    'order_total' => $total_order,
                    'order_note' => $note,
                    'order_payment' => $show_payment[$payment],
                    'status_id' => 1,
                    'user_id' => $user_id,
                    
                );
                add_order($data);
                        
                //dữ liệu order_detail
                $list_buy_cart = get_list_buy_cart();

                $get_order_item = get_order_id();
                $order_id = $get_order_item['order_id'];
                
                $data_status = array(
                        
                    'order_id' => $order_id,
                    'status_id' => 1,
                    'note' => $note
                );
                //thêm chi tiết trạng thái đơn
                add_status_detail($data_status);

                foreach($list_buy_cart as $item){
                    $data_order_detail = array(
                        
                        'order_id' => $order_id,
                        'product_id' => $item['product_id'],
                        'quatity' => $item['product_quality'],
                        'price' => $item['product_sub_total']
                        
                    );
                    add_order_detail($data_order_detail);

                    $data_product = array(
                        'product_num' => $item['product_num'] - $item['product_quality']
                    );
                    update_product($data_product, $item['product_id']);
                }

                $content = "
                    
                    <p>Xin chào {$get_order_item['order_fullname']}</p>
                    <p>CHI TIẾT ĐƠN ĐẶT HÀNG</p>
                    <p>Địa chỉ nhận: <strong>{$get_order_item['order_address']}</strong></p>
                    <p>Số điện thoại: {$get_order_item['order_phone']}</p>
                    <table style='border: 1px solid black;border-collapse: collapse;text-align:center;width:100%'>
                        <thead>
                            <tr style='border: 1px solid black;border-collapse: collapse; font-weight: bold;'>
                                <td>Tên sản phẩm</td>
                                <td>Đơn giá</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                            </tr>
                        </thead>";
                        
                        foreach($list_buy_cart as $item_detail){
                            $content.= "
                        
                        <tbody>
                            <tr style='border: 1px solid black;border-collapse: collapse;'>
                                
                                <td>" .$item_detail['product_title']. " </td>
                                <td> " .currency_format($item_detail['product_discount']). "</td>
                                <td>". $item_detail['product_quality']. "</td>
                                <td>".currency_format($item_detail['product_sub_total'])." </td>
                            </tr>
                            
                        </tbody>";
                         } 
                         $content.= "
                    </table>
                
                    <strong><p style='color:red'>Tổng tiền: ".currency_format($get_total_info_cart['total'])."</p></strong>
                    <p>Nếu có bất kì vấn đề gì hãy liên hệ cho chúng tôi qua mail này hoặc số điện thoại: 0932222202</p>
                    <p>Rất cảm ơn đã tin tưởng và lựa chọn sản phẩm dịch vụ của RoomDecor</p>
                    ";
                    // send_mail('trinhlocuyen@gmail.com', "Trịnh Lộc Uyển", 'Kích hoạt tài khoản PHP', $content);
                    echo send_mail($get_order_item['order_email'], $get_order_item['order_fullname'], 'Xác nhận đặt hàng thành công', $content);
                
                //config
                date_default_timezone_set('Asia/Ho_Chi_Minh');

                $vnp_TmnCode = "V4982DP4"; //Website ID in VNPAY System
                $vnp_HashSecret = "FZPLOIRRSWRZGWKLTJVZQPEIRBDTIANY"; //Secret key
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://locuyen.com/roomdecor.com/?mod=cart&action=success_order";
                $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
                $startTime = date("YmdHis");
                $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
                // echo "thanh toán vnapy";
                // redirect("?mod=cart&action=vnpay");

                $vnp_TxnRef = $order_id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Thanh toán đơn hàng tại web';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $get_order_item['order_total'] * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                $vnp_ExpireDate = $expire;
                
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                    "vnp_ExpireDate"=>$vnp_ExpireDate,
                    
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                
                //var_dump($inputData);
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array('code' => '00'
                    , 'message' => 'success'
                    , 'data' => $vnp_Url);
                    if (isset($_POST['order'])) {
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }


            } elseif($payment == 'payment-momo') {
                echo "thanh toán momo";
            } elseif($payment == 'payment-paypal') {
                echo "thanh toán paypal";
            }
        }

    }
    load_view('checkout', $data);
}
function success_orderAction(){
    // show_array($_SESSION);
    if(isset($_GET['vnp_Amount'])){
        $data_vnpay = array(
                        
            'vnp_amount' => $_GET['vnp_Amount'],
            'vnp_bankcode' => $_GET['vnp_BankCode'],
            'vnp_banktranno' => $_GET['vnp_BankTranNo'],
            'vnp_cardtype' => $_GET['vnp_CardType'],
            'vnp_orderinfo' => $_GET['vnp_OrderInfo'],
            'vnp_paydate' => $_GET['vnp_PayDate'],
            'vnp_tmncode' => $_GET['vnp_TmnCode'],
            'vnp_transactionno' => $_GET['vnp_TransactionNo'],
            'vnp_transactionstatus' => $_GET['vnp_TransactionStatus'],
            
        );
        add_vnpay($data_vnpay);
        unset($_SESSION['cart']);
    }
    
    load_view('success_order');
}

function vnpayAction(){
    //config
    

    //
    
}
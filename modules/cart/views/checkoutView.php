<?php
get_header();

?>

<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <form method="POST" action="" name="form-checkout">
        <div id="wrapper" class="wp-inner clearfix">
            <div class="section" id="customer-info-wp">

                    <div class="section-head">
                        <h1 class="section-title">Thông tin khách hàng</h1>
                    </div>
                    <div class="section-detail">
                            <div class="form-row clearfix">
                                <div class="form-col fl-left">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" name="fullname" id="fullname" value="<?php echo $get_info_user['user_fullname']; ?>">
                                    <?php echo form_error('fullname'); ?>

                                </div>
                                <div class="form-col fl-right">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="<?php echo $get_info_user['user_email']; ?>">
                                    <?php echo form_error('email'); ?>

                                </div>
                            </div>
                            <div class="form-row clearfix">
                                <div class="form-col fl-left">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" id="address">
                                    <?php echo form_error('address'); ?>

                                </div>
                                <div class="form-col fl-right">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" name="phone" id="phone" value="<?php echo $get_info_user['user_phone_number']; ?>">
                                    <?php echo form_error('phone'); ?>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="notes">Ghi chú</label>
                                    <textarea name="note"></textarea>
                                    

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="section" id="order-review-wp">
                        <div class="section-head">
                            <h1 class="section-title">Thông tin đơn hàng</h1>
                        </div>
                        <div class="section-detail">
                            <table class="shop-table">
                                <thead>
                                    <tr>
                                        <td>Sản phẩm</td>
                                        <td>Tổng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(!empty($list_buy_cart)){
                                        foreach($list_buy_cart as $item){
                                    ?>
                                    <tr class="cart-item">
                                        
                                        <td class="product-name"><?php echo $item['product_title']; ?><strong class="product-quantity">x <?php echo $item['product_quality']; ?></strong></td>
                                        <td class="product-total"><?php echo currency_format($item['product_sub_total']); ?></td>
                                    </tr>
                                    <?php }}?>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <td> </td>
                                        <td><strong class="total-price"><?php echo currency_format($get_total_info_cart['total']); ?></strong></td>
                                    </tr>
                                    
                                </tfoot>
                            </table>
                            <div id="payment-checkout-wp">
                                <ul id="payment_methods">
                                    <li >
                                        <input type="radio" id="payment-home" name="payment-method" value="payment-home" checked="checked">
                                        <label for="payment-home">Thanh toán tại nhà</label>
                                    </li>
                                    <li class="accordion">
                                        <input type="radio" id="direct-payment" name="payment-method" value="direct-payment">
                                        <label for="direct-payment">Thanh toán chuyển khoản</label>
                                    </li>
                                    <div class="panel">
                                        <h4>Ngân hàng Vietcombank</h4>
                                        
                                        <p>Số tài khoản : <strong>0071000745809</strong></p>
                                        <p>Tên chủ tài khoản:</p>
                                        <p>CUA HANG ROOMDECOR - CHI NHANH HCM</p>
    
                                        <p>Sau khi đặt hàng thành công, chúng tôi sẽ nhanh chóng liên hệ với quý khách ạ!</p>
        
                                    </div>
                                    <li >
                                        <input type="radio" id="payment-home" name="payment-method" value="payment-vnpay">
                                        <div style="display: -webkit-inline-box;">
                                            <label style="margin-top: 7px;" for="payment-home">Thanh toán</label>
                                            <img src="public/images/vnpay.png" />
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <?php echo form_error('payment-method'); ?>

                            <!-- <input type="hidden" value="pending" name="status"> -->

                        <div class="place-order-wp clearfix">
                            <input type="submit" name="order" id="order-now" value="Đặt hàng">
                        </div>
                    </div>
            </div>
        </div>
    </form>

</div>

<script>
    //phần accordion cho thanh toán online
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
        panel.style.display = "none";
        } else {
        panel.style.display = "block";
        }
    });
    }
</script>
<?php
get_footer();

?>
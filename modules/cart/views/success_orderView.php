<?php
get_header();
?>

<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <h3 style="color:green;"><strong>Quý khách đã đặt hàng thành công</strong></h3>
                    
                    <p>Chúng tôi sẽ xử lý đơn hàng và gửi hóa đơn cho quý khách qua mail ạ!</p>  
                    <p>Cảm ơn quý khách đã tin tưởng, nếu cần hỗ trợ quý khách hãy gửi mail qua <a href="">roomdecor@gmail.com</a> </p>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                    <!-- <a href="?mod=cart&action=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>
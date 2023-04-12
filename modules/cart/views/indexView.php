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
        <?php
        foreach($list_buy_cart as $chaged){
            if($chaged['changed_cart']== true){
        ?>
        <p style="color:red;"><strong>Do số lượng sản phẩm còn lại không đủ, số lượng sản phẩm trong giỏ hàng của quý khách đặt đã thay đổi, quý khách lưu ý và thông cảm ạ</strong></p>
        <?php        
            }
        }
        ?>
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <?php
                if(!empty($list_buy_cart)){
                ?>
                <form action="?mod=cart&action=update" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($list_buy_cart as $item){
                            ?>
                            <tr>
                                <td><?php echo $item['product_code']; ?></td>
                                <td>
                                    <a href="<?php echo $item['url_product']; ?>" title="" class="thumb">
                                        <img src="admin/public/uploads/<?php echo $item['product_image']; ?>" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $item['url_product']; ?>" title="" class="name-product"><?php echo $item['product_title']; ?></a>
                                </td>
                                <td><?php echo currency_format($item['product_discount']); ?></td>
                                <td>
                                    <input type="number" name="qty[<?php echo $item['product_id']; ?>]" min="1" max="<?php echo $item['product_num']; ?>" value="<?php echo $item['product_quality']; ?>" class="num-order">
                                </td>
                                <td><?php echo currency_format($item['product_sub_total']); ?></td>
                                <td>
                                    <a href="<?php echo $item['url_delete_cart']; ?>" title="xoá sản phẩm" class="del-product"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format(get_total_cart()); ?></span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            
                                            <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng"/>
                    
                                            <?php
                                            if(isset($_SESSION['user_login'])){
                                            ?>
                                                <a href="?mod=cart&action=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            <?php 
                                            } else{
                                            ?>
                                                <a href="?mod=user&action=login" title="" id="checkout-cart">Thanh toán</a>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                
                <?php
                } else {
                ?>
                <img src="public/images/loi2.png" alt="">
                <!-- <p style="color:red;">Không có sản phẩm nào trong giỏ hàng</p>   -->

                <?php  
                }
                ?>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="?mod=cart&action=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>
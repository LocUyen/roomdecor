<?php
get_header();
?>
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Tìm kiếm sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php
                        if(!empty($search_product)){
                        foreach($search_product as $product){
                            
                        ?>
                        <li>
                            <a href="<?php echo $product['url_detail']; ?>" title="" class="thumb">
                                <img src="admin/public/uploads/<?php echo $product['product_image']; ?>">
                            </a>
                            <a href="<?php echo $product['url_detail']; ?>" title="" class="product-name"><?php echo $product['product_title']; ?></a>
                            <div class="price">
                                <span class="new"><?php echo currency_format($product['product_discount']); ?></span>
                                <span class="old"><?php echo currency_format($product['product_price']); ?></span>
                            </div>
                            <div class="action clearfix">
                                <a href="<?php echo $product['url_add_cart']; ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <?php
                        }
                        } else {
                        ?>
                        <img src="public/images/loi.png" alt="">
                        <?php    
                        }
                        ?>    
                    </ul>
                </div>
                
            </div>
            
        </div>
        <?php
        get_sidebar();
        ?>
    </div>
</div>
<?php
get_footer();
?>
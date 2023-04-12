<?php
get_header();

?>

<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?mod=home&action=index" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?mod=home&action=index" title="">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="" title=""><?php echo $info_product_cate['product_cate_title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left"><?php echo $info_product_cate['product_cate_title']; ?></h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị 8 trên 10 sản phẩm</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                    <!-- <input type="hidden" name="mod" value="product">
                                    <input type="hidden" name="action" value="index"> -->
                                <select name="arrange">
                                    <option value="0">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="4">Giá thấp lên cao</option>
                                </select>
                                <button type="submit" name="btn_filter" value="Sắp xếp">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    
                    <ul class="list-item clearfix">
                    <?php
                    foreach($get_list_product as $item){
                        // show_array($item);
                    ?>
                        <li>
                            <a href="<?php echo $item['url_detail']; ?>" title="" class="thumb">
                                <img src="admin/public/uploads/<?php echo $item['product_image']; ?>" style="height: 189px;margin-left:auto; margin-right:auto;">
                            </a>
                            <a href="<?php echo $item['url_detail']; ?>" title="" class="product-name" style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $item['product_title']; ?></a>
                            <div class="price">
                                <span class="new"><?php echo currency_format($item['product_discount']); ?></span>
                                <span class="old"><?php echo currency_format($item['product_price']); ?></span>
                            </div>
                            <div class="action clearfix">
                                <a href="<?php echo $item['url_add_cart']; ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>   
                    </ul>
                    
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
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
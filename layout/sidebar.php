<?php
function get_by_product_cate(){
    $result = db_fetch_array("SELECT * FROM `tbl_product_category`");
    return $result;
}
$list_product_cate = get_by_product_cate();

#recommendation
function get_list_product_recommendation(){
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE product_recommendation>0 ORDER BY product_recommendation DESC LIMIT 20");
    return $result;
}
$list_product_recommendation = get_list_product_recommendation();

?>
<div class="sidebar fl-left">
<div class="section" id="category-product-wp">
    <div class="section-head">
        <h3 class="section-title">Danh mục sản phẩm</h3>
    </div>
    <div class="secion-detail">
        <?php
        foreach($list_product_cate as $item){
         ?>
        <ul class="list-item">
        
            <!-- <li>
                <a href="?page=category_product" title="">Điện thoại</a>
                <ul class="sub-menu">
                    <li>
                        <a href="?page=category_product" title="">Iphone</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Samsung</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="?page=category_product" title="">Iphone X</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title="">Iphone 8</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title="">Iphone 8 Plus</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Oppo</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Bphone</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="?mod=product&action=index&id_cat=<?php echo $item['product_cate_id']; ?>" title=""><?php echo $item['product_cate_title']; ?></a>
            </li>
            
        </ul>
        <?php
        }
        ?>
    </div>
</div>
<div class="section" id="selling-wp">
    <div class="section-head">
        <h3 class="section-title">Khách hàng đề xuất</h3>
    </div>
    <div class="section-detail">
        <?php
        foreach($list_product_recommendation as $product){
         ?>
        <ul class="list-item">
            <li class="clearfix">
                <a href="?mod=product&action=detail&id=<?php echo $product['product_id']; ?>" title="" class="thumb fl-left">
                    <img src="admin/public/uploads/<?php echo $product['product_image']; ?>" alt="">
                </a>
                <div class="info fl-right">
                    <a href="?page=detail_product" title="" class="product-name"><?php echo $product['product_title']; ?></a>
                    <div class="price">
                        <span class="new"><?php echo currency_format($product['product_discount']); ?></span>
                        <span class="old"><?php echo currency_format($product['product_price']); ?></span>
                    </div>
                    <a href="" title="" class="buy-now">Mua ngay</a>
                </div>
            </li>
            
        </ul>
        <?php
        }
        ?>
    </div>
</div>
<!-- <div class="section" id="banner-wp">
    <div class="section-detail">
        <a href="" title="" class="thumb">
            <img src="public/images/banner.png" alt="">
        </a>
    </div>
</div> -->
</div>
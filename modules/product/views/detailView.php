<?php
    get_header();
?> 
<div id="main-content-wp" class="clearfix detail-product-page">
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
                        <!-- <a href="" title=""><?php echo $get_product['product_cate_title']; ?></a> -->

                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="detail-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb-wp fl-left">
                        <a href="" title="" id="main-thumb" class="">
                            <img id="zoom" style="width:350px; height:330px;" src="admin/public/uploads/<?php echo $get_product['product_image']; ?>" data-zoom-image="admin/public/uploads/<?php echo $get_product['product_image']; ?>"/>
                        </a>
                        <?php
                        if(!empty($get_list_gallery)){
                        ?>
                            <div id="list-thumb">
                                <?php
                            foreach($get_list_gallery as $item){
                            ?>
                                    <a href="" data-image="admin/public/uploads/<?php echo $item['gallery_image']; ?>" data-zoom-image="admin/public/uploads/<?php echo $item['gallery_image']; ?>">
                                <img id="zoom" src="admin/public/uploads/<?php echo $item['gallery_image']; ?>" />
                            </a>
                                    <?php } ?>
                            </div>
                            <?php    
                        } else {
                        ?>
                            <p> </p>
                            <?php    
                        }
                        ?>

                    </div>

                    <div class="thumb-respon-wp fl-left">
                        <img src="public/images/img-pro-01.png" alt="">
                    </div>
                    <div class="info fl-right">

                        <h3 class="product-name">
                            <?php echo $get_product['product_title']; ?>
                        </h3>
                        <div class="desc">
                            <p>
                                <?php echo $get_product['product_description']; ?>
                            </p>

                        </div>

                        <p class="price">
                            <?php echo currency_format($get_product['product_discount']); ?>
                        </p>

                        <?php
                        if($get_product['product_num'] > 0){
                        ?>
                            <div class="num-product">
                                <span class="title">Sản phẩm còn lại: </span>
                                <span class="status"><?php echo $get_product['product_num']; ?></span>
                            </div>

                            <form action="" method="post">

                                <div id="num-order-wp">
                                    <a title="" id="minus"><i class="fa fa-minus"></i></a>
                                    <input type="text" name="num-order" value="1" id="num-order">
                                    <a title="" id="plus"><i class="fa fa-plus"></i></a>
                                </div>
                                <input type="submit" name="btn_add_cart" title="Thêm giỏ hàng" class="add-cart" placeholder="Thêm giỏ hàng" value="Thêm giỏ hàng">
                                <input type="submit" name="btn_recommendation" title="Đề xuất" class="recommendation" placeholder="" value="Đề xuất" onclick="alert('Sản phẩm đã được đề xuất')">
                                <!-- <a href="?mod=cart&action=add&id=<?php echo $get_product['product_id']; ?>" title="Thêm giỏ hàng" class="add-cart">Thêm giỏ hàng</a> -->

                                <!-- <a href="?mod=product&action=detail&id=<?php echo $get_product['product_id']; ?>" title="Thêm giỏ hàng" class="recommendation" onclick="alert('Sản phẩm đã được đề xuất')">Đề xuất</a> -->
                            </form>
                            <?php
                        } else {
                        ?>
                                <div class="num-product">
                                    <span class="title" style="color: red;"><strong>Hết hàng</strong></span>
                                </div>
                                <?php    
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="section" id="post-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Mô tả sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <p>
                        <?php echo $get_product['product_detail']; ?>
                    </p>

                </div>
            </div>
            <!-- khách đánh giá sản phẩm khi đã mua -->
            <?php
            if($_SESSION['is_login'] = true &&(!empty($get_order))){
            ?>
                <div class="section" id="post-product-wp">
                    <div class="section-head">
                        <h3 class="section-title">Đánh giá sản phẩm</h3>
                    </div>

                    <div class="section-detail .clearfix" style="height: 200px;">
                        <form action="" method="POST">
                            <div class="my-2">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> -->
                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> -->
                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> -->
                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> -->
                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <!-- <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> -->

                                </fieldset>
                            </div>
                            <div class="my-2">
                                <textarea name="comment" id="comment" style="width: 845px;"></textarea>
                            </div>

                            <div class="my-2" style="margin-top: 10px;">
                                <input type="submit" name="btn-rating" id="btn-rating" value="Nhận xét" placeholder="Hình ảnh" style="background: black;color: #ffffff;">
                            </div>
                        </form>

                    </div>
                </div>
                <?php } ?>


                <!-- hiển thị danh sách đánh giá -->
                <?php
            if(!empty($get_list_rating)){
            ?>
                    <div class="section" id="post-product-wp">
                        <div class="section-head">
                            <h3 class="section-title">Đánh giá của khách</h3>
                        </div>
                        <div class="section-detail">
                            <div style="background-color:#fafafa; margin:5px;border: 1px solid #ddd; padding: 10px;">
                                <div style="width:19%; display: inline-block; text-align: center; vertical-align: middle;">
                                    <div>
                                        <h1><span style="font-size: xx-large;color: #d93030;"><?php echo round($avg_star['AVG(rating_star)'],2); ?></span> / 5 <span class="fa fa-star star-overview checked"></span></h1>
                                    </div>

                                </div>
                                <div style="width:80%; display: inline-block;">
                                    <div class="flex-container">
                                        <div><a class="" href="">5 sao (<?php echo $star_5['count(rating_star)']; ?>)</a></div>
                                        <div><a href="">4 sao (<?php echo $star_4['count(rating_star)']; ?>)</a></div>
                                        <div><a href="">3 sao (<?php echo $star_3['count(rating_star)']; ?>)</a></div>
                                        <div><a href="">2 sao (<?php echo $star_2['count(rating_star)']; ?>)</a></div>
                                        <div><a href="">1 sao (<?php echo $star_1['count(rating_star)']; ?>)</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-detail">
                            <?php
                    
                        foreach($get_list_rating as $item){
                    ?>
                                <div style="border-bottom: 1px solid #ddd;margin: 20px 5px 0px 5px;">
                                    <h3 style="font-size: 17px;pading-botom:5px"><strong><?php echo $item['user_fullname'];?></strong></h3>
                                    <span style="padding-bottom: 4px;">
                        
                        <?php
                            for($i=0; $i<$item['rating_star'];$i++){
                            ?>
                            <span class="fa fa-star star-overview checked"></span>
                                    <?php }?>
                                    </span>
                                    <span style="font-size: small; color: #a99999;padding: 0 10px; "> <?php echo $item['rating_date_creaded'];?></span>
                                    <p style="background: #f7f7f7dd;; padding: 5px; margin: 7px 0 29px 0;">
                                        <?php echo $item['rating_comment'];?>
                                    </p>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                    <?php 
            } else{
            ?>
                    <div class="section" id="post-product-wp">
                        <div class="section-head">
                            <h3 class="section-title">Đánh giá của khách</h3>
                        </div>
                        <div class="section-detail">
                            <div style="background-color:#fafafa; margin:5px;border: 1px solid #ddd; padding: 10px;">
                                <div style="width:19%; display: inline-block; text-align: center; vertical-align: middle;padding-bottom: 10px;">
                                    <div>
                                        <h1>0 trên 5</h1>
                                    </div>
                                    <div>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div style="width:80%; display: inline-block;">
                                    <div class="flex-container">
                                        <div><a class="" href="">5 sao (0)</a></div>
                                        <div><a href="">4 sao (0)</a></div>
                                        <div><a href="">3 sao (0)</a></div>
                                        <div><a href="">2 sao (0)</a></div>
                                        <div><a href="">1 sao (0)</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-detail">
                            <img style="margin-left: 260px;" src="public/images/rating.png" alt="">
                        </div>
                    </div>
                    <?php
            }
             ?>
                        <div class="section" id="same-category-wp">
                            <div class="section-head">
                                <h3 class="section-title">Cùng chuyên mục</h3>
                            </div>
                            <div class="section-detail">
                                <ul class="list-item">
                                    <?php if(!empty($get_list_product_connect)){
                            foreach($get_list_product_connect as $item){
                                if($item['product_id'] != $id){
                        ?>
                                    <li>
                                        <a href="<?php echo $item['url_detail']; ?>" title="" class="thumb">
                                <img src="admin/public/uploads/<?php echo $item['product_image']; ?>" style="height: 189px;margin-left:auto; margin-right:auto;">
                            </a>
                                        <a href="<?php echo $item['url_detail']; ?>" title="" class="product-name" style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;">
                                            <?php echo $item['product_title']; ?>
                                        </a>
                                        <div class="price">
                                            <span class="new"><?php echo currency_format($item['product_discount']); ?></span>
                                            <span class="old"><?php echo currency_format($item['product_price']); ?></span>
                                        </div>
                                        <div class="action clearfix">
                                            <a href="<?php echo $item['url_add_cart']; ?>" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                            <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                                        </div>
                                    </li>
                                    <?php }}}?>
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
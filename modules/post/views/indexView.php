<?php
get_header();

?>
<div id="main-content-wp" class="clearfix blog-page">
    <div class="wp-inner">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Blog</a>
                    </li>
                    <li>
                        <a href="" title=""><?php echo $get_cat_by_id['post_cate_title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title"><?php echo $get_cat_by_id['post_cate_title']; ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <?php if(!empty($get_list_cat_by_id)){
                            foreach($get_list_cat_by_id as $item){
                        ?>
                        <li class="clearfix">
                            <a href="<?php echo $item['url_detail']; ?>" title="" class="thumb fl-left">
                                <img src="admin/public/uploads/<?php echo $item['post_image']; ?>" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="<?php echo $item['url_detail']; ?>" title="" class="title"><?php echo $item['post_title']; ?></a>
                                <span class="create-date"><?php echo $item['post_created_date']; ?></span>
                                <p class="desc"><?php echo $item['post_short_desc']; ?></p>
                            </div>
                        </li>
                        <?php }} ?>
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
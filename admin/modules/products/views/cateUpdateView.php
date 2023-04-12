<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhập danh mục sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="id">Mã danh mục</label>
                        <input type="text" name="id" id="id" value="<?php echo $info_product_cate['product_cate_id']; ?>">
                        <?php echo form_error('id'); ?>

                        <label for="title">Tên danh mục</label>
                        <input type="text" name="title" id="title" value="<?php echo $info_product_cate['product_cate_title']; ?>">
                        <?php echo form_error('title'); ?>
                        
                        <button type="submit" name="btn-update" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>
<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm nhóm mới</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <!-- <label for="id">Mã danh mục</label>
                        <input type="text" name="id" id="id">
                        <?php echo form_error('id'); ?> -->
                        <label for="title">Tên nhóm</label>
                        <input type="text" name="name" id="title">
                        <?php echo form_error('name'); ?>
                        <button type="submit" name="btn-add" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>
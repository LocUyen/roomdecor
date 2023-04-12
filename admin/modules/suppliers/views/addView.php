<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm nhà cung cấp</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="product-name">Tên nhà cung cấp</label>
                        <input type="text" name="supplier_name" id="product-name">
                        <?php echo form_error('supplier_name'); ?>

                        <label for="product-code">Email</label>
                        <input type="text" name="supplier_email" id="supplier-email">
                        <?php echo form_error('supplier_email'); ?>

                        <label for="product-code">Số điện thoại</label>
                        <input type="text" name="supplier_phone" id="supplier-phone">
                        <?php echo form_error('supplier_phone'); ?>

                        <label for="product-code">Địa chỉ</label>
                        <input type="text" name="supplier_address" id="supplier-address">
                        <?php echo form_error('supplier_address'); ?>

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
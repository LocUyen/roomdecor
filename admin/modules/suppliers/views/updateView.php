<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật nhà cung cấp</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="product-name">Tên nhà cung cấp</label>
                        <input type="text" name="supplier_name" id="product-name" value="<?php echo $get_supplier_by_id['supplier_name']; ?>">
                        

                        <label for="product-code">Email</label>
                        <input type="text" name="supplier_email" id="supplier-email" value="<?php echo $get_supplier_by_id['supplier_email']; ?>">
                        <?php echo form_error('supplier_email'); ?>

                        <label for="product-code">Số điện thoại</label>
                        <input type="text" name="supplier_phone" id="supplier-phone" value="<?php echo $get_supplier_by_id['supplier_phone']; ?>">
                        <?php echo form_error('supplier_phone'); ?>

                        <label for="product-code">Địa chỉ</label>
                        <input type="text" name="supplier_address" id="supplier-address" value="<?php echo $get_supplier_by_id['supplier_address']; ?>">
                        <?php echo form_error('supplier_address'); ?>

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
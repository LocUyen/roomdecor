<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật lại sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_title" id="product-name" value="<?php echo $info_product['product_title']; ?>">
                        <?php echo form_error('product_title'); ?>

                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code" value="<?php echo $info_product['product_code']; ?>">
                        <?php echo form_error('product_code'); ?>

                        <!-- <label for="price">Giá nhập</label>
                        <input type="text" name="price_in" id="price" value="<?php echo $info_product['product_price_in']; ?>">
                        <?php echo form_error('price_in'); ?> -->

                        <label for="price">Giá bán</label>
                        <input type="text" name="price" id="price" value="<?php echo $info_product['product_price']; ?>">
                        <?php echo form_error('price'); ?>
                        
                        <label for="price">Giá đã giảm</label>
                        <input type="text" name="price-discount" id="price" value="<?php echo $info_product['product_discount']; ?>">
                        <?php echo form_error('price-discount'); ?>
                        
                        <!-- <label for="price">Số lượng</label>
                        <input type="text" name="product_num" id="price" value="<?php echo $info_product['product_num']; ?>">
                        <?php echo form_error('product_num'); ?> -->

                        <div class="row">
                            <div class="col-12">
                                <label>Đơn vị</label>
                            </div>
                            <div class="col-2 col-md-2 col-sm-2">
                                <select name="list_unit">
                                    <option value="">-- Chọn đơn vị --</option>
                                    <?php
                                    if(!empty($list_unit)){
                                        foreach($list_unit as $items){
                                    ?>
                                    <option value="<?php echo $items['unit_id']; ?>" selected="selected"><?php echo $items['unit_name']; ?></option>
                                    
                                    <?php
                                    }}
                                    ?>
                                </select>    
                                <?php echo form_error('list_unit'); ?>
                            </div>
                            <div class="col-2 col-md-2 col-sm-2 pt-2 ">
                                <a href="?mod=import_goods&controller=unit&action=add"><i class="fa-solid fa-circle-plus text-success"></i></a>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-12">
                                <label>Nhà cung cấp</label>
                            </div>
                            <div class="col-2 col-md-2 col-sm-2">
                                <select name="list_supplier">
                                    <option value="">-- Chọn nhà cung cấp --</option>
                                    <?php
                                    if(!empty($list_supplier)){
                                        foreach($list_supplier as $items){
                                    ?>
                                    <option value="<?php echo $items['supplier_id']; ?>" selected="selected"><?php echo $items['supplier_name']; ?></option>
                                    
                                    <?php
                                    }}
                                    ?>
                                </select>    
                                <?php echo form_error('list_supplier'); ?>
                            </div>
                            <div class="col-2 col-md-2 col-sm-2 pt-1 ml-5">
                                <a href="?mod=suppliers&action=add"><i class="fa-solid fa-circle-plus text-success"></i></a>
                            </div>
                        </div> -->


                    
                        
                        <div class="row">
                            <div class="col-12">
                                <label>Danh mục sản phẩm</label>
                            </div>
                            <div class="col-3 col-md-3 col-sm-3">
                                <select name="list_product_cate_id">
                                    <option value="">-- Chọn danh mục sản phẩm --</option>
                                    <?php
                                    if(!empty($list_product_cate)){
                                        foreach($list_product_cate as $items){
                                    ?>
                                    <option value="<?php echo $items['product_cate_id']; ?>" selected="selected"><?php echo $items['product_cate_title']; ?></option>
                                    
                                    <?php
                                    }}
                                    ?>
                                </select>    
                                <?php echo form_error('list_product_cate_id'); ?>
                            </div>
                            <div class="col-3 col-md-3 col-sm-3 pt-2">
                                <a href="?mod=products&controller=cate&action=add"><i class="fa-solid fa-circle-plus text-success"></i></a>
                            </div>
                        </div>

                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="description" id="desc" class="ckeditor" value=""><?php echo $info_product['product_description']; ?></textarea>
                        <?php echo form_error('description'); ?>
                        
                        <label for="desc">Chi tiết</label>
                        <textarea name="detail" id="desc" class="ckeditor" value=""><?php echo $info_product['product_detail']; ?></textarea>
                        <?php echo form_error('detail'); ?>
                        

                        <label>Hình ảnh</label>
                        <!-- <input type="file" name="product_image" id="upload-thumb"> -->
                        <div id="uploadFile">
                            <input type="file" name="product_image" id="upload-thumb">
                            <!-- <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb"> -->
                            <img src="public/uploads/<?php echo $info_product['product_image']; ?>">
                        </div>
                        <?php echo form_error('product_image'); ?>


                        <label>Mô tả ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="product_images[]" id="upload-thumb" multiple="multiple">
                            <div class="row">
                                <?php
                                foreach($get_list_gallery_by_product_image as $item){
                                ?>
                                    <div class="col-md-2">
                                        <img src="public/uploads/<?php echo $item['gallery_image']; ?>">

                                    </div>
                                <?php } ?>
                            </div>
                            

                        </div>
                        <label for="user_id">Người tạo</label>
                        <!-- <input style="width: inherit;" type="text" name="import_created_by" id="import_created_by"> -->
                        <select style="width: inherit;" name="get_list_user_id">
                        <option value="">Admin</option>
                        <!-- <?php
                        if(!empty($get_list_user)){
                            foreach($get_list_user as $item){
                        ?>
                        <option value="<?php echo $item['user_id']; ?>"><?php echo $item['user_username']; ?></option>
                        <?php
                        }}
                        ?> -->
                        </select>  
                        

                        <!-- <select name="parent_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="1">Thể thao</option>
                            <option value="2">Xã hội</option>
                            <option value="3">Tài chính</option>
                        </select> -->
                        <!-- <label>Trạng thái</label>
                        <select name="status">
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                        </select> -->
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
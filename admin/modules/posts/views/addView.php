<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="post-name">Tên bài viết</label>
                        <input type="text" name="post_title" id="post-name">
                        <?php echo form_error('post_title'); ?>

                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="post_short_desc" id="desc"></textarea>
                        <?php echo form_error('post_short_desc'); ?>

                        <label for="desc">Chi tiết</label>
                        <textarea name="post_detail" id="desc" class="ckeditor"></textarea>
                        <?php echo form_error('post_detail'); ?>
                        

                        <label>Hình ảnh</label>
                        <!-- <input type="file" name="post_image" id="upload-thumb"> -->

                        <div id="uploadFile">
                            <input type="file" name="post_image" id="upload-thumb">
                            <!-- <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png"> -->
                        </div>
                        <?php echo form_error('post_image'); ?>
                        
                        
                        

                        <label>Danh mục bài viết</label>
                        <select name="list_post_cate_id">
                            <option value="">-- Chọn danh mục --</option>
                            <?php
                            if(!empty($list_post_cate)){
                                foreach($list_post_cate as $items){
                            ?>
                            <option value="<?php echo $items['post_cate_id']; ?>"><?php echo $items['post_cate_title']; ?></option>
                            
                            <?php
                            }}
                            ?>
                        </select>    

                        <label for="user_id">Người tạo</label>
                        <select style="width: inherit;" name="get_list_user_id">
                        <option value="">-- Chọn người tạo --</option>
                        <?php
                        if(!empty($get_list_user)){
                            foreach($get_list_user as $item){
                        ?>
                        <option value="<?php echo $item['user_id']; ?>"><?php echo $item['user_username']; ?></option>
                        <?php
                        }}
                        ?>
                        </select>
                        <?php echo form_error('list_post_cate_id'); ?>

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
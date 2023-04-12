<?php
get_header();

?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar('users'); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm quyền cho nhóm</h3>
                </div>
            </div>
            <form method="POST">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    
                        <!-- <label for="id">Mã danh mục</label>
                        <input type="text" name="id" id="id" value="<?php echo $info_role['role_id']; ?>">
                        <?php echo form_error('id'); ?> -->

                        <label for="title">Tên nhóm</label>
                        <input type="text" name="name" id="title" value="<?php echo $info_role['role_name']; ?>">
                        <?php echo form_error('name'); ?>
                        
                </div>
                
                <div class="section-detail">
                    <div class="container">
                    <?php
                    $current_permissionList = array();
                    if(!empty($get_role_permission_by_id)){
                        foreach($get_role_permission_by_id as $current_permission){
                            $current_permissionList[] = $current_permission['permission_id'];
                        }
                    }
                    ?>
                        
                            <div class="col-12 ml-2">
                                <?php 
                                foreach($permissions as $permission){
                                    // if($group['group_id'] == $privilege['group_id']){
                                ?>
                                <div class="form-check">
                                    <label class="form-check-label" for="check_<?php echo $permission['permission_id']; ?>">
                                        <input type="checkbox" 
                                        <?php 
                                        if(in_array($permission['permission_id'], $current_permissionList)){
                                        ?>
                                        checked = ""
                                        <?php 
                                        } 
                                        ?>
                                        class="form-check-input" id="permission_<?php echo $permission['permission_id']; ?>" name="permission[]" value="<?php echo $permission['permission_id']; ?> " ><?php echo $permission['permission_name']; ?>
                                    </label>
                                </div>
                                <?php }?>

                            </div>
                            <!-- <button type="submit" name="btn-update" id="btn-submit">Cập nhật</button> -->
                        
                            <button type="submit" name ="submit" class="btn btn-primary">Lưu</button>
                    </div>
                
            </div>
            </form>
            
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>
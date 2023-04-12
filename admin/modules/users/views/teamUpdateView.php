<?php
get_header();
?>
<div id="main-content-wp" class="info-account-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản người dùng</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <?php 
        get_sidebar('users');
        ?>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action = "" method="POST">
                        <label for="display-name" >Họ và Tên</label>
                        <input type="text" name="fullname" id="display-name" value = "<?php echo $get_user_by_id['user_fullname']; ?>">
                        
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" placeholder="admin" value = "<?php echo $get_user_by_id['user_username']; ?>">
                        
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value = "<?php echo $get_user_by_id['user_email']; ?>">
                        
                        <label for="tel">Số điện thoại</label>
                        <input type="tel" name="phone_number" id="tel" value = "<?php echo $get_user_by_id['user_phone_number']; ?>">
                        
                        <label for="address">Địa chỉ</label>
                        <textarea name="address" id="address"><?php echo $get_user_by_id['user_address']; ?></textarea>
                        
                        <?php 
                        foreach($get_list_role as $role){
                        ?>
                        <div class="checkbox">
                        <label><input type="checkbox" 
                        <?php 
                            if($role['role_id']==$get_user_by_id['role_id']){
                            ?>
                            checked = ""
                            <?php 
                            } 
                            ?>
                            name="role" value="<?php echo $role['role_id']; ?>"> <?php echo $role['role_name']; ?></label>
                        </div>
                        <?php
                        }
                        ?>  
                      
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
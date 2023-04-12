<?php
get_header();
?>
<div id="main-content-wp" class="change-pass-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?mod=users&controller=team&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Thêm tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <?php 
        get_sidebar('users');
        ?>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="display-name" >Họ và Tên</label>
                        <input type="text" name="fullname" id="display-name">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="display-name">
                        <label for="old-pass">Mật khẩu</label>
                        <input type="password" name="password" id="pass-old">
                        <label for="confirm-pass">Xác nhận mật khẩu</label>
                        <input type="password" name="confirm-pass" id="confirm-pass">
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
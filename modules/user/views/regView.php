<html>
    <head>
        <title>Trang đăng kí</title>
        <link href="public/css/reg.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wp-form-reg">
            <h1 class="page-title">ĐĂNG KÝ THÀNH VIÊN</h1>
            <form id="form-reg" class="page" action="" method="POST">
                <input type="text" name="username" id="fullname"  placeholder="Tên đăng nhập" value="<?php echo set_value('username'); ?>">
                <?php echo form_error('username'); ?>

                <input type="text" name="fullname" id="fullname"  placeholder="Họ và Tên" value="<?php echo set_value('fullname'); ?>">
                <?php echo form_error('fullname'); ?> 
                
                <input type="text" name="email" id="username"  placeholder="Gmail" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email'); ?> 

                <input type="password" name="password" id="password"  placeholder="Mật khẩu" >
                <?php echo form_error('password'); ?> 

                <input type="text" name="phone" id="fullname"  placeholder="Số điện thoại" value="<?php echo set_value('phone'); ?>">
                <?php echo form_error('phone'); ?> 

                <input type="submit" name="btn-reg" id="btn-reg" value="Đăng kí">

                <?php echo form_error('account'); ?> 
              
            </form>
            <a href="<?php echo base_url("?mod=user&action=login") ?>" id="lost-pas">Đăng nhập</a>
        </div>

    </body>
</html>


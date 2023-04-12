<html>
    <head>
        <title>Page Title</title>
        <link href="public/css/login.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">ĐĂNG NHẬP THÀNH VIÊN</h1>
            <form id="form-login" class="page" action="" method="POST">

            <input type="text" name="username" id="username"  placeholder="Tên đăng nhập" value="<?php echo set_value('username'); ?>">
                <?php echo form_error('username'); ?> 

                <input type="password" name="password" id="password"  placeholder="Mật khẩu" >
                <?php echo form_error('password'); ?> 


                <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">

                <?php echo form_error('account'); ?> 


            </form>
            <a href="<?php echo base_url("?mod=user&action=reset") ?>" id="lost-pas">Quên mật khẩu?</a>

            <a href="<?php echo base_url("?mod=user&action=reg") ?>" id="lost-pas">Đăng kí</a>
           
        </div>

    </body>
</html>


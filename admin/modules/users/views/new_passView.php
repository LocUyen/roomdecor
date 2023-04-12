<html>
    <head>
        <title>Thiết lập mật khẩu</title>
        <link href="public/css/login.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">Thiết lập MẬT KHẨU</h1>
            <form id="form-login" class="page" action="" method="POST">

            <input type="password" name="password" id="password"  placeholder="password" value="<?php echo set_value('password'); ?>">
                <?php echo form_error('password'); ?> 

                <input type="submit" name="btn-new-pass" id="btn-login" value="Lưu">

                <?php echo form_error('account'); ?> 


            </form>
            <a href="<?php echo base_url("?mod=users&action=login") ?>" id="lost-pas">Đăng nhập</a> |

            <a href="<?php echo base_url("?mod=users&action=reg") ?>" id="lost-pas">Đăng kí</a>
        </div>

    </body>
</html>


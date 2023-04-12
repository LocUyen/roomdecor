<html>
    <head>
        <title>Khôi phục mật khẩu</title>
        <link href="public/css/login.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page-title">KHÔI PHỤC MẬT KHẨU</h1>
            <form id="form-login" class="page" action="" method="POST">

            <input type="text" name="email" id="email"  placeholder="Email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email'); ?> 

                <input type="submit" name="btn-reset" id="btn-login" value="Gửi yêu cầu">

                <?php echo form_error('account'); ?> 


            </form>
            <a href="<?php echo base_url("?mod=user&action=login") ?>" id="lost-pas">Đăng nhập</a> |

            <a href="<?php echo base_url("?mod=user&action=reg") ?>" id="lost-pas">Đăng kí</a>
        </div>

    </body>
</html>


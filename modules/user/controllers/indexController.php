
<?php
function construct(){
    load_model('index');
    load('lib','validation');
    load('lib','email');

    
}
function indexAction(){
    load_view('index');
}
function regAction() {
    global $error, $username, $password, $email, $fullname, $phone, $address;
    if (isset($_POST['btn-reg'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống";
        } else {
            $username = $_POST['username'];
        }

        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }

        
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống";
        } else {
            if (!is_password($_POST['password']) ) {
                $error['password'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $password = md5($_POST['password']);
            }
        }

        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống";
        } else {
            if (!is_email($_POST['email']) ) {
                $error['email'] = "Email bạn vừa nhập không đúng định dạng ";
            } else {
                $email = $_POST['email'];
            }
        }
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống";
        } else {
            if (!is_phone_number($_POST['phone']) ) {
                $error['phone'] = "Số điện thoại bạn vừa nhập không đúng định dạng ";
            } else {
                $phone = $_POST['phone'];
            }
        }
        if (empty($error)) {
            if (!user_exists($username, $email)) {
                // $active_token = md5($username.time());
                $data = array(
                    'user_fullname' => $fullname,
                    'user_username' => $username,
                    'user_password' => $password,
                    'user_email' => $email,
                    'user_phone_number' => $phone,
                    // 'active_token' => $active_token
                );
                add_user($data);
                
                if (check_login($username, $password)) {
                    $_SESSION['is_login'] = true;
                    $_SESSION['user_login'] = $username;
                   
                    redirect();
                }
            } else {
                $error['account'] = "Email hoặc username đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
}
// bảng hiển thị
function loginAction() {
    global $error, $username, $password;
    
    if (isset($_POST['btn-login'])) {
        $error = array();
    
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống";
        } else {
            $username = $_POST['username'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống";
        } else {
            if (!is_password($_POST['password']) ) {
                $error['password'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $password = md5($_POST['password']);
            }
        }
    
        if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
               
                redirect();
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}


function logoutAction(){
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    

    redirect("?mod=home&action=index");
}
//lấy lại mật khẩu
function resetAction(){
    global $error, $email,$password;
    
    $reset_token = $_GET['reset_token'];
    
    if(!empty($reset_token)){
        if(check_reset_token($reset_token)){

            if (isset($_POST['btn-new-pass'])) {
                $error = array();

                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống";
                } else {
                    if (!is_password($_POST['password']) ) {
                        $error['password'] = "Password bạn vừa nhập không đúng định dạng ";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                if(empty($error)){
                    $data = array(
                        'user_password' => $password
                    );
                    update_pass($data, $reset_token);
                    redirect("?mod=user&action=resetOK");
                }
            }    
            load_view('new_pass');
        } else {
            echo "Yêu cầu lấy lại mật khẩu";

        }
    }    
    else{    
        if (isset($_POST['btn-reset'])) {
            $error = array();
            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống";
            } else {
                if (!is_email($_POST['email']) ) {
                    $error['email'] = "Email bạn vừa nhập không đúng định dạng ";
                } else {
                    $email = $_POST['email'];
                }
            }
            if (empty($error)) {
                if (check_email($email)) {
                    $reset_token = md5($email.time());
                    $data = array(
                        'reset_token' => $reset_token
                    );
                    update_reset_token($data, $email);
                    $link= base_url("?mod=user&action=reset&reset_token={$reset_token}");
                    $content = "
                    <p>Bạn vui lòng click vào đường link này để thay đổi mật khẩu: {$link}</p>
                    
                    <p>Hỗ trợ từ RoomDecor</p>";
                    echo send_mail($email, '', 'Thay đổi mật khẩu', $content);
                    redirect("?mod=user&action=reset");
                } else {
                    $error['account'] = "Tên email không tồn tại";
                }
            }
        }
        load_view('reset');
    }
}

function resetOKAction(){
    load_view('resetOK');
}
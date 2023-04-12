
<?php
function construct(){
    load_model('index');
    // load('lib','validation');
    
}
function indexAction(){
    load_view('index');
}

// bảng hiển thị đăng nhập
function loginAction() {
    
    // echo time();
    // echo date("d/m/Y h:m:s");
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

                //lấy thông tin user
                $info_user = get_user_by_username($_SESSION['user_login']);
                // show_array($info_user);
                
                //lấy ds phân quyền của user theo id
                $privileges = privileges($info_user['user_id']);
                // show_array($privileges);
                $user['privileges'] = array();
                if(!empty($privileges)){
                    foreach($privileges as $privileges){
                        $user['privileges'][] = $privileges['permission_url'] ;
                    }
                }
                // var_dump($info_user);
                $_SESSION['user_privileges'] = $user['privileges'];
                show_array($_SESSION['user_privileges']);

                // if($_SESSION['user_login'] == 'Admin'){
                //     $_SESSION['user_privileges'] = array(
                //         // '\?mod=users&action=login',
                //         // '\?mod=home',
                //         '\?mod=chart&action=chart_money',
                //         '\?mod=users&controller=team',
                //         '\?mod=users&action=update',
                //         '\?mod=users&action=reset',
                        
        
                //         '\?mod=posts&action=index',
                //         '\?mod=posts&action=add',
                //         '\?mod=posts&controller=index&action=update',
                //         // '\?mod=posts&controller=index&action=delete',
        

                //         '\?mod=posts&controller=cate&action=index',
                //         '\?mod=posts&controller=cate&action=add',
                //         '\?mod=posts&controller=cate&action=update',
                //         '\?mod=posts&controller=cate&action=delete',
        
                //         '\?mod=products&action=index',
                //         '\?mod=products&action=add',
                //         '\?mod=products&controller=index&action=update',
                //         '\?mod=products&controller=index&action=delete',
        
                //         '\?mod=products&controller=cate&action=index',
                //         '\?mod=products&controller=cate&action=add',
                //         '\?mod=products&controller=cate&action=update',
                //         '\?mod=products&controller=cate&action=delete',
                        
                //         '\?mod=customers&action=index',
        
                //         '\?mod=orders&action=index',
                //         '\?mod=orders&action=detail',
                //         '\?mod=orders&action=delete',
        
                //         '\?mod=suppliers&action=index',
                //         '\?mod=suppliers&action=add',
                //         '\?mod=suppliers&action=update',
                //         '\?mod=suppliers&action=delete',
        
                //         '\?mod=decor_service&action=index',
                //         '\?mod=decor_service&action=delete',
        
                //         '\?mod=import_goods&action=index',
                //         '\?mod=import_goods&action=detail',
                //         '\?mod=import_goods&action=delete',
                //         '\?mod=import_goods&action=prinf',
        
                //         '\?mod=import_goods&controller=unit',
                //         '\?mod=import_goods&controller=unit&action=add',
                //         '\?mod=import_goods&controller=unit&action=update',
                //         '\?mod=import_goods&controller=unit&action=delete',
        
                        
                //     );

                // }
                redirect();

            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

// đăng xuất
function logoutAction(){
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}
function resetAction(){
    global $error, $password;

    if (isset($_POST['btn-submit'])) {
        $error = array();

        if (empty($_POST['pass-old'])) {
            $error['pass-old'] = "Không được để trống";
        } else {
            if (!is_password($_POST['pass-old']) ) {
                $error['pass-old'] = "Password cũ bạn vừa nhập không đúng định dạng ";
            } else {
                $pass_old = md5($_POST['pass-old']);
            }
        }
        if (empty($_POST['pass-new'])) {
            $error['pass-new'] = "Không được để trống";
        } else {
            if (!is_password($_POST['pass-new']) ) {
                $error['pass-new'] = "Password mới bạn vừa nhập không đúng định dạng ";
            } else {
                $pass_new = md5($_POST['pass-new']);
            }
        }
        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = "Không được để trống";
        } else {
            if (!is_password($_POST['confirm-pass']) ) {
                $error['confirm-pass'] = "Password bạn xác nhận lại vừa nhập không đúng định dạng ";
            } else {
                $confirm_pass = md5($_POST['confirm-pass']);
            }
        }
        if (empty($error)) {
            if($pass_old != $pass_new && $pass_new == $confirm_pass){
                $data = array(
                    'user_password' => $confirm_pass
                    
                );
                // show_array($data);
                update_user_login(user_login(), $data);
            }
            
        }
    }    
    load_view('reset');
    
}



function updateAction() {
    //cập nhật tài khoản
    //B1: Tạo giao diện
    //B2: Load lại thông tin cũ
    //B3: Validation
    //B4: Cập nhật thông tin
    global $error, $fullname, $phone_number, $address;
    if(isset($_POST['btn-update'])){
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống";
        } else {
            $fullname = $_POST['fullname'];
        }

        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống";
        } else {
            $address = $_POST['address'];
        }
        
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Không được để trống";
        } else {
            if (!is_phone_number($_POST['phone_number']) ) {
                $error['phone_number'] = "Password bạn vừa nhập không đúng định dạng ";
            } else {
                $phone_number = $_POST['phone_number'];
            }
        }
        
        
        if (empty($error)) {
            $data = array(
                'user_fullname' => $fullname,
                'user_phone_number' => $phone_number,
                'user_address' => $address
            );
            // show_array($data);
            update_user_login(user_login(), $data);
            
        }
    }
    $info_user = get_user_by_username(user_login());
    // show_array($info_user);
    $data['info_user'] = $info_user;
    load_view('update', $data);
}


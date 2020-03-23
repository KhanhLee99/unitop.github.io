<?php

use function GuzzleHttp\Psr7\_parse_message;

function construct()
{
    // echo "Dùng chung";
    load_model('index');
}

function changePassAction()
{
    $id = $_GET['id'];
    $user = get_user_by_id($id);
    $data = array(
        'id' => $user['id'],
        'fullname' => $user['fullname'],
    );
    global $pass_old, $pass_new, $pass_confirm, $error;
    if (isset($_POST['btn_change_pass'])) {
        $error = array();
        #password - old
        if (empty($_POST['pass-old'])) {
            $error['pass-old'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['pass-old'])) {
                $error['pass-old'] = 'Password không đúng định dạng';
            } else {
                $pass_old = md5($_POST['pass-old']);
            }
        }

        #password - new
        if (empty($_POST['pass-new'])) {
            $error['pass-new'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['pass-new'])) {
                $error['pass-new'] = 'Password không đúng định dạng';
            } else {
                $pass_new = md5($_POST['pass-new']);
            }
        }

        #password - confirm
        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['confirm-pass'])) {
                $error['confirm-pass'] = 'Password không đúng định dạng';
            } else {
                $pass_confirm = md5($_POST['confirm-pass']);
            }
        }

        if (empty($error)) {
            if (check_pass_old($pass_old)) {
                if ($pass_new == $pass_confirm) {
                    $change_pass = array(
                        'password' => $pass_new,
                    );
                    change_pass($change_pass, $id);
                    $error['change_pass'] = "Đổi mật khẩu thành công";
                } else {
                    $error['confirm-pass'] = "Mật khẩu mới không trùng khớp";
                }
            } else {
                $error['pass-old'] = "Mật khẩu cũ không đúng";
            }
        } else {
            $error['change_pass'] = "Đổi mật khẩu không thành công";
        }
    }
    load_view('changePass', $data);
}

function addAction()
{
    load_view('add');
}

function updateAction()
{
    $id = $_GET['id'];
    $user = get_user_by_id($id);

    // show_array($data);
    global $fullname, $username, $email, $phone, $error;
    if (isset($_POST['btn_update'])) {
        $error = array();
        #fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = 'Không được để trống fullname';
        } else {
            $fullname = $_POST['fullname'];
        }

        #email
        if (empty($_POST['email'])) {
            $error['email'] = 'Không được để trống email';
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = 'Email không đúng định dạng';
            } else {
                $email = $_POST['email'];
            }
        }

        #phone
        if (empty($_POST['phone'])) {
            $error['phone'] = 'Không được để trống phone';
        } else {
            if (!is_phone($_POST['phone'])) {
                $error['phone'] = 'Phone không đúng định dạng';
            } else {
                $phone = $_POST['phone'];
            }
        }

        if (empty($error)) {

            $update = array(
                'fullname' => $fullname,
                'email' => $email,
                'phone' => $phone,
            );
            update_account($update, $id);
            $error['account'] = "Đã update thành công";
        } else {
            $error['account'] = "Update không thành công";
            // show_array($error);
        }
    }
    $data = array(
        'id' => $user['id'],
        'fullname' => $user['fullname'],
        'username' => $user['username'],
        'email' => $user['email'],
        'phone' => $user['phone'],
        'address' => $user['address'],
    );
    load_view('update', $data);
}

// function indexAction()
// {
//     // echo "Hiển thị danh sách";
//     load('helper', 'format');
//     $list_user = get_list_user();
//     // show_array($list_user);
//     $data['list_user'] = $list_user;
//     load_view('index', $data);
// }

// function regAction()
// {
//     global $error, $username, $fullname, $email, $password;
//     load('lib', 'mail');

//     if (isset($_POST['btn_reg'])) {
//         $error = array();

//         #fullname
//         if (empty($_POST['fullname'])) {
//             $error['fullname'] = 'Không được để trống fullname';
//         } else {
//             $fullname = $_POST['fullname'];
//         }
//         #username
//         if (empty($_POST['username'])) {
//             $error['username'] = 'Không được để trống username';
//         } else {
//             if (!is_username($_POST['username'])) {
//                 $error['username'] = 'Username không đúng định dạng';
//             } else {
//                 $username = $_POST['username'];
//             }
//         }

//         #email
//         if (empty($_POST['email'])) {
//             $error['email'] = 'Không được để trống email';
//         } else {
//             if (!is_email($_POST['email'])) {
//                 $error['email'] = 'Email không đúng định dạng';
//             } else {
//                 $email = $_POST['email'];
//             }
//         }

//         #password
//         if (empty($_POST['password'])) {
//             $error['password'] = 'Không được để trống password';
//         } else {
//             if (!is_password($_POST['password'])) {
//                 $error['password'] = 'Password không đúng định dạng';
//             } else {
//                 $password = md5($_POST['password']);
//             }
//         }

//         if (empty($error)) {
//             if (!user_exits($username, $email)) {
//                 $active_token = md5($username . time());
//                 $data = array(
//                     'fullname' => $fullname,
//                     'username' => $username,
//                     'email' => $email,
//                     'password' => $password,
//                     'active_token' => $active_token,
//                 );
//                 add_user($data);
//                 $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
//                 $content = "Kích <a href='{$link_active}'>vào đây <a> để xác thực tài khoản";
//                 echo send_mail("levietkhanh99@gmail.com", $fullname, "Xac thuc tai khoan", $content);
//                 // redirect("?mod=users&controller=index&action=index");
//             } else {
//                 $error['account'] = "Username hoặc Email đã tồn tại";
//             }
//         }
//     }
//     load_view('reg');
// }



function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        #username
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống username';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }

        #password
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Password không đúng định dạng';
            } else {
                $password = md5($_POST['password']);
            }
        }

        if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;

                redirect("?mod=home&action=index");
            } else {
                $error['account'] = "Tài khoản không đúng hoặc không tồn tại";
            }
        }
    }
    load_view('login');
}

// function activeAction()
// {
//     $active_token = $_GET['active_token'];
//     $link_login = base_url("?mod=users&action=login");
//     if (check_active_token($active_token)) {
//         active_user($active_token);
//         echo "<p>Kích hoạt thành công. <a href='{$link_login}'>Đăng nhập</a></p>";
//     } else {
//         echo "Xác thực không hợp lệ hoặc đã kích hoạt <a href='{$link_login}'>Đăng nhập</a>";
//     }
// }

function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);

    redirect('?mod=users&action=login');
}

// function resetAction()
// {
//     load('lib', 'mail');
//     global $error, $password, $email;

//     if (isset($_POST['btn_reset'])) {
//         $error = array();
//         #email
//         if (empty($_POST['email'])) {
//             $error['email'] = 'Không được để trống email';
//         } else {
//             if (!is_email($_POST['email'])) {
//                 $error['email'] = 'Email không đúng định dạng';
//             } else {
//                 $email = $_POST['email'];
//             }
//         }

//         if (empty($error)) {
//             if (check_email($email)) {
//                 $reset_pass_token = md5($email . time());
//                 $data = array(
//                     'reset_pass_token' => $reset_pass_token,
//                 );
//                 update_reset_pass_token($data, $email);
//                 $link_reset = base_url("?mod=users&action=newPass&reset_pass_token={$reset_pass_token}");
//                 $content = "<p>Click <a href='{$link_reset}'>vào đây</a> để xác thực khôi phục mật khẩu</p>";
//                 echo send_mail("levietkhanh99@gmail.com", "", "Khôi phục mật khẩu", $content);
//                 $error['check_email'] = "Yêu cầu xác thức tại email của bạn";
//             } else {
//                 $error['check_email'] = "Email not exits";
//             }
//         }
//     }
//     load_view('reset');
// }

// function newPassAction()
// {
//     global $error, $password;
//     $reset_pass_token = $_GET['reset_pass_token'];
//     if (!empty($reset_pass_token)) {
//         if (isset($_POST['btn_new_pass'])) {
//             $error = array();
//             if (empty($_POST['password'])) {
//                 $error['password'] = "Không được để trống password";
//             } else {
//                 if (!is_password($_POST['password'])) {
//                     $error['password'] = "Password không đúng định dạng";
//                 } else {
//                     $password = md5($_POST['password']);
//                 }
//             }
//             if (empty($error)) {
//                 if (check_reset_pass_token($reset_pass_token)) {
//                     $data = array(
//                         'password' => $password,
//                     );
//                     update_pass($data, $reset_pass_token);
//                     $link_login = base_url("?mod=users&action=login");
//                     $error['check_reset_pass_token'] = "Chúc mừng bạn đã thiết lập mật khẩu mới thành công. Click <a href = '{$link_login}'>vào đây</a> để đăng nhập !";
//                 } else {
//                     $error['check_reset_pass_token'] = "Thiết lập mật khẩu mới không thành công";
//                 }
//             }
//         }
//         load_view('newPass');
//     }
// }


function login_1Action()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login_1'])) {
        $error = array();
        #username
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống username';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }

        #password
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Password không đúng định dạng';
            } else {
                $password = md5($_POST['password']);
            }
        }

        if(empty($error)){
            if(check_admin_1($username, $password)){
                $_SESSION['is_login_1'] = true;
                $_SESSION['username_1'] = $username;    

                redirect("?mod=users&action=reg_1");
            }
            else{
                $error['account'] = "Đăng nhập không hợp lệ";
            }
        }
    }   
    load_view('login_1');
}

function reg_1Action(){
    global $error, $username, $password, $email, $phone, $fullname;
    if(isset($_POST['btn_reg_1'])){
        $error = array();   

        #fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = 'Không được để trống fullname';
        } else {
            $fullname = $_POST['fullname'];
        }
        #username
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống username';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Username không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }

        #email
        if (empty($_POST['email'])) {
            $error['email'] = 'Không được để trống email';
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = 'Email không đúng định dạng';
            } else {
                $email = $_POST['email'];
            }
        }

        #phone
        if (empty($_POST['phone'])) {
            $error['phone'] = 'Không được để trống phone';
        } else {
            if (!is_phone($_POST['phone'])) {
                $error['phone'] = 'Phone không đúng định dạng';
            } else {
                $phone = $_POST['phone'];
            }
        }

        #password
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống password';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Password không đúng định dạng';
            } else {
                $password = md5($_POST['password']);
            }
        }

        if(empty($error)){
            if(!user_exits($username, $email)){
                $data = array(
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'fullname' =>$fullname,
                    'phone' => $phone,
                );

                add_user($data);
                $error['account'] = "Đã đăng ký thành công";
            }
            else{
                $error['account'] = "Email hoặc Username đã tồn tại";
            }
        }
        
    }
    load_view('reg_1');
}
<?php
class User
{
    private $username;
    private $password;
    private $db_username = "unitop";
    private $db_passwprd = "unitop!@#";

    public function setInfo($username, $password)
    {
        //Nhập giá trị cho $username, $password
        $this->username = $username;
        $this->password = $password;
    }

    public function checkLogin()
    {
        //Kiểm tra thông tin nhập vào với thông tin $db_username và $db_password
        /*
        Nếu khớp thông tin: Xuất lên màn hình "Xin chào: unitop";
        Ngược lại: Xuất lên màn hình "User không tồn tại trên hệ thống";
        */
        if (!empty($this->username) && !empty($this->password)) {
            if ($this->username == $this->db_username && $this->password == $this->db_passwprd) {
                echo "Xin chào: " . $this->username;
            } else {
                echo "Username không tồn tại trên hệ thống";
            }
        } else {
            echo "Username và Password trống";
        }
    }
}
$user = new User;
$user -> setInfo("", "");
$user->checkLogin();

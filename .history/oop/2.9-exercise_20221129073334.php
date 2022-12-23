<?php
//Bài tập User
class User
{
    private $username;
    private $password;
    private $db_username  = "unitop";
    private $db_password = "unitop!@#";
    public function setInfo($username, $password)
    {
        //Nhập giá trị cho $username , $password;
        $this->username = $username;
        $this->password = $password;
    }
    // public function getValue()
    // {
    //     return $this->username . " - " . $this->password;
    // }
    public function checkLogin()
    {
        //Kiểm tra thông tin nhập vào với thông tin $db_username, $db_password
        /**
         * Nếu khớp thông tin: Xuất lên màn hình "Xin chào: unitop";
         * Ngược lại: Xuất lên màn hình "User không tồn tại trên hệ thống";
         */
        if ($this->username == $this->db_username && $this->password == $this->db_password) {
            # code...
        } else {
            # code...
        }
    }
}
$u = new User;
$u->setInfo('daoanhtu', 'anhtu21102003');
echo $u->getValue();

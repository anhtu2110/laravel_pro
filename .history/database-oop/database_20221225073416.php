<?php
class DB
{
    public $conn;
    function connection()
    {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($db->connect_error) {
            die("Kết nối cơ sở dữ liệu không thành công" . $db->connect_error);
        }
        echo "Đã kết nối CSDL thành công";
    }
}

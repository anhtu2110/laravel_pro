<?php
class DB
{
    public $conn;
    function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->connect_error) {
            die("Kết nối cơ sở dữ liệu không thành công" . $this->connect_error);
        }
        echo "Đã kết nối CSDL thành công";
    }
}
$db = new DB;
$db->connection();

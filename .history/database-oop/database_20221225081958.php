<?php
require './config.php';
class DB
{
    public $conn;

    function __construct()
    {
        $this->connection();
    }
    function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Kết nối cơ sở dữ liệu không thành công" . $this->connect_error);
        }
        echo "Đã kết nối CSDL thành công";
    }

    function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$v}'";
        }
        $list_field = "(" . implode(' , ', $list_field) . ")";
        $list_value = "(" . implode(' , ', $list_value) . ")";
        $sql = "INSERT INTO `$table` $list_field VALUES $list_value";
        if ($this->conn->query($sql) == TRUE) {
            return $this->conn->insert_id;
        } else {
            echo "Lỗi: " . $this->conn > error;
        }
    }
}

$data = array(
    'username' => 'Đào Anh tú',
    'password' => '21102003Anhtu',
);
$a = new DB;
echo $a->insert('tbl_users', $data);

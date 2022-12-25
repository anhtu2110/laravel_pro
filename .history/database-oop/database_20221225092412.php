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
        echo "Đã kết nối CSDL thành công.<br>";
    }


    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }
    function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$this->escape_string($v)}'";
        }
        $list_field = "(" . implode(' , ', $list_field) . ")";
        $list_value = "(" . implode(' , ', $list_value) . ")";
        $sql = "INSERT INTO `{$table}` {$list_field} VALUES {$list_value}";
        if ($this->query($sql) == TRUE) {
            return $this->conn->insert_id;
            // Trả về id vừa insert
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    function get($table, $field = array(), $where = "")
    {
        if (empty($field)) {
            $field = "*";
        } else {
            foreach ($field as $key => $v) {
                $list_field[] = "`$v`";
            }
            $field = implode(' , ', $list_field);
        }
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "SELECT {$field} FROM `{$table}` {$where}";
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "Không tìm thấy bản ghi nào";
        }
    }
}

$data = array(
    'username' => 'Mai Hòa Hiệp',
    'password' => md5('hoahiep!@#'),
);
$a = new DB;
echo $a->insert('tbl_users', $data);
// $field = array('username', 'password');
$a->get('tbl_users', array('username', 'password'), '`id` = 1');

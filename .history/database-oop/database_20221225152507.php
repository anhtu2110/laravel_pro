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
            if (count($data) > 1) {
                return $data;
            } else {
                return $data[0];
            }
        } else {
            echo "Không tìm thấy bản ghi nào";
        }
    }

    function update($table, $data = array(), $where = "")
    {
        foreach ($data as $k => $v) {
            $list_set[] = "`{$k}` = '{$this->escape_string($v)}'";
        }
        $list_set = implode(' , ', $list_set);
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "UPDATE `{$table}` SET {$list_set} {$where}";

        if ($this->query($sql) == TRUE) {
            echo "Cập nhật thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    function delete($table, $where = "")
    {
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "DELETE FROM `{$table}` {$where}";
        if ($this->query($sql) == TRUE) {
            echo 1;
        } else {
            echo "Lỗi: " . $this->error;
        }
    }
}

$data = array(
    'username' => 'Đỗ Thế Hoàn',
    'password' => md5('thehoan!@#'),
);
$db = new DB;
// echo $a->insert('tbl_user', $data);
// $field = array('username', 'password');
// $data = $a->get('tbl_user', array('username', 'password'), 'id = 5');
// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
// }
// show_array($data);
// $set = array(
//     'username' => 'Trần Việt Hoàng',
//     'password' => md5('tranviethoang'),
// );
// echo $a->update('tbl_user', $set, 'id = 4');
$db->delete("tbl_user", "`id` = 1");

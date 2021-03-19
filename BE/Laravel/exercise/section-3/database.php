<?php
require "config.php";
require 'lib/data.php';
class DB
{
    public $conn;

    //Connection auto
    function __construct()
    {
        $this->conn = new mysqli(db_host, db_user, db_pass, db_name);
        if ($this->conn->connect_error) {
            echo "Lỗi: " . $this->conn->connect_error;
        } else {
            echo "Kết nối CSDL thành công <br>";
        }
    }
    //Escape_string
    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }

    //Run query
    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function error()
    {
        return $this->conn->error;
    }

    //Insert
    function insert($table, $data)
    {
        foreach ($data as $key => $value) {
            $list_column[] = "`{$key}`";
            $list_value[] = "'{$this->escape_string($value)}'";
        }
        $list_column = implode(',', $list_column);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_column}) VALUES ({$list_value})";
        if ($this->query($sql)) {
            echo "Đã thêm bản ghi thành công";
            return $this->conn->insert_id;
        } else {
            echo "Lỗi: " . $this->error();
        }
    }

    //Select
    function select($table, $column = array(), $where = '')
    {
        $column = !empty($column) ? implode(',', $column) : '*';
        $where = !empty($where) ? "WHERE {$where}" : '';
        $sql = "SELECT {$column} FROM {$table} {$where}";
        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1)
                return $data;
            return $data[0];
        } else {
            echo "Không tìm thấy bản ghi nào";
        }
    }

    //Delete
    function delete($table, $where = '')
    {
        $where = !empty($where) ? "WHERE {$where}" : '';
        $sql = "DELETE FROM {$table} {$where}";
        if ($this->query($sql)) {
            echo "Đã xóa thành công";
        } else {
            echo "Lỗi: " . $this->error();
        }
    }

    //Update
    function update($table, $data = array(), $where = '')
    {
        $where = !empty($where) ? "WHERE {$where}" : '';
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}` = '{$v}'";
        }
        $data_insert = implode(',', $data_insert);
        $sql = "UPDATE {$table} SET {$data_insert} {$where}";
        if($this -> query($sql)){
            echo "Đã cập nhật thành công";
        }
        else{
            echo "Lỗi: ".$this -> error();
        }
    }
}

$db = new DB;
$data = array(
    'username' => 'Hồ Ngọc Hà',
    // 'password' => md5('98765431')
);
// $db->insert('users', $data);
// $user = $db->select('users');
// show_array($user);

// $db -> delete('users', 'id = 2');

$db -> update('users', $data, 'id = 4');
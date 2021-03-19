<?php
require "config.php";
class DB
{
    public $conn;

    function __construct()
    {
        $this->connection(); //$this: trỏ đến class DB
    }
    //Connection
    function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->conn->connect_error) {
            die("Kết nối CSDL không thành công: " . $this->conn->connect_error);
        } else {
            echo "Đã kết nối CSDL thành công <br>";
        }
    }

    //Chuẩn hóa chuỗi truy vấn
    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }

    //Run query
    function  query($sql)
    {
        return $this->conn->query($sql);
    }

    //Insert
    /*
    $data = array(
        'column1' => 'value1',
        'column2' => 'value2',
        'column3' => 'value3',
        ...
    );
    */
    function insert($table, $data)
    {
        //INSERT INTO table_name(`column1`, `column2`, `column3`,...) VALUES ('value1', 'value2', 'value3',...)
        foreach ($data as $key => $value) {
            $list_field[] = "`{$key}`";
            $list_value[] = "'{$this->escape_string($value)}'";
        }

        $list_field = implode(',', $list_field);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";

        if ($this->query($sql) == TRUE) {
            return $this->conn->insert_id;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    //Select
    /*
    $column = array('column1','column2','column3',...)
    */
    function get($table, $column = array(), $where = '')
    {
        $column = !empty($column) ? implode(',', $column) : '*';
        $where = !empty($where) ? "WHERE {$where}" : '';

        $sql = "SELECT {$column} FROM {$table} {$where}";

        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1)
                return $data;
            return $data[0];
        } else {
            echo "Không thấy bản ghi nào";
        }
    }

    //Update
    //UPDATE table_name
    //SET column1 = value1, column2 = value2,...
    //WHERE condition
    function update($table, $data = array(), $where = "")
    {
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}` = '{$v}'";
        }
        $data_insert = implode(',', $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : '';

        $sql = "UPDATE {$table} SET {$data_insert} {$where}";

        if ($this->query($sql)) {
            echo "Đã update thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    //Delete
    //DELETE FROM tbl_name WHERE condition
    function delete($table, $where = '')
    {
        $where = !empty($where) ? "WHERE {$where}" : '';
        $sql = "DELETE FROM {$table} {$where}";
        if($this -> query($sql)){
            echo "Đã xóa bản ghi";
        }
        else{
            echo "Lỗi: ".$this -> conn ->error;
        }
    }
}

$db = new DB;
// $data = array(
//     'username' => 'LeVietKhanh123',
//     'password' => md5('1246789')
// );
// echo $db->insert('Users', $data);


// $user = $db->get('users', array());
// echo "<pre>";
// print_r($user);
// echo "</pre>";


// $data = array(
//     'username' => 'LeVietKhanh12356789',
// );
// $db->update('users', $data, 'id = 2');


$db -> delete('users', 'id = 1');
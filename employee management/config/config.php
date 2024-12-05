<?php

class Config{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "employee";
    private $connection;

    public function __construct(){
        $this->connection = mysqli_connect($this->localhost,$this->username,$this->password,$this->database);  
    }

    public function insertData($name,$email,$department_id)
    {
        $query = "INSERT INTO employees (name, email, department_id) VALUES ('$name','$email',$department_id)";
        $result = mysqli_query($this->connection,$query);
        return $result;
    }

    public function updateData($id,$name,$email,$department_id)    {
        $query = "UPDATE employees SET name='$name',email='$email',department_id=$department_id WHERE id =$id";
        $result = mysqli_query($this->connection,$query);
        return $result;
    }

    public function deleteData($id)
    {
        $query="DELETE FROM employees WHERE id=$id";
        $result = mysqli_query($this->connection,$query);
        return $result;
    }

    public function selectData()
    {
        $query = 'SELECT * FROM employees';
        $result = mysqli_query($this->connection,$query);
        return $result;
    }
}
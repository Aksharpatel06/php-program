<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    private $create;


    public function connectDatabase()
    {
        $this->create = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }

    function insertDatabase($name, $price, $category)
    {
        $query = "INSERT INTO product (name,prize,category) VALUES ('$name',$price,'$category')";
        $insertDate = mysqli_query($this->create, $query);

        if ($insertDate) {
            echo "<script>alert('Insert data Successfully!')</script>";
        }
    }

    function selectDatabase()
    {
        $query = "SELECT * FROM product";

        $selectData = mysqli_query($this->create, $query);

        return $selectData;
    }
}


?>
<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    private $create;


    public function __construct()
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

    function removeProduct($id)
    {
        $query = "DELETE FROM product WHERE id=$id";
        mysqli_query($this->create, $query);
    }



    function updateProduct($id, $name, $price, $category)
    {
        $query = "UPDATE product SET name='$name',prize=$price,category='$category' WHERE id=$id";
        mysqli_query($this->create, $query);
    }
}


?>

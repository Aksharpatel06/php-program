<?php

class Config{
    private $localhost="localhost";
    private $username="root";
    private $password="";
    private $database="student";
    private $connection;


    public function __construct(){
        $this->connection = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    }

    public function imageUpload($name,$path)
    {
        $query = "INSERT INTO gallery (name, path) VALUES ('$name', '$path')";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function fetchImages()
    {
        $query ="SELECT * FROM gallery";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function fetchImage($id)
    {
        $query = "SELECT * FROM gallery WHERE id=$id";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function deleteImage($id)
    {
        $data = $this->fetchImage($id);
        $image =  mysqli_fetch_assoc($data);
        $result = unlink("../".$image["path"]);
        if($result)
        {
            $query = "DELETE FROM gallery WHERE id=$id";
            mysqli_query($this->connection, $query);
        }
    }

}
<?php

class Config{

    private $localhost = "localhost";
    private $username ="root";
    private $password = "";
    private $database = "exam";
    private $connection;

    function __construct(){
        $this->connection = mysqli_connect($this->localhost, $this->username, $this->password,$this->database);
    }

    public function insertStudentData($name,$email,$phone)
    {
        $query = "INSERT INTO students (name,email,phone) VALUES ('$name','$email','$phone')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function insertCoursesData($name,$description)
    {
        $query = "INSERT INTO courses (name,description) VALUES ('$name','$description')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function insertEnrollmentsData($stId,$coId,$enrollment_date)
    {
        $query = "INSERT INTO enrollments (student_id,course_id,enrollment_date) VALUES ($stId,$coId,'$enrollment_date')";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    
    public function retrieveStudentData()
    {
        $query = "SELECT * FROM students";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function updateCoursesData($id,$name,$description)
    {
        $query = "UPDATE courses SET name='$name',description='$description' WHERE id=$id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

    public function deleteEnrollmentsData($id)
    {
        $query = "DELETE FROM enrollments WHERE id=$id";
        $res = mysqli_query($this->connection, $query);
        return $res;
    }

}
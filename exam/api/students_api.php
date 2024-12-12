<?php 

header("Access-Control-Allow-Methods:POST,GET");
header("Content-Type:application/json");

include("../config/config.php");

$student = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];

    if(!empty($name) && !empty($email) && !empty($phone))
    {
        $res = $student->insertStudentData($name,$email,$phone);   
        if($res)
        {
            $arr['msg']='Student Data Insertation Successfully !';
        }
        else{
            $arr['msg']='Student Data Inserted Failed !';
        }
    }else{
        $arr['error']='Value is empty !';
    }
}
else if($_SERVER["REQUEST_METHOD"]=='GET')
{
    $arr=[];
    $data =$student->retrieveStudentData();
    // $row1  =mysqli_fetch_assoc($data);
    // if(!empty($row1))
    // {
        while($row = mysqli_fetch_assoc($data))
        {
            array_push($arr,$row);
        }
    // }else{
    //     $arr['msg']='Student Data is empty !';
    // }
}
else{
    $arr['error']='Only Post Method is Allowed !';
}

echo json_encode($arr);
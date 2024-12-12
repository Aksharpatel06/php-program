<?php 

header("Access-Control-Allow-Methods:POST,PATCH,PUT");
header("Content-Type:application/json");

include("../config/config.php");

$courses = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $name =$_POST['name'];
    $description =$_POST['description'];

    if(!empty($name) && !empty($description))
    {
        $res = $courses->insertCoursesData($name,$description,);   
        if($res)
        {
            $arr['msg']='Courses Data Insertation Successfully !';
        }
        else{
            $arr['msg']='Courses Data Inserted Failed !';
        }
    }else{
        $arr['error']='Value is empty !';
    }
}else if($_SERVER["REQUEST_METHOD"]=='PATCH'||$_SERVER["REQUEST_METHOD"]=='PUT')
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);
    $id =$result['id'];
    $name =$result['name'];
    $description =$result['description'];

    if(!empty($id) &&!empty($name) && !empty($description))
    {
        $res = $courses->updateCoursesData($id,$name,$description,);   
        if($res)
        {
            $arr['msg']='Courses Data Updatetion Successfully !';
        }
        else{
            $arr['msg']='Courses Data Updated Failed !';
        }
    }else{
        $arr['error']='Value is empty !';
    }
}
else{
    $arr['error']='Only Post,PATCH,POST Method is Allowed !';
}

echo json_encode($arr);
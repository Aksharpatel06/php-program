<?php 

header("Access-Control-Allow-Methods:POST,DELETE");
header("Content-Type:application/json");

include("../config/config.php");

$enrollment = new Config();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $stId =$_POST['stId'];
    $coId =$_POST['coId'];
    $date =$_POST['date'];

    if(!empty($stId) && !empty($coId) && !empty($date))
    {
        $res = $enrollment->insertEnrollmentsData($stId,$coId,$date);   
        if($res)
        {
            $arr['msg']='Enrollment Data Insertation Successfully !';
        }
        else{
            $arr['msg']='Enrollment Data Inserted Failed !';
        }
    }else{
        $arr['error']='Value is empty !';
    }
}
else if($_SERVER["REQUEST_METHOD"]=="DELETE")
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);

    $id = $result["id"];

    if(!empty($id))
    {
        $res = $enrollment->deleteEnrollmentsData($id);   
        if($res)
        {
            $arr['msg']='Enrollment Data Deletetion Successfully !';
        }
        else{
            $arr['msg']='Enrollment Data Deleted Failed !';
        }
    }else{
        $arr['error']='Value is empty !';
    }
}
else{
    $arr['error']='Only Post Method is Allowed !';
}

echo json_encode($arr);
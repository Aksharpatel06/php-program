<?php


header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: application/json");

include("../config/config.php");

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD']=='PATCH') {

    $res = file_get_contents("php://input");
    parse_str($res,$data);
    $id = $data["id"];
    $name = $data["name"];
    $email = $data["email"];
    $department_id = $data["department_id"];
    $result = $c1->updateData($id,$name, $email, department_id: $department_id);

    if($result)
    {
        $arr['status']='Product Updated Successfully !';
    }
    else{
        $arr['error']= 'Product Updatation Failed !';
    }
} else {
    $arr['err'] = "Only PUT & PATCH method is allowed !!";
}



echo json_encode($arr);
?>
<?php


header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include("../config/config.php");

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department_id = $_POST['department_id'];

    $res = $c1->insertData($name, $email, department_id: $department_id);
    if ($res) {
        $arr['status'] = "Record insertaion successfully!!";
    } else {
        $arr['error'] = "Record insertaion failed!!";
    }
} else {
    $arr['err'] = "Only POST method is allowed !!";
}



echo json_encode($arr);
?>
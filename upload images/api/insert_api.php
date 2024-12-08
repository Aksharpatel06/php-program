<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include("../config/config.php");

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_FILES['images'])) {
        $images = $_FILES['images'];
        $name = $images['name'];
        $tmp_name = $images['tmp_name'];

        $id = uniqid('google_');
        $uploadPath = '../images/' . $id . '_' . $name;
        $uploadPathSHow = 'images/' . $id . '_' . $name;

        if (move_uploaded_file($tmp_name, $uploadPath)) {
            $res = $c1->imageUpload($name, $uploadPathSHow);

            if ($res) {
                $arr['status'] = "Record insertion successful!";
            } else {
                $arr['error'] = "Database insertion failed!";
            }
        } else {
            $arr["error"] = "Image upload failed!";
        }
    } else {
        $arr['error'] = "No file uploaded!";
    }
} else {
    $arr['error'] = "Only POST method is allowed!";
}

echo json_encode($arr);

?>

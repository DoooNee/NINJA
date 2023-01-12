<?php
require_once 'config.php';


$type = $_POST["type"];
$yourname = $_POST["yourname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$description = $_POST["description"];
$link_img = "";


    //email valid
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
    if (preg_match($regex, $email)) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime =  date('Y/m/d H:i:s');

        $query = "INSERT INTO feedback VALUE('','$type','$yourname','$email', '$subject', '$description', '$link_img', '$currentTime')";
        mysqli_query($conn, $query);

        $res = [
            "status" => "success",
            "msg" => "Gửi phản hồi thành công"
        ];

        
        echo json_encode($res);
        exit;

    }

    $res = [
        "status" => "failed",
        "msg" => "Vui lòng nhập đúng định dạng email"
    ];

    
    echo json_encode($res);
    exit;
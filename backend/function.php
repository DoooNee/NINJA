<?php 
$conn = mysqli_connect("localhost", "root", "", "ninja_db");

if($_POST["action"] == "insert"){
    insert();
}
function insert1(){
    global $conn;
    $email = $_POST["email"];
    echo $email;
}



function insert (){
    global $conn;
    $email = $_POST["email"];

// check validate
    if(empty($email)){
        $res = [
            "status" => "falied",
            "msg" => "Vui lòng nhập email"
        ];
        // echo json_encode($res);
        echo "failed";
        exit;
    }


// check exit email
    $query = "SELECT * FROM user_info WHERE email = '$email'"; 
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0){
            $res = [
                "status" => "failed",
                "msg" => "Email đã tồn tại"
            ];
            // echo json_encode($res);
            echo "failed";
            exit;
        }

//email valid
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
    if(preg_match($regex, $email)) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime =  date('Y/m/d H:i:s');
        
        $query = "INSERT INTO user_info VALUE('','$email','$currentTime')";
        mysqli_query($conn, $query);
        
        $res = [
            "status" => "success",
            "msg" => "Đăng ký mail thành công"
        ];
        // echo json_encode($res);
        echo "success";
        exit;
    }
// 
}



?>
<?php 
$conn = mysqli_connect("da001.vhost.vn", "gameninj_ninjaorigindb","gameninjaorigin.com", "gameninj_ninjaorigindb");

if($_POST["action"] == "insert"){
    insert();
}

if($_POST["action"] == "feedback"){
    feedback();
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
      
      
        $query = "SELECT * FROM dangkytruoc WHERE id = 1"; 
        $result = mysqli_query($conn, $query);
        $sodangkytruoc = array();
        while($row = mysqli_fetch_array($result, 1)){
            $sodangkytruoc[] = $row;
        }
        $sodangkyold = $sodangkytruoc[0]['dangkytruoc'];
        $sodangkynew = $sodangkyold + 1;
        $query = "UPDATE dangkytruoc
                    SET dangkytruoc = $sodangkynew
                    WHERE id = 1";
        mysqli_query($conn, $query);
      
      
      
        // echo json_encode($res);
        echo "success";
        exit;
    }
	echo "err";
    exit;
}


//form feedback
function feedback (){
    global $conn;
    $type = $_POST["type"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];


    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentTime =  date('Y/m/d H:i:s');


    // $query = "INSERT INTO feedback VALUE('','','','$email','$currentTime')";
    //     mysqli_query($conn, $query);

    $res = [
        "type" => $type,
        "username" => $username,
        "email" => $email,
        "subject" => $subject,
        "description" => $description
    ];
    
    $conn->close();
    
    echo json_encode($res);
    exit;

}


?>
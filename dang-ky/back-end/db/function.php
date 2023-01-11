<?php 
// $conn = mysqli_connect("localhost", "root", "", "m_thienha_db");

if($_POST["action"] == "submit"){
    submit();
}



function submit (){
    echo $_POST["action"];
    echo "test";
    exit;
    
//     global $conn;
//     $email = $_POST["email"];




// // check validate
//     if(empty($email)){
//         echo 1;
//         exit;
//     }

// //email valid
//     $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
//     if(preg_match($regex, $email)) {
//         date_default_timezone_set('Asia/Ho_Chi_Minh');
//         $currentTime =  date('Y/m/d H:i:s');
        
//         $query = "INSERT INTO user_info VALUE('','','','$email','$currentTime')";
//         mysqli_query($conn, $query);
        

//         echo 2;
//         exit;
//     }

//     echo 3;
//     exit;
// 
}




?>
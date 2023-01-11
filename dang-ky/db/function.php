<?php 
$conn = mysqli_connect("localhost", "root", "", "m_thienha_db");

if($_POST["action"] == "insert"){
    insert();
}

if($_POST["action"] == "ios"){
    click_ios();
}

if($_POST["action"] == "android"){
    click_android();
}


function insert (){
    global $conn;
    $email = $_POST["email"];




// check validate
    if(empty($email)){
        echo 1;
        exit;
    }

//email valid
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
    if(preg_match($regex, $email)) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime =  date('Y/m/d H:i:s');
        
        $query = "INSERT INTO user_info VALUE('','','','$email','$currentTime')";
        mysqli_query($conn, $query);
        

        echo 2;
        exit;
    }

    echo 3;
    exit;
// 
}


function click_ios(){
    global $conn;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime =  date('Y/m/d H:i:s');
      
		$sql = "INSERT INTO btn_ios ( created) VALUE ('$currentTime')";
		if ($conn->query($sql) === TRUE) {
			echo "ios";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

    exit;
}
function click_android(){
    global $conn;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentTime =  date('Y/m/d H:i:s');
      
		$sql = "INSERT INTO btn_android ( created) VALUE ('$currentTime')";
		if ($conn->query($sql) === TRUE) {
			echo "android";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

    exit;
}


?>
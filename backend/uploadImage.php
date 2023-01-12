<?php 
require_once 'config.php';
$rootpath = "http://ninja.local/backend/";


if(isset($_FILES['file']['name'])){
   
   /* Getting file name */
   $filename = $_FILES['file']['name'];

   /* Location */
   $location = "upload/".$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   /* Valid extensions */
   $valid_extensions = array("jpg","jpeg","png");

   $response = '';
   /* Check file extension */
   if(in_array(strtolower($imageFileType), $valid_extensions)) {
      /* Upload file */
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){    
         $response = $rootpath.$location;
         //chèn link ảnh vào db
         $query = "UPDATE feedback
                    SET link = '$response'
                    WHERE id = (select max(id) from feedback)";
        mysqli_query($conn, $query);


        $res = [
        "status" => "success",
        "msg" => "success" ];

    
    echo json_encode($res);
    exit;
      }

   }
}


$res = [
   "status" => "failed",
   "msg" => "Vui lòng chọn đúng định dạng file" ];
   echo json_encode($res);
exit;
?>
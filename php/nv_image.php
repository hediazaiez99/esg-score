<?php
include "database.php";
  { 
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);
	//$allowed_exs = array("jpg", "jpeg", "png"); 
	$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
	$img_upload_path = 'upload/'.$img_name;
	move_uploaded_file($tmp_name, $img_upload_path);
	$sql = "INSERT INTO image(title,description,image_url) VALUES('".$_POST['title']."','".$_POST['description']."','$new_img_name')";
		
    if (mysqli_query($mysqli, $sql) === TRUE) {
      $myJSON = json_encode("successfully");
    } else {
      $myArr = "Error: " . $sql . "<br>" . $mysqli->error;
      $myJSON = json_encode($myArr);           
    }
    echo $myJSON;        
  }
?>
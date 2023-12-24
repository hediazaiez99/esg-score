
<?php
 include "database.php";

  { 
    $sql = "INSERT INTO patient(PatientId,Name,Gender) 
            VALUES ('".$_POST['patient_id'].'","'.$_POST['patient_name'].'","'.$_POST['gender_all']."')";
    if ($mysqli->query($sql) === TRUE) {
      $myJSON = json_encode("successfully");
    } else {
      $myArr = "Error: " . $sql . "<br>" . $mysqli->error;
      $myJSON = json_encode($myArr);           
    }
    echo $myJSON;        
  }
?>
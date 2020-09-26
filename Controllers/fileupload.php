<?php
    if(isset($_POST['upload'])) {  
      $fileName     = $_FILES['meetingSchedule']['name'];
      $fileTempName = $_FILES['meetingSchedule']['tmp_name'];
      $fileType = $_FILES['meetingSchedule']['type'];
      $uploadPath = '../uploads/';

      if(move_uploaded_file($fileTempName, '../uploads/' . $fileName)){
          //echo "Uploaded successfully";
          header('location: ../Views/manipulateSchedule.html');
        } else{
		      echo "An unexpected error occured !";
	      }
    }
?>


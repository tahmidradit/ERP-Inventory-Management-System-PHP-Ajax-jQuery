<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 

    employeeProperties();

    if(empty($UserName) || empty($Name) || empty($Password)){
            echo "You can not leave any fields empty !";
        }
         else{
            $mysqlConnection = mySqlConnection();
            $query = "Insert into employees(UserName,Name,Password,Department,Designation) Values ('$UserName','$Name','$Password','$Department','$Designation') ";
            mysqli_query($mysqlConnection, $query);
        }
?>


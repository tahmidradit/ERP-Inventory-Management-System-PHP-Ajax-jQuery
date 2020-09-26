<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 

    employeeProperties();

    if(empty($Name) || empty($Department) || empty($Designation)){
            echo "You can't leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Insert into employees(Name,Department,Designation) Values ('$Name','$Department','$Designation') ";
            mysqli_query($mysqlConnection, $query);
        }
?>
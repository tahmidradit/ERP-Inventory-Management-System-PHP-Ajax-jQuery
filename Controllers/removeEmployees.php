<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 

    employeeProperties();

    if(empty($Id)){
            echo "You can't leave Id empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Delete from employees where Id = '$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
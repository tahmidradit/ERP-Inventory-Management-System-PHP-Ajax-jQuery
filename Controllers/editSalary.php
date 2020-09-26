<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/salariesProperties.php'); 

    salariesProperties();

    if(empty($Name) || empty($Date)){
            echo "You can't leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Update salary set Name = '$Name', Department = '$Department', Designation = '$Designation', Salary = '$Salary', Date = '$Date', PaymentStatus = '$PaymentStatus' where Id = '$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
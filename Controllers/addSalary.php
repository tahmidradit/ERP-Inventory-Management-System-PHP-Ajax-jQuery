<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/salariesProperties.php'); 

    salariesProperties();

    if(empty($Name) || empty($Date)){
            echo "You can't leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Insert into salary(Name,Department,Designation,Salary,Date,PaymentStatus) Values ('$Name','$Department','$Designation','$Salary','$Date','$PaymentStatus')";
            mysqli_query($mysqlConnection, $query);
        }
?>


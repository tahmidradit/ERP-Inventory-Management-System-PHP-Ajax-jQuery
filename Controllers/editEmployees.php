<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 

    employeeProperties();

    if(empty($Id) || empty($UserName) || empty($Name) || empty($Password) || empty($Department) || empty($Designation)){
            echo "You can not leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Update employees set UserName = '$UserName', Name = '$Name', Password = '$Password', Department = '$Department', Designation = '$Designation' where Id ='$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
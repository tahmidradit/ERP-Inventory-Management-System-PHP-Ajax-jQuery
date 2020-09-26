<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/salariesProperties.php'); 

    salariesProperties();

    if(empty($Id)){
            echo "You can't leave Id empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Delete from salary where Id = '$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
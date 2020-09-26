<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php'); 

    dealsProperties();

    if(empty($Id)){
            echo "You can't leave Id empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Delete from deals where Id = '$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
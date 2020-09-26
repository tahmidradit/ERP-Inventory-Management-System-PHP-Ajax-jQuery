<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php'); 

    dealsProperties();

    if(empty($Id) || empty($Name) || empty($Partner) || empty($Project) || empty($Date)){
            echo "You can't leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Update deals set Name = '$Name', Partner = '$Partner', Project = '$Project', Date = '$Date' where Id ='$Id' ";
            mysqli_query($mysqlConnection, $query);
        }
?>
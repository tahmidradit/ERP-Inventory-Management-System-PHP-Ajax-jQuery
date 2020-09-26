<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php'); 

    dealsProperties();

    if(empty($Name) || empty($Partner) || empty($Project) || empty($Date)){
            echo "You can't leave any fields empty";
        } else{
            $mysqlConnection = mySqlConnection();
            $query = "Insert into deals(Name,Partner,Project,Date) Values ('$Name', '$Partner','$Project', '$Date')";
            mysqli_query($mysqlConnection, $query);
        }
?>
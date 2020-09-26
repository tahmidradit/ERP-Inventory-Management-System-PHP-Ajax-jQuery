<?php
    require_once('../Models/dbConnection.php');

    function dealId(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from deals";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Id']."</option>";
        } 
    }
?>


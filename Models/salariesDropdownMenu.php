<?php
    require_once('../Models/dbConnection.php');

    function salaryId(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from salary";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Id']."</option>";
        } 
    }
?>
<?php
    require_once('../Models/dbConnection.php');
    
    function PendingApprovalsId(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from pendingapprovals";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Id']."</option>";
        } 
    }
?>


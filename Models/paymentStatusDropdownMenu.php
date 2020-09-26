<?php
    require_once('../Models/dbConnection.php');
    
    function PaymentStatus(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from salarypaymentstatus";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Name']."</option>";
        } 
    }
?>


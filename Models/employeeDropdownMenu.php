<?php
    require_once('../Models/dbConnection.php');
    
    function employeeDepartments(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from departments";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Name']."</option>";
        } 
    }

    function employeeDesignation(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from designation";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Name']."</option>";
        } 
    }

    function employeeId(){
        $mysqlConnection = mySqlConnection();
        $query = "select * from employees";
        $sqlExecution = mysqli_query($mysqlConnection, $query);
        while($rowsCount = mysqli_fetch_array($sqlExecution)){
            echo "<option>".$rowsCount['Id']."</option>";
        } 
    }
?>


<?php

    function employeeProperties() {
        global $Id, $UserName, $Name, $Password, $Department, $Designation;

        $Id             = $_POST['Id'];
        $UserName       = $_POST['UserName'];
        $Name           = $_POST['Name'];
        $Password       = $_POST['Password'];
        $Department     = $_POST['Department'];
        $Designation    = $_POST['Designation'];
        
    }
    
?>
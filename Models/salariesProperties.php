<?php

    function salariesProperties() {
        global $Id, $Name, $Department, $Designation, $Salary, $Date, $PaymentStatus ;

        $Id             = $_POST['Id'];
        $Name           = $_POST['Name'];
        $Department     = $_POST['Department'];
        $Designation    = $_POST['Designation'];
        $Salary         = $_POST['Salary'];
        $Date           = $_POST['Date'];
        $PaymentStatus  = $_POST['PaymentStatus'];
        
    }
    
?>
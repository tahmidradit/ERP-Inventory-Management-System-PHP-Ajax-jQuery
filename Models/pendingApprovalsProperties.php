<?php

    function pendingApprovalsProperties() {
        global $Id, $Name, $Balance, $Source ;

        $Id      = $_POST['Id'];
        $Name    = $_POST['Name'];
        $Balance = $_POST['Balance'];
        $Source  = $_POST['Source'];

    }
    
?>
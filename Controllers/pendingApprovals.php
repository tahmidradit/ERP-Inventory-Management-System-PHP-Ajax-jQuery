<?php
    require_once('../Models/dbConnection.php');
    

    

    // if(empty($UserName) || empty($Name) || empty($Password)){
    //         echo "You can not leave any fields empty !";
    //     }
    //      else{
    //         $mysqlConnection = mySqlConnection();
    //         $query = "Insert into employees(UserName,Name,Password,Department,Designation) Values ('$UserName','$Name','$Password','$Department','$Designation') ";
    //         mysqli_query($mysqlConnection, $query);
    //     }
    $statusApproved = "Approved";
    $statusRejected = "Rejected";
    $Id  = $_POST['Id'];
    $subQuery = "Select Amount from pendingapprovals where Id = '$Id' ";
    $mysqlConnection = mySqlConnection();
            $query = "Update balancesheet set Amount = '$subQuery'";
            $queryStatus = "Update pendingapprovals set Status = '$statusApproved' where  balancesheet.Account = pendingapprovals.Account, balancesheet.Id = pendingapprovals.Id  ";
            mysqli_query($mysqlConnection, $query);
            mysqli_query($mysqlConnection, $queryStatus);
            echo "Done !"
?>


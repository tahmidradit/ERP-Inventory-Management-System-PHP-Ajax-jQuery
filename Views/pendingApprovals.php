<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/pendingApprovalsProperties.php'); 
    require_once('../Models/pendingApprovalsDropdownMenu.php');
?>

<?php
    $mysqlConnection = mySqlConnection();
    $query = "select * from pendingapprovals";
    $sqlExecution=mysqli_query($mysqlConnection,$query);               
?>
<center>
<h2>Pending Approvals</h2>
<table id="pendingApprovalsListTable" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Account</th>
            <th>Amount USD$</th>
            <th>Source</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                echo "  
                    <tr>
                        <td>".$rowsCount['Id']."</td>
                        <td>".$rowsCount['Account']."</td>
                        <td>".$rowsCount['Amount']."</td>
                        <td>".$rowsCount['Source']."</td>
                        <td>".$rowsCount['Status']."</td>
                        <td>
                            <button onclick='Approve()'>Approve</button>
                            <button onclick='Reject()'>Reject</button>
                        </td>
                    </tr>";
            }       
        ?>
</table>
Select Id <select id="Department" name="Department">
                <?php PendingApprovalsId(); ?>
            </select>
</center>
<div id="load"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function Approve() {
        //$("#load").load("../Views/pendingApprovals.php");
        $(document).ready(function(){
            $.ajax({
                url: '../Controllers/pendingApprovals.php',
                type: 'POST',
                success:function(){
                    alert("Approved !");
                },
                error: function(){
                    alert("Error");
                }
            });
        });
    }
    function Reject() {
        $("#load").load("../Views/rejectPendingApprovals.php");
    }
</script>
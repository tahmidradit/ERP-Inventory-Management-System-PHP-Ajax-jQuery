<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/salariesProperties.php'); 
?>

<?php
    $mysqlConnection = mySqlConnection();
    $query = "select * from salary";
    $sqlExecution=mysqli_query($mysqlConnection,$query);               
?>

<table id="salaryListTable" border="1">
    <thead>
        <tr align="center">
            <th>Id</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Date</th>
            <th>PaymentStatus</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                echo "  
                    <tr>
                        <td>".$rowsCount['Id']."</td>
                        <td>".$rowsCount['Name']."</td>
                        <td>".$rowsCount['Department']."</td>
                        <td>".$rowsCount['Designation']."</td>
                        <td>".$rowsCount['Salary']."</td>
                        <td>".$rowsCount['Date']."</td>
                        <td>".$rowsCount['PaymentStatus']."</td>
                        <td>
                            <button onclick='editSalaries()'>Edit</button>
                            <button onclick='deleteSalaries()'>Remove</button>
                        </td>
                    </tr>";
            }       
        ?>
</table>
<div id="load"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function editSalaries() {
        $("#load").load("../Views/editSalaries.php");
    }
    function deleteSalaries() {
        $("#load").load("../Views/deleteSalaries.php");
    }
</script>

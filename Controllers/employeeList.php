<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 
?>

<?php
    $mysqlConnection = mySqlConnection();
    $query = "select * from employees ";
    $sqlExecution=mysqli_query($mysqlConnection,$query);               
?>

<table id="employeeListTable" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Password</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                echo "  
                    <tr>
                        <td>".$rowsCount['Id']."</td>
                        <td>".$rowsCount['UserName']."</td>
                        <td>".$rowsCount['Name']."</td>
                        <td>".$rowsCount['Password']."</td>
                        <td>".$rowsCount['Department']."</td>
                        <td>".$rowsCount['Designation']."</td>
                        <td>
                            <button onclick='editEmployees()'>Edit</button>
                            <button onclick='deleteEmployees()'>Remove</button>
                        </td>
                    </tr>";
            }       
        ?>
</table>
<div id="load"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function editEmployees() {
        $("#load").load("../Views/editEmployees.php");
    }
    function deleteEmployees() {
        $("#load").load("../Views/removeEmployees.php");
    }
</script>

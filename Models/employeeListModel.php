<?php
    require_once('../Models/dbConnection.php');
    function employeeList(){ 
?>
    <table id="employeesTableCalled" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Name</th>
                <th>Password</th>
                <th>Department</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysqlConnection = mySqlConnection();
                $query = "select * from employees";
                $sqlExecution=mysqli_query($mysqlConnection,$query);
                while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                    echo "  
                         <tr>
                            <td>".$rowsCount['Id']."</td>
                            <td>".$rowsCount['UserName']."</td>
                            <td>".$rowsCount['Name']."</td>
                            <td>".$rowsCount['Password']."</td>
                            <td>".$rowsCount['Department']."</td>
                            <td>".$rowsCount['Designation']."</td>
                        </tr>";
                }       
            ?>
    </table>
<?php
} 
?>    



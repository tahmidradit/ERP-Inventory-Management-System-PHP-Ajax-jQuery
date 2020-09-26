<?php
    require_once('../Models/dbConnection.php');
    function salaryList(){ 
?>
    <table id="salariesTableCalled" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Date</th>
                <th>PaymentStatus</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysqlConnection = mySqlConnection();
                $query = "select * from salary";
                $sqlExecution=mysqli_query($mysqlConnection,$query);
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
                        </tr>";
                }       
            ?>
    </table>
<?php
} 
?>    



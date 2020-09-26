<?php
    require_once('../Models/dbConnection.php');
    function dealsList(){ 
?>
    <table id="dealsTableCalled" border="1">
        <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Partner</th>
            <th>Project</th>
            <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysqlConnection = mySqlConnection();
                $query = "select * from deals";
                $sqlExecution=mysqli_query($mysqlConnection,$query);
                while ($rowsCount = mysqli_fetch_assoc($sqlExecution)) { 
                    echo "  
                         <tr>
                         <td>".$rowsCount['Id']."</td>
                         <td>".$rowsCount['Name']."</td>
                         <td>".$rowsCount['Partner']."</td>
                         <td>".$rowsCount['Project']."</td>
                         <td>".$rowsCount['Date']."</td>
                        </tr>";
                }       
            ?>
    </table>
<?php
} 
?>    



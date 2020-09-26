<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php'); 
?>

<?php
    $mysqlConnection = mySqlConnection();
    $query = "select * from deals";
    $sqlExecution=mysqli_query($mysqlConnection,$query);               
?>

<table id="dealsListTable" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Partner</th>
            <th>Project</th>
            <th>Date</th>
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
                        <td>".$rowsCount['Partner']."</td>
                        <td>".$rowsCount['Project']."</td>
                        <td>".$rowsCount['Date']."</td>
                        <td>
                            <button onclick='editDeals()'>Edit</button>
                            <button onclick='deleteDeals()'>Remove</button>
                        </td>
                    </tr>";
            }       
        ?>
</table>
<div id="load"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function editDeals() {
        $("#load").load("../Views/editDeals.php");
    }
    function deleteDeals() {
        $("#load").load("../Views/removeDeals.php");
    }
</script>

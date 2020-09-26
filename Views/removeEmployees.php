<h2 align="center">Remove Employee</h2>
<?php
    require_once('../Models/employeeDropdownMenu.php');
    require_once('../Models/employeeListModel.php');  
?>
<center>
<?php
    employeeList();               
?>
</center>
<center>
<div id="redirect"></div>
<fieldset id="fieldset" style="width: 20%;">
<legend>Remove Employees</legend>
<form id="form">
    <table>
        <tr>
            <td>Id</td>
            <td>
                <select id="Id" name="Id">
                    <?php employeeId(); ?>
                </select>
            </td>
        </tr>
    </table>
    <hr/>
    <input type="button" id="remove" value="Remove"/> <br /><br /> <div id="statusMessage"></div>
</form>
</fieldset>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/removeEmployees.js"></script>
<script>
    $("#Id").ajax.reload();
</script>
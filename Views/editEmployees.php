<h2 align="center">Edit Employee</h2>
<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/employeeProperties.php'); 
    require_once('../Models/employeeListModel.php');
    require_once('../Models/employeeDropdownMenu.php');
?>
<br>
<center>
<?php
    employeeList();
?>
</center>
<center>
<div id="redirect"></div>
<fieldset id="fieldset" style="width: 20%;">
<legend>Edit Employee</legend>
<form id="form">
    <table>
        <tr>
            <td>Select Id</td>
            <td>
                <select id="Id" name="Id">
                    <?php employeeId(); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="UserName" placeholder="Username" id="UserName"/>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="Name" placeholder="Name" id="Name"/>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="Password" placeholder="Password" id="Password"/>
            </td>
        </tr>
        <tr>
            <td>Department</td>
            <td>
                <select id="Department" name="Department">
                    <?php employeeDepartments(); ?>
                </select>
            </td> 
        </tr>
        <tr>
            <td>Designation</td>
            <td>
                <select id="Designation" name="Designation">
                    <?php employeeDesignation(); ?>
                </select>
            </td>
        </tr>
    </table>
    <hr/>
    <input type="button" id="edit" value="Save Changes"/> <br /><br /> <div id="statusMessage"></div>
</form>
</fieldset>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/editEmployees.js"></script>
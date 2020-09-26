<h2 align="center">Add Salary</h2>
<?php
    require_once('../Models/employeeDropdownMenu.php');
    require_once('../Models/paymentStatusDropdownMenu.php');
?>
<center>
<fieldset style="width: 20%;">
    <legend>Add Salary</legend>
    <form id="form">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="Name" placeholder="Name" id="Name" />
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
            <tr>
                <td>Salary</td>
                <td>
                    <input type="text" name="Salary" placeholder="Salary" id="Salary" />
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                    <input type="date" name="Date" placeholder="Date" id="Date" />
                </td>
            </tr>
            <tr>
                <td>PaymentStatus</td>
                <td>
                    <select id="PaymentStatus" name="PaymentStatus">
                        <?php PaymentStatus(); ?>
                    </select>
                </td>
            </tr>
        </table>
        <hr />
        <input type="button" id="add" value="Submit" /> <br /><br />
        <div id="statusMessage"></div>
    </form>
</fieldset>
</center>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/addSalary.js"></script>
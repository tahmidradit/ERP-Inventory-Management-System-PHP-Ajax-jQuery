<h2 align="center">Register Employee</h2>
<?php
    require_once('../Models/employeeDropdownMenu.php');
?>
<div style="background-color: #F1F1F1; width: 30%; height: 40%; border-radius: 15px;  ">
<center>
<fieldset style="width: 20%; ">
            <legend>Register New Employee</legend>
            <form id="form">
                <table>
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
                <input type="button" id="register" value="Submit"/> <br /><br /> <div id="statusMessage"></div>
            </form>
        </fieldset>
</center>
</div>


        
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../lib/js/registerEmployees.js"></script>
    
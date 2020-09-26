<h2 align="center">Edit Deal</h2>
<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php');
    require_once('../Models/dealsDropdownMenu.php');
    require_once('../Models/dealsListModel.php');
?>
<center>
<?php
    dealsList();  
?>
</center>
<br>
<center>
<div id="redirect"></div>
<fieldset id="fieldset" style="width: 20%;">
<legend>Edit Deals</legend>
<form id="form">
    <table>
        <tr>
            <td>Id</td>
            <td>
                <select id="Id" name="Id">
                    <?php dealId(); ?>
                </select>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="Name" placeholder="Name" id="Name"/>
            </td>
        </tr>
        <tr>
            <td>Partner</td>
            <td>
                <input type="text" name="Partner" placeholder="Partner" id="Partner"/>
            </td>
        </tr>
        <tr>
            <td>Project</td>
            <td>
                <input type="text" name="Project" placeholder="Project" id="Project"/>
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>
                <input type="date" name="Date" placeholder="Date" id="Date"/>
            </td>
        </tr>
    </table>
    <hr/>
    <input type="button" id="edit" value="Save Changes"/> <br /><br /> <div id="statusMessage"></div>
</form>
</fieldset>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/editDeals.js"></script>
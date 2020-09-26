<h2 align="center">Remove Deal</h2>
<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/dealsProperties.php');
    require_once('../Models/dealsDropdownMenu.php');
    require_once('../Models/dealsListModel.php'); 
?>
<br>
<center>
<?php
    dealsList(); 
?> 
</center>
<center>
<div id="redirect"></div>
<fieldset id="fieldset" style="width: 20%;">
<legend>Remove Deal</legend>
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
    </table>
    <hr/>
    <input type="button" id="remove" value="Remove"/> <br /><br /> <div id="statusMessage"></div>
</form>
</fieldset>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../lib/js/removeDeals.js"></script>
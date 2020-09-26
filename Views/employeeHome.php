<?php
session_start();
if(isset($_SESSION['loggedIn']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Home</title>
</head>
<body>
    <link rel="stylesheet" href="../lib/css/site.css">
    <header class="customHeader">
        <nav align="right">
            <img align="left" src="/ERP-Inventory-Management-System/lib/images/erpims.JPG" />
            <br>
            <a class="logout" href="../Controllers/logout.php">Logout</a>
        </nav>
    </header>
    <br><br><br>
    <center>
    <?php
        echo "<h2> Welcome ".$_SESSION['UserName']."!</h2>";
    ?> 
    </center>
</body>
</html>
<?php
}
else
{
include('login.php');
}
?>

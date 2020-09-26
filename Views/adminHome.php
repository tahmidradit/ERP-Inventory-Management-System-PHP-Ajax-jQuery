<?php
session_start();
?>
<?php
if(isset($_SESSION['loggedIn']))
{
?>
<html>

<head>
    <title>Admin Home</title>
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
    <br> <br> <br>
    <center>
    <?php
        echo "<h2> Welcome ".$_SESSION['UserName']."!</h2>";
    ?> 
    </center>
    <center>
        <nav>
            <button id="manipulateEmployees">Employees</button>
            <button id="manipulateDeals">Deals</button>
            <button id="manipulateSalaries">Salary</button>
            <button id="manipulateSchedule">Call Meeting</button>
            <button id="pendingApprovals">Pending Approvals</button>
        </nav>
    </center>
    <br>
    <!-- <center>
        <div id="load"></div>
    </center> -->
    <div id="load"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $("#manipulateEmployees").click(function () {
            $("#load").load("../Views/manipulateEmployees.html");
        });
        $("#manipulateDeals").click(function () {
            $("#load").load("../Views/manipulateDeals.html");
        });
        $("#manipulateSalaries").click(function () {
            $("#load").load("../Views/manipulateSalaries.html");
        });
        $("#manipulateSchedule").click(function () {
            $("#load").load("../Views/manipulateSchedule.html");
        });
        $("#pendingApprovals").click(function () {
            $("#load").load("../Views/pendingApprovals.php");
        });
    </script>
</body>

</html>

<?php
}
else
{
include('login.php');
}
?>
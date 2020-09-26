<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<link rel="stylesheet" href="../lib/css/site.css">
    <header class="customHeader">
        <nav align="right">
            <img align="left" src="/ERP-Inventory-Management-System/lib/images/erpims.JPG" />
            <br />
            <a style="text-decoration-line: inherit; color: white; margin: 3px;" href="homepage.html">Home</a> &nbsp;
            <a style="text-decoration-line: inherit; color: white; margin: 5px;" href="../Views/login.php">Login</a>
        </nav>
    </header>
    <br><br><br>
    <center>
    <fieldset>
    <legend>Login</legend>
    <form action="../Controllers/login.php" method="POST">
        <table border="1">
            <tbody>    
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="UserName"></td> 
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="Password" name="Password"></td>
                </tr>      
            </tbody>
        </table>
        <input type="hidden" name="Name">
        <input type="hidden" name="Department">
        <input type="hidden" name="Designation">
        <input type="hidden" name="Id">
        <button type="submit" name="submit">Login</button>
    </form> 
    <br />
	</fieldset>
    </center>
</body>
</html>
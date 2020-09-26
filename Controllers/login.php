<?php

	session_start();
	require_once('../Models/employeeProperties.php');
	require_once('../Models/dbConnection.php');
	
	
	if(isset($_POST['submit']))
	{

		employeeProperties();

		if(empty($UserName) || empty($Password))
		{
			echo "You can not leave any fields empty !";
		}
		else
		{
			$mysqlConnection = mySqlConnection();
			$query = "select * from employees where UserName='$UserName' and Password='$Password'  ";
			$queryAdmin = "select * from admin where UserName='$UserName' and Password='$Password'  ";
			$sqlExecution = mysqli_query($mysqlConnection, $query);
			$sqlExecutionAdmin = mysqli_query($mysqlConnection, $queryAdmin);
			$rowsCount = mysqli_num_rows($sqlExecution);
			$rowsCountAdmin = mysqli_num_rows($sqlExecutionAdmin);
			if($rowsCount == 1 )
			{
				$_SESSION['loggedIn']='1';
				$_SESSION['UserName'] = $UserName;
				include('ERP-Inventory-Management-System/Views/employeeHome.php');
				header('location: /ERP-Inventory-Management-System/Views/employeeHome.php');	
			}
			if($rowsCountAdmin == 1 )
			{
				$_SESSION['loggedIn']='1';
				$_SESSION['UserName'] = $UserName;
				include('ERP-Inventory-Management-System/Views/adminHome.php');
				header('location: /ERP-Inventory-Management-System/Views/adminHome.php');	
			}
			else
			{
				echo "Incorrect user id and password combination ! Please re-enter correct credentials.";
			}
		}
	}
	else
	{
		echo "ERROR";
		header('location: ERP-Inventory-Management-System/Views/login.php');
	}
?>
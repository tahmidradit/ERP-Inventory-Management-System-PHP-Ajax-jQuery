<?php
	session_start();
	session_destroy();
	header('location: /ERP-Inventory-Management-System/Views/homepage.html');
?>
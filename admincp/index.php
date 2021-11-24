<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=divece-width ,initial-scale=1">
	<meta charset="utf-8">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="modules/admincp.css">
</head>
<?php 
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('Location:login.php');

}

 ?>

<body>
	<h3 class="title_admin">Welcome to Admincp</h3>
	<div class="wapper">
<?php
        include('config/connect.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/main.php');
		include('modules/footer.php')


?>
	</div>
</body>
</html>
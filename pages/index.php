<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divece-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>


<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
	//echo "Kết nối thành công!";
}

?>

	<div class="wapper">
		<?php
		//include('admincp/config/connect.php');
		session_start();
	//	unset($_SESSION['dangki']);

		
		include('header.php');
		include('menu.php');
		include('main.php');
		include('footer.php')


		?>
		
	
	</div>

</body>
</html>
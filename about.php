<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Inneed- About US</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
</head>
<?php
	if(!empty($_SESSION['EMP_ID']))
	{ 
		include 'navbar.emp.loggedin.php';
	 }
	 elseif(!empty($_SESSION['SEEK_ID'])){
		include 'navbar.loggedin.php'; 
	 }
	else {	include 'navbar.php';  }
?>
<?php
include 'about_content.php';
include 'footer.php';
?>

<body>
</body>

</html>

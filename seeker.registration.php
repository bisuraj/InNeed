<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeker Registration</title>
</head>
<body>
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php';  }
	else {	include 'navbar.php';  }
?>
<?php
include  'seeker.reg.php';
?>
<?php
include 'footer.php';
?>
</body>
</html>
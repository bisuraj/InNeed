<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Inneed-Find Jobs</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
	<link rel="stylesheet" href="https://unpkg.com/handsfree@8.5.1/build/lib/assets/handsfree.css" />
  <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

</head>

<?php

include 'navbar.php';
include 'findjobs_content.php';
include 'footer.php';


?>
<script>
  const handsfree = new Handsfree({weboji: true})
     handsfree.enablePlugins('browser')
    handsfree.start()
  </>
<body>
</body>

</html>

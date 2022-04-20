<?php 	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
	<script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

</head>

<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php';  }
	else {	include 'navbar.php';  }
?>

<body>
<div class="section-tittle text-center">
                            <span>Applied Jobs</span>
                            
                        </div>
	<table class="table">		<thead class="thead-dark">
		<tr>
		  <th scope="col">Name</th>
		  <th scope="col">Profile</th>
		  <th scope="col">Key Skill</th>
		  <th scope="col">Location</th>
		  <th scope="col">CTC</th>
		  <th scope="col">More</th>
		</tr>
	  </thead>	
	
<tbody>
				
<?php include 'seeker.dashboard.fetch.php';	?>
				</tbody>
		
			</table>
			
</body>
<?php
include 'footer.php';
?>
</html>

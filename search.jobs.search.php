<?php 
	ob_start(); 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
</head>

<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php';  }
	else {	include 'navbar.php';  }
?>

<body>


        <div class="section-tittle text-center">
                            <span>Search Results</span>
                            
                        </div>
			<br /><br />
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
				<?php include 'searchjobs.fetch.php';?>
</tbody>
</table>
    <?php
?>
</body>
<?php
include 'footer.php';
?>
</html>

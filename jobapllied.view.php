<?php
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Job Information</title>
    <script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

	<style>
	.reg-form {
    width: 700px;
    margin: 30px auto;
}
.reg-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.reg-form h2 {
    margin: 0 0 15px;
}</style>
</head>
<?php

if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
{ include 'navbar.loggedin.php';  }
else {	include 'navbar.php';  }
?>
<?php 
	$conn = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($conn,'inneed');
	if($conn == false){ echo mysqli_errno($conn).":".mysqli_error($conn)."\n"; }
	if($db == false){ echo mysqli_errno($conn).":".mysqli_error($conn)."\n"; }
?>

<body>
	
	<div class="reg-form">

<?php 
	$id=$_REQUEST['id'];
	$query = "SELECT * FROM job_details WHERE id='$id'";
	$query_run = mysqli_query($conn,$query);
	
	while($query_result=mysqli_fetch_array($query_run))
	{
		echo '	<div><center><h2>'.$query_result['name'].' Walk-in Information </h2></center></div><br />';
		
			echo'	<div class="div_struct"><b>Company Name : </b>'.$query_result['name'].'</div><br />';
			echo'	<div class="div_struct"><b>Profile : </b>'.$query_result['profile'].'</div><br />';
			echo'	<div class="div_struct"><b>Key Skill Required : </b>'.$query_result['key_skill'].'</div><br />';
			echo'	<div class="div_struct"><b>Job Location : </b>'.$query_result['location'].'</div><br />';
			echo'	<div class="div_struct"><b>Cost To Company : </b>'.$query_result['ctc'].'</div><br />';				
	
			$experience = $query_result['exp_required'];
			$industry_type = $query_result['industry_type'];
			
			$query_exp = "SELECT experience FROM job_exp WHERE id='$experience'";
			$query_industry_type = "SELECT industry_type FROM job_industry_type WHERE id='$industry_type'";
			
			
			$query_run_exp = mysqli_query($conn,$query_exp);
			$query_run_industy_type = mysqli_query($conn,$query_industry_type);

			while ($row=mysqli_fetch_assoc($query_run_exp)){
				$query_exp_result= $row['experience'];
			   }

			   while ($row=mysqli_fetch_assoc($query_run_industy_type)){
				$query_industry_type_result= $row['industry_type'];
			   }
	
				
			echo'	<div class="div_struct"><b>Experience Need : </b>'.$query_exp_result.'</div><br />';
			echo'	<div class="div_struct"><b>Industry Type : </b>'.$query_industry_type_result.'</div><br />';
			echo'	<div class="div_struct"><b>Number of Vacancies : </b>'.$query_result['vacancies'].'</div><br />';
			echo'	<div class="div_struct"><b>Tantative Date of Joining : </b>'.$query_result['join_date'].'</div><br />';
			echo'    <div class="div_struct"><b>Job Description : </b>'.$query_result['jd'].'</div><br />';
			echo'	<div class="div_struct"><b>Organization Website : </b>'.$query_result['website'].'</div><br />';
			echo'	<div class="div_struct"><b>Last Date to Apply : </b>'.$query_result['expire_date'].'</div><br />';
			echo'	<div class="div_struct"><b>Job Post Date : </b>'.$query_result['post_date'].'</div><br />';	
    }
?>
	
	</div>
	<?php
include 'footer.php';

?>

</body>


</html>
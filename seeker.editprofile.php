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
	<title>Edit Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
	$conn = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($conn,'inneed');
	if($conn == false){ echo mysqli_errno($conn).":".mysql_error($conn)."\n"; }
	if($db == false){ echo mysqli_errno($conn).":".mysql_error($conn)."\n"; }
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
{ include 'navbar.loggedin.php';  }
else {	include 'navbar.php';  }
?>

<body>
	
	<div class="reg-form" id="body_struct">

<?php



	$id = $_SESSION['SEEK_ID']; 
	$id=$_REQUEST['id'];
	$query = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run = mysqli_query($conn,$query);
	
	while($query_result=mysqli_fetch_array($query_run))
	{
		

		$experience = $query_result['experience'];
		$industry_type = $query_result['industry_type'];
		$func_area = $query_result['func_area'];
		$highest_course = $query_result['highest_course'];
		
		$query_exp = "SELECT experience FROM job_exp WHERE id='$experience'";
		$query_industry_type = "SELECT industry_type FROM job_industry_type WHERE id='$industry_type'";
		$query_func_area = "SELECT functional_area FROM job_func_area WHERE id='$func_area'";
		$query_highest_course = "SELECT course FROM highest_course WHERE id='$highest_course'";
		
		$query_run_exp = mysqli_query($conn,$query_exp);
		$query_run_industy_type = mysqli_query($conn,$query_industry_type);
		$query_run_func_area = mysqli_query($conn,$query_func_area);
		$query_run_highest_course = mysqli_query($conn,$query_highest_course);
		
       while ($row=mysqli_fetch_assoc($query_run_industy_type)){
		$query_industry_type_result= $row['industry_type'];
	   }
	   while ($row=mysqli_fetch_assoc($query_run_exp)){
		$query_exp_result= $row['experience'];
	   }
	   while ($row=mysqli_fetch_assoc($query_run_func_area)){
		$query_func_area_result= $row['functional_area'];
	   }
	   while ($row=mysqli_fetch_assoc($query_run_highest_course)){
		$query_highest_course_result= $row['course'];
	   }

	   
		echo '<h1 class="text-center">Seeker</h2>
        <h2 class="text-center">Edit Your Profile</h2> ';
		
			
			echo '	<div class="div_struct"><b>Login Details</b></div><br />';
			echo'	<div class="div_struct"><b>Email Id : </b>'.$query_result['email_id'].'</div><br /><br />';
			
			echo '	<div class="div_struct"><b>Contact Details</b></div><br />';
			
			echo'	<div class="div_struct"><b>First Name : </b>'.$query_result['fname'].'</div><br />';
			echo'	<div class="div_struct"><b>Gender : </b>'.$query_result['gender'].'</div><br />';
			echo'	<div class="div_struct"><b>Mobile : </b>'.$query_result['mobile'].'</div><br />';
			echo'	<div class="div_struct"><b>Address : </b>'.$query_result['address'].'</div><br />';
			echo'	<div class="div_struct"><b>State : </b>'.$query_result['state'].'</div><br />';	
			echo'	<div class="div_struct"><b>Pin Code : </b>'.$query_result['pincode'].'</div><br /><br />';
			
			echo '	<div class="div_struct"><b>Employement Details</b></div><br />';
			echo'	<div class="div_struct"><b>Key Skills : </b>'.$query_result['key_skill'].'</div><br />';	
			echo '	<div class="text-center"><b>Education Details</b></div><br />';
			echo'	<div class="div_struct"><b>Highest Qualification : </b>'.$query_highest_course_result.'</div><br /><br />';
			echo'	<div class="div_struct"><b>HSC Board : </b>'.$query_result['hsc'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Percentage : </b>'.$query_result['hsc_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC School: </b>'.$query_result['hsc_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>SSC Board : </b>'.$query_result['ssc'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Percentage : </b>'.$query_result['ssc_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC School: </b>'.$query_result['ssc_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Bachelor Degree : </b>'.$query_result['bachelor'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Percentage : </b>'.$query_result['bachelor_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor College : </b>'.$query_result['bachelor_college'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Masters Degree : </b>'.$query_result['master'].'</div><br />';
			echo'	<div class="div_struct"><b>Masters Percentage : </b>'.$query_result['master_percentage'].'</div><br />';
			echo'	<div class="div_struct"><b>Masters College : </b>'.$query_result['master_college'].'</div>';
						echo '	<div class="text-center"><b>RESUME</b></div><br />';
			
			echo'	<div class="text-center"><b>Change your Password</b></div><br /><br />';
			

			echo'	<div class="div_struct"><b>Surname : </b>'.$query_result['lname'].'</div><br />';
			echo'	<div class="div_struct"><b>Marriage Status : </b>'.$query_result['marriage_status'].'</div><br />';
			echo'	<div class="div_struct"><b>Home Number : </b>'.$query_result['phone'].'</div><br />';
			echo'	<div class="div_struct"><b>City : </b>'.$query_result['city'].'</div><br />';
			echo'	<div class="div_struct"><b>Country : </b>'.$query_result['country'].'</div><br />';
			
			echo' 	<br /><br />';

			echo'	<div class="div_struct"><b>Experience : </b>'.$query_exp_result.'</div><br />';
			echo'	<div class="div_struct"><b>Functional Area : </b>'.$query_func_area_result.'</div><br />';
			
			echo' 	<br /><br />';
			echo'	<div class="text-center"><b>Others : </b>'.$query_result['others'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>HSC Specialisation : </b>'.$query_result['hsc_special'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Roll Number : </b>'.$query_result['hsc_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>HSC Passing Batch: </b>'.$query_result['hsc_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>SSC Specialisation : </b>'.$query_result['ssc_special'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Roll Number : </b>'.$query_result['ssc_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>SSC Passing Batch: </b>'.$query_result['ssc_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Bachelor Specialisation : </b>'.$query_result['bachelor_special'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Roll Number : </b>'.$query_result['bachelor_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>Bachelor Passing Batch: </b>'.$query_result['bachelor_batch'].'</div><br /><br />';
			echo'	<div class="div_struct"><b>Master Specialisation : </b>'.$query_result['master_special'].'</div><br />';
			echo'	<div class="div_struct"><b>Master Roll Number : </b>'.$query_result['master_rollno'].'</div><br />';
			echo'	<div class="div_struct"><b>Master Passing Batch: </b>'.$query_result['master_batch'].'</div>';
			
			echo' 	<br /><br /><br />';
			echo'	<div align="center">
			<a href="contact.review.php" class="btn btn-head" >Edit Contact Details</a>
		</div><br /><br />';
			echo'	<div align="center">
						<a href="resume.review.php" class="btn btn-head" >Upload Resume</a>
					</div><br /><br />';
			
		echo'	</div class="div_right">';		
	}

    include 'footer.php';
?>
	
	</div>
	
</body>

</html>
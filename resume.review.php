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
	<title>Resume Review</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
	<script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

if(!empty($_SESSION['EMP_ID']))
{ 
	include 'navbar.emp.loggedin.php';
 }
 elseif(!empty($_SESSION['SEEK_ID'])){
	include 'navbar.loggedin.php'; 
 }
else {	include 'navbar.php';  }
	$conn = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($conn,'inneed');
	if($conn == false){ echo mysqli_errno($conn).":".mysqli_error($conn)."\n"; }
	if($db == false){ echo mysqli_errno($conn).":".mysqli_error($conn)."\n"; }
?>

<body>
	<div class=" text-center">
		<b>Upload New Resume</b>
	</div>
	<div id="body_struct" style="margin-top: 1.5%">
<?php
	$id = $_SESSION['SEEK_ID'];
	$query = "SELECT resume FROM seeker_details WHERE id='$id'";
	$query_run = mysqli_query($conn,$query);
	
	while ($row=mysqli_fetch_assoc($query_run)){
		$file= $row['resume'];
	   }
	$handle = fopen($file, 'r');
	$read = file($file);
	foreach($read as $fname)
	{
		echo $fname.'<br />';
	}
	#fclose($handle);
	
?>

	</div id="body_struct">
    <div class="reg-form">
	<div class="text-center">
		<form action="resume.review.php" method="post" enctype="multipart/form-data">
			<input type="file" class="form-control" name="new_resume" value="file" /><br>
			<input type="submit" class="btn head-btn1" name="upload_new_resume" value="Save" >
		</form>
	</div>
</div>
	<?php
	include 'footer.php';
	?>
	
</body>

<?php 
	if(isset($_POST['upload_new_resume']))
	{
		if(isset($_FILES['new_resume']))
		{
			if(!empty($_FILES['new_resume']))
			{
				$filename = $_FILES['new_resume']['name'];
				$new_filename = $db_id.'_'.$filename;
				$folder = 'upload/seeker_resume/';
				$format = substr($filename, strpos($filename, '.') + 1);
					
				$upload_cv = $folder.$db_id.'_'.$filename;
					
				if($format == doc || $format == docx)
				{
					move_uploaded_file($_FILES['new_resume']['tmp_name'], $folder.$new_filename);
					$query = "UPDATE seeker_details SET resume='$upload_cv' WHERE id='$id'";
					$query_run = mysqli_query($conn,$query);
				}
				
				else
				{ 
					echo '<script> alert("File not supported. Select only document file ie .doc or .docx"); </script>';
				}	
			}
		}
	}
	
?>

</html>

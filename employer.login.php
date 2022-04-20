<?php
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	
	require 'db_connect.php';
	
	if(empty($_SESSION['EMP_ID']) || empty($_SESSION['SEEK_ID']))
	{
		if(empty($_SESSION['EMP_ID']) || empty($_SESSION['SEEK_ID']))
		{
			if(isset($_POST['emp_email_login']) && isset($_POST['emp_pass_login']))
			{
				$emp_login_email = strtolower($_POST['emp_email_login']);
				$emp_login_pass =  ($_POST['emp_pass_login']);
				
				if(!empty($_POST['emp_email_login']) && !empty($_POST['emp_pass_login']))
				{
					$query="SELECT emp_id FROM emp_details WHERE email_id='$emp_login_email' AND password='$emp_login_pass'";
					$query_run = mysqli_query($conn,$query);
					if($query_run)
					{
						$query_num_rows = mysqli_num_rows($query_run);
						if($query_num_rows == 0)
						{
							$_SESSION['flag_emp_logincheck'] = 2;
							header('Location: employer_login.php');
						}
						
						else if($query_num_rows == 1)
						{
						    $_SESSION['EMP_ID'] =$query_run;
							$_SESSION['flag_emp_logincheck'] = 1;						
							echo '<script> window.location.href = "index.php" ; </script>';
						}
					}
				}
			}
		}
	}
	else
	{
		$_SESSION['emp_loggedin'] = 1;
		header('Location: employer.login.php');
	}
?>
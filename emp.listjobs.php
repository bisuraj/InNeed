<?php
    ob_start();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    require 'db_connect.php';
	$flag = 0;
	$job_check = strtolower($_POST['job_name']);
	
	$query_select = "SELECT profile FROM job_details WHERE profile='$job_check'";
	if($query_select_run = $conn->query($query_select))
	{
		$query_select_num = mysqli_num_rows($query_select_run);
		if($query_select_num == 0)
		{
			$flag = 1;
		}
		
		else if($query_select_num >= 1)
		{
			$flag = 0;
		}
	}
    

    if($flag=1)
	{
		//Checking whether value of textbox does exist or not.
		if(isset($_POST['company_name']) && isset($_POST['job_name']) && isset($_POST['key_skill']) && isset($_POST['location']) && isset($_POST['ctc']) && 
			isset($_POST['exp_required']) && isset($_POST['jd']) && isset($_POST['Date']) && isset($_POST['emp_industry_type']) && 
			isset($_POST['vaccancies']) && isset($_POST['expiry_date']) && isset($_POST['website']))
		{
				//Initializing variables with the user inputs.
				$post_date=date('Y-m-d');
				$company_name=($_POST['company_name']);
                $job_name = ($_POST['job_name']);
				$key_skill =  ($_POST['key_skill']);
				$location = $_POST['location'];
				$ctc = $_POST['ctc'];
				$exp_required = $_POST['exp_required'];
				$jd = $_POST['jd'];
				$date = $_POST['Date'];
				$emp_industry_type = $_POST['emp_industry_type'];
				$vaccancies = $_POST['vaccancies'];
				$expiry_date = $_POST['expiry_date'];
				$website = strtolower($_POST['website']);
				
				//Checking whether value is empty or not in given textbox or not.
			//	if(!empty($_POST['company_name']) && !empty($_POST['job_name']) && !empty($_POST['key_skill']) && !empty($_POST['location']) && !empty($_POST['ctc']) 
			///		&& !empty($_POST['exp_required']) && !empty($_POST['jd']) 
			//		&& !empty($_POST['vaccancies'])  && !empty($_POST['website']))
				//{
					//Query which is going to execute to for database manipulation.
					$query = "INSERT INTO job_details VALUES ('','$company_name' ,'$job_name', '$key_skill', '$location', '$ctc', '$exp_required', '$jd','$date','$emp_industry_type','', 
								'$vaccancies', '$post_date',  '$expiry_date', '$website')";
					
					$query_run = mysqli_query($conn,$query);
					echo '<script> alert("Listed the Jobs"); </script>';
					echo '<script> window.location.href = "emp_listjobs.php"; </script>';
			//	}
			//	else
			//	{
			//		echo '<script> alert("Fill all required fields first"); </script>';
			//		echo '<script> window.location.href = "emp_listjobs.php"; </script>';
			//	}
		}

        else 
		{
			header('Location: emp_listjobs.php');
		}
	}
	
	else 
	{ 
		echo '<script> alert("You had already listed The job"); </script>';
	}
?>
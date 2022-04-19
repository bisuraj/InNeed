<?php 
	require 'db_connect.php';
	if(isset($_POST['search_keyword']) || isset($_POST['search_location']) || isset($_POST['search_salary_ddl']) || 
		isset($_POST['search_exp']) || isset($_POST['search_func_area_ddl']) || isset($_POST['search_industry_type_ddl']))
	{
	if(empty($_POST['search_keyword']) &&  empty($_POST['search_location']) && empty($_POST['search_salary_ddl']) && 
			empty($_POST['search_exp']) && ($_POST['search_func_area_ddl'] == -1) && ($_POST['search_industry_type_ddl'] == -1))
		{
			echo '<script> alert("Enter atleast any field for desire search"); </script>';
			echo '<script> window.location.href = "search.jobs.php"; </script>';
		}
			
		else if(!empty($_POST['search_keyword']) || !empty($_POST['search_location']) || !empty($_POST['search_salary_ddl']) || 
			!empty($_POST['search_exp']) || !empty($_POST['search_func_area_ddl']) || !empty($_POST['search_industry_type_ddl']))
		{
			//Initializing variables with the user inputs.
			$key = $_POST['search_keyword'];
			$location = $_POST['search_location'];
			$salary = $_POST['search_salary_ddl'] * 100000;
			$experience = $_POST['search_exp'];
			$func_area = $_POST['search_func_area_ddl'];
			

							
			//Query which is going to execute to for database manipulation.
			$query = "SELECT * FROM job_details WHERE key_skill LIKE '%$key%' OR location='$location' OR
						ctc='$salary' OR func_area='$func_area'";
			$query_search = mysqli_query($conn,$query);	
			$query_rows_num = mysqli_num_rows($query_search);
			if($query_rows_num > 0)
			{		
				
				while($query_search_result = mysqli_fetch_array($query_search))
				{	
					echo '<tr>
					<td>'.$query_search_result['name'].'</td>
					<td>'.$query_search_result['profile'].'</td>
					<td>'.$query_search_result['key_skill'].'</td>
					<td>'.$query_search_result['location'].'</td>
					<td>'.$query_search_result['ctc'].'</td>
					<td>
					<a class= "btn btn-primary btn-sm"  href= "search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
					.$query_search_result['id']."', '_window');".'return false;"> Apply </a> 
					</td>
				</tr>';
	        }
				}
			
			else
			{	echo '<script> alert("No result Found. Search with different keywords"); </script>';	}
		}
	}
?>

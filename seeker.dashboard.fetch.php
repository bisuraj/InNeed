<?php 
	require 'db_connect.php';
	$current_date = date('Y-m-d');

	$id = $_SESSION['SEEK_ID'];
	$query_seeker = "SELECT * FROM seeker_details WHERE id='$id'";
	$query_run_seeker = mysqli_query($conn,$query_seeker);
	
	if(!empty($_SESSION['SEEK_ID']))
	{
		while($query_run_result_seeker = mysqli_fetch_array($query_run_seeker))
		{
			$fname = $query_run_result_seeker['fname'];
			$lname = $query_run_result_seeker['lname'];
			$folder = 'upload\\seeker_job_applied\\';
			$filename = $folder.$id.'_'.$fname." ".$lname.".txt";
							
			if(file_exists($filename))
			{
				$applied_file = fopen($filename, 'r');
				
				while(!feof($applied_file))
				{	
					$applied_id = fgetc($applied_file);	
					$query_jobs = "SELECT * FROM job_details WHERE id='$applied_id'";
					$query_run_jobs = mysqli_query($conn,$query_jobs);
								
					while($query_jobs_result = mysqli_fetch_array($query_run_jobs))
					{	
						echo '<tr>
						<td>'.$query_jobs_result['name'].'</td>
						<td>'.$query_jobs_result['profile'].'</td>
						<td>'.$query_jobs_result['key_skill'].'</td>
						<td>'.$query_jobs_result['location'].'</td>
						<td>'.$query_jobs_result['ctc'].'</td>
						<td>
						<a class= "btn btn-primary btn-sm"  href= "search.jobs.view.php" onClick="MyWindow=window.open('."'jobapllied.view.php?id="
						.$query_jobs_result['id']."', '_window');".'return false;"> Details </a> 
						</td>
					</tr>';
					}
				}
			}
			
			else
			{
				echo '<h1> Not Applied</h1>';
			}
		}
	}	
?>

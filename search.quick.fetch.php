<?php 
	require 'db_connect.php';
	if(isset($_POST['quick_key']) && isset($_POST['quick_location']))
	{
		$key = $_POST['quick_key'];
		$location = $_POST['quick_location'];
		if(!empty($key))
		{
			$query = "SELECT * FROM job_details WHERE location= '$location' AND key_skill LIKE '%$key%'";
			$query_quick = mysqli_query($conn,$query);
			$query_rows_num = mysqli_num_rows($query_quick);
			if($query_rows_num > 0)
			{		
				while($query_quick_result = mysqli_fetch_array($query_quick))
				{	
					echo '<tr>
							<td>'.$query_quick_result['name'].'</td>
							<td>'.$query_quick_result['profile'].'</td>
							<td>'.$query_quick_result['key_skill'].'</td>
							<td>'.$query_quick_result['location'].'</td>
							<td>'.$query_quick_result['ctc'].'</td>
							<td>
							<a class= "btn btn-primary btn-sm"  href= "search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
							.$query_quick_result['id']."', '_window');".'return false;"> Apply </a> 
							</td>
						</tr>';
				}
			}
			else
			{
				echo '<script> alert("No result Found. Search with different keywords"); </script>';
			}
		}
		
		else if(empty($key) || empty($location))
		{
			header('Location: index.php');
		}
	}
?>

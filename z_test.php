<<?php
	ob_start();
	session_start();
	
	require 'db_connect.php';
	
					$query="SELECT emp_id FROM emp_details WHERE email_id='ceo@microsoft.com' AND password='hello123!@#'";

                    if ($query1=mysqli_query($conn, $query)) {
                        $query_num_rows = mysqli_num_rows($query1);
                           echo "ID and Password Verified: ".$query_num_rows ;
} else {
 echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
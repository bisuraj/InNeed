     <?php
	$conn_error = 'Error in connecting to server';
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'inneed';
	


    $conn= new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
	//Code for sever connection and database connection.
	if($conn->connect_error)
	{
		die($conn_error);
		
	}
?>
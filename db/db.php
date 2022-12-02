<?php 
	
$servername = 'localhost';
$dbuser     = 'root';
$dbpass 	= '';
$database 	= 'preneur';


	function getConnection()
	{

		global $servername;
		global $dbuser;
		global $dbpass;
		global $database;

		$connection = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $connection;
	}


	/*$connection = mysqli_connect('localhost', 'root', '', 'worker');

	$sql	= "select * from users";
	$result = mysqli_query($connection, $sql);
	$data 	= mysqli_fetch_assoc($result);
	mysqli_close($connection);*/


 ?>
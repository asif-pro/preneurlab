<?php 
require ('../db/forgrtPass.php');

if (isset($_POST['sent'])){

	$uID 	=   $_POST['uID'];

	$iD = [
		'wid'    => $uID,
	    'userID' => "gs"

	];
	$result = insertID ($iD);

	if ($result){

	header('location: ../view/login.php?msg=sd');

	}
	
	else{echo "error";}

}


 ?>
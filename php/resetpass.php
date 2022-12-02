<?php 
session_start();
require ('../db/resetpass.php');


	$oldPass 		 =  $_POST['opass'];
	$newPass 		 =  $_POST['npass'];
	$confirmNewPass  =  $_POST['cnpass'];

	$userid = $_SESSION['userID'];

			$pass = [
						'oldPass'=> $oldPass,
						'newPass'=> $newPass,
						'u_id'   => $userid
					];

					if ($newPass == $confirmNewPass) {
						$oldpassword = getPass($pass);
					}
					else
						{header('location: ../view/resetpass.php?msg=ddm');}

					
					

			

	


 ?>
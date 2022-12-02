<?php
	
	session_start();
	require ('../db/db.php');
	require ('../db/userCRUD.php');

	if (isset($_POST['lbtn'])){

		$userID = $_POST['userID'];
		$password = $_POST['password'];

		if (empty($userID) || empty($password) ) {
			header('location: ../view/login.php?msg=null');
		}
		else{

			$user = [
						'userID'=> $userID,
						'password'=> $password
					];

			$statuss = validate ($user);

			
			
			if ($statuss) {

				//$status = $data ['status'];

				if ($_SESSION ['userStatus'] == "active") {
					$_SESSION ['flag'] = "true";
					$_SESSION ['userID'] = $userID;

				header('location: ../view/home.php');
				}
				else{header('location: ../view/login.php?msg=deactive');}


				

			}
			else{
				header('location: ../view/login.php?msg=null2');
			}
		}

		

	}
	else{echo "invalid ID/password";}
?>
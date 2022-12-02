<?php
session_start();
require ('../db/userCRUD.php');


$dirpath = "../assets/".$_FILES['propic']['name'];

$name 		 = $_POST['fname'];
$designation = $_POST['designation'];
$address 	 = $_POST['address'];
$phone		 = $_POST['phone'];
$email		 = $_POST['email'];
$userID		 = $_SESSION ['userID'];


			$user = [
						'name'        => $name,
						'designation' => $designation,
						'address'     => $address,
						'phone' 	  => $phone,
						'email'  	  => $email,
						'u_id'		  => $userID,
						'propic' 	  => $dirpath
					];

			if (empty($name) || empty($designation) || empty($address) || empty($phone) || empty($email) ) {

				header('location: ../view/user_account_setting.php?msg=emf');
						

					}
					else{
						move_uploaded_file($_FILES['propic']['tmp_name'], $dirpath);
						updateProfile ($user);
						}

			


	

 ?>
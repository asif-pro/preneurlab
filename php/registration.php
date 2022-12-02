<?php


require ('../db/userCRUD.php');

				if (isset($_POST['rbtn'])){

					$dirpath = "../assets/".$_FILES['profilepic']['name'];

					if (move_uploaded_file($_FILES['profilepic']['tmp_name'], $dirpath)) {

					$username 	 =   trim($_POST['username']);
					$userID 	 =   $_POST['userID'];
					$password 	 =   $_POST['password'];
					$designation =   trim($_POST['designation']);
					$gender      =   $_POST['gender'];
					$dob         =   trim($_POST['dob']);
					$number      =  trim( $_POST['number']);
					$email       =  trim( $_POST['email']);
					$address     =   trim($_POST['address']);
					$proPic      =   $dirpath;
					$userStatus  =   "active";

					$user = [

						'username'   => $username,
						'userID'     => $userID,
						'password'   => $password,
						'designation'=> $designation,
						'gender'     => $gender,
						'dob'        => $dob,
						'number'     => $number,
						'email'      => $email,
						'address'    => $address,
						'proPic'     => $proPic,
						'status'     => $userStatus
					];

if(!empty($username) && !empty($designation) && !empty($gender) && !empty($dob) && !empty($number) && !empty($email) && !empty($address) && isset($proPic) ){
	$result = insertUser ($user);

	if ($result){

		header('location: ../view/login.php?msg=dn');

	}
	}
	else{header('location: ../SignUp/index.php?msg=emptF');}
}
else{
	header('location: ../SignUp/index.php?msg=emptF');
}
	
	
	

	

}
					

	

 ?>
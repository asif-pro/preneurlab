<?php 

	require_once('db.php');

	function validate ($user){

			$connection =  getConnection();
			$sql		=  "select * from login where u_id='{$user['userID']}' and password='{$user['password']}'";
			$result 	=  mysqli_query($connection, $sql);
			$data 		=  mysqli_fetch_assoc($result);

			if($data!=null && count($data)>0){

				$_SESSION ['userStatus'] = $data ['status'];

				return true;
			}
			else{

				return false;
			}
	}

	function insertUser ($user){

			$connection =  getConnection();
			$sql		=  "insert into user values ('','{$user['userID']}','{$user['username']}','{$user['designation']}','{$user['gender']}','{$user['dob']}','{$user['number']}','{$user['email']}','{$user['address']}','{$user['proPic']}')";
			
			$result 	=  mysqli_query($connection, $sql);
			
			$sql2		=  "insert into login values ('','{$user['userID']}','{$user['password']}','{$user['status']}')";
			$result2 	=  mysqli_query($connection, $sql2);

			if($result){

				if ($result2) {
					return true;
				}
				else{
					return false;
				}
				
			}
			else{
				return false;
			}
	}


	function updateProfile ($user){

		$conn =  getConnection();
		$sql2 =  "UPDATE user SET u_name = '{$user['name']}', u_designation = '{$user['designation']}', u_number = '{$user['phone']}', u_email = '{$user['email']}', u_address = '{$user['address']}', u_propic = '{$user['propic']}' WHERE u_id='{$user['u_id']}'";
					$result 	=  mysqli_query($conn, $sql2);

					header('location: ../view/user_profile.php');

					
	}


 ?>
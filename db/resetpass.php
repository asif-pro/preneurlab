<?php 

require_once('db.php');

function getPass($pass)
{

			$connection =  getConnection();
			$sql		=  "select * from login where u_id='{$pass['u_id']}'";
			$result 	=  mysqli_query($connection, $sql);
			$data 		=  mysqli_fetch_assoc($result);

			if($data!=null && count($data)>0){

				if($data['password'] == $pass['oldPass']){

				$conn       =  getConnection();
				$sql2 =  "UPDATE login SET password = '{$pass['newPass']}' WHERE u_id='{$pass['u_id']}'";
					$result 	=  mysqli_query($conn, $sql2);

					header('location: ../view/resetpass.php?msg=opdm');

				}
				else{header('location: ../view/resetpass.php?msg=wp');}
			}
			else{

				return false;
			}
	
}



 ?>
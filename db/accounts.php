<?php 

	require_once('db.php');

	function getAccounts (){

		$uid = $_SESSION ['userID'];

		    $conn       =  getConnection();
		    $sql        =  "select * from accounts where u_id= '$uid'";
		    $result     =  mysqli_query($conn, $sql);

		   $accountList = [];

		   while($data = mysqli_fetch_assoc($result)){

		   	array_push($accountList, $data);

		   }

		   return $accountList;

	}

	function getTheAccount ($accountID){

		$aid = $accountID;

		    $conn       =  getConnection();
		    $sql        =  "select * from accounts where a_id= '$aid'";
		    $result     =  mysqli_query($conn, $sql);

		   $accountList = [];

		   while($data = mysqli_fetch_assoc($result)){

		   	array_push($accountList, $data);

		   }

		   return $accountList;

	}
	function updateAccount ($updatedAccount){

		$conn =  getConnection();
		$sql2 =  "UPDATE accounts SET a_name = '{$updatedAccount['a_name']}', income = '{$updatedAccount['income']}', expense = '{$updatedAccount['expense']}', u_id = '{$updatedAccount['u_id']}' WHERE a_id='{$updatedAccount['a_id']}'";
					$result 	=  mysqli_query($conn, $sql2);
					header("location: ../view/accounts.php?msg=upd");
					

	}
	function deleteAccount ($updatedAccount){
		$conn =  getConnection();
		$sql2 =  "DELETE FROM accounts WHERE a_id='{$updatedAccount['a_id']}'";
					$result 	=  mysqli_query($conn, $sql2);
	}
	function insertAccount ($updatedAccount){
		$connection =  getConnection();
			$sql		=  "insert into accounts values ('','{$updatedAccount['a_name']}','{$updatedAccount['income']}','{$updatedAccount['expense']}','{$updatedAccount['u_id']}')";
			
			$result 	=  mysqli_query($connection, $sql);
	}

	// function getTotalIncome ()){

	// }



	 ?>
<?php 
require_once('db.php');
	function insertID ($iD){

			$connection =  getConnection();
			$sql		=  "insert into forgetpass values ('','{$iD['wid']}')";
			
			$result 	=  mysqli_query($connection, $sql);

			if($result){
				return true;
			}
			else{
				return false;
			}
	}

 ?>
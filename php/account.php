<?php

session_start();
require ('../db/accounts.php');

$aname 	 = $_POST['acname'];
$income  = $_POST['acincome'];
$expense = $_POST['acexpense'];
$aid 	     = $_POST['acid'];
$userID	  = $_SESSION ['userID'];


			$updatedAccount = [
                        'a_id' 	  => $aid,
						'a_name'        => $aname,
						'income' => $income,
						'expense'     => $expense,
						'u_id'		  => $userID
					];

                    if (isset($_POST['ubtn']) && !empty($aname) && $aname!=" ") {

                        updateAccount ($updatedAccount);
                           
                                
                     }
                     elseif(isset($_POST['ubtn']) && empty($aname) && $aname=" "){
                        header("location: ../view/edit_account.php?link=$aid&msg=empt"); 

                     }
                    elseif (isset($_POST['dbtn'])){
                        deleteAccount ($updatedAccount);
                        header('location: ../view/accounts.php?msg=dt');
                     }
                     elseif(isset($_POST['abtn'])&& empty($aname) && $aname=" ") {
                             header("location: ../view/insert_account.php?msg=blnk"); 
                     }
                     elseif(isset($_POST['abtn'])) {
                        insertAccount ($updatedAccount);
                        header("location: ../view/accounts.php?msg=add"); 
                }

	

 ?>
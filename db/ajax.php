<?php
$con = mysqli_connect('localhost', 'root', '','preneur');

if(isset($_POST['add_account']))
{
    $uid = $_SESSION ['userID'];
    $accountName = mysqli_real_escape_string($con, $_POST['accountName']);
    $income = mysqli_real_escape_string($con, $_POST['income']);
    $expense = mysqli_real_escape_string($con, $_POST['expense']);

    if($accountName == NULL || $income == NULL || $expense == NULL )
    {
        $result = [
            'status' => 422,
            'message' => 'All the Fields are Required'
        ];
        echo json_encode($result);

        return false;
    }
    $sql		=  "INSERT INTO accounts (a_name,income,expense,u_id) VALUES ('$accountName', '$income','$expense','$uid')";
			
			$result 	=  mysqli_query($connection, $sql);

            if($result)
            {
                $result = [
                    'status' => 200,
                    'message' => 'Account Created Successfully'
                ];
                echo json_encode($result);
        
                return false;
            }
            else
            {
                $result = [
                    'status' => 500,
                    'message' => 'Account Not  Created'
                ];
                echo json_encode($result);
        
                return false;
            }

}
?>
<?php

require '../db/dbcon.php';

if(isset($_POST['save_account']))
{
    $uid = mysqli_real_escape_string($con, $_POST['uid']);
    $acname = mysqli_real_escape_string($con, $_POST['acname']);
    $acincome = mysqli_real_escape_string($con, $_POST['acincome']);
    $acexpense = mysqli_real_escape_string($con, $_POST['acexpense']);
    

    if($acname == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Account Name can not be Empty '
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO accounts (a_name,income,expense,u_id) VALUES ('$acname','$acincome','$acexpense','$uid')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Account Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_student']))
{
    $a_id = mysqli_real_escape_string($con, $_POST['a_id']);

    $name = mysqli_real_escape_string($con, $_POST['a_name']);
    $income = mysqli_real_escape_string($con, $_POST['income']);
    $expense = mysqli_real_escape_string($con, $_POST['expense']);
    $uid = mysqli_real_escape_string($con, $_POST['u_id']);

    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Account Name Can not be Empty'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE accounts SET a_name='$name', income='$income', expense='$expense', u_id='$uid' 
                WHERE a_id='$a_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Account Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['account_id']))
{
    $account_id = mysqli_real_escape_string($con, $_GET['account_id']);

    $query = "SELECT * FROM accounts WHERE a_id='$account_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $account = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Account Fetch Successfully',
            'data' => $account
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Account Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_account']))
{
    $account_id = mysqli_real_escape_string($con, $_POST['account_id']);

    $query = "DELETE FROM accounts WHERE a_id='$account_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Account Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>
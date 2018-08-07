<?php
include('Connect.php');
@$name = $_POST['Name'];
@$email = $_POST['Email'];
@$mobile = $_POST['Mobile'];
@$password = $_POST['Password'];
@$active = 1;
$response = array();

$query = "INSERT INTO user (U_name,U_email,U_mobile,U_password,U_active) VALUES('$name','$email','$mobile','$password','$active')";

echo $query;

//exit();
//$result = mysqli_query($conn,$query)
//$result==1;

if(mysqli_query($conn,$query))
{
    //echo mysqli_error($conn);
    $response['status']=1;
    $response['message']="Registration Successful";
    echo json_encode($response);
    header("location:./loginform.php");
    }
else{
    //echo mysqli_error($conn);
    $response['status']=0;
    $response['message']="Registration  Unsuccessful";
    echo json_encode($response);
    
    
    
}
?>
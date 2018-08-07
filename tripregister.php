<?php
session_start();
include('Connect.php');

@$tripname = $_POST[TripName];
@$sd = $_POST[StartDate];
@$ed = $_POST[EndDate];
@$image = $_POST[ImagePath];


$response = array();

$s1 = $_SESSION['display']['id'];

$query = "INSERT INTO trip (T_name,T_sd,T_ed,T_image,T_creator) VALUES('$tripname','$sd','$ed','$image','$s1')";

//echo $query;

//exit();
//$result = mysqli_query($conn,$query)
//$result==1;

if(mysqli_query($conn,$query))
{
    
}
    
else{
    //echo mysqli_error($conn);
    $response['status']=0;
    $response['message']="Trip Registration Not Successful";
    echo json_encode($response);
}

if(isset($_POST['framework'])){
    
    @$lastid=mysqli_insert_id($conn);
    
    foreach($_POST['framework'] as $select)
    {
        $memberadd="insert into travellers(T_id,U_id) values ('$lastid','$select')";
        
        if(mysqli_query($conn,$memberadd)){
            echo "added".$select;
        }
        else{
            
            echo "error traveller";
            exit();
        }
    }
    @$s1 = $_SESSION['display']['id'];
    $memberadd1="insert into travellers(T_id,U_id) values ('$lastid','$s1')";
    
        if(mysqli_query($conn,$memberadd1)){
            echo "added". $select;
        }
    if(result){
        header("Location: ./homepage.php");
    }
    else{
        echo "Error Occured";
        exit();
    }
}

?>
<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $clientid = $_POST['ID'];
    $ordernumber = $_POST['order'];

    $s = "SELECT * FROM ClientOrders WHERE ClientID = '$clientid' && OrderNumber = '$ordernumber'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    if($results){
        if($results && mysqli_num_rows($results) > 0) {
            $sql = "DELETE FROM ClientOrders WHERE ClientID = '$clientid' && OrderNumber = '$ordernumber'";
            mysqli_query($conn, $sql);
            $message = "Client order deleted.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/cancelorder.php'</script>";
        }else{

            $message = "Either appointment ID or client ID does not exist. Please check and recheck order number.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/cancelorder.php'</script>";
        }
    }
}
?>

<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $id = $_POST['ID'];
    $orderid = $_POST['order'];
    $order = $_POST['update'];

    $s = "SELECT * FROM ClientOrders WHERE ClientID = '$id' && OrderNumber = '$orderid'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    if($results){
        if($results && mysqli_num_rows($results) > 0) {
            $sql = "UPDATE ClientOrders SET OrderType='$order' WHERE OrderNumber = '$orderid'";
            mysqli_query($conn, $sql);
            $message = "Order updated.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/updateorder.php'</script>";
        }else{

            $message = "Order number does not exist. Please check the order number entered or that the order was placed by searching records of the photographer.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/updateorder.php'</script>";
        }
    }
}
?>
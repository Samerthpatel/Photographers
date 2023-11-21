<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $id = $_POST['ID'];
    $s = "SELECT * FROM clients WHERE CilentID = '$id'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    if($results){
        if($results && mysqli_num_rows($results) == 0) {
            $sql = "INSERT INTO clients (ClientFirstName, ClientLastName, CilentID) VALUES ('$first', '$last', '$id')";
            mysqli_query($conn, $sql);
            $message = "Client account created.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/createaccount.php'</script>";
        }else{
            $message = "Client ID already exists. Client already has an account.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/createaccount.php'</script>";
        }
    }
}
?>
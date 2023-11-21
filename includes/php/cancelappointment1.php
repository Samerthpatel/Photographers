<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $clientid = $_POST['cID'];
    $appointmentid = $_POST['aID'];

    $s = "SELECT * FROM ClientAppointments WHERE ClientID = '$clientid' && AppointmentID = '$appointmentid'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    if($results){
        if($results && mysqli_num_rows($results) > 0) {
            $sql = "DELETE FROM ClientAppointments WHERE ClientID = '$clientid' && AppointmentID = '$appointmentid'";
            mysqli_query($conn, $sql);
            $message = "Client appointment canceled";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/cancelappointment.php'</script>";
        }else{

            $message = "Either appointment ID or Client ID does not exist. Please check and re-enter Order Number.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/cancelappointment.php'</script>";
        }
    }
}
?>
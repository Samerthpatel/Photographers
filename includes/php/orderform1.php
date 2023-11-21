<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $clientid = $_POST['ID'];
    $appointmentid = $_POST['appointmentID'];
    $photoorder = $_POST['photo'];
    $address = $_POST['address'];

    $s = "SELECT * from clients where Cilentid = '$clientid' && ClientFirstName = '$fname' && ClientLastName = '$lname'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    
    if($results) {
        if($results && mysqli_num_rows($results) > 0) { 
            $num = rand(100000,9999999);
            $sel_query  = "SELECT *  FROM  ClientOrders"; 
            $result2 =  $conn->query($sel_query);
            $i = 1;
            for (;$i<2; $i++)
            {
                while($row = mysqli_fetch_array($result2))
                {
                    if ($row['OrderNumber'] == $num) 
                    {
                        $num = rand(100000,9999999);
                        $i = 0; 

                    }
                }
            }   
            $sss = "SELECT * from ClientAppointments where AppointmentID = '$appointmentid'";
            $sss1 = mysqli_query($conn, $sss);
            if($sss1) {
                if($sss1 && mysqli_num_rows($sss1) > 0) { 
                    $id = $_SESSION['userid'];
                    $ss = "INSERT INTO ClientOrders (OrderType, ShippingAddress, OrderNumber, PhotographerID, ClientID, AppointmentID) VALUES ('$photoorder', '$address', '$num', '$id', '$clientid', '$appointmentid')";
                    mysqli_query($conn, $ss);
                    $mess = "Client Order Placed.";
                    echo "<script type='text/javascript'>alert('$mess'); window.location='../forms/orderform.php'</script>";
                    exit();
                }else{
                    $message = "Appointment ID not found. Recheck data entered for errors otherwise you need to book an appointment for client before placing an order.";
                    echo "<script type='text/javascript'>alert('$message'); window.location='../forms/bookappointment.php'</script>";
                    exit();
                }
            }
        }else{
            $message = "Client cannot be found. Recheck data entered otherwise you need to create an account for client.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/createaccount.php'</script>";
        }
    }
}

?>
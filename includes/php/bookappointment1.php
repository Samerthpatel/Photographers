<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $clientid = $_POST['ID'];
    $clientvenue = $_POST['venue'];
    $clientdatetime = $_POST['date'];
    $clientevent = $_POST['event'];

    $s = "select * from clients where Cilentid = '$clientid' && ClientFirstName = '$fname' && ClientLastName = '$lname'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    
    if($results) {
        if($results && mysqli_num_rows($results) > 0) { 
            $num = rand(1000,99999);
            $sel_query  = "SELECT *  FROM  clients"; 
            $result2 =  $conn->query($sel_query);
            $i = 1;
            for (;$i<2; $i++)
            {
                while($row = mysqli_fetch_array($result2))
                {
                    if ($row['Cilentid'] == $num) 
                    {
                        $num = rand(1000,99999);
                        $i = 0; 

                    }
                }
            }   
            $id = $_SESSION['userid'];
            $ss = "INSERT INTO ClientAppointments (EventType, EventVenue, EventDateTime, ClientID, AppointmentID, PhotographerID) VALUES ('$clientevent', '$clientvenue', '$clientdatetime', '$clientid', '$num', '$id')";
            mysqli_query($conn, $ss);
            $mess = "Client booking placed.";
            echo "<script type='text/javascript'>alert('$mess'); window.location='../forms/bookappointment.php'</script>";
        }else{
            $message = "Client cannot be found. Recheck data entered otherwise you need to create an account for client.";
            echo "<script type='text/javascript'>alert('$message'); window.location='../forms/createaccount.php'</script>";
        }
    }
}
?>
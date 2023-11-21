<?php include '../Serverconnection.php'; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        h1 {
            color: white;
            text-align: center;
            margin-top: 80px;

        }
        body {
        margin: 0;
        padding: 0;
        background-image: url("../css/photo1.png");
        font-family: 'Arial';
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        overflow-x: scroll;
        background-size: cover;

        }
        table {
        border-collapse: collapse;
        width: 550px;
        overflow: hidden;
        position: absolute;
        top: 20%;
        right:40px;
        left: 9%;;
        background-color: rgba(0, 104, 104, 0.6);
        text-align: center;
        color: white;
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color:#f5f5f5;
            color:black;

        }
        .navbar {
    overflow: hidden;
    background-color: rgb(51, 51, 51);
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 42px;
    text-decoration: none;
  }
  
  .navbar a:hover {
    background: #ddd;
    color: black;
  }
    </style>
</head>
<body>
<div class="navbar">
        <a href="searchaccount.php">Search Photographer Records</a>
        <a href="bookappointment.php">Make Appointment</a>
        <a href="orderform.php">Place Order</a>
        <a href="updateorder.php">Update Order</a>
        <a href="cancelappointment.php">Cancel Appointment</a>
        <a href="cancelorder.php">Cancel Order</a>
        <a href="createaccount.php">Create Client Account</a>
        <a href="../php/logout.php">Log Out</a>
</div>      
<h1>Picture Perfect Portraits</h1>

    <table>
        <tr>
            <th>Photographer First Name</th>
            <th>Photographer Last Name</th>
            <th>Photographer ID</th>
            <th>Photographer Phone</th>
            <th>Photographer Email</th>
            <th>Client First Name</th>
            <th>Client Last Name</th>
            <th>Event Type</th>
            <th>Venue</th>
            <th>Date and Time</th>
            <th>Booking ID</th>
            <th>Order</th>
            <th>Address</th>
            <th>Order Number</th>
        <tr>
        <?php
        session_start();
        $idnumber = $_SESSION['userid'];
        $password = $_SESSION['userpassword'];

        $sql = "SELECT photographers.PhotographerFirstName, photographers.PhotographerLastName, photographers.PhotographerID, photographers.PhotographerPhone, photographers.PhotographerEmail, clients.ClientFirstName, clients.ClientLastName, ClientAppointments.EventType, ClientAppointments.EventVenue, ClientAppointments.EventDateTime, ClientAppointments.AppointmentID, ClientOrders.OrderType, ClientOrders.ShippingAddress, ClientOrders.OrderNumber FROM photographers left join ClientAppointments on photographers.PhotographerID = ClientAppointments.PhotographerID left join clients on clients.CilentID = ClientAppointments.ClientID left join ClientOrders on clients.CilentID = ClientOrders.ClientID WHERE PhotographerPassword = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>" . $row["PhotographerFirstName"] . "</td><td>" . $row["PhotographerLastName"] . "</td><td>" . $row["PhotographerID"] . "</td><td>" . $row["PhotographerPhone"] . "</td><td>" . $row["PhotographerEmail"] . "</td><td>" . $row["ClientFirstName"] . "</td><td>" . $row["ClientLastName"] . "</td><td>" . $row["EventType"] . "</td><td>" . $row["EventVenue"] . "</td><td>" . $row["EventDateTime"] . "</td><td>" . $row["AppointmentID"] . "</td><td>" . $row["OrderType"] . "</td><td>" . $row["ShippingAddress"] . "</td><td>" . $row["OrderNumber"] . "</td><tr>";
            }
        }
        else {
            echo "No results";
        }
        $conn-> close();
        ?>
    </table>
</body>
</html>

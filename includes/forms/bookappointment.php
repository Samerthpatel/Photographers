<?php include_once '../Serverconnection.php'; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Perfect Portraits Book Appointment</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
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
    <br><br>
    <br><br>
    <br><br>
    <form id="form" method="POST" action="../php/bookappointment1.php">
            <h2>Picture Perfect Portraits: Book an Appointment Form</h2>
            <br><br>
            <div>
                <label for="first"><b>Client First Name:</b></label>
                <input type="text" name="first" id="first" placeholder="first name" autofocus required>
            </div>
            <br><br>
            <div>
                <label for="last"><b>Client Last Name:</b></label>
                <input type="text" name="last" id="last" placeholder="last name" required>
            </div>
            <br><br>
            <div>
                <label for="ID"><b>Client ID Number:</b></label>
                <input type="tel" name="ID" id="ID" placeholder="ID number" required>
            </div>
            <br><br>
            <div>
                <label for="event"><b>Event Type:</b></label>
                <input type="text" name="event" id="event" placeholder="event Type" required>
            </div>
            <br><br>
            <div>
                <label for="venue"><b>Venue:</b></label>
                <input type="text" name="venue" id="venue" placeholder="venue" required>
            </div>
            <br><br>
            <div>
                <label for="date"><b>Data and Time:</b></label>
                <input type="datetime-local" name="date" id="date" placeholder="date and time" required>
            </div>
            <br><br>
            <br><br>
            <button type="submit">Submit</button>
    </form>
    <br><br>
    <div id="error"></div>
</body>
</html>
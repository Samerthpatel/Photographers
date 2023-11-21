<?php include_once '../Serverconnection.php'; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Perfect Portraits Order Form</title>
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
        <a href="includes/createaccount.php">Create Client Account</a>
        <a href="../php/logout.php">Log Out</a>
      </div>      
    <br><br>
    <br><br>
    <br><br>
    <form id="form" method="POST" action="../php/orderform1.php">
            <h2>Picture Perfect Portraits Order Form</h2>
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
                <input type="tel" name="ID" id="ID" placeholder="ID numver" required>
            </div>
            <br><br>
            <div>
                <label for="id"><b>Client Appointment ID:</b></label>
                <input type="tel" name="appointmentID" id="appointmentID" placeholder="ID number" required>
            </div>
            <br><br>
            <div>
                <label for="photo"><b>Photo Order:</b></label>
                <input type="text" name="photo" id="photo" placeholder="photo order" required>
            </div>
            <br><br>
            <div>
                <label for="address"><b>Shipping Address:</b></label>
                <input type="text" name="address" id="address" placeholder="address" required>
            </div>
            <br><br>
            <br><br>
            <button type="submit" action="../php/orderform1.php" onclick = "return myFunction()">Submit</button>
    </form>
    <br><br>
    <div id="error"></div>
    <script>
            function myFunction(){
                var r = confirm("Before you place an order you must have booked an appointment/event. Did you have an appointment/event?");
                if (r){
                    window.location='../php/orderform1.php';
                }else{
                    window.location='bookappointment.php';
                }
                
        }
    </script>
</body>
</html>
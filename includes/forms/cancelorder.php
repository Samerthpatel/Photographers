<?php include_once '../Serverconnection.php'; 
session_start();
echo $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Perfect Portraits Cancel Order</title>
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
    <form id="form" method="POST" action="../php/cancelorder1.php">
            <h2>Picture Perfect Portraits Cancel Order Form</h2>
            <br><br>
            <div>
                <label for="id"><b>Client ID Number:</b></label>
                <input type="tel" name="ID" id="ID" placeholder="client id number" autofocus required>
            </div>
            <br><br>
            <div>
                <label for="order"><b>Client Order Number:</b></label>
                <input type="tel" name="order" id="order" placeholder="client order number" required>
            </div>
            <br><br>
            <br><br>
            <button type="submit" action="../php/cancelorder1.php" onclick="return con()">Submit</button>
    </form>
    <br><br>
    <div id="error"></div>
    <script>
        function con()
        {
            return confirm('You are about to cancel this order. Are you sure you want to cancel?');
        }
    </script>
</body>
</html>

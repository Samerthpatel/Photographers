<?php include 'includes/Serverconnection.php'; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Perfect Portraits</title>
    <link rel="stylesheet" type="text/css" href="includes/css/stylesheet.css">
</head>
<body>
    <br><br>
    <br><br>
    <br><br>
    <form id="form" method="POST" action="includes/php/index1.php">
            <h2>Picture Perfect Portraits</h2>
            <br><br>
            <div>
                <label for="first"><b>Photographer First Name:</b></label>
                <input type="text" name="first" id="first" placeholder="first name" autofocus required >
            </div>
            <br><br>
            <div>
                <label for="last"><b>Photographer Last Name:</b></label>
                <input type="text" name="last" id="last" placeholder="last name" required >
            </div>
            <br><br>
            <div>
                <label for="password"><b>Photographer Password:</b></label>
                <input type="password" name="password" id="password" placeholder="password" required >
            </div>
            <br><br>
            <div>
                <label for="id"><b>Potographer ID #:</b></label>
                <input type="tel" name="id" id="id" placeholder="id number" required >
            </div>
            <br><br>
            <div>
                <label for="phone"><b>Photographer Phone #:</b></label>
                <input type="tel" name="phone" id="phone" placeholder="phone number" required>
            </div>
            <br><br>
            <div>
                <label for="email"><b>Photographer E-mail:</b></label>
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <br><br>
            <div>
                <label for="transaction"><b>Select a transaction:</b></label>
                <select name="transaction" id="transaction" >
                    <option value="1">   Search a photographer's account</option>
                    <option value="2">   Book a client's appointment</option>
                    <option value="3">   Place a client's order</option>
                    <option value="4">   Update a client's order</option>
                    <option value="5">   Cancel a client's appointment</option>
                    <option value="6">   Cancel a client's order</option>
                    <option value="7">   Create a new client account</option>
                </select>
            </div>
            <br><br>
            <div>
                <input type="checkbox" name="confirmation"  id="confirmation">
                <label for="confirmation"><b>  Check the box to request an Email confirmation</b></label>
            </div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
    </form>
    <br><br>
    <div id="error"></div>
</body>
</html>
<?php
include '../Serverconnection.php'; 
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST"){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $pass = $_POST['password'];
    $idnumber = $_POST['id'];
    $phonenumber = $_POST['phone'];
    $select = $_POST['transaction'];

    $s = "SELECT * FROM photographers WHERE PhotographerFirstName = '$fname' && PhotographerLastName = '$lname' && BINARY PhotographerPassword = '$pass' && PhotographerID = '$idnumber' && PhotographerPhone = '$phonenumber'";
    $results = mysqli_query($conn, $s);
    $user = mysqli_fetch_array($results);
    if($results){
        if($results && mysqli_num_rows($results) > 0) {
            $_SESSION['userid'] = $_POST['id'];
            $_SESSION['userpassword'] = $_POST['password'];
            switch($select){
                case '1':
                    header("Location: ../forms/searchaccount.php");
                    break;
                case '2':
                    header("Location: ../forms/bookappointment.php");
                    break;
                case '3':
                    header("Location: ../forms/orderform.php");
                    break;
                case '4': 
                    header("Location: ../forms/updateorder.php");
                    break;
                case '5': 
                    header("Location: ../forms/cancelappointment.php");
                    break;
                case '6': 
                    header("Location: ../forms/cancelorder.php");
                    break;
                case '7': 
                    header("Location: ../forms/createaccount.php");
                    break;
            }
        }else{

            $message = "Invalid login information";
            echo "<script type='text/javascript'>alert('$message'); window.location='../../index.php'</script>";
        }
    }
}
?>
<?php

        $server = "sql1.njit.edu";
        $username = "srp226";
        $password = "A911Cf@8b8H7502";
        $dbname = "srp226";

        session_start();
        $conn = mysqli_connect ($server, $username, $password, $dbname);
        if (mysqli_connect_error())
        {
            echo "Failed to connect to MYSQL: " . mysqli_connect.error();
        }
?>
<?php
    include 'encryptor.php';
    include 'checklogindata.php';
    include 'connection.php';
    session_start();

    $theEmail = $_POST['theEmailLogin'];
    $thePass = doEncrypt($_POST['thePassLogin']);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(checkData(doEncrypt($theEmail),$thePass)){
        echo "logged in: " . $theEmail;
    }
    else{
        echo "Invalid login";
    }

    mysqli_close($conn);
?>
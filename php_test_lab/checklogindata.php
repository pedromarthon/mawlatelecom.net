<?php
    
    function checkData($theEmail,$thePass){
        include 'connection.php';
        $res = false;

        $sql = "SELECT uemail,upass FROM myusers";
        $result = mysqli_query($conn, $sql);
        while(($row = mysqli_fetch_assoc($result)) && !($res)) {
            if($row['uemail'] == $theEmail & $row['upass'] == $thePass){
                $_SESSION['loggedIn'] = true;
                $res =  true;
            }
        }
        return ($res);
    }
?>
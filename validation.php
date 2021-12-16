<?php

    session_start();
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'dont');

    $aadhar = $_POST['aadhar'];
    $pass = $_POST['password'];

    $s = "select * from haha where aadhar='$aadhar' && password = '$pass";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num==1){
        header('location:home.html');
    }
    else{
        echo "<h2>Not Registered </h2>";
        // header('location:login.php');
    }

?>
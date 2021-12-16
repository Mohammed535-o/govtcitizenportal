<?php

    session_start();
    $con = mysqli_connect('localhost','root','');
    
    mysqli_select_db($con,'dont');

    $aadhar = $_POST['aadhar'];
    $pass = $_POST['password'];

    $s = "select *from haha where aadhar='$aadhar'";

    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);
    if($num==1){
        echo "Username Already taken";
    }
    else{
        $reg = "insert into haha(aadhar, password) values('$aadhar', '$pass')";

        mysqli_query($con, $reg);
        echo "Registration Successful";
    }

?>
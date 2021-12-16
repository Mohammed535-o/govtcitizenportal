<?php 

    session_start();
    header('location:home.html');
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'feedback');

    $category = $_POST['category'];
    $sat = $_POST['satisfaction'];
    $resolve = $_POST['resolved'];
    $sug = $_POST['suggestion'];

    $s = "select * from userfeedback where category = '$category'";

    $reg = "insert into userfeedback(category, satisfaction, resolved, suggestions) values('$category', '$sat', '$resolve', '$sug')";
    mysqli_query($con, $reg);
     echo "Registration Successful";

?>
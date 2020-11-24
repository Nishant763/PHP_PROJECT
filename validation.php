<?php

    session_start();
    
    $con = mysqli_connect('localhost','root','root');

    mysqli_select_db($con,'user-registration');
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['username'];
    $s = "SELECT * from usertable where email ='$email' && password = '$pass' && username = '$name';";

    $result = mysqli_query($con,$s);
    

    $num = mysqli_num_rows($result);

    if($num == 1){
       
        $_SESSION['username'] = $name;
        header('location:index.php');
    }
    else{
        header('location:login.php');
       
    }

?>
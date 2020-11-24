<?php

    session_start();
    header('location:login.php');

    //change the arguments here : ('host','username','password')(MySQL DB)
    $con = mysqli_connect('localhost','root','root');


    //create a new database with phpmyadmin called 'user-registration'
    mysqli_select_db($con,'user-registration');
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['username'];


    //create a new table with phpmyadmin called usertable(email,password,username)(columns)
    $s = "SELECT * from usertable where email ='$email';";

    $result = mysqli_query($con,$s);
    

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Email Already Taken..";
    }
    else{
        $reg = "INSERT INTO usertable values('$email','$pass','$name');";
        $result1 = mysqli_query($con,$reg);
       
    }

?>
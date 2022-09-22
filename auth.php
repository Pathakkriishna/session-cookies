<?php

// session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email =$_POST['email'];
    $password = $_POST['password'];


    $db_email = 'kriishna.pathak@gmail.com';
    $db_password = 'pathak';
    if($password == $db_password && $email == $db_email){
        // $_SESSION['auth'] = true;
        setcookie("email", $email, time() + 5, "/");

        header('location:./main.php');

    }else{
        header('location:./login.php');
    }
}
?>
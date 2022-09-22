<?php

// session_start();

$isLogedIn =isset($_COOKIE['email']);
if(!$isLogedIn){
    echo " Not Logged In";
    // header('location: ./main.php');
}else{
    echo "loggedin";
    // header('location: ./login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to main page</h2>
</body>
</html>
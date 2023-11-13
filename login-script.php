<?php

include('database.php');

if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = legal_input($_POST['username']);
    $password = legal_input($_POST['password']); 



    $query = "SELECT * FROM anascomark WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) == 1) {
        header("Location: mark.html");
        exit();
    } else {
        
        $msg = "Invalid username or password. Please try again.";
        header("Location: login-formpage.php?msg=" .urlencode($msg));
        exit();
    
}
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}

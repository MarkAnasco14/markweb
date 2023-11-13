<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data($connection);
      
}

// insert query
function insert_data($connection){
   
      $first_name= legal_input($_POST['first_name']);
      $last_name= legal_input($_POST['last_name']);
      $username = legal_input($_POST['username']);
      $password = legal_input($_POST['password']);
      $password2 = legal_input($_POST['password2']);

      if ($password != $password2){
        $msg = "Error: Password do not match.";
        return $msg;
      }

      $query="INSERT INTO anascomark (Fullname,Lastname,Username,Password) VALUES ('$first_name','$last_name','$username','$password')";
      $exec= mysqli_query($connection,$query);
      if($exec){

        $msg="Registered sucessfully Proceed to the Login Form!";
       
        return $msg;
      
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>
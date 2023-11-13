<?php

include('create-script.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto:ital,wght@0,700;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@1,300&family=Inter:wght@400;500;600;700&family=Itim&family=Kumbh+Sans:wght@100;600&family=Outfit:wght@300;400&family=Raleway:wght@400;700&family=Red+Hat+Display:wght@500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@1,300&family=Inter:wght@100;200;400;500;600;700&family=Itim&family=Kumbh+Sans:wght@100;600&family=Outfit:wght@300;400&family=Raleway:wght@400;700&family=Red+Hat+Display:wght@500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>PHP anasco Operations</title>
    <style>
      body {
        overflow-x: hidden;
        background-size: cover;
        padding: 0;
        margin: 0;
        height: 100vh;
        font-family: "roboto" sans-serif;
        list-style-type: none;
      }
      main {
      
        background-size: cover;
        height: 100vh;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: end;
        align-items: center;
      }

      * {
        box-sizing: border-box;
      }
      .user-detail form {
        padding: 6px;
        border-radius: 10px;
        background-color: f3f1f1;
        background: rgba(243, 241, 241, 0.75);
        margin-top:23rem;
        height: 88vh;
        width: 90%;
        flex:1;
        /* width: 1000px; */
      }
      .user-detail {
        border-radius: 25px;
        width: 35%;
        margin: 0 auto;
      }

      input {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      input[type="text"]:focus,
      input[type="password"]:focus {
        background-color: #ddd;
        border-radius: 10px;
        outline: none;
      }
      button[type="submit"] {
        background-color: darkorange;
        border-radius: 10em;
        color: #ffffff;
        padding: 10px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        font-size: 20px;
      }
      label {
        font-size: 18px;
      }
      button[type="submit"]:hover {
        color: orange;
        background-color: #3d3c3c;
      }
      .form-title a,
      .form-title h2 {
        display: inline-block;
      }
      .form-title a {
        text-decoration: none;
        font-size: 20px;
        background-color: green;
        color: honeydew;
        padding: 2px 10px;
      }
      .form-title h2 {
        position: relative;
        text-align: center;
        top: 10px;
        color: white;
        font-family: "roboto";
      }
      .forlogo {
        width: 30%;
        margin: 0 auto;
        border-radius: 8px;
        color: white;
      }
      .forlogo h1 {
        color: white;
        margin: 2px;
        font-family: "roboto";
        font-size: 50px;
        font-weight: 200px;
      }

      img {
        width: 40px;
        border-radius: 1em;
      }

      .header_container {
         width: 100%;
        background-color: white;
        position: fixed;
        display: flex;
        align-items: center;
        flex:1;
        margin: 0 auto;
      }
      nav,
      ul li {
        display: inline-flex;
        gap: 3.5em;
        border: 0;
        cursor: pointer;
      }
      ul,
      li,
      a {
        list-style-type: none;
        text-decoration: none;
        font-family: Roboto (arial);
      }

       li,
      a::hover{
        background: red;
      }
      a {
        font-family: roboto;
        font-size: 20px;
        color: black;
      }

      .logo {
        margin-left: 50px;
        height: 100px;
        width: 150px;
      }
      .wow{
        background-color: blue;
      }

      .wow input[type="text"] {
        color: black;
        background-color: transparent;
        color: black !important;
        font-weight: bold;
        border-bottom: 1px solid rgb(255, 255, 255);
      }
      .wow input[type="password"] {
        color: black;
        background-color: transparent;
        font-weight: bold;
        border-bottom: 1px solid rgb(255, 255, 255);
      }
      .wow input[placeholder="placeholder"] {
        color: solid black;
      }
      .account{
        font-size:16px;
        align-items: center;
        color:blue;
      }
      .account:hover{
        color: red;
      }
      .employee{
        font-weight: 300;
        padding-left:30px;
        font-size: 30px;
        font-family:'roboto';
      }
    
    </style>
  </head>
  <body>
    <!--====form section start====-->

    <div class="header_container">
      <img class="logo" src="img/g12logo.jpg" alt="logo" />
        <p class="employee">Employee's Registration</p>
    </div>

    <main>
      <div class="user-detail">
        <div class="form-title"></div>

        <p style="color: blue"><?php if(!empty($msg)){echo $msg; }?></p>

        <form method="post" action="" class="wow">
  
          <input
            type="text"
            placeholder="Enter Full Name"
            name="first_name"
            
            required
          />
          <input
            type="text"
            placeholder="Enter Last Name"
            name="last_name"
            required
          />
          <input
            type="text"
            placeholder="Enter Username"
            name="username"
            required
          />

          <input
            type="password"
            placeholder="Enter password"
            name="password"
            required
          />

          <input
            type="password"
            placeholder="Re-Enter password"
            name="password2"
            required
          />
          <button type="submit" name="create">Sign up!</button>
          <a href="login-formpage.php" class="account">already have an account?</a>
        </form>

        <div class="logo-container"></div>
      </div>
    </main>

    <!--====form section start====-->
  </body>
</html>

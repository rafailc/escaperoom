<?php
session_start();
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
 $DB_SERVER = "localhost";$DB_NAME = "profile";$DB_USER = "root";$DB_PASSWORD = "";
  $dblink = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME) 
              or die('Unable to connect to database!');
$username_esc = mysqli_real_escape_string($dblink, $username);
              $result=mysqli_query($dblink,"SELECT username,password FROM users WHERE username='$username_esc'");
$row = mysqli_fetch_assoc($result);

       if ($row && password_verify($password, $row["password"])) {
    $_SESSION["username"] = $row["username"];
    header("Location: ../home.html");
    exit;
        }
        else {
   echo "
    <style>
      .login-error{
        background:#ffe6e6;
        color:#b00020;
        border:1px solid #ffb3b3;
        padding:12px 14px;
        border-radius:10px;
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        max-width: 420px;
        margin: 12px auto;
        text-align:center;
        box-shadow: 0 6px 18px rgba(0,0,0,.08);
      }
    </style>
    <div class='login-error'>Λάθος username ή password!</div>
    ";
        }
?>
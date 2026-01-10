<?php
session_start();
$room=$_POST["room_name"];
       $DB_SERVER = "localhost"; $DB_NAME = "profile"; $DB_USER = "root";  $DB_PASSWORD = "";
    $dblink = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME)
                or die('Unable to connect to database!');
    $username = mysqli_real_escape_string($dblink, $_SESSION['username']);
$query = "SELECT * FROM users WHERE username='$username'";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows);   
    $result = mysqli_fetch_assoc($rows); 
?>
<html>
    <head><meta charset="utf-8"/>
<link rel="stylesheet" href="booking_form.css">
<title>Booking form</title>
<link type="image/png" sizes="16x16" rel="icon" href="images/icon1.png"> 

</head>
    <body class="bg">
    <h1>Κανε κρατηση ΤΩΡΑ</h1>
    
    <form action ="booking_save.php" method="POST">
        <p>
          <a class="back" href="../../home.html">← Πίσω στην αρχική</a>
</p>
         <input type="hidden" name="room" value="<?php echo $room; ?>">
         <input type="hidden" name="username" value="<?php echo $result["username"]?>">
         <input type="hidden" name="firstname" value="<?php echo $result["firstname"]?>">
         <input type="hidden" name="lastname" value="<?php echo $result["lastname"]?>">
         <input type="hidden" name="city" value="<?php echo $result["city"]?>">
      <table>
         <tr>
            <th>room:</th>
            <td><?php echo $room; ?></td>
        </tr>
        <tr>
            <th>Username:</th>
            <td><?php echo $result["username"]?></td>
        </tr>
        <tr>
            <th>first name:</th>
            <td><?php echo $result["firstname"]?></td>
        </tr>
         <tr>
            <th>last name:</th>
            <td><?php echo $result["lastname"]?></td>
        </tr>
        <tr>
            <th>City:</th>
            <td><?php echo $result["city"]?></td>
        </tr>
        <tr>
            <th>Date:</th>
            <td><input type="date" name="date" required /></td>
        </tr>
        <tr>
            <th>Time:</th>
            <td><input type="time" name="time" required /></td>
        </tr>
         <tr>
            <th>how many people:</th>
            <td><input type="number" name="numpeople" min="1" required/></td>
        </tr>
        <tr>
            <th>Τηλεφωνο εποκοινωνιας:</th>
            <td><input type="number" name="phonenumber" required/></td>
        </tr>
         <tr>
        <th colspan="2">
        Agree to the <a href="terms.html" target="_blank" rel="noopener">terms</a>
        </th>
         <td><input type="checkbox" name="terms" value="1" required /></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"/></td>
        </tr>
      </table>
    </form>
    </body>
    <style>
  body.bg{
    margin:0;
    min-height:100vh;
    background-image: url("images/bg2.png"); 
    background-size: cover;          
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;   
  }
</style>
</html>
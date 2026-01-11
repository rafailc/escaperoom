<?php
$room=$_POST["roomname"]?? '';
$people=$_POST["people"]?? '';
$price=$_POST["price"]?? '';
$duration=$_POST["duration"]?? '';
$theme=$_POST["theme"]?? '';
$difficulty=$_POST["difficulty"]?? '';
$photo=$_POST["photo"]?? '';
$description=$_POST["description"]?? '';
$DB_SERVER = "localhost";
    $DB_NAME = "profile";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    //ΣΥΝΔΕΣΗ ΜΕ ΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ
    $dblink = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME) 
              or die('Unable to connect to database!');

$sql_query = "INSERT INTO `rooms`(`room`,`people`,`price`,`duration`,`theme`,`difficulty`,`photo`,`description`)";
$sql_query .= " VALUES ('{$room}','{$people}','{$price}','{$duration}','{$theme}','{$difficulty}','{$photo}','{$description}')";
$success = mysqli_query($dblink, $sql_query);
    if ($success){
?>
<html>
<html>
<head>
  <meta charset="utf-8">
  <title>Επιτυχία</title>
  <style>
    .success-wrap{
      max-width: 720px;
      margin: 60px auto;
      padding: 24px;
      font-family: Arial, sans-serif;
    }
    .success-box{
      background: #e8fff1;
      border: 1px solid #2ecc71;
      color: #145a32;
      padding: 18px 16px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      margin-bottom: 18px;
    }
    .success-title{
      font-size: 20px;
      font-weight: 700;
      margin: 0 0 6px 0;
    }
    .success-text{
      margin: 0;
      font-size: 16px;
      line-height: 1.5;
    }
    .back-btn{
      display: inline-block;
      text-decoration: none;
      background: #145a32;
      color: #fff;
      padding: 10px 14px;
      border-radius: 10px;
      font-weight: 600;
      transition: transform .08s ease, opacity .2s ease;
    }
    .back-btn:hover{
      opacity: .92;
      transform: translateY(-1px);
    }
  </style>
</head>
<body>
  <div class="success-wrap">
    <div class="success-box">
      <p class="success-title"> Η δημιουργια του δωματιου ολοκληρώθηκε!</p>
      <p class="success-text">Το δωματιο  καταχωρήθηκε επιτυχώς.</p>
    </div>

    <a class="back-btn" href="edit.php">← Πίσω στο edit</a>
  </div>
</body>
</html>
<?php
    }else{
        $sql_error = mysqli_error($dblink);
?>
<p>
    <font color="red"> Σφάλμα κατά την εκτέλεση του SQL ερωτήματος! </font>
</p>
<p>
<pre>
<?=$sql_query?>
</pre>
    <font color="red"> <?= $sql_error ?> </font>
</p>
<?php
    }
?>
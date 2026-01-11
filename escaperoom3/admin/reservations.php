<?php 
include 'edit_db.php';
   $query = "SELECT * FROM `reservations`";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows); 
?>
<html>  
<head>
    <meta charset="utf-8"/>
    <title>Reservations view</title>
<link rel="stylesheet" href="style_reserv.css">
<link type="image/png" sizes="16x16" rel="icon" href="../images/icon1.png"> 

</head>
<body>
<div class="topbar">
  <a class="back" href="../home.php" aria-label="Επιστροφή στα δωμάτια">
    <span class="back-icon">←</span>
    <span class="back-text">Επιστροφή στα δωμάτια</span>
  </a>
</div>
<div class="table-wrap">
  <div class="table-scroll">
<table>
            <thead>
              <tr>
                <th>room</th>
                <th>username</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>city</th>
                <th>date</th>
                <th>time</th>
                <th>people</th>
                <th>phone</th>
                <th>terms</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysqli_fetch_object($rows)){
                  include 'reservation_row.php';
                }
              ?>
            </tbody>
    </table>
  </div>
</div>
</body>
</html>
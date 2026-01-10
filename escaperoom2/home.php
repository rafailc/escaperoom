<?php

 include 'home_db.php';
    $query = "SELECT * FROM `rooms`";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows); 
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Κατάλογος δωματίων</title>
  <link rel="stylesheet" href="style.css">
<link type="image/png" sizes="16x16" rel="icon" href="images/icons8-escape-16.png"> 
</head>
<body>
  <div class="page">

    <div class="topbar">
      <div class="topbar-inner">
        <div class="topbar-left">
          <h1>Κατάλογος δωματίων</h1>
          <p>Βρέθηκαν <strong><?=$numofrows?></strong> δωμάτια</p>
        </div>
        <div class="halloween-badge">Escape Rooms</div>
      </div>
    </div>

    <div class="box">
         <p>
          <a class="back" href="home.html">← Πίσω στην αρχική</a>
</p>

        <div class="table-wrap">
          <table class="rooms-table">
            <thead>
              <tr>
                <th>Photo</th>
                <th>Room</th>
                <th>Theme</th>
                <th>Difficulty</th>
                <th>Players</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysqli_fetch_object($rows)){
                  include 'home_row.php';
                }
              ?>
            </tbody>
          </table>
        </div>

      <p class="note">Tip: Πάτα <strong>Details</strong> για περισσότερες πληροφορίες.</p>
    </div>

    <div class="footer">© <?=date('Y')?> Escape Rooms</div>
  </div>
</body>

</html>
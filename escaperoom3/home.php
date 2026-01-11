<?php
session_start();
 include 'home_db.php';
    $query = "SELECT * FROM `rooms`";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows); 
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Κατάλογος δωματίων</title>
  <link rel="stylesheet" href="style.css?v=1">

<link type="image/png" sizes="16x16" rel="icon" href="images/scary2.png"> 
</head>
<body>
  <div class="page">

    <div class="topbar">
      <div class="topbar-inner">
        <div class="topbar-left">
          <h1>Κατάλογος δωματίων</h1>
          <p>Βρέθηκαν <strong><?=$numofrows?></strong> δωμάτια</p>
        </div>
        <div class="halloween-badge">
  <?php if (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == '1') { ?>
    <div class="admin-actions">
      <a class="btn btn-admin" href="admin/edit.php">Επεξεργασία Δωματίων</a>
      <a class="btn btn-admin" href="admin/reservations.php">Κρατήσεις</a>
    </div>
  <?php } else { ?>
    Escape Rooms
  <?php } ?>
</div>
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
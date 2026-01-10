<?php
include 'details_db.php';
$room=$_POST["room_name"];
$query = "SELECT * FROM rooms WHERE room='$room'";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows);   
    $result = mysqli_fetch_assoc($rows); 

?>

<html lang="el">
<head>
  <meta charset="utf-8" />
  <title>details</title>
  <link rel="stylesheet" href="details.css">
  <link type="image/png" sizes="16x16" rel="icon" href="../images/icons8-haunted-house-16.png">
</head>
<body>
 <div class="page">
    <header >
      <h1>EscapeRoomBooking</h1>
      <p>Λεπτομέρειες <?php echo $room; ?> room</p>
    </header>
    <div class="box">
      <a class="back" href="../home.php">← Πίσω στην αρχική</a>

      <div class="title-row">
        <h2><?php echo $room; ?></h2>
        <span class="badge"> <?= $result['difficulty'] ?> </span>
      </div>

      <div class="details-row">
        <img class="details-img" src="../rooms/<?= $result['photo'] ?>" alt="Hounted House">

        <div class="card">
          <h3>Περιγραφή</h3>
          <p>
           <?= $result['description'] ?>
          </p>

          <h3>Highlights</h3>
          <table class="quick-info">
            <tr><th>Players</th><td><?= $result['people'] ?></td></tr>
            <tr><th>Duration</th><td><?= $result['duration'] ?></td></tr>
            <tr><th>Price</th><td><?= $result['price'] ?>€/ ατομο</td></tr>
          </table>

         <div class="actions">
            <form action="booking/booking.php" method="POST">
              <input type="hidden" name="room_name" value="<?php echo $room; ?>">
             <button type="submit" class="btn-primary">Book <?php echo $room; ?> </button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>

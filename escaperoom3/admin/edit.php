<?php  
include 'edit_db.php';
    $query = "SELECT * FROM `rooms`";
    $rows = mysqli_query($dblink, $query);
    $numofrows = mysqli_num_rows($rows); 
?>
<html>  
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="edit_rooms.css">
<title>Edit rooms</title>
<link type="image/png" sizes="16x16" rel="icon" href="../images/editing.png"> 

</head>
<body>
  <p>
          <a class="back" href="../home.php">← Πίσω στα δωμάτια</a>
</p>
<details>
  <summary>Create rooms</summary>
  <form action="create_room.php" method="POST">
    <table border="1">
      <tr>
        <th>room name:</th>
        <td><input type="text" name="roomname" required/></td>
      </tr>
      <tr>
       <th>how many people(px:1-20):</th>
        <td><input type="text" name="people" required/></td>
      </tr>
      <tr>
         <th>price:</th>
        <td><input type="text" name="price" required/></td>
      </tr>
      <tr>
          <th>duration(px: 60mins):</th>
        <td><input type="text" name="duration" required/></td>
      
      </tr>
      <tr>
         <th>Theme:</th>
        <td><input type="text" name="theme" required/></td>
      </tr>
      <tr>
       <th>Difficulty:</th>
        <td><input type="text" name="difficulty" required/></td>
      </tr>
      <tr>
       <th>photo name(name.png):</th>
        <td><input type="text" name="photo" required/></td>
      </tr>
      <tr>
       <th>description:</th>
        <td><textarea rows="2" cols="20"name="description" required></textarea></td>
      </tr>
       <tr>
        <th>Create room:</th>
            <td align="right"><input type="submit" name="submit" value="submit"/></td>
      </tr>
    </table>
  </form>
</details>
<details>
  <summary>Update rooms</summary>
  <form action="update_room.php" method="POST">
    <table border="1">
      <tr>
        <th>What room to update:</th>
        <td><input type="text" name="updateroom" required/></td>
      </tr>
        <tr>
        <th>room name:</th>
        <td><input type="text" name="roomname" /></td>
      </tr>
      <tr>
       <th>how many people(px:1-20):</th>
        <td><input type="text" name="people" /></td>
      </tr>
      <tr>
         <th>price:</th>
        <td><input type="text" name="price" /></td>
      </tr>
      <tr>
          <th>duration(px: 60mins):</th>
        <td><input type="text" name="duration" /></td>
      
      </tr>
      <tr>
         <th>Theme:</th>
        <td><input type="text" name="theme" /></td>
      </tr>
      <tr>
       <th>Difficulty:</th>
        <td><input type="text" name="difficulty" /></td>
      </tr>
      <tr>
       <th>photo name(name.png):</th>
        <td><input type="text" name="photo" /></td>
      </tr>
      <tr>
       <th>description:</th>
        <td><textarea rows="2" cols="20"name="description" ></textarea></td>
      </tr>
       <tr>
        <th>Update room:</th>
            <td align="right"><input type="submit" name="submit" value="submit"/></td>
      </tr>
    </table>
  </form>
</details>
<details>
  <summary>Delete rooms</summary>
  <form action="delete_room.php" method="POST">
    <table border="1">
      <tr>
        <th>What room to delete:</th>
        <td><input type="text" name="deleteroom" required/></td>
      </tr>
       <tr>
        <th>Delete room:</th>
            <td align="right"><input type="submit" name="submit" value="submit"/></td>
      </tr>
    </table>
  </form>
</details>
<details>
  <summary>Show rooms</summary>
  <table>
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
                  include 'edit_row.php';
                }
              ?>
            </tbody>
          </table>
  </form>
</details>
</body>



</html>
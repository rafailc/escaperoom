<tr>
     
    <td><img class="room-img" src="rooms/<?= $row->photo ?>" alt="HTML1 Icon" style="width:128px;height:128px;"> </td>
    <td> <?= $row->room ?> </td>
    <td> <?= $row->theme ?> </td>   
    <td> <?= $row->difficulty ?> </td>   
    <td> <?= $row->people ?> </td>
    <td> <?= $row->duration ?> </td>
    <td> <?= $row->price ?>€ </td>
    <form action="details/details.php" method="POST">
    <td><input type="hidden" name="room_name" value="<?= $row->room ?>">
     <button type="submit" class="btn-primary">Προβολή <?= $row->room ?></button>
    </td>
    </form>
            </tr>
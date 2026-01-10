<p> Εισάγετε τα στοιχεία σας για να εγγραφείτε: </p>
<?php
    if ($error_message != "") {
?>
    <p> <font color="red"> Σφάλμα!<br/> <?=$error_message?> </font> </p>
<?php
    }
?>
<form action="register.php" method="POST">
<table>
    <tr>
        <th>Όνομα</th>
        <td> <input type="text" name="firstname" value="<?=$firstname?>" /> </td>
    </tr>
    <tr>
        <th>Επώνυμο</th>
        <td> <input type="text" name="lastname" value="<?=$lastname?>" /> </td>
    </tr>
    <tr>
        <th>Username</th>
        <td> <input type="text" name="username" value="<?=$username?>" /> </td>
    </tr>
    <tr>
        <th>Password</th>
        <td> 
         <input type="password" name="passwordfirst" value="<?=$passwordfirst?>" />
        </td>
    </tr>
    <tr>
        <th>Retype Password</th>
        <td>
       <input type="password" name="passwordsecond" value="<?=$passwordsecond?>" />
        </td>
    </tr>
    <tr>
        <th>Φύλο</th>
        <td>
            <input type="radio" name="gender" value="1" 
<?php if ($gender == "1") echo "checked"; ?> /> Άνδρας <br/>
            <input type="radio" name="gender" value="2" 
<?php if ($gender == "2") echo "checked"; ?> /> Γυναίκα <br/>
        </td>
    </tr>
        <tr>
        <th>Πόλη</th>
        <td> <input type="text" name="city" value="<?=$city?>" /> </td>
    </tr>

    <tr>
        <th>Όροι χρήσης</th>
        <td>
            <input type="checkbox" name="agreeterms" value="1"
<?php if ($agreeterms == "1") echo "checked"; ?> />
            Συμφωνώ με τους όρους χρήσης
        </td>
    </tr>
    <tr>
    <td> <a href="register.php">Επαναφορά</a> </td>
        <td><input type="submit" value="Εγγραφή" /></td>
    </tr>
</table>
</form>
<?php
    //ΕΙΣΑΓΩΓΗ ΤΩΝ ΣΤΟΙΧΕΙΩΝ ΤΟΥ ΧΡΗΣΤΗ ΣΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ
    //ΣΤΟΙΧΕΙΑ ΣΥΝΔΕΣΗΣ ΤΗΣ ΒΑΣΗΣ ΔΕΔΟΜΕΝΩΝ
    $DB_SERVER = "localhost";
    $DB_NAME = "profile";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    //ΣΥΝΔΕΣΗ ΜΕ ΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ
    $dblink = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME) 
              or die('Unable to connect to database!');
      
         $hashed = password_hash($passwordfirst, PASSWORD_DEFAULT);
   $sql_query = "INSERT INTO `users` (`firstname`, `lastname`, `city`, `username`, `password`, `gender`)";
$sql_query .= " VALUES ('{$firstname}', '{$lastname}', '{$city}', '{$username}', '{$hashed}', {$gender})";

    $success = mysqli_query($dblink, $sql_query);
    if ($success){
        //Η ΕΓΓΡΑΦΗ ΠΡΑΓΜΑΤΟΠΟΙΗΘΗΚΕ ΕΠΙΤΥΧΩΣ
?>
<p> Η εγγραφή σας ολοκληρώθηκε επιτυχώς! </p>
<p>
          <a class="back" href="../home.html">← Πίσω στην αρχική</a>
</p>
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
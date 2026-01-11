<?php
//ΣΤΟΙΧΕΙΑ ΣΥΝΔΕΣΗΣ ΤΗΣ ΒΑΣΗΣ ΔΕΔΟΜΕΝΩΝ
    $DB_SERVER = "localhost";
    $DB_NAME = "profile";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    //ΣΥΝΔΕΣΗ ΜΕ ΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ
    $dblink = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME)
                or die('Unable to connect to database!');
//ΥΠΟΣΤΗΡΙΞΗ UTF-8 ΓΙΑ ΕΛΛΗΝΙΚΑ
    mysqli_query($dblink, "set names utf8");
    ?>
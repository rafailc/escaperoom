<?php
    include_once 'register_library.php';
    $data_ok = false;
    $error_message = "";
    $method = $_SERVER['REQUEST_METHOD'];
    $firstname = PostValue("firstname", "");
    $lastname = PostValue("lastname", "");
    $username = PostValue("username", "");
    $passwordfirst = PostValue("passwordfirst", "");
    $passwordsecond = PostValue("passwordsecond", "");
    $gender = PostValue("gender", 0);
    $city = PostValue("city", "");
    $agreeterms = PostValue("agreeterms", 0);
    if ($method == "POST") {
        //Ο χρήστης υπέβαλε την φόρμα
        $data_ok = true;
        //Έλεγχοι ορθότητας των στοιχείων
        if ($firstname == "") AddError("Δεν γράψατε όνομα!");
        if ($lastname == "") AddError("Δεν γράψατε επίθετο!");
        if ($username == "") AddError("Δεν γράψατε όνομα χρήστη!");
        if ($passwordfirst == "") AddError("Δεν γράψατε password!");
        if ($city == "") AddError("Δεν γράψατε πόλη!");
        if (strlen($passwordfirst) < 8)
            AddError("Το password πρέπει να έχει τουλάχιστον 8 χαρακτήρες!");
        if ($passwordfirst != $passwordsecond)
            AddError("Δεν ξαναγράψατε σωστά το password!");
        if ($gender == 0) AddError("Δεν επιλέξατε φύλο!");
        if ($agreeterms == 0) AddError("Δεν συμφωνήσατε με τους όρους χρήσης!");
    }    
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Εγγραφή χρήστη</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Εγγραφή νέου χρήστη</h1>
<?php
    if ($data_ok) { 
        //ΣΕ ΠΕΡΙΠΤΩΣΗ ΠΟΥ ΟΛΟΙ ΟΙ ΕΛΕΓΧΟΙ ΕΙΝΑΙ ΕΠΙΤΥΧΕΙΣ
        //ΕΜΦΑΝΙΣΕ ΤΟ ΑΡΧΕΙΟ page9_register.php
        include_once 'register_success.php';
    } else {
        //ΣΕ ΠΕΡΙΠΤΩΣΗ ΠΟΥ ΥΠΑΡΧΕΙ ΕΣΤΩ ΚΑΙ ΕΝΑ ΛΑΘΟΣ, 
        //ΕΜΦΑΝΙΣΕ ΤΟ ΑΡΧΕΙΟ page9_form.php
        include_once 'register_form.php';
    }
    ?>
</body>
</html>
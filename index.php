<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=karimmaz_acedb', 'karimmaz_acedbuser', 'Mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    //echo 'Connected';
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}


// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((isset($_POST['myName']))) {
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];


    try {
        $sql = "INSERT INTO contact (myName, myEmail, myQuestion) VALUES ('$myName', '$myEmail', '$myQuestion')";


        $s = $pdo->prepare($sql);
        $s->bindValue(':myName', $myName);
        $s->bindValue(':myEmail', $myEmail);
        $s->bindValue(':myQuestion', $myQuestion);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted registration: ' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
}
// Add an else to load the initial page if the initial (line 19) if statement is false
else {
    include 'contact.html.php';
}
?>

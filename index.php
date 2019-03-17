<?php

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
    include 'includes/error.html.php';
    exit();
}


// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((isset($_POST['fname']))) {
      $participant = $_POST['participant'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $ename = $_POST['ename'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $fevent = $_POST['fevent'];
      $sevent = $_POST['sevent'];
      $accommodation = $_POST['accommodation'];


    try {
      $sql = "INSERT INTO registration (participant, fname, lname, email, phone, ename, gender, age, fevent, sevent, accommodation) 
VALUES ('$participant', '$fname', '$lname', '$email', '$phone', '$ename', '$gender', '$age', '$fevent', '$sevent', '$accommodation')";

          
      $s = $pdo->prepare($sql);
      $s->bindValue(':participant', $participant);
        $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':email', $email);
        $s->bindValue(':phone', $phone);
        $s->bindValue(':ename', $ename);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':age', $age);
        $s->bindValue(':fevent', $fevent);
        $s->bindValue(':sevent', $sevent);
        $s->bindValue(':accommodation', $accommodation);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include 'includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
  }
    // Add an else to load the initial page if the initial (line 19) if statement is false
  else {
      include 'registration.html.php';
  }
  ?>

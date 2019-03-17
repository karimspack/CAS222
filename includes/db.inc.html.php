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

<?php

$dsn = 'mysql:host=localhost;dbname=CV';

$user = 'root';

$pass = '';

try {

    $conn = new PDO ($dsn, $user, $pass);
    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q= "INSERT INTO Omnia(Name) VALUES ('Amr')";

    $db->exec($q);
  
}

catch(PDOException $e) {
   
    echo 'failed' . $e->getMessage();
}


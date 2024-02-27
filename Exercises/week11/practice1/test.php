<?php

$dsn = "mysql:host=localhost;dbname=week11;port=3306";
$pdo = new PDO($dsn,"root","");

$sql = 'insert into book (isbn, title) 
        values (:isbn, :title)';
$isbn = 'isbn4'; // simulates a user input
$title = 'PHP is fun'; // simulates a user input
$stmt = $pdo->prepare($sql); 
$stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);
$stmt->bindParam(':title', $title, PDO::PARAM_STR);

// $isAddOK stores true or false        
$isAddOK = $stmt->execute();

$stmt = null;
$pdo = null;

?>
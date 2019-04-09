<?php

$dataSource = "mysql:host=localhost;dbname=training_db";
$user = "root";
$password = "";

try {
  $db = new PDO($dataSource, $user, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
  die;
}

 ?>

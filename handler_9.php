<?php

$name      = $_POST['name'];
$pdo       = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");
$sql       = "INSERT INTO `names` (`name`) VALUES (:name)";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);
header("Location: /task_9.php");
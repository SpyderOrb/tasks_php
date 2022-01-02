<?php

session_start();
$name = $_POST['name'];
$pdo  = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");

$sql       = "SELECT * FROM `names` WHERE name=:name";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);
$compare = $statement->fetch(PDO::FETCH_ASSOC);

if ( ! empty($compare)) {
    $massage            = "Запись уже есть в таблице!";
    $_SESSION['danger'] = $massage;
    header("Location: /task_10.php");
    exit;
}

$sql       = "INSERT INTO `names` (name) VALUES (:name)";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);

$massage             = "Запись успешно добавлена.";
$_SESSION['success'] = $massage;

header("Location: /task_10.php");

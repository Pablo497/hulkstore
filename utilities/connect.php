<?php
$user = "root";
$chiave = "";

$pdo = new PDO("mysql:dbname=hulkstore;host=localhost", $user, $chiave);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
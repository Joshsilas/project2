<?php
$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db ->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardgames = $query->fetchAll();
// echo '<pre>';
// var_dump($boardgames);
// echo '</pre>';

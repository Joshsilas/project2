<?php
$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db ->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardgames = $query->fetchAll();

function creategamecard($name, $playercount, $difficulty, $description){
    return "
    <section class = 'board-game-section'>		
				<h2> $name </h2>
				<p>The Player Count is $playercount players</p>
				<p> The difficulty to learn is $difficulty/5</p>
				<p>$description </p>
			</section>	";
}


<?php 
require_once('src/Game.php');

$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardGames = $query->fetchAll();

$boardGamesAsObjects = [];
foreach ($boardGames as $boardGame) {
$game = new Game($boardGame['name'], $boardGame['playercount'], $boardGame['difficulty'], $boardGame['description']);
array_push($boardGamesAsObjects, $game);
}
?> 

<html lang="en-GB"> 
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>The boardgame collection</title>
	</head>
	<body>
        <header>
            <h1>Boardgame Collection</h1>
        </header>
		<div class="card-container">
			<?php
				foreach ($boardGamesAsObjects as $boardGameAsObject) {
				echo $boardGameAsObject->createGameCard();
				}
			?>
		</div> 
	</body>
</html>

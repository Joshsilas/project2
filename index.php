<?php 
require_once('CollectionCardMaker.php');
$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db ->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardgames = $query->fetchAll();
?> 

<html lang="en-GB"> 
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>The board game collection</title>
	</head>
	<body>
        <header>
            <h1>Boardgame Collection</h1>
        </header>
		<div class = "container">
			<?php
			foreach ($boardgames as $game){
				$collectioncardmaker = new CollectionCardMaker($game['name'], $game['playercount'], $game['difficulty'], $game['description']);
				echo $collectioncardmaker->createGameCard();
			}
			?>
		</div> 
	</body>
</html>

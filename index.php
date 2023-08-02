<?php 
require_once('src/collectioncardmaker.php');
$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db ->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardgames = $query->fetchAll();
?> 

<html lang="en-GB"> 
	<head>
		<link rel="stylesheet" type="text/css" href="src/style.css">
		<title>The boardgame collection</title>
	</head>
	<body>
        <header>
            <h1>Boardgame Collection</h1>
        </header>
		<div class = "card-container">
			<?php
			foreach ($boardgames as $boardgame){
				$collectionCardMaker = new CollectionCardMaker($boardgame['name'], $boardgame['playercount'], $boardgame['difficulty'], $boardgame['description']);
				echo $collectionCardMaker->createGameCard();
			}
			?>
		</div> 
	</body>
</html>

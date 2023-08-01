<?php 
require_once('functions.php');

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
				$collectioncardmaker = new collectioncardmaker($game['name'], $game['playercount'], $game['difficulty'], $game['description']);
				echo $collectioncardmaker->creategamecard();
			}
			?>
		</div> 
	</body>
</html>

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
				echo creategamecard($game['name'], $game['playercount'], $game['difficulty'], $game['description']);
			}

			?>
		</div> 
</body>

<?php


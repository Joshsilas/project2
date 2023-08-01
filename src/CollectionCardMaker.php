<?php

class CollectionCardMaker {
    private string $name;
    private string $playercount;
    private string $difficulty;
    private string $description;

    public function __construct($name, $playercount, $difficulty, $description)
    {
         $this->name = $name;
         $this->playercount = $playercount;
         $this->difficulty = $difficulty;
         $this->description = $description;
    }
    public function createGameCard()
    {
     return 
        "<section class = 'board-game-section'>		
		    <h2>$this->name</h2>
		    <p>The Player Count is $this->playercount players</p>
		    <p>The difficulty to learn is $this->difficulty/5</p>
		    <p>$this->description</p>
	    </section>";
    }
}

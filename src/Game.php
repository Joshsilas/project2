<?php

class Game {
    private string $name;
    private string $playerCount;
    private int $difficulty;
    private string $description;

    public function __construct(string $name,string $playerCount,int $difficulty,string $description)
    {
        $this->name = $name;
        $this->playerCount = $playerCount;
        $this->difficulty = $difficulty;
        $this->description = $description;
    }
    public function createGameCard()
    {
    return 
        '<section class="board-game-section"> 		
            <h2>' . $this->name . '</h2> 
            <p>The player count is ' . $this->playerCount . ' players</p> 
            <p>The difficulty to learn is ' . $this->difficulty . '/5</p>
            <p>' . $this->description . '</p>
        </section>';
    }
}

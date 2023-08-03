<?php

require('../src/Game.php');

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase {

    public function test_success_create_game_card()
    {   
    $name = 'wow';
    $playerCount = '2 - 4';
    $difficulty = '2';
    $description = 'blah';

    $game = new Game($name, $playerCount, $difficulty, $description);
    $expectedResult = 
        '<section class="board-game-section"> 		
            <h2>wow</h2> 
            <p>The player count is 2 - 4 players</p> 
            <p>The difficulty to learn is 2/5</p>
            <p>blah</p>
        </section>';

    $actualResult = $game->createGameCard();
    $this->assertEquals($expectedResult, $actualResult);
    }
}

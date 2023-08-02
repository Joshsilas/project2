<?php

require('../src/collectioncardmaker.php');

use PHPUnit\Framework\TestCase;

class CollectionCardMakerTest extends TestCase {


public function testcreateGameCard()
{
   
    $name = 1;
    $playercount = '2 - 4';
    $difficulty = '2';
    $description = 'blah';

    $creategamecard = new CollectionCardMaker($name, $playercount, $difficulty, $description);
    $outcome = 
    "<section class = 'board-game-section'>		
        <h2>1</h2>
        <p>The Player Count is 2 - 4 players</p>
        <p>The difficulty to learn is 2/5</p>
        <p>blah</p>
    </section>";

$result = $creategamecard->createGameCard();
    $this->assertEquals($outcome, $result);
}
}

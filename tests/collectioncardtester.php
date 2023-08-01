<?php

require_once('../index.php');

use PHPUnit\Framework\TestCase;

class collectioncardcreater extends TestCase {

public function testgreet() 
{
    $name = 'catan';
    $difficulty = '2';
    $playercount = '2 - 4';
    $description = 'blah';

   
    $result = CollectionCardMaker($boardgame['name'], $boardgame['playercount'], $boardgame['difficulty'], $boardgame['description']);

    $this->assertEquals($boardgame['catan']. $boardgame['2']. $boardgame['2-4']. $boardgame['description'] . $result);
}
}
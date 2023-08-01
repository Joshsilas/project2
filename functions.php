<?php
$db = new PDO('mysql:host=db;dbname=boardgames', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db ->prepare("SELECT `name`, `description`, `playercount`, `difficulty` FROM `boardgames`");
$query->execute();
$boardgames = $query->fetchAll();

class collectioncardmaker {
    public string $name;
    public string $playercount;
    public string $difficulty;
    public string $description;

public function __construct($name, $playercount, $difficulty, $description)
{
    $this->name =$name;
    $this->playercount =$playercount;
    $this->difficulty =$difficulty;
    $this->description =$description;
}
public function creategamecard()
{
    return "
    <section class = 'board-game-section'>		
		<h2> $this->name </h2>
		<p>The Player Count is $this->playercount players</p>
		<p> The difficulty to learn is $this->difficulty/5</p>
		<p>$this->description </p>
	</section>	";
}
}

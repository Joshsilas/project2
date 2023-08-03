# ************************************************************
# Sequel Ace SQL dump
# Version 20048
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.0.2-MariaDB-1:11.0.2+maria~ubu2204)
# Database: boardgames
# Generation Time: 2023-08-02 09:51:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table boardgames
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boardgames`;

CREATE TABLE `boardgames` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(251) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `playercount` varchar(11) DEFAULT NULL,
  `difficulty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `boardgames` WRITE;
/*!40000 ALTER TABLE `boardgames` DISABLE KEYS */;

INSERT INTO `boardgames` (`id`, `name`, `description`, `playercount`, `difficulty`)
VALUES
	(1,'Catan','Catan is a board game in which you compete to gather resources and build the biggest settlements on the fictional island of Catan.','2 - 4',1),
	(2,'Scythe','Scythe is an engine-building, asymmetric, competitive board game set in an alternate-history 1920s period. It is a time of farming and war, broken hearts and rusted gears, innovation and valor.','1 - 6',3),
	(3,'Viticulture','You\'re an Italian vineyard owner who is in charge of a group of workers, with the sole goal of growing grapes that can be harvested and made into various types of wine. The game follows the seasons of the year. During these seasons, you are afforded as many actions as you have workers.','1 - 6',3),
	(4,'Root','Root is a game of adventure and war where players battle for control of a vast wilderness. The nefarious Marquise de Cat has seized the great woodland, intent on harvesting its riches. Under her rule, the many creatures of the forest have banded together.','2- 6',5),
	(5,'Lost ruins of arnak','Lost Ruins of Arnak combines deck building and worker placement in a game of exploration, resource management, and discovery: In addition to traditional deckbuilder effects, cards can also be used to place workers. New worker actions become available as players explore the island.','1 - 4',2),
	(6,'Scrabble','Scrabble, board-and-tile game in which players compete in forming words with lettered tiles on a 225-square board; words spelled out by letters on the tiles interlock like words in a crossword puzzle. Players draw seven tiles from a pool at the start and replenish their supply after each turn.','2 - 4',1);

/*!40000 ALTER TABLE `boardgames` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

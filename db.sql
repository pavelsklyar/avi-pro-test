# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: 127.0.0.1 (MySQL 5.7.25-0ubuntu0.18.04.2)
# Схема: aviprotest
# Время создания: 2019-09-05 18:55:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы randomvalues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `randomvalues`;

CREATE TABLE `randomvalues` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(15) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `randomvalues` WRITE;
/*!40000 ALTER TABLE `randomvalues` DISABLE KEYS */;

INSERT INTO `randomvalues` (`id`, `value`, `type`, `length`)
VALUES
	(1,'4','int',1),
	(2,'27326','int',5),
	(3,'KJ05d','stringnum',5),
	(4,'7gsS3gNOKwe','stringnum',11),
	(5,'W9C5P31D29T578U07K41Q70IPK9IS0UJS5H33V36521UM29A41','stringnum',50),
	(6,'ZrjXArFOSNPdmlTAKbBGBzjTqIGtLdidIQmOamosIwDhvTfRWq','string',50),
	(7,'QCIsmNNBwRJhuEUsjIvEBjSgSyBUTxsPsUkCVVfgmqWndGJjUY','string',50),
	(8,'39068','int',5),
	(9,'42321','int',5),
	(10,'43392','int',5),
	(11,'62905','int',5),
	(12,'48318','int',5),
	(13,'36881','int',5),
	(14,'11884','int',5),
	(15,'YNRbvyGFtajZlFGxYQEuvSlFrydrFAopcfNlbOCKHxRZaPJJZC','string',50),
	(16,'wqeaFPdOyvoYyrfMbFCpPZzlKdicrtWqtBbLElcGIhWonEENHl','string',50),
	(17,'zTFSt','string',5),
	(18,'9223372036854775807','int',50),
	(19,'90399','int',5),
	(20,'9223372036854775807','int',50),
	(21,'SieWh','string',5);

/*!40000 ALTER TABLE `randomvalues` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

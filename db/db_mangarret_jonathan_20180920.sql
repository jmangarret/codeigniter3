-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2018-09-20 23:05:56
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for db_mangarret_jonathan_20180920
CREATE DATABASE IF NOT EXISTS `db_mangarret_jonathan_20180920` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_mangarret_jonathan_20180920`;


-- Dumping structure for table db_mangarret_jonathan_20180920.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table db_mangarret_jonathan_20180920.user: ~8 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `gender`, `telephone`, `age`) VALUES
	(1, 'Rosanny', 'Oropeza', 'rosanny.oropeza82@gmail.com', 'F', '3055920839', 23),
	(3, 'Juana', 'Guzman', 'rosanny.oropeza82@gmail.com', 'F', '3055920839', 34),
	(4, 'Maria', 'Perez', 'rosanny.oropeza82@gmail.com', 'F', '3055920839', 40),
	(5, 'Cesar', 'Mendoza', 'jhondoe@gmail.com', 'M', '1111111111111', 32),
	(6, 'Juan', 'Ezpinoza', 'jhondoe@gmail.com', 'M', '3055920839', 23),
	(8, 'Camilo', 'Garcia', 'jhondoe@gmail.com', 'M', '3055920839', 26),
	(9, 'Martha', 'Sanchez', 'rosanny.oropeza82@gmail.com', 'F', '3055920839', 22),
	(10, 'Jesus', 'Diaz', 'jhondoe@gmail.com', 'M', '3055920839', 19);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

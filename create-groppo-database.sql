DROP DATABASE IF EXISTS `SQL_GROPPO`;
CREATE DATABASE `SQL_GROPPO`;
USE `SQL_GROPPO`;

SET NAMES utf8;
SET character_set_client = utf8;

CREATE TABLE `Contacts` (
	`id` int AUTO_INCREMENT NOT NULL,
	`nom` varchar(20) NOT NULL,
    `prenoms` varchar(50),
    `telephone` varchar(15) DEFAULT NULL,
    `region` varchar(50),
    PRIMARY KEY (`id`)
    ) CHARSET=utf8mb4;
    
INSERT INTO `Contacts` VALUES (1, 'Thomas', 'LERAY', '0608860598', 'Normandie');
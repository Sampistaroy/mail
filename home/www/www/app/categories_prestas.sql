-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 15 Avril 2015 à 21:18
-- Version du serveur: 5.5.40
-- Version de PHP: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `standard`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories_prestas`
--

CREATE TABLE IF NOT EXISTS `categories_prestas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `categories_prestas`
--

INSERT INTO `categories_prestas` (`id`, `parent_id`, `lft`, `rght`, `name`, `structure_id`) VALUES
(2, NULL, 15, 18, 'Fun top', 10),
(3, 15, 9, 10, 'Surfing', 10),
(9, NULL, 1, 14, 'Work', 10),
(10, 9, 2, 13, 'Reports', 10),
(12, 10, 3, 4, 'Status', 10),
(13, 10, 5, 12, 'Trips', 10),
(14, 13, 6, 7, 'National', 10),
(15, 13, 8, 11, 'International', 10),
(20, 2, 16, 17, 'yoyo', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

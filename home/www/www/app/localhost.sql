-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 15 Avril 2015 à 21:20
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
CREATE DATABASE `standard` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `standard`;

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

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

CREATE TABLE IF NOT EXISTS `prestations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prestationname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visible` varchar(50) NOT NULL,
  `categories_presta_id` int(10) unsigned NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `prestations`
--

INSERT INTO `prestations` (`id`, `prestationname`, `description`, `visible`, `categories_presta_id`, `structure_id`) VALUES
(1, 'nom1', 'description1', 'visi', 2, 10),
(2, 'nom2', 'description2', 'cache', 3, 10),
(3, 'nom3', 'description2', 'cache', 3, 10);


















--
-- Structure de la table `histos`
--

CREATE TABLE IF NOT EXISTS `histos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `histos`
--

INSERT INTO `histos` (`id`, `contenu`, `structure_id`) VALUES
(1, '<p><strong>rtytyrrtyr</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>', 10);

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `structurename` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `rue_numero` mediumint(8) unsigned NOT NULL,
  `rue_name` varchar(255) NOT NULL,
  `code_postal` int(10) unsigned NOT NULL,
  `geoloc_x` varchar(255) NOT NULL,
  `geoloc_y` varchar(255) NOT NULL,
  `telephone` int(10) unsigned NOT NULL,
  `mail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `structurename`, `logo`, `pays`, `region`, `ville`, `rue_numero`, `rue_name`, `code_postal`, `geoloc_x`, `geoloc_y`, `telephone`, `mail`, `description`, `structure_id`) VALUES
(1, 'Squash 22', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', 'Club de squash/tennis de la région liégeois.', 9),
(2, 'Squash 2222', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', 'Club de squash/tennis de la région liégeois.', 11),
(3, 'Squash 20', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', '<h1 style="color: #ff0000;">Club de squash/tennis de la r&eacute;gion li&eacute;geois.</h1>\r\n<p>Nous exitons depuis 10 ans</p>', 10);

-- --------------------------------------------------------

--
-- Structure de la table `nouvelles`
--

CREATE TABLE IF NOT EXISTS `nouvelles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `create` datetime NOT NULL,
  `update` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  `visible` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `nouvelles`
--

INSERT INTO `nouvelles` (`id`, `titre`, `description`, `contenu`, `create`, `update`, `user_id`, `structure_id`, `visible`) VALUES
(1, 'Ma premire News', 'cest mon premier new il parle de rien', 'Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu ', '2015-04-10 00:07:25', '2015-04-10 00:07:25', 1, 10, 'visi'),
(2, 'ma seconde News', 'cest ma seconde news', '<p><strong>Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu</strong></p>', '2015-04-10 00:08:25', '2015-04-10 00:09:25', 1, 10, 'visi'),
(6, 'ghj', 'ghj', '<p><img src="../../js/tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" />fhjudfqsdqsdqs</p>\r\n<table style="height: 89px;" width="329">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h1 style="color: #ff0000;"><span style="text-decoration: underline;">ghj</span></h1>', '2015-04-14 00:24:03', '0000-00-00 00:00:00', 22, 10, 'visi');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `prestations_receptacles`
--

CREATE TABLE IF NOT EXISTS `prestations_receptacles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prestation_id` int(10) unsigned NOT NULL,
  `receptacle_id` int(10) unsigned NOT NULL,
  `nb_fois_creneau` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `prestations_receptacles_options`
--

CREATE TABLE IF NOT EXISTS `prestations_receptacles_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `optionname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tarifs` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `receptacles`
--

CREATE TABLE IF NOT EXISTS `receptacles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `receptaclename` varchar(255) NOT NULL,
  `nb_ticket` int(10) unsigned NOT NULL,
  `nb_place` int(10) unsigned NOT NULL,
  `temps` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `structures`
--

CREATE TABLE IF NOT EXISTS `structures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visible` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `structures`
--

INSERT INTO `structures` (`id`, `visible`) VALUES
(9, 'cache'),
(10, 'cache'),
(11, 'cache'),
(12, 'cache'),
(13, 'cache');

-- --------------------------------------------------------

--
-- Structure de la table `structures_users`
--

CREATE TABLE IF NOT EXISTS `structures_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `structure_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `structures_users`
--

INSERT INTO `structures_users` (`id`, `structure_id`, `user_id`, `role`) VALUES
(4, 9, 21, 'owner'),
(5, 10, 22, 'owner'),
(6, 11, 23, 'owner'),
(7, 12, 24, 'owner'),
(8, 9, 22, 'admin'),
(9, 11, 22, 'gest'),
(10, 13, 25, 'owner');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `mail`) VALUES
(21, 'admin', 'ba2eb41777096ee0396cd58f3fed8e97dda0bea3', NULL, '2015-04-12 04:24:36', '2015-04-12 04:24:36', 'admin@admin.com'),
(22, 'samp', '889e91456c70a4c9df80ef12c394d1850e570763', NULL, '2015-04-12 14:32:05', '2015-04-12 14:32:05', 'samp@samp.com'),
(23, 'membre', 'c7fb4ea1e43ac691be6508d9507e840773c552bc', NULL, '2015-04-12 14:35:13', '2015-04-12 14:35:13', 'membre@membre.com'),
(24, 'gest', '41f6e8138041c6f0f5db2d5fb358160c9ceb45a3', NULL, '2015-04-12 14:36:02', '2015-04-12 14:36:02', 'gest@gest.com'),
(25, 'agentcobra', '13a5101e8114fc3c26b2d9c52b2968f8672c95c9', NULL, '2015-04-15 21:09:29', '2015-04-15 21:09:29', 'agentcobra57@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

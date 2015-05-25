-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 25 Avril 2015 à 17:46
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `categories_prestas`
--

INSERT INTO `categories_prestas` (`id`, `parent_id`, `lft`, `rght`, `name`, `structure_id`) VALUES
(9, NULL, 19, 24, 'Work ug  uu ', 10),
(14, 9, 20, 23, 'National', 10),
(15, 14, 21, 22, 'International', 10),
(24, NULL, 17, 18, 'hoho', 9),
(29, 0, 7, 8, 'Hébergement', 16),
(30, 0, 9, 10, 'Restauration', 16),
(34, NULL, 3, 6, 'Hébergement', 17),
(35, 0, 11, 14, 'Restauration', 17),
(36, 0, 15, 16, 'Fun top', 17),
(37, 34, 4, 5, 'Vue sur mer', 17),
(40, 35, 12, 13, 'hoho', 17),
(41, NULL, 1, 2, 'salut', 9),
(43, 0, 25, 26, 'work 11', 11);

-- --------------------------------------------------------

--
-- Structure de la table `cat_opts`
--

CREATE TABLE IF NOT EXISTS `cat_opts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_optname` varchar(255) NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `cat_opts`
--

INSERT INTO `cat_opts` (`id`, `cat_optname`, `structure_id`) VALUES
(1, 'inclus', 10),
(2, 'suppl.', 10),
(3, 'salut', 10),
(4, 'salut2', 10);

-- --------------------------------------------------------

--
-- Structure de la table `cat_opt_prestas`
--

CREATE TABLE IF NOT EXISTS `cat_opt_prestas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_opt_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  `prestation_id` int(10) unsigned NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  `opt_nv_prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- Contenu de la table `cat_opt_prestas`
--

INSERT INTO `cat_opt_prestas` (`id`, `cat_opt_id`, `option_id`, `prestation_id`, `structure_id`, `opt_nv_prix`) VALUES
(22, 0, 10, 3, 10, 0),
(24, 1, 12, 3, 10, 0),
(26, 0, 16, 17, 16, 0),
(27, 0, 17, 22, 16, 0),
(28, 0, 18, 21, 16, 0),
(29, 0, 19, 17, 16, 0),
(30, 0, 20, 21, 16, 0),
(31, 0, 21, 23, 17, 0),
(32, 0, 22, 23, 17, 0),
(33, 0, 23, 23, 17, 0),
(34, 0, 24, 23, 17, 0),
(37, 2, 25, 3, 10, 0),
(38, 1, 11, 3, 10, 0),
(39, 0, 14, 3, 10, 0),
(40, 1, 10, 0, 10, 0),
(44, 0, 26, 10, 9, 0),
(46, 1, 25, 0, 10, 0),
(49, 1, 30, 0, 10, 546),
(61, 0, 12, 16, 0, NULL),
(64, 1, 12, 16, 0, NULL),
(69, 0, 29, 32, 10, 4567),
(73, 0, 35, 0, 10, NULL),
(79, 1, 13, 27, 10, NULL),
(80, 3, 25, 27, 10, NULL),
(81, 3, 13, 27, 10, NULL),
(82, 1, 13, 32, 10, NULL),
(83, 1, 29, 32, 10, NULL),
(84, 3, 13, 32, 10, NULL),
(85, 1, 25, 32, 10, NULL),
(86, 1, 30, 32, 10, NULL),
(87, 2, 25, 32, 10, NULL),
(88, 4, 13, 32, 10, NULL),
(89, 4, 30, 32, 10, NULL),
(90, 2, 30, 32, 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `histos`
--

CREATE TABLE IF NOT EXISTS `histos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `histos`
--

INSERT INTO `histos` (`id`, `contenu`, `structure_id`) VALUES
(1, '<p><strong>rtytyrrtyr</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong>\r\n<p>&nbsp;</p>\r\n<p><strong>Voici ma structure,<br /></strong></p>\r\n<h1 style="text-align: center; color: #ff0000;"><strong>ma structure je l''adore,</strong></h1>\r\n<ul style="list-style-type: circle;">\r\n<li><strong>ma structure c''est la plus belle des structures.</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>', 10),
(2, '<p>structure de azer salut salut</p>', 16),
(3, 'structure de :qsd', 17);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `structurename`, `logo`, `pays`, `region`, `ville`, `rue_numero`, `rue_name`, `code_postal`, `geoloc_x`, `geoloc_y`, `telephone`, `mail`, `description`, `structure_id`) VALUES
(1, 'foot 22', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', '', 9),
(2, 'tennis 2222', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', 'Club de squash/tennis de la région liégeois.', 11),
(3, 'Squash 20', 'logo.png', 'belgique', 'liège', 'liège', 22, 'rue des gillemins', 4000, '000.000.000', '000.000.000', 123456789, 'squash22@squash22.com', '<h1 style="color: #ff0000;">Club de squash/tennis de la r&eacute;gion li&eacute;geois.</h1>\r\n<p>Nous exitons depuis 10 ans</p>', 10),
(4, 'azer', 'logo.png', '', '', '', 0, '', 0, '', '', 0, '', '', 16),
(5, 'qsd', 'logo.png', '', '', '', 0, '', 0, '', '', 0, '', '', 17);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `nouvelles`
--

INSERT INTO `nouvelles` (`id`, `titre`, `description`, `contenu`, `create`, `update`, `user_id`, `structure_id`, `visible`) VALUES
(1, 'Ma premire News', 'cest mon premier new il parle de rien', 'Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu ', '2015-04-10 00:07:25', '2015-04-10 00:07:25', 1, 10, 'visi'),
(2, 'ma seconde News', 'cest ma seconde news', '<p><strong>Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu Lorem ipsu</strong></p>', '2015-04-10 00:08:25', '2015-04-10 00:09:25', 1, 10, 'visi'),
(6, 'ghj', 'ghj', '<p><img src="../../js/tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" />fhjudfqsdqsdqs</p>\r\n<table style="height: 89px;" width="329">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h1 style="color: #ff0000;"><span style="text-decoration: underline;">ghj</span></h1>', '2015-04-14 00:24:03', '0000-00-00 00:00:00', 22, 10, 'visi'),
(12, 'azeezaze', 'azeazeaz', '<p>eazeazeazeaz</p>', '2015-04-20 14:18:47', '0000-00-00 00:00:00', 22, 10, 'visi'),
(13, 'ma première news', 'salut salut', '<p>au revoir au revoir</p>', '2015-04-20 16:13:45', '0000-00-00 00:00:00', 28, 16, 'visi');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `optionname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` varchar(120) NOT NULL,
  `structure_id` int(10) unsigned NOT NULL,
  `visible` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `options`
--

INSERT INTO `options` (`id`, `optionname`, `description`, `prix`, `structure_id`, `visible`) VALUES
(13, 'petit déjeuné', 'Buffet à volonté de 7h à 10h30', '5', 10, 'cache'),
(15, 'option 1', 'option 1', 'inclus', 16, 'cache'),
(16, 'option n°3', 'option 3', 'inclus', 16, 'cache'),
(17, 'pinar à volonté', '', '5', 16, 'cache'),
(18, 'tente 2 places', '70', 'inclus', 16, 'cache'),
(19, 'avec petit déjeuné', '', '5', 16, 'cache'),
(20, 'petit dej', '', 'inclus', 16, 'cache'),
(21, 'petit déjeuné', 'buffet de 7h a 10h30', 'inclus', 17, 'cache'),
(22, 'repas soir', '', 'inclus', 17, 'cache'),
(23, 'repas midi', '', 'inclus', 17, 'cache'),
(24, 'gouter', '', 'inclus', 17, 'cache'),
(25, 'lit de paille', 'De la paille qui aurait pus servir a nourir les bestiaux constituera votre matelat et votre sommier, rien de tel pour remettre les vertèbres.', 'inclus', 10, 'cache'),
(26, 'lit de paille', 'un lit', 'inclus', 9, 'cache'),
(29, 'option n°1', '<p>aezaazreeez</p>', 'inclus', 10, 'cache'),
(30, 'option n°3', '', 'inclus', 10, 'cache'),
(33, 'sampp', '', 'inclus', 10, 'cache');

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
  `prix` varchar(120) NOT NULL,
  `a_la_Une` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `prestations`
--

INSERT INTO `prestations` (`id`, `prestationname`, `description`, `visible`, `categories_presta_id`, `structure_id`, `prix`, `a_la_Une`) VALUES
(2, 'bapteme', '<p>D&eacute;couvrez les fonds marins en bonne compagnie et sans risques</p>', 'cache', 15, 10, '50', 0),
(7, 'Prestation n°3', '<p>fdgssgesrrtet</p>', 'visi', 24, 9, '0', 0),
(10, 'azeazeaze', '<p>azeazeaze</p>', 'visi', 0, 9, '10', 0),
(15, 'prestation n°4', '<p>voila voila</p>', 'visi', 41, 9, '0', 0),
(16, 'hebergement 2 personnes', '<p>nous louons une petite <strong>SUPERBE grange </strong></p>', 'visi', 15, 10, '80', 0),
(17, 'Chambre Simple', '<p>avec vue sur la rue</p>', 'visi', 29, 16, '', 0),
(20, 'chambre double', '<p>avec vue sur la cour</p>', 'visi', 29, 16, '', 0),
(21, 'camping ??', '<p>proposerons nous du camping dans l''avenir</p>', 'visi', 0, 16, '', 0),
(22, 'Repas semaine le midi', '<p>Menu &agrave; la carte avec plat du jour</p>', 'visi', 30, 16, '', 0),
(23, 'Chambre Simple', '', 'visi', 37, 17, '70', 0),
(24, 'sdgfbvn', '<p>qsdfghj</p>', 'visi', 40, 17, '', 0),
(25, 'qsdfgd', '<p>sqdfg</p>', 'visi', 35, 17, '', 0),
(26, 'chambre double', '', 'visi', 37, 17, '', 0),
(27, 'Niveau 2 FFESSM', '<p>acqui&egrave;re plus d''exp&eacute;rience en passant le niveau 2</p>\r\n<p>et plus de s&eacute;curit&eacute; en se g&eacute;rant mieu.</p>', 'visi', 14, 10, '150', 0),
(29, 'Mouakkkkkk', '<p><img src="../../js/tinymce/plugins/emoticons/img/smiley-kiss.gif" alt="kiss" />&nbsp;&lt;3</p>', 'visi', 0, 10, '', 0),
(32, 'xvbcvnfbhn', '<p>wxcvbn,;</p>', 'visi', 14, 10, 'xdvgfcvhbjn,k', 0);

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
  `structure_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `receptacles`
--

INSERT INTO `receptacles` (`id`, `receptaclename`, `nb_ticket`, `nb_place`, `temps`, `structure_id`) VALUES
(1, 'receptacle n°1', 0, 0, '0000-00-00 00:00:00', 10);

-- --------------------------------------------------------

--
-- Structure de la table `structures`
--

CREATE TABLE IF NOT EXISTS `structures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visible` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `structures`
--

INSERT INTO `structures` (`id`, `visible`) VALUES
(9, 'cache'),
(10, 'cache'),
(11, 'cache'),
(12, 'cache'),
(13, 'cache'),
(16, 'cache'),
(17, 'cache');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `structures_users`
--

INSERT INTO `structures_users` (`id`, `structure_id`, `user_id`, `role`) VALUES
(4, 9, 21, '1'),
(5, 10, 22, '1'),
(6, 11, 23, '1'),
(7, 12, 24, '1'),
(8, 9, 22, '2'),
(9, 11, 22, '3'),
(10, 13, 25, '1'),
(13, 16, 28, '1'),
(14, 17, 29, '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `mail`) VALUES
(21, 'admin', '1b101d8cc32b4a3d4c5d37dc311109cb8fa60de7', NULL, '2015-04-12 04:24:36', '2015-04-20 13:30:22', 'admin@admin.com'),
(22, 'samp', '1b101d8cc32b4a3d4c5d37dc311109cb8fa60de7', NULL, '2015-04-12 14:32:05', '2015-04-19 21:59:47', 'samp@samp.com'),
(23, 'membre', 'c7fb4ea1e43ac691be6508d9507e840773c552bc', NULL, '2015-04-12 14:35:13', '2015-04-12 14:35:13', 'membre@membre.com'),
(24, 'gest', '41f6e8138041c6f0f5db2d5fb358160c9ceb45a3', NULL, '2015-04-12 14:36:02', '2015-04-12 14:36:02', 'gest@gest.com'),
(28, 'azer', '24681f3e71beddc55b5937acdf937e7597e7a0c3', NULL, '2015-04-20 14:16:13', '2015-04-20 14:16:13', 'azer@azer.azer'),
(29, 'qsd', '3b90a3be1fc266831ce1ddff6dad28f66c566818', NULL, '2015-04-20 19:19:07', '2015-04-20 19:19:07', 'qsdqsd@qsd.qsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

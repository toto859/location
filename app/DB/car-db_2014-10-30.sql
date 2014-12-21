-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Jeu 30 Octobre 2014 à 18:50
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `car`
--

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
`ID` int(11) NOT NULL,
  `IMAGE` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `AJOUT` datetime NOT NULL,
  `COMMENTAIRE` text COLLATE utf8_bin NOT NULL,
  `AUTEUR` varchar(100) COLLATE utf8_bin NOT NULL,
  `COM_VISIBLE` int(11) NOT NULL DEFAULT '1',
  `vehicule_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=94 ;

--
-- Contenu de la table `details`
--

INSERT INTO `details` (`ID`, `IMAGE`, `AJOUT`, `COMMENTAIRE`, `AUTEUR`, `COM_VISIBLE`, `vehicule_id`) VALUES
(88, NULL, '2014-10-21 00:00:00', 'salut :)', 'toine', 1, 51),
(89, NULL, '2014-10-21 00:00:00', 'salut :)', 'toine', 1, 51),
(90, NULL, '2014-10-30 00:00:00', 'Bien aimer mon voyage en Tesla avec toute ma famille!', 'Antoine', 1, 62),
(91, NULL, '2014-10-31 00:00:00', 'Super bonne voitre cette Honda', 'Johnny', 1, 64),
(92, NULL, '2014-10-30 00:00:00', 'MALADE LA FORT V6', 'TOTO', 1, 65),
(93, NULL, '2014-11-06 00:00:00', 'Je la trouve Malade aussi la Fort avec son gros moteur', 'Frere de TOTO', 1, 65);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$gA9k9eNqy/8gQSczvHjrM.Fl2O206cpJINGYkzolgU2VWwkFhRF0.', 'admin', '2014-10-28 18:40:26', '2014-10-28 18:40:26');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
`ID` int(11) NOT NULL,
  `KILO` int(11) DEFAULT NULL,
  `RETOUR` int(2) DEFAULT NULL,
  `MOTEUR` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `PASSAGER` int(1) NOT NULL,
  `NOM` varchar(15) COLLATE utf8_bin NOT NULL,
  `EMAIL` text COLLATE utf8_bin
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=67 ;

--
-- Contenu de la table `vehicules`
--

INSERT INTO `vehicules` (`ID`, `KILO`, `RETOUR`, `MOTEUR`, `PASSAGER`, `NOM`, `EMAIL`) VALUES
(51, 157, 2, 'P8', 7, 'Tesla', 'toto@msn.com'),
(62, 1005, 3, 'P6', 5, 'Tesla', 'antoine859@msn.com'),
(63, 5201, 1, 'P8', 7, 'Tesla', 'antoine859@msn.com'),
(64, 55541, 2, '4c', 5, 'Honda', 'toto@hotmail.ca'),
(65, 277852, 3, 'V6', 3, 'Ford', 'yo@hot.com'),
(66, 154466, 4, '4C', 2, 'Toyota', 'toyo@hotmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`ID`), ADD KEY `vehicules_id` (`vehicule_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

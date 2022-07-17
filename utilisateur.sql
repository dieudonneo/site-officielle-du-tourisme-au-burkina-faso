-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 juil. 2022 à 17:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `utilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeur`
--

DROP TABLE IF EXISTS `developpeur`;
CREATE TABLE IF NOT EXISTS `developpeur` (
  `NUM_utilisateur` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  PRIMARY KEY (`NUM_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dialogue`
--

DROP TABLE IF EXISTS `dialogue`;
CREATE TABLE IF NOT EXISTS `dialogue` (
  `Id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Question` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dialogue`
--

INSERT INTO `dialogue` (`Id`, `Nom`, `Prenom`, `Mail`, `Question`) VALUES
(1, 'Porgo', 'Samira', 'ramiz@gmail.com', 'eqfuzjyzeq'),
(2, 'azerty', 'qwerty', 'azerty@gmail', 'azertyuio'),
(3, 'Baribari', 'Ahmed', 'ramiz@gmail.com', 'azertyuio'),
(4, 'fghj', 'Aichatou', 'ramiz@gmail.com', 'sdfgv fghj fdgh'),
(5, 'azertetdgfhj', 'Samira', 'ramiz@gmail.com', 'azerty'),
(6, 'jhsref', 'hsfkjg', 'azerty@gmail', 'shfjkdg'),
(7, 'Porgo', 'Aichatou', 'ramiz@gmail.com', 'fdgbh,n'),
(8, 'fgh', 'ghn', 'coulibaly@gmail.com', 'reghngh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

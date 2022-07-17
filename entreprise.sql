-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 juil. 2022 à 12:22
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
-- Base de données : `entreprise`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `ajouter_client`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ajouter_client` (`Nom` VARCHAR(20), `Prenom` VARCHAR(20), `Age` TINYINT, `Sexe` VARCHAR(12), `Num_Tel` INT, `Adresse` VARCHAR(20), `Pays` VARCHAR(20), `Ville` VARCHAR(20), `Mail` VARCHAR(20))  begin
          
         insert into client(Nom,Prenom,Age,Sexe,Num_Tel,Adresse,Pays,Ville,Mail) values(Nom,Prenom,Age,Sexe,Num_Tel,Adresse,Pays,Ville,Mail);  
         end$$

DROP PROCEDURE IF EXISTS `ajouter_reservation`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ajouter_reservation` (`Code_client` VARCHAR(8), `id_client` INT, `Site_visite` VARCHAR(30), `Date_visite` VARCHAR(20))  begin
           insert into Reservation(Code_client, id_client, Site_visite, Date_visite) values(Code_client,id_client,Site_visite,Date_visite);  
         end$$

DROP PROCEDURE IF EXISTS `selection_client`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selection_client` (`Code_client` VARCHAR(8), `id_client` INT)  begin
          SELECT Client.Nom,Client.Prenom,Client.Age,Client.Sexe,Client.Num_Tel,Client.Adresse,Client.Pays,Client.Ville,Client.Mail,Reservation.Site_visite,Reservation.Date_visite
            FROM Client
            INNER JOIN Reservation ON Client.id_client = Reservation.id_client
          WHERE Client.id_client=id_client AND Reservation.Code_client=Code_client;
          end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` mediumint(9) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Sexe` varchar(12) NOT NULL,
  `Num_Tel` int(8) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `Pays` varchar(20) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `Mail` varchar(40) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `Nom`, `Prenom`, `Age`, `Sexe`, `Num_Tel`, `Adresse`, `Pays`, `Ville`, `Mail`) VALUES
(1, 'azerty', 'qwerty', 12, 'Homme', 12014520, 'secteur20', 'Burkina', 'bobo', 'azerty@gmail.com'),
(2, 'hdfbdf', 'jkfg', 52, 'dfvg', 54154755, 'jhfnvdn', 'ghjnjk', 'ghjn', 'gfh@gmail.com'),
(3, 'coulibaly', 'detfh', 7, 'Homme', 12141015, 'Secteur 52', 'Burkina', '41121017', 'dieudonne@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Code_client` varchar(8) NOT NULL,
  `id_client` int(11) NOT NULL,
  `Site_visite` varchar(30) NOT NULL,
  `Date_visite` varchar(20) NOT NULL,
  PRIMARY KEY (`Code_client`),
  KEY `fk_client_code` (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Code_client`, `id_client`, `Site_visite`, `Date_visite`) VALUES
('Mkh8Iug5', 0, 'LES DÃ”MES DE FABÃ‰DOUGOU', '12/08/2001'),
('qwerty', 1, 'aodkfkf', '12-04-2001');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

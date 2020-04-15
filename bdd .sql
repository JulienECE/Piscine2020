-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 avr. 2020 à 15:09
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `PRIX` double(255,0) NOT NULL,
  `PHOTO` varchar(255) NOT NULL,
  `VIDEO` varchar(255) NOT NULL,
  `NOM_VENDEUR` varchar(255) NOT NULL,
  `NOM_ACHETEUR` varchar(255) NOT NULL,
  `ETAT` tinyint(1) NOT NULL,
  `CATEGORIE` varchar(255) NOT NULL,
  `SCATEGORIE` varchar(255) NOT NULL,
  `TYPE_VENTE` varchar(255) NOT NULL,
  `TEMPS` double(255,0) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PHOTO` varchar(255) NOT NULL,
  `ADMIN` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `log`
--

INSERT INTO `log` (`ID`, `NOM`, `EMAIL`, `PHOTO`, `ADMIN`) VALUES
(1, 'Valentin', 'valentin.martins78800@gmail.com', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

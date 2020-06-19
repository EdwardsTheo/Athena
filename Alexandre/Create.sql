-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 mai 2020 à 12:35
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `freq`
--

-- --------------------------------------------------------

--
-- Structure de la table `frequentation`
--

DROP TABLE IF EXISTS `frequentation`;
CREATE TABLE IF NOT EXISTS `frequentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_adress` varchar(25) NOT NULL,
  `connex_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `frequentation`
--

INSERT INTO `frequentation` (`id`, `ip_adress`, `connex_date`) VALUES
(1, '112.216.169.185', '2020-05-20'),
(2, '1.6.66.168', '2020-05-05'),
(10, '189.95.156.178', '2020-05-05'),
(4, '189.95.156.178', '2020-05-01'),
(5, '34.247.224.214', '2020-04-11'),
(6, '208.74.54.152', '2020-02-18'),
(7, '125.1.201.154', '2020-01-18'),
(8, '54.116.109.131', '2019-02-18'),
(9, '236.170.209.21', '2019-01-18'),
(11, '::1', '2020-05-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

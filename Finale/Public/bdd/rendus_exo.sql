-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 03 juil. 2020 à 06:59
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
-- Base de données :  `athena`
--

-- --------------------------------------------------------

--
-- Structure de la table `return_exo`
--

DROP TABLE IF EXISTS `return_exo`;
CREATE TABLE IF NOT EXISTS `return_exo` (
  `id_return_exo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contents_return` blob DEFAULT NULL,
  `progress_exo` enum('pas_lu','en_class','return','valide') NOT NULL DEFAULT 'pas_lu',
  PRIMARY KEY (`id_return_exo`),
  KEY `id_user` (`id_user`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `return_exo`
--

INSERT INTO `return_exo` (`id_return_exo`, `id_user`, `id_exercice`, `contents_return`, `progress_exo`) VALUES
(21, 2, 2, NULL, 'return'),
(22, 2, 3, NULL, 'valide'),
(23, 2, 4, NULL, 'valide'),
(24, 4, 30, NULL, 'return'),
(25, 4, 36, NULL, 'valide'),
(26, 4, 34, NULL, 'en_class'),
(27, 4, 37, NULL, 'valide'),
(28, 3, 31, NULL, 'en_class'),
(29, 3, 33, NULL, 'valide'),
(30, 3, 27, NULL, 'return'),
(31, 3, 36, NULL, 'valide');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `return_exo`
--
ALTER TABLE `return_exo`
  ADD CONSTRAINT `return_exo_ibfk_1` FOREIGN KEY (`id_exercice`) REFERENCES `exercices` (`id_exercice`),
  ADD CONSTRAINT `return_exo_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

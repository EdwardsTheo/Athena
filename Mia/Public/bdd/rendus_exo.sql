-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:8889
-- Généré le :  mar. 09 juin 2020 à 12:59
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `rendus_exo`
--

DROP TABLE IF EXISTS `rendus_exo`;
CREATE TABLE `rendus_exo` (
  `id_rendu_exo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contenu_rendu` blob,
  `progress_exo` enum('en_cours','rendu','valide') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  ADD PRIMARY KEY (`id_rendu_exo`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_exercice` (`id_exercice`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  MODIFY `id_rendu_exo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  ADD CONSTRAINT `rendus_exo_ibfk_1` FOREIGN KEY (`id_exercice`) REFERENCES `exercices` (`id_exercice`),
  ADD CONSTRAINT `rendus_exo_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

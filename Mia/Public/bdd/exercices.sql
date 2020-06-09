-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:8889
-- Généré le :  mar. 09 juin 2020 à 13:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET FOREIGN_KEY_CHECKS=0;
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
-- Structure de la table `exercices`
--

DROP TABLE IF EXISTS `exercices`;
CREATE TABLE `exercices` (
  `id_exercice` int(11) NOT NULL,
  `id_rubrique` int(11) NOT NULL,
  `index_exercice` int(11) DEFAULT NULL,
  `nom_exercice` varchar(55) NOT NULL,
  `consigne_exercice` text NOT NULL,
  `output` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id_exercice`, `id_rubrique`, `index_exercice`, `nom_exercice`, `consigne_exercice`, `output`) VALUES
(1, 2, 1, 'tlec1.js : test de lecture de code', '1 - Que doit afficher ce code ?<br/>\r\n<br/>\r\n// test de lecture de code<br/>\r\n\r\n\"use strict\";<br/>\r\n\r\nlet i;<br/>\r\nlet j;<br/>\r\n\r\ni = 0;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i + 4;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = i + 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i - 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = j;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\n<br/>\r\n2 - Saisissez et exécutez le programme pour vérifier votre réponse', '0 undefined\r\n0 4\r\n1 4\r\n1 0\r\n0 0\r\n0 0\r\n'),
(2, 1, 1, 'mpp.js', 'Avec vim, saisir le programme suivant dans un fichier appelé mpp.js. <br/>\r\nLa zone matérialisée en fluo doit correspondre au caractère tab. <br/>\r\nPour exécuter votre programme, taper dans la console : node mpp.js. <br/>\r\n<br/>\r\n// Mon premier programme de jeu - version 1 <br/>\r\n\r\n\"use strict\"; <br/>\r\n\r\nconst kbd = require(\"kbd\");    // objet clavier <br/>\r\nconst nbSecret = 4;            // nb secret à découvrir <br/>\r\nlet nbJoueur;                  // nb proposé par le joueur <br/>\r\n\r\nconsole.log(\"Il faut deviner un nombre entre 1 et 10\"); <br/>\r\nprocess.stdout.write(\"Quel nombre proposez-vous ? \"); <br/>\r\nnbJoueur = kbd.getLineSync();<br/>\r\nnbJoueur = Number(nbJoueur);<br/>\r\nif(nbJoueur === nbSecret) { <br/>\r\n    console.log(\"Bravo, vous avez trouvé !\"); <br/>\r\n}\r\n', 'bla'),
(3, 1, 2, 'Test ', 'Vous devez tester ça ', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`id_exercice`),
  ADD KEY `id_rubrique` (`id_rubrique`) USING BTREE,
  ADD KEY `index_exercice` (`index_exercice`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `id_exercice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubriques` (`id_rubrique`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

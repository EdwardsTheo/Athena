-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:8889
-- Généré le :  jeu. 14 mai 2020 à 13:54
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
-- Base de données :  `Athena`
--
CREATE DATABASE IF NOT EXISTS `Athena` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Athena`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id_annonce` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_annonce` varchar(20) NOT NULL,
  `date_annonce` date NOT NULL,
  `contenu_annonce` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chapitres`
--

CREATE TABLE `chapitres` (
  `id_chapitre` int(11) NOT NULL,
  `nom_chapitre` varchar(50) NOT NULL,
  `resume` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitres`
--

INSERT INTO `chapitres` (`id_chapitre`, `nom_chapitre`, `resume`) VALUES
(1, 'Prise en main de Linux', 'Dans ce chapitre, vous allez apprendre comment configurer votre machine virtuelle et également \r\ncomment écrire des lignes de codes dans le terminal grâce à VIM.'),
(2, 'Apprendre à programmer', 'Dans ce chapitre, vous allez apprendre à coder en JavaScript. Vous allez également apprendre les bonnes pratiques à utiliser en code.'),
(3, 'Initialisation à HTML5', ''),
(4, 'Structures de données', ''),
(5, 'PERL', '');

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_autre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenu_evals`
--

CREATE TABLE `contenu_evals` (
  `id_contenu_eval` int(11) NOT NULL,
  `id_evaluation` int(11) NOT NULL,
  `id_exo_eval` int(11) NOT NULL,
  `position_exo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `id_rubrique` int(11) NOT NULL,
  `nom_cours` varchar(50) NOT NULL,
  `contenu_cours` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `id_rubrique`, `nom_cours`, `contenu_cours`) VALUES
(1, 1, 'A l\'heure tu seras ', 'Les cours commencent à 8h45'),
(2, 1, 'Enlever tes écouteurs tu feras', 'La musique n\'est pas autorisée quand le professeur parle.'),
(3, 7, 'if...else if...else', 'if (bla == \"bla\") '),
(4, 9, 'tableau', 'array()');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id_evaluation` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `id_exercice` int(11) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  `nom_exercice` varchar(55) NOT NULL,
  `consigne_exercice` text NOT NULL,
  `output` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id_exercice`, `id_chapitre`, `nom_exercice`, `consigne_exercice`, `output`) VALUES
(1, 2, 'tlec1.js : test de lecture de code', '1 - Que doit afficher ce code ?\r\n\r\n// test de lecture de code\r\n\r\n\"use strict\";\r\n\r\nlet i;\r\nlet j;\r\n\r\ni = 0;\r\nconsole.log(i + \" \" + j);\r\nj = i + 4;\r\nconsole.log(i + \" \" + j);\r\ni = i + 1;\r\nconsole.log(i + \" \" + j);\r\nj = i - 1;\r\nconsole.log(i + \" \" + j);\r\ni = j;\r\nconsole.log(i + \" \" + j);\r\nj = i;\r\nconsole.log(i + \" \" + j);\r\n\r\n2 - Saisissez et exécutez le programme pour vérifier votre réponse ', '0 undefined\r\n0 4\r\n1 4\r\n1 0\r\n0 0\r\n0 0\r\n'),
(2, 1, 'mpp.js', 'Avec vim, saisir le programme suivant dans un fichier appelé mpp.js\r\nLa zone matérialisée en fluo doit correspondre au caractère tab\r\nPour exécuter votre programme, taper dans la console : node mpp.js\r\n\r\n// Mon premier programme de jeu - version 1\r\n\r\n\"use strict\";\r\n\r\nconst kbd = require(\"kbd\");    // objet clavier\r\nconst nbSecret = 4;            // nb secret à découvrir\r\nlet nbJoueur;                  // nb proposé par le joueur\r\n\r\nconsole.log(\"Il faut deviner un nombre entre 1 et 10\");\r\nprocess.stdout.write(\"Quel nombre proposez-vous ? \");\r\nnbJoueur = kbd.getLineSync();\r\nnbJoueur = Number(nbJoueur);\r\n\r\nif(nbJoueur === nbSecret) {\r\n    console.log(\"Bravo, vous avez trouvé !\");\r\n}\r\n', 'bla');

-- --------------------------------------------------------

--
-- Structure de la table `exos_eval`
--

CREATE TABLE `exos_eval` (
  `id_exo_eval` int(11) NOT NULL,
  `nom_exo_eval` varchar(50) NOT NULL,
  `contenu_exo_eval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE `liens` (
  `id_lien_externe` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `url_ressource` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages_envoyes`
--

CREATE TABLE `messages_envoyes` (
  `id_message_envoye` int(11) NOT NULL,
  `id_chat` int(11) NOT NULL,
  `contenu_message_envoye` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages_recus`
--

CREATE TABLE `messages_recus` (
  `id_message_recu` int(11) NOT NULL,
  `id_chat` int(11) NOT NULL,
  `contenu_message_recu` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `progress_cours`
--

CREATE TABLE `progress_cours` (
  `id_progress_cours` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_cours` enum('lu','en_cours','non_lu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendus_eval`
--

CREATE TABLE `rendus_eval` (
  `id_rendu_eval` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_exo_eval` int(11) NOT NULL,
  `contenu_rendu__eval` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendus_exo`
--

CREATE TABLE `rendus_exo` (
  `id_rendu_exo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contenu_rendu` blob,
  `progress_exo` enum('pas_lu','en_cours','rendu','valide') NOT NULL DEFAULT 'pas_lu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE `rubriques` (
  `id_rubrique` int(11) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  `index_rubrique` int(11) NOT NULL,
  `nom_rubrique` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubriques`
--

INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES
(1, 1, 1, 'Avant tout...'),
(2, 1, 2, 'Configuration ordinateur en S1'),
(3, 1, 3, 'Ordinateur, OS et programmation'),
(4, 1, 4, 'Unix : initiation au shell'),
(5, 1, 5, 'Vim : initiation'),
(6, 2, 1, 'Node.js - valeurs et variables'),
(7, 2, 2, 'Node.js - structures de controle'),
(8, 2, 3, 'Node.js - fonctions'),
(9, 2, 4, 'Node.js - objet et tableau'),
(10, 2, 5, 'Node.js - lecture/ecriture de fichier'),
(11, 2, 6, 'Node.js - module'),
(12, 2, 7, 'WEB - créer un serveur WEB avec node.js'),
(13, 2, 8, 'WEB - spécifier un serveur WEB '),
(14, 2, 9, 'WEB - modèle PI'),
(15, 2, 10, 'Introduction à GIT'),
(16, 2, 11, 'Bonnes pratiques'),
(17, 2, 12, 'Langages informatiques');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `status_user` enum('professeur','eleve') NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `status_user`, `password`) VALUES
(1, 'Kerbrat', 'Thomas', 'kerbrat@intechinfo.fr', 'professeur', 'secret'),
(2, 'Trillot', 'Alexandre', 'atrillot@intechinfo.fr', 'eleve', 'trillot'),
(3, 'Theobald', 'Baptiste', 'theobald@intechinfo.fr', 'eleve', 'theobald'),
(4, 'Salerno', 'Mia', 'salerno@intechinfo.fr', 'eleve', 'salerno');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD PRIMARY KEY (`id_chapitre`);

--
-- Index pour la table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_autre` (`id_user_autre`);

--
-- Index pour la table `contenu_evals`
--
ALTER TABLE `contenu_evals`
  ADD PRIMARY KEY (`id_contenu_eval`),
  ADD KEY `id_evaluation` (`id_evaluation`),
  ADD KEY `id_exo_eval` (`id_exo_eval`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `id_chapitre` (`id_rubrique`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id_evaluation`);

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`id_exercice`),
  ADD KEY `id_chapitre` (`id_chapitre`);

--
-- Index pour la table `exos_eval`
--
ALTER TABLE `exos_eval`
  ADD PRIMARY KEY (`id_exo_eval`);

--
-- Index pour la table `liens`
--
ALTER TABLE `liens`
  ADD PRIMARY KEY (`id_lien_externe`),
  ADD KEY `id_exercice` (`id_exercice`);

--
-- Index pour la table `messages_envoyes`
--
ALTER TABLE `messages_envoyes`
  ADD PRIMARY KEY (`id_message_envoye`),
  ADD KEY `id_chat` (`id_chat`);

--
-- Index pour la table `messages_recus`
--
ALTER TABLE `messages_recus`
  ADD PRIMARY KEY (`id_message_recu`),
  ADD KEY `id_chat` (`id_chat`);

--
-- Index pour la table `progress_cours`
--
ALTER TABLE `progress_cours`
  ADD PRIMARY KEY (`id_progress_cours`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `rendus_eval`
--
ALTER TABLE `rendus_eval`
  ADD PRIMARY KEY (`id_rendu_eval`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_exo_eval` (`id_exo_eval`);

--
-- Index pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  ADD PRIMARY KEY (`id_rendu_exo`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_exercice` (`id_exercice`);

--
-- Index pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD PRIMARY KEY (`id_rubrique`),
  ADD KEY `id_chapitre` (`id_chapitre`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chapitres`
--
ALTER TABLE `chapitres`
  MODIFY `id_chapitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contenu_evals`
--
ALTER TABLE `contenu_evals`
  MODIFY `id_contenu_eval` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id_evaluation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `id_exercice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `exos_eval`
--
ALTER TABLE `exos_eval`
  MODIFY `id_exo_eval` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `liens`
--
ALTER TABLE `liens`
  MODIFY `id_lien_externe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages_envoyes`
--
ALTER TABLE `messages_envoyes`
  MODIFY `id_message_envoye` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages_recus`
--
ALTER TABLE `messages_recus`
  MODIFY `id_message_recu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `progress_cours`
--
ALTER TABLE `progress_cours`
  MODIFY `id_progress_cours` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rendus_eval`
--
ALTER TABLE `rendus_eval`
  MODIFY `id_rendu_eval` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  MODIFY `id_rendu_exo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rubriques`
--
ALTER TABLE `rubriques`
  MODIFY `id_rubrique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`id_user_autre`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `contenu_evals`
--
ALTER TABLE `contenu_evals`
  ADD CONSTRAINT `contenu_evals_ibfk_1` FOREIGN KEY (`id_evaluation`) REFERENCES `evaluations` (`id_evaluation`),
  ADD CONSTRAINT `contenu_evals_ibfk_2` FOREIGN KEY (`id_exo_eval`) REFERENCES `exos_eval` (`id_exo_eval`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubriques` (`id_rubrique`);

--
-- Contraintes pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitres` (`id_chapitre`);

--
-- Contraintes pour la table `liens`
--
ALTER TABLE `liens`
  ADD CONSTRAINT `liens_ibfk_1` FOREIGN KEY (`id_exercice`) REFERENCES `exercices` (`id_exercice`);

--
-- Contraintes pour la table `messages_envoyes`
--
ALTER TABLE `messages_envoyes`
  ADD CONSTRAINT `messages_envoyes_ibfk_1` FOREIGN KEY (`id_chat`) REFERENCES `chats` (`id_chat`);

--
-- Contraintes pour la table `messages_recus`
--
ALTER TABLE `messages_recus`
  ADD CONSTRAINT `messages_recus_ibfk_1` FOREIGN KEY (`id_chat`) REFERENCES `chats` (`id_chat`);

--
-- Contraintes pour la table `progress_cours`
--
ALTER TABLE `progress_cours`
  ADD CONSTRAINT `progress_cours_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`),
  ADD CONSTRAINT `progress_cours_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `rendus_eval`
--
ALTER TABLE `rendus_eval`
  ADD CONSTRAINT `rendus_eval_ibfk_1` FOREIGN KEY (`id_exo_eval`) REFERENCES `exos_eval` (`id_exo_eval`),
  ADD CONSTRAINT `rendus_eval_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `rendus_exo`
--
ALTER TABLE `rendus_exo`
  ADD CONSTRAINT `rendus_exo_ibfk_1` FOREIGN KEY (`id_exercice`) REFERENCES `exercices` (`id_exercice`),
  ADD CONSTRAINT `rendus_exo_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `rubriques_ibfk_1` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitres` (`id_chapitre`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

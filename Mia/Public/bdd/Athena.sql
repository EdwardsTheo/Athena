-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:8889
-- Généré le :  mar. 09 juin 2020 à 13:14
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
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nom_annonce` varchar(20) NOT NULL,
  `date_annonce` date NOT NULL,
  `contenu_annonce` varchar(300) NOT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chapitres`
--

CREATE TABLE IF NOT EXISTS `chapitres` (
  `id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `index_cours` int(11) NOT NULL,
  `nom_chapitre` varchar(50) NOT NULL,
  `contenu_chapitre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_chapitre`),
  KEY `id_chapitre` (`index_cours`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitres`
--

INSERT INTO `chapitres` (`id_chapitre`, `index_cours`, `nom_chapitre`, `contenu_chapitre`) VALUES
(1, 1, 'A l\'heure tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide3.html'),
(2, 1, 'Attentif tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide4.html'),
(3, 1, 'Des notes tu prendras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide5.html'),
(4, 1, 'Silencieux tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide6.html'),
(5, 1, 'Dormir tu éviteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide7.html'),
(6, 1, 'Poser des questions tu n\'hésiteras pas', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide8.html'),
(7, 1, 'Avec les autres tu échangeras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide9.html'),
(8, 1, 'Des livres du cours tu t\'aideras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide9.html'),
(9, 1, 'Pratiquer, tester, essayer ... tu n\'hésiteras pas', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide11.html'),
(10, 1, 'Tes écouteurs tu oteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide12.html'),
(11, 1, 'Ton téléphone tu rangeras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide13.html'),
(12, 1, 'En classe tu te découvriras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide14.html'),
(13, 1, 'De 12h00 à 13h15 tu te sustenteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide14.html'),
(14, 1, 'En classe vous n\'êtes plus', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide16.html'),
(15, 2, 'Configuration matérielle', 'vide'),
(16, 2, 'Configuration logicielle', 'vide'),
(17, 2, 'Avertissement !', 'vide'),
(18, 2, 'Configuration Windows', 'vide'),
(19, 2, 'Connexion au réseau de l\'école', 'vide'),
(20, 2, 'Vérification rapide de la configuration réseau', 'vide'),
(21, 2, 'Accès à HUGO', 'vide'),
(22, 2, 'Configuration de l\'imprimante sous Windows', 'vide'),
(23, 2, 'Logiciels complémentaires', 'vide'),
(24, 2, 'Installation VirtualBox', 'vide'),
(25, 2, 'Création d\'une machine virtuelle Linux', 'vide'),
(26, 2, 'Firefox', 'vide'),
(27, 2, 'Configuration Firefox', 'vide'),
(28, 3, 'Les ordinateurs', 'vide'),
(29, 3, 'Un ordinateur de bureau', 'vide'),
(30, 3, 'Intérieur d\'un ordinateur', 'vide'),
(31, 3, 'Ordinateur vs Humain', 'vide'),
(32, 3, 'Le cerveau', 'vide'),
(33, 4, 'L\'interpréteur de commande unix (shell)', 'vide'),
(34, 4, 'La commande man', 'vide'),
(35, 4, 'Arborescence fichiers', 'vide'),
(36, 4, 'Répertoire courant ou Répertoire de travail', 'vide'),
(37, 4, 'Chemin absolu vs Chemin relatif', 'vide'),
(38, 5, 'Editeurs de texte sous UNIX', 'vide'),
(39, 5, 'Lancer vim', 'vide'),
(40, 5, 'Les 2 modes de fonctionnement de vim', 'vide'),
(41, 5, 'Commandes d\'insertion', 'vide'),
(42, 5, 'Commandes de remplacement', 'vide');

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_user_autre` int(11) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `id_user` (`id_user`),
  KEY `id_user_autre` (`id_user_autre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenu_evals`
--

CREATE TABLE IF NOT EXISTS `contenu_evals` (
  `id_contenu_eval` int(11) NOT NULL AUTO_INCREMENT,
  `id_evaluation` int(11) NOT NULL,
  `id_exo_eval` int(11) NOT NULL,
  `position_exo` int(11) NOT NULL,
  PRIMARY KEY (`id_contenu_eval`),
  KEY `id_evaluation` (`id_evaluation`),
  KEY `id_exo_eval` (`id_exo_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `id_rubrique` int(11) NOT NULL,
  `index_cours` int(11) NOT NULL,
  `nom_cours` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_chapitre` (`id_rubrique`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `id_rubrique`, `index_cours`, `nom_cours`) VALUES
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
(17, 2, 12, 'Langages informatiques'),
(18, 3, 1, 'HTML5'),
(19, 3, 2, 'CSS3'),
(20, 3, 3, 'Exemples HTML5/CSS3'),
(21, 4, 1, 'Algorithmique : tri');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
  `id_evaluation` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id_evaluation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE IF NOT EXISTS `exercices` (
  `id_exercice` int(11) NOT NULL AUTO_INCREMENT,
  `id_rubrique` int(11) NOT NULL,
  `index_exercice` int(11) DEFAULT NULL,
  `nom_exercice` varchar(55) NOT NULL,
  `consigne_exercice` text NOT NULL,
  `output` text,
  PRIMARY KEY (`id_exercice`),
  KEY `id_rubrique` (`id_rubrique`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id_exercice`, `id_rubrique`, `index_exercice`, `nom_exercice`, `consigne_exercice`, `output`) VALUES
(1, 2, 1, 'tlec1.js : test de lecture de code', '1 - Que doit afficher ce code ?<br/>\r\n<br/>\r\n// test de lecture de code<br/>\r\n\r\n\"use strict\";<br/>\r\n\r\nlet i;<br/>\r\nlet j;<br/>\r\n\r\ni = 0;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i + 4;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = i + 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i - 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = j;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\n<br/>\r\n2 - Saisissez et exécutez le programme pour vérifier votre réponse', '0 undefined\r\n0 4\r\n1 4\r\n1 0\r\n0 0\r\n0 0\r\n'),
(2, 1, 1, 'mpp.js', 'Avec vim, saisir le programme suivant dans un fichier appelé mpp.js. <br/>\r\nLa zone matérialisée en fluo doit correspondre au caractère tab. <br/>\r\nPour exécuter votre programme, taper dans la console : node mpp.js. <br/>\r\n<br/>\r\n// Mon premier programme de jeu - version 1 <br/>\r\n\r\n\"use strict\"; <br/>\r\n\r\nconst kbd = require(\"kbd\");    // objet clavier <br/>\r\nconst nbSecret = 4;            // nb secret à découvrir <br/>\r\nlet nbJoueur;                  // nb proposé par le joueur <br/>\r\n\r\nconsole.log(\"Il faut deviner un nombre entre 1 et 10\"); <br/>\r\nprocess.stdout.write(\"Quel nombre proposez-vous ? \"); <br/>\r\nnbJoueur = kbd.getLineSync();<br/>\r\nnbJoueur = Number(nbJoueur);<br/>\r\nif(nbJoueur === nbSecret) { <br/>\r\n    console.log(\"Bravo, vous avez trouvé !\"); <br/>\r\n}\r\n', 'bla'),
(3, 1, 2, 'Test ', 'Vous devez tester ça ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exos_eval`
--

CREATE TABLE IF NOT EXISTS `exos_eval` (
  `id_exo_eval` int(11) NOT NULL AUTO_INCREMENT,
  `nom_exo_eval` varchar(50) NOT NULL,
  `contenu_exo_eval` text NOT NULL,
  PRIMARY KEY (`id_exo_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien_externe` int(11) NOT NULL AUTO_INCREMENT,
  `id_exercice` int(11) NOT NULL,
  `url_ressource` text NOT NULL,
  PRIMARY KEY (`id_lien_externe`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id_lien_externe`, `id_exercice`, `url_ressource`) VALUES
(1, 3, '2'),
(2, 3, '3');

-- --------------------------------------------------------

--
-- Structure de la table `messages_envoyes`
--

CREATE TABLE IF NOT EXISTS `messages_envoyes` (
  `id_message_envoye` int(11) NOT NULL AUTO_INCREMENT,
  `id_chat` int(11) NOT NULL,
  `contenu_message_envoye` varchar(160) NOT NULL,
  PRIMARY KEY (`id_message_envoye`),
  KEY `id_chat` (`id_chat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages_recus`
--

CREATE TABLE IF NOT EXISTS `messages_recus` (
  `id_message_recu` int(11) NOT NULL AUTO_INCREMENT,
  `id_chat` int(11) NOT NULL,
  `contenu_message_recu` varchar(160) NOT NULL,
  PRIMARY KEY (`id_message_recu`),
  KEY `id_chat` (`id_chat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `progress_cours`
--

CREATE TABLE IF NOT EXISTS `progress_cours` (
  `id_progress_cours` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_cours` enum('lu','en_cours','non_lu') NOT NULL,
  PRIMARY KEY (`id_progress_cours`),
  KEY `id_cours` (`id_cours`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `progress_cours`
--

INSERT INTO `progress_cours` (`id_progress_cours`, `id_cours`, `id_user`, `status_cours`) VALUES
(1, 1, 2, 'non_lu'),
(2, 1, 3, 'non_lu');

-- --------------------------------------------------------

--
-- Structure de la table `rendus_eval`
--

CREATE TABLE IF NOT EXISTS `rendus_eval` (
  `id_rendu_eval` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exo_eval` int(11) NOT NULL,
  `contenu_rendu__eval` blob NOT NULL,
  PRIMARY KEY (`id_rendu_eval`),
  KEY `id_user` (`id_user`),
  KEY `id_exo_eval` (`id_exo_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendus_exo`
--

CREATE TABLE IF NOT EXISTS `rendus_exo` (
  `id_rendu_exo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contenu_rendu` blob,
  `progress_exo` enum('en_cours','rendu','valide') NOT NULL,
  PRIMARY KEY (`id_rendu_exo`),
  KEY `id_user` (`id_user`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id_rubrique` int(11) NOT NULL AUTO_INCREMENT,
  `nom_rubrique` varchar(50) NOT NULL,
  `resume` varchar(300) DEFAULT NULL,
  `svg` varchar(25) NOT NULL,
  PRIMARY KEY (`id_rubrique`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubriques`
--

INSERT INTO `rubriques` (`id_rubrique`, `nom_rubrique`, `resume`, `svg`) VALUES
(1, 'Prise en main de Linux', 'Dans ce chapitre, vous allez apprendre comment configurer votre machine virtuelle et également \r\ncomment écrire des lignes de codes dans le terminal grâce à VIM.', 'icon-tux'),
(2, 'Apprendre à programmer', 'Dans ce chapitre, vous allez apprendre à coder en JavaScript. Vous allez également apprendre les bonnes pratiques à utiliser en code.', 'icon-javascript'),
(3, 'Initialisation à HTML5', '', 'icon-html-five'),
(4, 'Structures de données', '', 'icon-datacamp');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `status_user` enum('professeur','eleve') NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `status_user`, `password`) VALUES
(1, 'Kerbrat', 'Thomas', 'kerbrat@intechinfo.fr', 'professeur', 'secret'),
(2, 'Trillot', 'Alexandre', 'atrillot@intechinfo.fr', 'eleve', 'trillot'),
(3, 'Theobald', 'Baptiste', 'theobald@intechinfo.fr', 'eleve', 'theobald'),
(4, 'Salerno', 'Mia', 'salerno@intechinfo.fr', 'eleve', 'salerno');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD CONSTRAINT `chapitres_ibfk_1` FOREIGN KEY (`index_cours`) REFERENCES `cours` (`id_cours`);

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
  ADD CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubriques` (`id_rubrique`);

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
  ADD CONSTRAINT `progress_cours_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `chapitres` (`id_chapitre`),
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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

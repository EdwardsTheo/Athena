-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 08 mars 2021 à 12:49
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `athena`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id_chapter` int(11) NOT NULL AUTO_INCREMENT,
  `index_classes` int(11) NOT NULL,
  `id_rubricss` int(11) NOT NULL,
  `name_chapter` varchar(50) NOT NULL,
  `contenu_chapter` varchar(100) NOT NULL,
  PRIMARY KEY (`id_chapter`),
  KEY `id_chapter` (`index_classes`),
  KEY `id_rubricss` (`id_rubricss`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `index_classes`, `id_rubricss`, `name_chapter`, `contenu_chapter`) VALUES
(1, 1, 1, 'A l\'heure tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide3.html'),
(2, 1, 1, 'Attentif tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide4.html'),
(3, 1, 1, 'Des notes tu prendras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide5.html'),
(4, 1, 1, 'Silencieux tu seras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide6.html'),
(5, 1, 1, 'Dormir tu éviteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide7.html'),
(6, 1, 1, 'Poser des questions tu n\'hésiteras pas', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide8.html'),
(7, 1, 1, 'Avec les autres tu échangeras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide9.html'),
(8, 1, 1, 'Des livres du cours tu t\'aideras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide10.html'),
(9, 1, 1, 'Pratiquer, tester, essayer ... tu n\'hésiteras pas', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide11.html'),
(10, 1, 1, 'Tes écouteurs tu oteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide12.html'),
(11, 1, 1, 'Ton téléphone tu rangeras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide13.html'),
(12, 1, 1, 'En classe tu te découvriras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide14.html'),
(13, 1, 1, 'De 12h00 à 13h15 tu te sustenteras', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide15.html'),
(14, 1, 1, 'En classe vous n\'êtes plus', 'https://ovh.kerbrat.co/intech/cours/avant_tout/slide16.html'),
(15, 2, 1, 'Configuration matérielle', 'vide'),
(16, 2, 1, 'Configuration logicielle', 'vide'),
(17, 2, 1, 'Avertissement !', 'vide'),
(18, 2, 1, 'Configuration Windows', 'vide'),
(19, 2, 1, 'Connexion au réseau de l\'école', 'vide'),
(20, 2, 1, 'Vérification rapide de la configuration réseau', 'vide'),
(21, 2, 1, 'Accès à HUGO', 'vide'),
(22, 2, 1, 'Configuration de l\'imprimante sous Windows', 'vide'),
(23, 2, 1, 'Logiciels complémentaires', 'vide'),
(24, 2, 1, 'Installation VirtualBox', 'vide'),
(25, 2, 1, 'Création d\'une machine virtuelle Linux', 'vide'),
(26, 2, 1, 'Firefox', 'vide'),
(27, 2, 1, 'Configuration Firefox', 'vide'),
(28, 3, 1, 'Les ordinateurs', 'vide'),
(29, 3, 1, 'Un ordinateur de bureau', 'vide'),
(30, 3, 1, 'Intérieur d\'un ordinateur', 'vide'),
(31, 3, 0, 'Ordinateur vs Humain', 'vide'),
(32, 3, 0, 'Le cerveau', 'vide'),
(33, 4, 0, 'L\'interpréteur de commande unix (shell)', 'vide'),
(34, 4, 0, 'La commande man', 'vide'),
(35, 4, 0, 'Arborescence fichiers', 'vide'),
(36, 4, 0, 'Répertoire courant ou Répertoire de travail', 'vide'),
(37, 4, 0, 'Chemin absolu vs Chemin relatif', 'vide'),
(38, 5, 0, 'Editeurs de texte sous UNIX', 'vide'),
(39, 5, 0, 'Lancer vim', 'vide'),
(40, 5, 0, 'Les 2 modes de fonctionnement de vim', 'vide'),
(41, 5, 0, 'Commandes d\'insertion', 'vide'),
(42, 5, 0, 'Commandes de remplacement', 'vide');

-- --------------------------------------------------------

--
-- Structure de la table `contenu_test`
--

DROP TABLE IF EXISTS `contenu_test`;
CREATE TABLE IF NOT EXISTS `contenu_test` (
  `id_contents_test` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `id_exo_eval` int(11) NOT NULL,
  `position_exo` int(11) NOT NULL,
  PRIMARY KEY (`id_contents_test`),
  KEY `id_test` (`id_test`),
  KEY `id_exo_eval` (`id_exo_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(11) NOT NULL AUTO_INCREMENT,
  `id_rubricss` int(11) NOT NULL,
  `index_classe` int(11) NOT NULL,
  `nom_classe` varchar(50) NOT NULL,
  PRIMARY KEY (`id_classe`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `id_rubricss`, `index_classe`, `nom_classe`) VALUES
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
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `status` enum('null','set','progress','finish') NOT NULL,
  `heure_start` time DEFAULT NULL,
  `heure_end` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id_test`, `name`, `status`, `heure_debut`, `heure_fin`, `date`) VALUES
(1, 'mi semestre', 'finish', '08:45:00', '23:04:00', '2020-07-05'),
(2, 'fin de semestre', 'progress', '08:45:00', '12:30:00', '2020-07-06');

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

DROP TABLE IF EXISTS `exercices`;
CREATE TABLE IF NOT EXISTS `exercices` (
  `id_exercice` int(11) NOT NULL AUTO_INCREMENT,
  `id_rubricss` int(11) NOT NULL,
  `index_exercice` int(11) NOT NULL,
  `name_exercice` varchar(55) NOT NULL,
  `consigne_exercice` text NOT NULL,
  `output` text DEFAULT NULL,
  PRIMARY KEY (`id_exercice`),
  KEY `id_chapter` (`id_rubricss`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id_exercice`, `id_rubrics`, `index_exercice`, `name_exercice`, `consigne_exercice`, `output`) VALUES
(1, 2, 1, 'tlec1.js', '1 - Que doit afficher ce code ? <br/>\r\n<br/>\r\n// test de lecture de code<br/>\r\n<br/>\r\n\"use strict\";<br/>\r\n<br/>\r\nlet i;<br/>\r\nlet j;<br/>\r\n<br/>\r\ni = 0;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i + 4;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = i + 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i - 1;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\ni = j;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\nj = i;<br/>\r\nconsole.log(i + \" \" + j);<br/>\r\n<br/>\r\n2 - Saisissez et exécutez le programme pour vérifier votre réponse ', '0 undefined\r\n0 4\r\n1 4\r\n1 0\r\n0 0\r\n0 0\r\n'),
(2, 1, 1, 'Construction d une arborescence de ficher', 'Créer l arborescence ci-dessous (les répertoires sont indiqués ainsi): <br/>\r\n\r\n&nbsp;&nbsp;&nbsp; utiliser la commande \"mkdir\" pour créer un répertoire<br/>\r\n&nbsp;&nbsp;&nbsp; utiliser la commande \"touch\" pour créer un fichier<br/>\r\n\r\n<br/>\r\nUtilisez différentes méthodes pour désigner les fichiers/répertoires à créer (chemin relatif, chemin absolu) en vous déplaçant dans l arborescence. Par exemple :<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nse placer dans le répertoire <b>mammifere</b> et créer le répertoire <b>europeen</b> <br/>\r\n&nbsp;&nbsp;&nbsp;\r\nse placer dans le répertoire <b>poisson</b> et créer le fichier <i>gabon</i><br/>\r\n&nbsp;&nbsp;&nbsp;\r\n... etc \r\n<br/>\r\n<img src=\"Public/img/arborescence.png\" style=\"width:200px; height:300px;\">', NULL),
(3, 1, 2, 'Supression d une arborescence de fichier', 'Supprimer ensuite toute l arborescence en utilisant différentes méthodes, par exemple :<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nse placer dans le répertoire <b>poisson</b> et supprimer le fichier <i>gabon</i> <br/>\r\n&nbsp;&nbsp;&nbsp;\r\nse placer dans le répertoire <b>mammifere</b> et supprimer l intégralité du répertoire <b>europeen</b> <br/>\r\n<img src=\"Public/img/arborescence.png\" style=\"width:200px; height:300px;\">', NULL),
(4, 1, 3, 'mpp.js', 'Avec vim, saisir le programme suivant dans un fichier appelé mpp.js<br/>\r\nPour exécuter votre programme, taper dans la console : node mpp.js<br/>\r\n<br/>\r\n// Mon premier programme de jeu - version 1<br/>\r\n<br/>\r\n\"use strict\";<br/>\r\n<br/>\r\nconst kbd = require(\"kbd\");    // objet clavier <br/>\r\nconst nbSecret = 4;            // nb secret à découvrir<br/>\r\nlet nbJoueur;                  // nb proposé par le joueur<br/>\r\n<br/>\r\nconsole.log(\"Il faut deviner un nombre entre 1 et 10\");<br/>\r\nprocess.stdout.write(\"Quel nombre proposez-vous ? \");<br/>\r\nnbJoueur = kbd.getLineSync();<br/>\r\nnbJoueur = Number(nbJoueur);<br/>\r\n<br/>\r\nif(nbJoueur === nbSecret) {<br/>\r\n    console.log(\"Bravo, vous avez trouvé !\");<br/>\r\n}\r\n', 'bla'),
(5, 2, 2, 'tlec2.js', '1- Que doit afficher ce code ? <br/>\r\n2 - Saisissez et exécutez le programme pour vérifier votre réponse<br/>\r\n3- Comment résumer en une phrase à quoi servent les lignes <mark>surlignées</mark><br/>\r\n<br/>\r\n// test de lecture de code<br/>\r\n<br/>\r\n\"use strict\";<br/>\r\n<br/>\r\nlet info1;<br/>\r\nlet info2;<br/>\r\nlet tmp;<br/>\r\n<br>\r\ninfo1 = 10;<br/>\r\ninfo2 = 20;<br/>\r\n<br/>\r\n<mark>\r\ntmp = info1;<br/>\r\ninfo1 = info2;<br/>\r\ninfo2 = tmp;</mark><br/>\r\n<br/>\r\nconsole.log(\"info1 contient \" + info1);<br/>\r\nconsole.log(\"info2 contient \" + info2);<br/>\r\n\r\n\r\n', NULL),
(6, 2, 3, 'ordre.js', 'Inspirez-vous de l exercice précédent pour écrire un programme qui demande successivement deux nombres à l utilisateur puis qui affiche d\'abord le nombre le plus petit puis le nombre le plus grand. <br/>\r\n<br/>\r\nExemple d exécution :<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nPremier nombre ? 10 <br/>\r\n&nbsp;&nbsp;&nbsp;\r\nSecond nombre ? 5<br/>\r\n&nbsp;&nbsp;&nbsp;\r\n5<br/>\r\n&nbsp;&nbsp;&nbsp;\r\n10<br/>\r\n<br/>\r\nAstuce : une possibilité est \"d échanger\" les deux nombres si le premier est supérieur au second, puis d afficher le premier nombre et ensuite le second ... vous aurez besoin d\'utiliser un bloc conditionnel <b>if</b>', NULL),
(7, 2, 4, 'bonbon.js', 'Ecrire un programme qui demande un bonbon jusqu\'à ce qu\'on lui ait donné ! <br/>\r\n<br/>\r\nExemple d\'exécution :<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nDonne moi un bonbon ? carambar <br/>\r\n&nbsp;&nbsp;&nbsp;\r\nDonne moi un bonbon ? coca<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nDonne moi un bonbon ? lion<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nDonne moi un bonbon ? bonbon <br/>\r\n&nbsp;&nbsp;&nbsp;\r\nMerci !<br/>\r\n<br/>\r\nAstuce : vous aurez besoin d\'utiliser une boucle <b>while</b> ... \r\n', NULL),
(8, 2, 5, 'jeuV1.js', 'Ecrivez un programme de jeu demandant de deviner un nombre entre 1 et 10.<br/>\r\n<br/>\r\nLe programme choisit aléatoirement un nombre \"secret\" entre 1 et 10. Le programme demande à lire un nombre au clavier, et ce, tant que le nombre entré n\'est pas égal au nombre \"secret\". Quand le \"joueur\" a trouvé le bon nombre, le programme lui affiche \"gagné !\".<br/>\r\n<br/>\r\nPour obtenir un nombre aléatoirement entre 1 et 10 :<br/>\r\n&nbsp;&nbsp;&nbsp;\r\nvariable = <b>Math.floor(Math.random() * 10) + 1;</b>\r\n', NULL),
(9, 2, 6, 'jeuV2.js', 'Compléter le programme précédent pour aider le joueur ainsi :<br/>\r\nÀ chaque essai, s\'il n\'a pas trouvé le nombre secret, on lui indique si sa proposition est plus petite ou plus grande que le nombre à trouver. ', NULL),
(10, 2, 7, 'jeuV3.js', 'Compléter le programme précédent pour indiquer au joueur, lorsqu\'il a gagné, en combien de coups il a trouvé. Afficher également un commentaire en fonction de ce score (1 coup : génial / entre 2 et 3 coups : bravo / 4 coups et plus : pas terrible...) ', NULL),
(11, 2, 8, 'jeuComplet.js', 'Compléter le programme précédent pour, lorsque le joueur a gagné, lui proposer de rejouer (\"Voulez-vous rejouer (oui/non) ?\"). ', NULL),
(12, 2, 9, 'ordiJoue.js', 'Ecrire un programme qui essaye de trouver un nombre choisi par l\'utilisateur. L\'ordinateur devient le joueur ! \r\nPensez à un nombre entre 1 et 10, je vais essayer de le trouver\r\nA chaque fois que je propose un nombre, répondez moi : \r\n+ si le nombre auquel vous pensez est plus grand\r\n- si le nombre auquel vous pensez est plus petit\r\n= si j\'ai trouvé\r\n7 ? -\r\n6 ? -\r\n4 ? +\r\n5 ? =\r\nj\'ai trouvé !\r\n', NULL),
(13, 2, 10, 'tabmul.js', 'Ecrire un programme qui affiche la table de multiplication pour un nombre n saisi par l\'utilisateur\r\nExemple d\'exécution :\r\n\r\nn ? 4\r\n1 x 4 = 4\r\n2 x 4 = 8\r\n3 x 4 = 12\r\n4 x 4 = 16\r\n5 x 4 = 20\r\n6 x 4 = 24\r\n7 x 4 = 28\r\n8 x 4 = 32\r\n9 x 4 = 36\r\n10 x 4 = 40\r\n\r\nAstuce : vous aurez besoin d\'utiliser une boucle for ... ', NULL),
(14, 2, 11, 'syracuse.js', 'Réaliser un programme qui demande un nombre n à l\'utilisateur. Le programme répéte ensuite les opérations suivantes :\r\n    si le nombre est pair, on le divise par 2\r\n    si le nombre est impair, on le multiplie par 3 et on lui ajoute 1\r\n    le programme affiche le résultat obtenu\r\n    on réitère le processus avec le résultat obtenu, tant que ce résultat est différent de 1\r\nExemple d\'exécution :\r\n\r\nn ? 6\r\n3\r\n10\r\n5\r\n16\r\n8\r\n4\r\n2\r\n1\r\n\r\nAstuce : vous aurez besoin d\'utiliser une boucle while ... ', NULL),
(15, 2, 12, 'revmul.js', 'Il s\'agit de coder un programme qui permet de réviser les tables de multiplication.\r\nLe programme propose aléatoirement de multiplier 2 chiffres entre 1 et 9, demande le résultat à l\'utilisateur, et vérifie la réponse donnée. Si la réponse est erronée, le programme indique la bonne réponse.\r\nExemple d\'exécution :\r\n\r\n6 x 5 ?\r\n30\r\nExact\r\n2x 3 ?\r\n6\r\nExact\r\n2 x 9 ?\r\n19\r\nFaux, 2 x 9 = 18\r\n7 x 3 ?\r\n21\r\nExact\r\n....\r\n\r\nInterrompre le programme avec CTRL+C', NULL),
(16, 2, 13, 'xFor.js', 'Ecrivez un programme qui affiche un X à l\'écran (après en avoir demandé la \"taille\") ...\r\nVoilà par exemple ce que doit afficher le programme pour des tailles de 6 ou 7 (mais le programme doit fonctionner pour toutes les tailles !).\r\n \r\nCet exercice sera réalisé avec des boucles for\r\n\r\n<img src=\"Public/img/x.png\" style=\"width:300px; height:100px\">\r\n\r\nAstuce : il faut deux boucles imbriquées ... ', NULL),
(17, 2, 14, 'xWhile.js', 'Ecrivez un programme qui affiche un X à l\'écran (après en avoir demandé la \"taille\") ...\r\nVoilà par exemple ce que doit afficher le programme pour des tailles de 6 ou 7 (mais le programme doit fonctionner pour toutes les tailles !).\r\n \r\nCet exercice sera réalisé avec des boucles while (même s\'il est plus naturel d\'utiliser des boucles for) \r\n\r\n<img src=\"Public/img/x.png\" style=\"width:400px; height:200px\">', NULL),
(18, 2, 15, 'carre.js', 'Ecrivez un programme qui affiche un carré à l\'écran (après en avoir demandé la \"taille\").\r\n \r\nLe tracé du carré est réalisé par une fonction, le script principal se contentant de demander la taille du carré puis d\'appeller cette fonction en lui passant en argument cette taille.\r\n \r\nVoilà par exemple ce que doit afficher le programme pour des tailles de 6 ou 7 (mais le programme doit fonctionner pour toutes les tailles !).\r\n \r\nCet exercice sera réalisé avec des boucles while (même s\'il est ici plus naturel d\'utiliser des boucles for) \r\n\r\n<img src=\"Public/img/carre.png\" style=\"width:400px; height:200px\">', NULL),
(19, 2, 16, 'test_premier.js', 'Ecrire une fonction qui prend en argument un nombre (positif non nul) et qui retourne :\r\n    true si le nombre est premier\r\n    sinon, le premier diviseur trouvé\r\nUtilisez l\'opérateur % pour savoir si un nombre est divisible par n (si p%n est égal à 0, alors n divise p).\r\nPour rappel, un nombre premier est un nombre qui n\'est divisible que par 1 et lui-même :\r\n    3, 7, 19 ... sont premiers\r\n    18 ne l\'est pas, il est par exemple divisible par 3 ', NULL),
(20, 2, 17, 'test_somme.js', 'Réaliser une fonction qui prend en argument une liste de nombres et qui retourne :\r\n    true si la somme est nulle\r\n    false dans le cas contraire\r\nNe créer qu\'un seul fichier contenant le script principal et la fonction ', NULL),
(21, 2, 18, 'testRandom.js', 'L\'objectif de ce petit programme est de vérifier que la fonction Math.random est bien aléatoire, c\'est à dire que tous les nombres apparaissent avec la même probabilité.\r\nPour cela, écrivez un programme qui exécute plusieurs tirages aléatoires entre 1 et 10 (demandez à l\'utilisateur combien il faut faire de tirage pour pouvoir faire plusieurs test). Le programme affiche ensuite un tableau récapitulatif de l\'occurence (en %) de chaque nombre.\r\nExemple :\r\n\r\nNombre de tirages ? 1000\r\nLe nombre 1 est sorti 89 fois, soit dans 8.9 % des tirages\r\nLe nombre 2 est sorti 99 fois, soit dans 9.9 % des tirages\r\nLe nombre 3 est sorti 93 fois, soit dans 9.3 % des tirages\r\nLe nombre 4 est sorti 99 fois, soit dans 9.9 % des tirages\r\nLe nombre 5 est sorti 103 fois, soit dans 10.3 % des tirages\r\nLe nombre 6 est sorti 103 fois, soit dans 10.3 % des tirages\r\nLe nombre 7 est sorti 103 fois, soit dans 10.3 % des tirages\r\nLe nombre 8 est sorti 107 fois, soit dans 10.7 % des tirages\r\nLe nombre 9 est sorti 106 fois, soit dans 10.6 % des tirages\r\nLe nombre 10 est sorti 98 fois, soit dans 9.8 % des tirages\r\n', NULL),
(22, 2, 19, 'nb_lettres_identiques.js', 'Ecrire une fonction qui prend en arguments d\'entrée deux mots et qui retourne :\r\n    -1 si les deux mots n\'ont pas le même nombre de caractères\r\n    sinon, le nombre de lettres identiques entre ces deux mots (on ne considère que les lettres identiques et au même endroit dans chaque mot)\r\nPour radar et rider la fonction doit retourner 3\r\n \r\nPour crime et merci la fonction doit retourner 0\r\n \r\nPour papa et maman la fonction doit retourner -1', NULL),
(23, 2, 20, 'nb_lettres.js', 'Ecrire une fonction qui prend en arguments d\'entrée un mot et une lettre et qui retourne le nombre de fois où la lettre apparait dans le mot\r\n\r\nfichier module : m_nb_lettres.js\r\n \r\nfichier test : nb_lettres.js', NULL),
(24, 2, 21, 'bibliotheque.js', 'Ecrivez un programme qui permet de gérer une bibliothèque\r\nIl doit être possible :\r\n    D\'afficher la liste des livres avec leur disponibilité\r\n    De noter qu\'un livre est emprunté, avec le nom de l\'emprunteur\r\n    De noter quand un livre est return\r\n    D\'ajouter un livre\r\n    De retirer définitivement un livre\r\nAvant de commencer le code proprement dit, vous définirez la structure de l\'objet qui va permette de \"coder\" le contenu de la bibliothèque\r\n \r\nL\'IHM du programme est organisé autour d\'un menu textuel :\r\n\r\n1 - Afficher tous les livres\r\n2 - Enregistrer un emprunt\r\n3 - Enregistrer un retour\r\n4 - Ajouter un livre\r\n5 - Retirer un livre\r\n6 - Quitter\r\n', NULL),
(25, 2, 22, 'pendu.js', 'Ecrivez un programme qui permet de jouer au jeu du pendu :\r\n	\r\nLe programme tire un mot au sort dans une liste prédéfinie de votre choix puis affiche une série de - correspondant au nombre de lettres du mot à découvrir\r\n	\r\nLe joueur propose ensuite une lettre : si la lettre est présente dans le mot à découvrir, le programme la fait apparaitre (les lettres non trouvées restent indiquées par un -). Le joueur propose ainsi des lettres jusqu\'à découvrir le mot complet\r\nAu fur et à mesure du jeu, vous pouvez ajouter la construction d\'un dessin en vous insprirant du modèle ci-dessous. Au début du jeu, seul la potence avec la corde sont dessinés. Puis à chaque fois que le joueur propose une lettre qui n\'est pas présente dans le mot à découvrir, on ajoute un élément du bonhomme : tête, puis corps ...etc. Le jeu s\'arrête alors quand le mot est découvert par le joueur, où que le joueur est pendu ! \r\n\r\n<img src=\"Public/img/pendu.png\" style=\"width:150px; height:150px;\">', NULL),
(26, 2, 23, 'puissance4.js', 'Ecrire un programme qui permet à deux joueurs de s\'affronter au jeu Puissance4\r\nVous utiliserez la représentation schématique suivante : \r\n\r\n<img src=\"Public/img/puissance4.png\" style=\"width:400px; height:200px;\">', NULL),
(27, 2, 24, 'labyrinthe.js', 'Ecrire un programme qui permet de piloter le lapin (L) pour qu\'il retrouve sa carotte (C) \r\n\r\n<img src=\"Public/img/laby.png\" style=\"width:300px; height:250px\">\r\n\r\nOn pourra utiliser les commandes H J K L (gauche, bas, haut, droite) pour diriger le lapin ', NULL),
(28, 2, 25, 'Affichage dynamique de la date', 'Le site WEB à réaliser est composé d\'une seule page qui affiche la date\r\n\r\n<img src=\"Public/img/date.png\" style=\"width:400px; height:200px\">\r\n\r\nVoici comment récupérer et afficher la date :\r\ndate = new Date();\r\n\r\ndate = date.toLocaleString();\r\n\r\n', NULL),
(29, 2, 26, 'Affichage d un dé', 'Le site WEB à réaliser est composé d\'une seule page qui affiche aléatoirement l\'image d\'un dé \r\n\r\n<img src=\"Public/img/de.png\" style=\"width:400px; height:200px\">\r\n\r\nConseil : commencer par une version qui affiche un nombre aléatoire entre 1 et 6, puis remplacer ce nombre par l\'image d\'un dé.\r\n\r\n(Link : Images de dés)', NULL),
(30, 2, 27, 'Calculatrice Web', 'Version 1.0 : le site WEB à réaliser est composé d\'une seule page qui permet d\'effectuer des additions, soustractions, multiplications ou divisions. Seul le résultat du dernier calcul est affiché.\r\n	\r\nVersion 1.1 : les résultats des opérations successives sont tous affichés, le résultat du dernier calcul effectué s\'ajoute au dessus des résultats déjà affichés. \r\n\r\n<img src=\"Public/img/calculette.png\" style=\"width:400px; height:200px\">', NULL),
(31, 2, 28, 'Jeu Nombre secret', 'Le site WEB à réaliser est un site de jeu. Il s\'agit de trouver un nombre entre 1 et 10.\r\n	\r\nLe schéma de navigation est le suivant : \r\n\r\n<img src=\"Public/img/nbsecret.png\" style=\"width:500px; height:300px\">\r\n\r\nDescription des scripts à réaliser :\r\ndebuter : ce script affiche la page d\'accueil du site\r\ncommencer : ce script effectue les tâches suivantes :\r\n    générer un nombre aléatoire entre 1 et 10 (nombre secret)\r\n    enregistrer ce nombre secret dans un fichier (que l\'on appellera \"secret\")\r\n    afficher la page HTML qui permet au jouer de commencer à jouer (proposer un premier nombre)\r\nanalyser : ce script est exécuté à chaque fois que le joueur propose un nombre. Il effectue les tâches suivantes :\r\n    récupérer le nombre proposé par le joueur\r\n    lire le nombre secret dans le fichier \"secret\"\r\n    si le nombre proposé par le joueur n\'est pas le nombre secret, afficher une page qui indique au joueur \"Trop grand !\" ou \"Trop petit !\" et qui lui permet de proposer un nouveau nombre\r\n    si le nombre proposé par le joueur correspond au nombre secret, lui afficher un page qui lui indique qu\'il a gagné et qui lui propose de rejouer ', NULL),
(32, 2, 29, 'Todo List', 'Une \"todo list\" (littéralement \"liste de choses à faire\" ou \"liste de tâches\") désigne une méthode très simple pour ne pas oublier quelque chose : le lister !\r\n \r\nCe principe peut s\'appliquer à peu près à tout : liste des tâches dans un projet, liste de courses, etc. Le site WEB à réaliser permet de mémoriser cette liste sur un serveur. \r\n\r\n<img src=\"Public/img/todolist.png\" style=\"width:400px; height:200px\">\r\n\r\nLa liste est mémorisée dans le serveur sous forme d\'un objet json de type Array (liste) :\r\n    on y ajoute un élément par la méthode push\r\n    on en retire un élément par la méthode splice', NULL),
(33, 2, 30, 'Site de révision des tables de multiplications', 'Version 1.0 : le site WEB à réaliser est un site qui permet de réviser ses tables de multiplication.\r\n \r\nVersion 1.1 : le site propose aléatoirement une addition/soustraction/multiplication/soustraction\r\n	\r\nLe schéma de navigation est le suivant : \r\n\r\n<img src=\"Public/img/schema_revmul.png\" style=\"width:330px; height:315px\">\r\n\r\nDescription des scripts à réaliser :\r\ncommencer : ce script constitue le point d\'entrée du site. Il effectue les tâches suivantes :\r\n    initialiser le fichier score à 0/0 (on nommera le fichier \"score\")\r\n    choisir au hasard 2 chiffres\r\n    afficher la page HTML qui affiche l\'opération à effectuer\r\nverifier : ce script est exécuté quand l\'utilisateur propose une réponse à la multiplication. Il effectue les tâches suivantes :\r\n    récupérer les 2 chiffres de la multiplication et le nombre proposé par l\'utilisateur\r\n    lire le fichier score\r\n    si la réponse proposée est correcte, ajouter 1 au score \"bonne réponse\"\r\n    sinon, ajouter 1 au score \"mauvaise réponse\"\r\n    ré-enregistrer le fichier score\r\n    afficher la page HTML \"resultat\" qui récapitule la multiplication à effectuer, la bonne réponse, la réponse de l\'utilisateur et qui indique si la réponse est correcte ou non . La page indique également le score et permet de rejouer ou de recommencer une série (dans ce cas, le score sera remis à 0 / 0)\r\ncontinuer : ce script est exécuté lorsque le joueur souhaite continuer à jouer et se voir proposer une nouvelle opération\r\n    choisir au hasard 2 chiffres\r\n    afficher la page HTML qui affiche l\'opération à effectuer ', NULL),
(34, 2, 31, 'Jeu Trivial Pursuit ', 'Le site WEB à réaliser doit permettre de jouer à une version simplifiée de Trivial Pursuit.\r\n	\r\nLe schéma de navigation est le suivant : \r\n\r\n<img src=\"Public/img/trivialpursuit.png\" style=\"width:200px; height:300px\">\r\n\r\nDescription des scripts à réaliser :\r\ndebuter : ce script constitue le point d\'entrée du site. Il effectue les tâches suivantes :\r\n    initialisation du score à 0\r\n    afficher la page HTML d\'introduction qui présente le site\r\njouer : ce script est exécuté quand le joueur décide de commencer/continuer à jouer. Il effectue les tâches suivantes :\r\n    lire le fichier questions/réponses (cartes)\r\n    tirer au sort une question (carte)\r\n    afficher une page HTML avec la question tirée au sort\r\nverifier : ce script est exécuté quand le joueur propose une réponse à une question posée. Il effectue les tâches suivantes :\r\n    récupérer la carte tirée au sort (question/réponse)\r\n    récupérer la réponse du joueur\r\n    tester si la réponse est correcte\r\n    si la réponse est correcte, ajouter un point au score (lire/écrire le fichier score)\r\n    afficher une page HTML qui indique la bonne réponse, la réponse du joueur, si la réponse est correcte ou non et le score. Le joueur peut cliquer pour se voir proposer une nouvelle question. ', NULL),
(35, 2, 32, 'Simulation d\'un distributeur', 'Réaliser un site WEB qui simule un distributeur\r\nLe client peut cliquer plusieurs fois sur les pièces :\r\n    son compte est crédité au fur et à mesure\r\n    le client ne peut plus cliquer sur les pièces dès qu\'il a dépassé 2 euros\r\nLorsque le client clique sur un produit :\r\n    le produit est affiché ainsi que la monnaie le cas écheant\r\n    si le crédit n\'est pas suffisant, il est return au client\r\nCliquer sur les links suivants pour télécharger les images : piece 2 euro, piece 1 euro, piece 50 cts, cannette de coca-cola, kinder bueno, paquet de chips\r\n\r\n<img src=\"Public/img/distrib1.png\" style=\"width:400px; height:100px\">\r\n\r\n<img src=\"Public/img/distrib2.png\" style=\"width:400px; height:100px\">\r\n\r\n<img src=\"Public/img/distrib3.png\" style=\"width:400px; height:100px\">', NULL),
(36, 2, 33, 'Testez votre estimation du temps écoulé', 'Ce site WEB permet de tester sa capacité à estimer le temps écoulé. Il vous est demandé de cliquer sur un bouton au bout d\'un certain temps. A vous d\'estimer correctement le délai au bout duquel vous allez cliquer : ni trop tôt, ni trop tard ! Le site comptabilise le nombre de vos tentatives et cumule vos erreurs.\r\n\r\n<img src=\"Public/img/schema_tmps.png\" style=\"width:300px; height:400px\">\r\n\r\nStructure de données\r\nLe suivi de la performance du joueur (le nombre d\'essais effectués et le cumul des erreurs) est stocké dans un fichier JSON nommé performance.json:\r\n\r\n{\r\n	\"nb_essai\" : 2,\r\n	\"somme_diff\" : 58\r\n}\r\n\r\nDescription des requêtes\r\n	\r\nLa requete commencer initialise le fichier JSON qui permet de suivre la performance de l\'utilisateur (nombre d\'essais, cumul des erreurs) et présente à l\'utilisateur la page d\'accueil\r\n	\r\nLa requete interroger tire au sort un nombre (compris entre 3 et 10) qui sera le nombre de secondes à estimer et affiche ensuite une page avec un bouton qui invite à cliquer au bout de ce délai\r\n	\r\nLa requete verifier calcule le délai réel, le compare au délai demandé et affiche une page qui rappelle le délai demandé, le délai réel et le résutat :\r\n    Bravo\r\n    Vous avez cliqué n secondes trop tôt\r\n    Vous avez cliqué n secondes trop tard\r\n \r\nLe fichier performance est mis à jour (incrémentation du nombre d\'essais, ajout au cumul d\'erreur)\r\nObtention du temps\r\nLa formule suivante donne le nombre de secondes écoulées depuis le 1 janvier 1970 : Math.floor(Date.now() / 1000)\r\n \r\nPour obtenir un délai (en secondes) entre deux instants, il suffit de soustraire le nombre de secondes correspondant au début de l\'instant au nombre de secondes correspondant à la fin de l\'instant considéré. ', NULL),
(37, 3, 1, 'poeme', 'Essayez de reproduire au mieux la page suivante (lorsqu\'on clique sur Victor HUGO, on se trouve redirigé sur la page Wikipedia du poète)\r\n\r\n<img src=\"Public/img/poeme.png\" style=\"width:400px; height:300px\">', NULL),
(38, 3, 2, 'navigation animale', '1 - Essayez de reproduire au mieux le mini-site suivant : \r\n\r\n<img src=\"Public/img/schema_animal.png\" style=\"width:400px; height:250px\">\r\n\r\n2 - Complétez le pour pouvoir accéder directement à toutes les pages, sans repasser par la page \"d\'index\" ', NULL),
(39, 3, 3, 'Formulaire d\'inscription', 'Essayez de reproduire au mieux le formulaire d\'inscription suivant (visible ici) : \r\n\r\n<img src=\"Public/img/formulaire.png\" style=\"width:400px; height:300px\">', NULL),
(40, 3, 4, 'Home page évoluée ', 'Essayez de reproduire au mieux cette page d\'accueil : \r\n\r\n<img src=\"Public/img/homepage.png\" style=\"width:500px; height:100px\">', NULL),
(41, 4, 1, 'Analyse complexité algorithme de tri ', 'Reprendre les exemples du cours (bulle, selection et quicksort) et modifier le code pour :\r\n    demander la taille du tableau à trier (initialiser les valeurs aléatoirement)\r\n    afficher le nombre de comparaison\r\n    afficher le nombre de permutation\r\nProcéder à l\'étude de l\'efficacité comparée des différents algorithmes en faisant varier la taille du tableau (reporter les résultats dans un tableur)\r\nQuestion : quel est l\'ordre initial du tableau à trier qui nécessite le plus d\'opérations (analyser chaque algorithme : bulle, insertion, quick) ? Autrement dit, quel est pour chaque algorithme le \"scenario\" le plus défavorable en terme d\'efficacité ? ', NULL),
(42, 4, 2, 'Trier une liste d\'élèves', 'Créer une liste d\'élèves (nom + age) et utiliser la méthode sort pour afficher la liste triée selon l\'âge\r\n\r\ntab[0] = {\"nom\" : \"alain\", \"age\" : 19};\r\ntab[1] = {\"nom\" : \"martine\", \"age\" : 20};\r\ntab[2] = {\"nom\" : \"pierre\", \"age\" : 18};\r\ntab[3] = {\"nom\" : \"bernard\", \"age\" : 21};\r\ntab[3] = {\"nom\" : \"béatrice\", \"age\" : 18};\r\n', NULL),
(43, 1, 4, 'Test', 'Test ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exos_eval`
--

DROP TABLE IF EXISTS `exos_eval`;
CREATE TABLE IF NOT EXISTS `exos_eval` (
  `id_exo_eval` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `name_exo_eval` varchar(50) NOT NULL,
  `contenu_exo_eval` text NOT NULL,
  PRIMARY KEY (`id_exo_eval`),
  KEY `id_test` (`id_test`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exos_eval`
--

INSERT INTO `exos_eval` (`id_exo_eval`, `id_test`, `name_exo_eval`, `contenu_exo_eval`) VALUES
(9, 1, 'Z', 'z'),
(10, 1, 'A', 'A'),
(13, 2, 'Test', 'Test3'),
(14, 2, 'bonbon', 'donnez moi un bonbon');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id_extern_link` int(11) NOT NULL AUTO_INCREMENT,
  `id_exercice` int(11) NOT NULL,
  `url_ressource` text NOT NULL,
  PRIMARY KEY (`id_lien_externe`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id_lien_externe`, `id_exercice`, `url_ressource`) VALUES
(1, 43, '1');

-- --------------------------------------------------------


--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name_news` varchar(20) NOT NULL,
  `date_news` date NOT NULL,
  `contents_news` varchar(300) NOT NULL,
  PRIMARY KEY (`id_news`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1594019399 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `progress_cours`
--

DROP TABLE IF EXISTS `progress_classeses`;
CREATE TABLE IF NOT EXISTS `progress_classeses` (
  `id_progress_classeses` int(11) NOT NULL AUTO_INCREMENT,
  `id_classes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_classes` enum('lu','en_classes','non_lu') NOT NULL,
  PRIMARY KEY (`id_progress_classeses`),
  KEY `id_classes` (`id_classes`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `progress_classeses`
--

INSERT INTO `progress_classeses` (`id_progress_classeses`, `id_classes`, `id_user`, `status_classes`) VALUES
(1, 1, 2, 'lu'),
(2, 1, 3, 'non_lu'),
(3, 2, 2, 'lu');

-- --------------------------------------------------------

--
-- Structure de la table `return_eval`
--

DROP TABLE IF EXISTS `return_test`;
CREATE TABLE IF NOT EXISTS `return_test` (
  `id_return_test` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exo_test` int(11) NOT NULL,
  `contenu_return__test` varchar(100) NOT NULL,
  PRIMARY KEY (`id_return_test`),
  KEY `id_user` (`id_user`),
  KEY `id_exo_test` (`id_exo_test`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `return_eval`
--

INSERT INTO `return_test` (`id_return_test`, `id_user`, `id_exo_test`, `contenu_return__test`) VALUES
(5, 2, 9, 'Trillot_Z_home_exercice.php'),
(6, 2, 13, 'Trillot_Test_home_exercice.php');

-- --------------------------------------------------------

--
-- Structure de la table `return_exo`
--

DROP TABLE IF EXISTS `return_exo`;
CREATE TABLE IF NOT EXISTS `return_exo` (
  `id_return_exo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contenu_return` varchar(150) DEFAULT NULL,
  `progress_exo` enum('pas_lu','en_cours','return','valide') NOT NULL DEFAULT 'pas_lu',
  PRIMARY KEY (`id_return_exo`),
  KEY `id_user` (`id_user`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `return_exo`
--

INSERT INTO `return_exo` (`id_return_exo`, `id_user`, `id_exercice`, `contenu_return`, `progress_exo`) VALUES
(22, 2, 3, NULL, 'valide'),
(23, 2, 4, NULL, 'valide'),
(24, 4, 30, NULL, 'return'),
(25, 4, 36, NULL, 'valide'),
(26, 4, 34, NULL, 'en_cours'),
(27, 4, 37, NULL, 'valide'),
(28, 3, 31, NULL, 'en_cours'),
(29, 3, 33, NULL, 'valide'),
(30, 3, 27, NULL, 'return'),
(31, 3, 36, NULL, 'valide'),
(32, 2, 2, 'Trillot_Construction d une arborescence de ficher_info.php', 'return'),
(33, 2, 18, NULL, 'return'),
(34, 2, 28, NULL, 'return'),
(35, 2, 43, NULL, 'en_cours');

-- --------------------------------------------------------

--
-- Structure de la table `rubrics`
--

DROP TABLE IF EXISTS `rubrics`;
CREATE TABLE IF NOT EXISTS `rubrics` (
  `id_rubricss` int(11) NOT NULL AUTO_INCREMENT,
  `name_rubrics` varchar(50) NOT NULL,
  `resume` varchar(300) DEFAULT NULL,
  `svg` varchar(25) NOT NULL,
  PRIMARY KEY (`id_rubricss`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rubrics`
--

INSERT INTO `rubrics` (`id_rubricss`, `name_rubrics`, `resume`, `svg`) VALUES
(1, 'Prise en main de Linux', 'Dans ce chapter, vous allez apprendre comment configurer votre machine virtuelle et également \r\ncomment écrire des lignes de codes dans le terminal grâce à VIM.', 'icon-tux'),
(2, 'Apprendre à programmer', 'Dans ce chapter, vous allez apprendre à coder en JavaScript. Vous allez également apprendre les bonnes pratiques à utiliser en code.', 'icon-javascript'),
(3, 'Initialisation à HTML5', '', 'icon-html-five'),
(4, 'Structures de données', '', 'icon-datacamp');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `status_user` enum('professeur','eleve') NOT NULL,
  `password` varchar(20) NOT NULL,
  `heure_connexion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `firstname`, `email`, `status_user`, `password`, `heure_connexion`) VALUES
(1, 'Kerbrat', 'Thomas', 'kerbrat@intechinfo.fr', 'professeur', 'test', '2020-06-19 09:44:30'),
(2, 'Trillot', 'Alexandre', 'atrillot@intechinfo.fr', 'eleve', 'trillot', '2020-07-06 09:23:01'),
(3, 'Theobald', 'Baptiste', 'theobald@intechinfo.fr', 'eleve', 'theobald', '2020-07-06 09:44:46'),
(4, 'Salerno', 'Mia', 'salerno@intechinfo.fr', 'eleve', 'salerno', '2020-06-19 09:44:30');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`index_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`id_user_autre`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `contents_test`
--
ALTER TABLE `contents_test`
  ADD CONSTRAINT `contents_test_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`),
  ADD CONSTRAINT `contents_test_ibfk_2` FOREIGN KEY (`id_exo_test`) REFERENCES `exos_test` (`id_exo_test`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_rubricss`) REFERENCES `rubrics` (`id_rubricss`);

--
-- Contraintes pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`id_rubricss`) REFERENCES `rubrics` (`id_rubricss`);

--
-- Contraintes pour la table `exos_test`
--
ALTER TABLE `exos_test`
  ADD CONSTRAINT `exos_test_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`);

--
-- Contraintes pour la table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`id_exercice`) REFERENCES `exercices` (`id_exercice`);

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
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `progress_cours`
--
ALTER TABLE `progress_cours`
  ADD CONSTRAINT `progress_cours_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `chapter` (`id_chapter`),
  ADD CONSTRAINT `progress_cours_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `return_test`
--
ALTER TABLE `return_test`
  ADD CONSTRAINT `return_test_ibfk_1` FOREIGN KEY (`id_exo_test`) REFERENCES `exos_test` (`id_exo_test`),
  ADD CONSTRAINT `return_test_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

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

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:8889
-- Généré le :  lun. 11 mai 2020 à 08:12
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
-- Création :  lun. 13 avr. 2020 à 13:21
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
-- Création :  lun. 27 avr. 2020 à 06:51
--

CREATE TABLE IF NOT EXISTS `chapitres` (
  `id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_chapitre` varchar(50) NOT NULL,
  `resume` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_chapitre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitres`
--

INSERT INTO `chapitres` (`id_chapitre`, `nom_chapitre`, `resume`) VALUES
(1, 'Prise en main de Linux', 'Dans ce chapitre, vous allez apprendre comment configurer votre machine virtuelle et également \r\ncomment écrire des lignes de codes dans le terminal grâce à VIM.'),
(2, 'Apprendre à programmer', 'Dans ce chapitre, vous allez apprendre à coder en JavaScript. Vous allez également apprendre les bonnes pratiques à utiliser en code.');

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--
-- Création :  mar. 14 avr. 2020 à 07:40
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
-- Création :  mer. 15 avr. 2020 à 12:04
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
-- Création :  mar. 21 avr. 2020 à 07:35
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `id_chapitre` int(11) NOT NULL,
  `index_cours` int(11) NOT NULL,
  `nom_cours` varchar(50) NOT NULL,
  `contenu_cours` text NOT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_chapitre` (`id_chapitre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES
(1, 1, 1, 'Avant tout...', 'A l’heure tu seras :  \r\nno_late.png\r\nAttentif tu seras :  \r\nattentive.png\r\n\r\nDes notes tu prendras : \r\n notes.png\r\n\r\nSilencieux tu seras :\r\n silent.png\r\n\r\nDormir tu éviteras :\r\n no_sleep.png\r\n\r\nPoser des questions tu n’hésiteras pas :\r\n ask.png\r\n\r\n\r\nAvec les autres tu échangeras : \r\n speak.png\r\n\r\n\r\n\r\nDes livres de cours tu t’aideras : \r\n read.png\r\n\r\nPratiquer, tester, essayer… Tu n’hésiteras pas :\r\n try.png\r\n\r\nTes écouteurs tu ôteras : \r\n	Sauf pendant les TP…  \r\n\r\nno_earphones.png\r\n\r\n\r\nTon téléphone tu rangeras :\r\n no_phone.png\r\n\r\nEn classe, tu te découvrira :  \r\n\r\nno_hat.png\r\n\r\nDe 12h15 a 13h15 tu te sustenteras:\r\n	Les repas sont à prendre en dehors des heures de travail  \r\n no_food.png\r\n\r\n	L’espace de travail doit être gardé propre\r\n	Merci de laisser propre la salle que vous quittez\r\n\r\nEn classe vous n’êtes plus : \r\n	Vous n’êtes plus à l’école, vous êtes ici pour apprendre votre futur métier  \r\n not_school.png\r\n\r\n\r\n\r\n\r\n\r\n\r\nDe 12h15 a 13h15 tu te sustenteras:\r\n	Les repas sont à prendre en dehors des heures de travail  \r\n\r\n	L’espace de travail doit être gardé propre\r\n	Merci de laisser propre la salle que vous quittez\r\n\r\nEn classe vous n’êtes plus : \r\n	Vous n’êtes plus à l’école, vous êtes ici pour apprendre votre futur métier  \r\n\r\n\r\n'),
(2, 2, 1, 'Node.js - valeurs et variables', 'Valeur et information : \r\n	\r\nL’ordinateur ne sait manipuler que des 0 et des 1, dont il se sert pour stocker : \r\n-	Des informations\r\n-	Des instructions pour manipuler ces informations\r\n\r\nL’interpréteur nodejs peut manipuler différents types d’informations (qu’il convertira en 1 pour l’ordinateur)\r\n\r\nEn nodejs, les types principaux sont :\r\n-	Les types primitifs \r\n-	Les types objets\r\n\r\nTypes primitifs : \r\n\r\n	Nombre (Number) :\r\n-	12\r\n-	-10\r\n-	3.14\r\n-	2.78e4\r\n	\r\n	Chaine de caractère (String) : \r\n-	‘JavaScript’\r\n-	« Node.js est un super langage »\r\n-	« n »\r\n-	« 123 »\r\n\r\n	Booléen (Boolean) :\r\n-	True\r\n-	False\r\n\r\n	Undefined\r\n	\r\n	Null \r\n\r\nVariables :\r\n \r\n	Les variables servent à manipuler de l’information.\r\n													Une variable contient, à un instant donné, une valeur (une information)\r\n	\r\n	Le contenu d’une variable peut varier dans le temps\r\n\r\nL’affectation « = » est le plus souvent utilisé pour stocker une valeur dans une variable		\r\n\r\nage = 18;\r\nprenom = \"Alain\";\r\nphrase = prenom + \" a \" + age + \" ans\";         // \"Alain a 18 ans\"\r\n\r\nlargeur = 10;\r\nlongueur = 20;\r\nsurface = largeur * longueur;           // 200\r\n\r\nouvert = true;		\r\n\r\nNom des variables : \r\n\r\n	Chaque variable est identifié par un nom :\r\n		-let nbCartons ;\r\n		-let nb_cartons ;\r\n	\r\n	Il est d’usage de se limiter aux caractères suivants : \r\n-	Les lettres de ‘A’ à ‘Z ‘et de ‘a’ à ‘z’\r\n-	Les chiffres de 0 à 9\r\n-	Le caractère ‘_’ et le caractère ‘$’\r\n\r\nLe nom d’une variable doit commencer par une lettre, ‘_’ ou ‘$’.\r\nLe nom d’une variable ne peut être un mot-clé du langage (if, while, let…)\r\n\r\nAttention ! Le nom est sensible à la casse (case sensitive) :\r\n-	let toto ;\r\n-	let Toto ;\r\n-	let ToTo ;\r\ntoto, Toto et ToTo sont 3 variables différentes.\r\n\r\nChoix du nom des variables : \r\n\r\n	De préférence : \r\n-	On utilise des caractères minuscules (ou une combinaison minuscules/majuscules)\r\n-	On commence toujours par une lettre minuscule\r\n\r\nPour des raisons (obscures) on évite de commencer un nom de variable par le caractère ‘_’.\r\n\r\nPour éviter de confondre du JavaScript/Node.js avec du PHP, on évite de commencer un nom de variable par le caractère ‘$’.\r\n	\r\n	L’objectif est de trouver un nom significatif, c’est-à-dire :\r\n-	Qui rappelle ce que représente le contenu de la variable\r\n-	Sans être trop long\r\n\r\nOn peut compléter la déclaration de variable par un commentaire \r\nSnake case / Camel case :\r\n\r\nSnake case = serpent_tres_dangereux\r\n	\r\nCamel case = chameauTresGentil\r\n\r\n	Le nom d’une variable doit être soit en Snake case soit en Camel Case.\r\n\r\nDéclaration des variables (let) :\r\n\r\nDéclarer une variable, c\'est indiquer à l\'ordinateur que l\'on souhaite un bout de mémoire pour y stocker de l\'information	\r\n	\r\n	On déclare une variable grâce au mot-clé let suivi du nom de la variable			\r\n	Le nom d\'une variable permet de retrouver l\'information correspondante (et s\'en servir dans le restant du programme)\r\n\r\nDe préférence :\r\n-	On déclare une seule variable par ligne\r\n-	On regroupe les déclarations au début du source\r\n\r\nLa directive \"use strict\"; oblige à déclarer explicitement toutes les variables\r\nCe qui permet d\'éviter les erreurs dues aux fautes de frappes...\r\n\r\nDéclaration des variables « constante » (const) :\r\n\r\n	On peut aussi déclarer une variable ... qui sera constante !\r\nC\'est à dire que sa valeur de changera pas au cours de l\'exécution du programme\r\n	\r\nOn déclare une variable \"constante\" grâce au mot-clé const au lieu de let ...\r\n... mais dans ce cas il faut aussi donner une valeur à cette variable :\r\n-	const nbLigne = 10\r\n-	const ageMin = 18\r\n-	const pi = 3.14\r\n	\r\nCette manière de procéder facilite la lecture du code :\r\n-	if(n > 10) {\r\n-	if(n > nbLigne) {\r\nL\'interpréteur génèrera une erreur si on essaye par inadvertance de modifier la valeur d\'une variable déclarée avec const.\r\n\r\nL\'opérateur d\'affectation (=) : \r\n\r\n	Le signe ‘=’ est l\'opérateur d\'affectation.\r\n\r\n\r\nlet nbPtVie;\r\nlet coup;\r\nlet nom;\r\n\r\nnbPtVie = 1000;\r\nnom = \"Bob\";\r\nnbPtVie = nbPtVie + 1;\r\nnbPtVie = nbPtVie - (coup * 2);\r\nnom = kbd.getLineSync();\r\n\r\n« nbPtVie + 1 » ou « nbPtVie - (coup * 2) » sont des expressions que l\'ordinateur évalue pour en déterminer la valeur\r\n	\r\n	Le signe ‘=’ signifie :\r\n-	évaluer l\'expression qui est à droite\r\n-	affecter le résultat trouvé à la variable qui est à gauche\r\n« b = 3 » signifie que b vaut maintenant 3\r\n« a = b + 2 » signifie que a vaut maintenant 5\r\n	\r\nSeule la variable à gauche du signe = est modifiée\r\n\r\nlongueur = longueur * 2; // longueur est modifié\r\nnbJours = nbAnnee * 365; // nbJours est modifié mais ...\r\n                         // ... nbAnnee n\'est pas modifié\r\n\r\n	\r\nOn ne peut donc pas écrire :\r\ni+1 = i;    // stupide !!!! (Génère une erreur)\r\n\r\nPar contre cette ligne est correcte :\r\ni = i+1;    // ajoute 1 à la valeur de i\r\n\r\nInitialisation des variables : \r\n\r\nAttention : quand on déclare une variable, elle a pour valeur undefined tant que l\'on ne lui a pas assigné une valeur explicitement\r\n	\r\nAvant d\'utiliser cette variable (l\'afficher, l\'ajouter avec une autre...), il faut lui affecter une valeur\r\n \r\nDonner une première valeur à une variable s\'appelle initialiser la variable\r\n \r\nOn peut utiliser la valeur Null pour indiquer ... l\'absence de valeur !\r\n	\r\nMême si l\'on peut simultanément déclarer et initialiser une variable (let nom = \"bob\"), cette pratique est plutôt à déconseiller : il vaut mieux initialiser la variable plus loin dans le code, à un endroit qui sera plus pertinent\r\nOublier d\'initialiser une variable est une erreur très fréquente en programmation\r\n\r\nAfficher des valeurs de types primitifs :\r\n\r\n	console.log laisse le curseur au début de la ligne qui suit ce qui vient d\'être affiché\r\nprocess.stdout.write laisse le curseur derrière le dernier caractère affiché\r\n\r\n\"use strict\";\r\n\r\nlet nbCartons;\r\nlet poidsCarton;\r\nlet poidsTotal;\r\nlet refProduit;\r\n\r\nnbCartons = 100;\r\npoidsCarton = 10;\r\nrefProduit = \"AF456-DE\";\r\n\r\nconsole.log(\"Un carton de \" + refProduit + \" pèse \" + poidsCarton + \"kg\");\r\n\r\npoidsTotal = nbCartons * poidsCarton;\r\nprocess.stdout.write(\"Les \" + nbCartons);\r\nprocess.stdout.write(\" cartons pèsent \");\r\nconsole.log(poidsTotal + \"kg\");\r\n\r\nRésultat :\r\n	Un carton de AF356-DE pèse 10kg\r\n	Les 100 cartons pèsent 1000kg.\r\n\r\n\\n :\r\n\\n désigne un caractère spécial qui positionne le curseur en début de la ligne suivante\r\n\r\n\"use strict\";\r\n\r\nconsole.log(\"LIGNE 1\");\r\nconsole.log(\"LIGNE 2\");\r\n\r\nprocess.stdout.write(\"Ligne 1\");\r\nprocess.stdout.write(\"Ligne 2\");\r\n\r\nconsole.log(\"L 1\\nL 2\");\r\n\r\nRésultat :\r\nLIGNE 1\r\nLIGNE 2\r\nLigne 1Ligne 2L 1\r\nL 2\r\nSaisie au clavier (l’objet kbd) :\r\n\r\nL\'objet kbd permet entre autres de mettre une chaine de caractères entrée au clavier dans la variable de son choix\r\n\r\n\"use strict\";\r\n\r\nconst kbd = require(\"kbd\");\r\nlet nom;\r\nlet age;\r\n\r\nprocess.stdout.write(\"Bonjour, comment t\'appelles-tu ? \")\r\nnom = kbd.getLineSync();\r\nprocess.stdout.write(\"Quel âge as-tu ? \")\r\nage = kbd.getLineSync();\r\n\r\nconsole.log(\"Bonjour \" + nom);\r\nage = Number(age);\r\nage = age + 1;\r\nconsole.log(\"Tu auras \" + age + \" ans à ton prochain anniversaire \\n\"); \r\n\r\nIncrémentation/Décrémentation :\r\n\r\n	Incrémenter une variable, c\'est ajouter 1 à son contenu\r\nDécrémenter une variable, c\'est retirer 1 à son contenu\r\n\r\ni = i + 1;       // incrémenter\r\n\r\ni = i - 1;       // décrémenter\r\n\r\nIl est très fréquent de devoir incrémenter ou décrémenter une variable\r\nOn peut incrémenter et décrémenter de manière plus concise :\r\n\r\ni++;                // équivalent à i = i+1\r\n\r\ni--;                // équivalent à i = i-1\r\n\r\nANNEXE : priorité des opérateurs :\r\n\r\nx =  2 * a + 3 * b + 4 / c;\r\n\r\nest équivalent à :\r\n\r\nx =  (2 * a) + (3 * b) + (4 / c);\r\n\r\nOn dit que la multiplication/division est plus prioritaire que l\'addition/soustraction\r\nIl est conseillé de mettre des ( et des )pour faciliter la lecture des expressions compliquées ...\r\n... ou de fractionner l\'affectation sur plusieurs lignes\r\n\r\nx =  2 * a;\r\nx =  x + (3 * b);\r\nx =  x + (4 / c);\r\n\r\nANNEXE : codage des nombres :\r\n\r\nJavaScript est un langage non typé : tous les nombres sont codés sur 64 bits (8 octets) selon la norme IEEE 754\r\n	\r\nReprésentation exacte des entiers entre -9007199254740992 et 9007199254740992\r\n \r\nSoit entre -2^53 et 2^53\r\n \r\nAttention : en dehors de ces valeurs, la représentation n\'est plus exacte !\r\n	\r\nReprésentation approximative des réels : ±5e-324 / ±1.7976931348623157e+308\r\n	\r\nValeurs spéciales :\r\n-	+0 (ou 0) : zéro positif\r\n-	-0 : zéro négatif\r\n-	+Infinity (ou Infinity) : infini positif\r\n-	-Infinity : infini négatif\r\n-	NaN : not a number\r\n\r\nANNEXE : codage des chaines de caractères (string) : \r\n\r\nLes caractères sont codés selon la norme UTF-8 (Unicode) : \r\n-	\"exemple de chaine valide\"\r\n-	\'exemple de chaine valide\'\r\n-	\"exemple de \'chaine\' valide\"\r\n-	\'exemple de \"chaine\" valide\'\r\n-	\'exemple de \\\'chaine\\\' valide\'\r\n-	\'\\xA9 représente le symbole copyright\'\r\n-	\'\\u03c0 représente le symbole pi\'\r\n\r\nANNEXE : liste des mots-clés réservés en ECMAScript :\r\n\r\nMots-clés réservés en ECMAScript 5\r\n\r\nbreak   delete  function  return   typeof  case  do        if       switch\r\nvar     catch   else      in       this    void  continue  false    instanceof\r\nthrow   while   debugger  finally  new     true  with      default  for\r\nnull    try\r\n\r\nclass  const  enum  export  extends  import  super\r\n\r\nimplements  let private  public  yield interface  package  protected  static\r\n\r\narguments  eval\r\n\r\nMots-clés réservés en ECMAScript 3\r\n\r\nabstract  double  goto       native  static  boolean  enum          implements\r\npackage   super   byte       export  import  private  synchronized  char\r\nextends   int     protected  throws  class   final    interface     public\r\ntransient const   float      long    short   volatile\r\n\r\nA éviter (noms de variables ou de fonctions globales)\r\n\r\narguments   encodeURI Infinity   Number    RegExp   Array     URIError    \r\nisFinite    Object    String     Boolean   Error    isNaN     parseFloat\r\nSyntaxError Date      eval       JSON      parseInt TypeError decodeURI\r\nEvalError   Math      RangeError undefined Function NaN       ReferenceError\r\ndecodeURIComponent    encodeURIComponent\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--
-- Création :  mer. 15 avr. 2020 à 11:58
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
-- Création :  lun. 27 avr. 2020 à 12:00
--

CREATE TABLE IF NOT EXISTS `exercices` (
  `id_exercice` int(11) NOT NULL AUTO_INCREMENT,
  `id_chapitre` int(11) NOT NULL,
  `nom_exercice` varchar(55) NOT NULL,
  `consigne_exercice` text NOT NULL,
  `output` text NOT NULL,
  PRIMARY KEY (`id_exercice`),
  KEY `id_chapitre` (`id_chapitre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
-- Création :  mer. 15 avr. 2020 à 12:02
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
-- Création :  mar. 21 avr. 2020 à 07:07
--

CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien_externe` int(11) NOT NULL AUTO_INCREMENT,
  `id_exercice` int(11) NOT NULL,
  `url_ressource` text NOT NULL,
  PRIMARY KEY (`id_lien_externe`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages_envoyes`
--
-- Création :  mar. 14 avr. 2020 à 07:51
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
-- Création :  mar. 14 avr. 2020 à 07:48
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
-- Création :  lun. 13 avr. 2020 à 13:18
--

CREATE TABLE IF NOT EXISTS `progress_cours` (
  `id_progress_cours` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_cours` enum('lu','en_cours','non_lu') NOT NULL,
  PRIMARY KEY (`id_progress_cours`),
  KEY `id_cours` (`id_cours`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendus_eval`
--
-- Création :  mar. 21 avr. 2020 à 07:14
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
-- Création :  mar. 21 avr. 2020 à 07:41
--

CREATE TABLE IF NOT EXISTS `rendus_exo` (
  `id_rendu_exo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `contenu_rendu` blob,
  `progress_exo` enum('pas_lu','en_cours','rendu','valide') NOT NULL DEFAULT 'pas_lu',
  PRIMARY KEY (`id_rendu_exo`),
  KEY `id_user` (`id_user`),
  KEY `id_exercice` (`id_exercice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
-- Création :  lun. 27 avr. 2020 à 11:53
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `status_user` enum('professeur','eleve') NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `status_user`, `password`) VALUES
(1, 'Kerbrat', 'Thomas', 'kerbrat@intechinfo.fr', 'professeur', 'secret');

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
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitres` (`id_chapitre`);

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

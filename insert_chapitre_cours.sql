/* Insert les chapitres */
INSERT INTO `chapitres`(`id_chapitre`, `nom_chapitre`, `resume`) VALUES ('3','Initialisation à HTML5','');
INSERT INTO `chapitres`(`id_chapitre`, `nom_chapitre`, `resume`) VALUES ('4','Structures de données','');
INSERT INTO `chapitres`(`id_chapitre`, `nom_chapitre`, `resume`) VALUES ('5','PERL','');

/* Insert les noms des ruriques de cours*/
    /* Rubriques 1*/
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('3','1','2','Configuration ordinateur en S1','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('4','1','3','Ordinateur, OS et programmation','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('5','1','4','Unix : initiation au shell','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('6','1','5','vim : initiation','');

    /* Rubriques 2*/
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('7','2','2','Node.js - structures de contrôle','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('8','2','3','Node.js - fonction','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('9','2','4','Node.js - objet et tableau','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('10','2','5','Node.js - lecture/écriture de fichier','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('11','2','6','Node.js - module','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('12','2','7','WEB : créer un serveur WEB avec node.js','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('13','2','8','WEB : spécifier un site WEB','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('14','2','9','WEB : modèle PI','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('15','2','10','Introduction à GIT','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('16','2','11','Bonnes pratiques','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('17','2','12','Langages informatiques','');

    /* Rubriques 3*/
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('18','3','1','HTML5','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('19','3','2','CSS3','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('20','3','3','Exemples HTML5/CSS3','');

    /* Rubriques 4*/
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('21','4','1','Algorithmique : tri','');

    /* Rubriques 5*/
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('22','5','1','Initiation à la programmation en Perl','');
INSERT INTO `cours`(`id_cours`, `id_chapitre`, `index_cours`, `nom_cours`, `contenu_cours`) VALUES ('23','5','2','Expressions régulières avancées','');


INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '3', '1', 'HTML5');
INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '3', '2', 'CSS3');
INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '3', '3', 'Exemples HTML5/CSS3');

INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '4', '1', 'Algorithmique : tri'); 

INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '5', '1', 'Initiation à la programmation en Perl');
INSERT INTO `rubriques` (`id_rubrique`, `id_chapitre`, `index_rubrique`, `nom_rubrique`) VALUES (NULL, '5', '2', 'Expressions régulières avancées'); 
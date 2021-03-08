/* Insert les chapter */
INSERT INTO `chapter`(`id_chapter`, `chapter_name`, `resume`) VALUES ('3','Initialisation à HTML5','');
INSERT INTO `chapter`(`id_chapter`, `chapter_name`, `resume`) VALUES ('4','Structures de données','');
INSERT INTO `chapter`(`id_chapter`, `chapter_name`, `resume`) VALUES ('5','PERL','');

/* Insert les names des ruriques de class*/
    /* rubrics 1*/
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('3','1','2','Configuration ordinateur en S1','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('4','1','3','Ordinateur, OS et programmation','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('5','1','4','Unix : initiation au shell','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('6','1','5','vim : initiation','');

    /* rubrics 2*/
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('7','2','2','Node.js - structures de contrôle','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('8','2','3','Node.js - fonction','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('9','2','4','Node.js - objet et tableau','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('10','2','5','Node.js - lecture/écriture de fichier','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('11','2','6','Node.js - module','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('12','2','7','WEB : créer un serveur WEB avec node.js','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('13','2','8','WEB : spécifier un site WEB','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('14','2','9','WEB : modèle PI','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('15','2','10','Introduction à GIT','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('16','2','11','Bonnes pratiques','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('17','2','12','Langages informatiques','');

    /* rubrics 3*/
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('18','3','1','HTML5','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('19','3','2','CSS3','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('20','3','3','Exemples HTML5/CSS3','');

    /* rubrics 4*/
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('21','4','1','Algorithmique : tri','');

    /* rubrics 5*/
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('22','5','1','Initiation à la programmation en Perl','');
INSERT INTO `class`(`id_class`, `id_chapter`, `index_class`, `name_class`, `contents_class`) VALUES ('23','5','2','Expressions régulières avancées','');


INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '3', '1', 'HTML5');
INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '3', '2', 'CSS3');
INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '3', '3', 'Exemples HTML5/CSS3');

INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '4', '1', 'Algorithmique : tri'); 

INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '5', '1', 'Initiation à la programmation en Perl');
INSERT INTO `rubrics` (`id_rubrics`, `id_chapter`, `index_rubric`, `name_rubric`) VALUES (NULL, '5', '2', 'Expressions régulières avancées'); 
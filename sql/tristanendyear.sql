-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 20 juin 2020 à 20:46
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tristanendyear`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Shonen', 'En Occident, le mot shōnen est utilisé pour désigner une ligne éditoriale et un type de manga. La cible éditoriale du shōnen est à l\'origine constituée principalement de jeunes adolescents de sexe masculin, entre 8 et 18 ans.', NULL),
(2, 'Shojo', 'Le shōjo manga est l\'une des trois principales catégories éditoriales du manga, aussi parfois qualifié de « genre » ; les deux autres étant le shōnen et le seinen. Cette catégorie éditoriale cible un public féminin, plutôt adolescent, ou parfois jeune adulte.', NULL),
(3, 'Seinen', 'Le seinen manga est un type de manga dont la cible éditoriale est avant tout constituée par les jeunes adultes (15 à 30 ans) de sexe masculin. Il arrive cependant que le genre soit destiné à des personnes plus âgées', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `product_quantity`, `product_price`) VALUES
(15, 1, 1, 1, 8),
(23, 1, 1, 2, 8),
(25, 1, 1, 4, 8),
(26, 1, 1, 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `summary` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `main_image` text,
  `is_online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `summary`, `price`, `quantity`, `category_id`, `main_image`, `is_online`) VALUES
(1, 'Boruto', 'Depuis que son père est devenu Hokage et occupe la plus haute fonction du village de Konoha, Boruto Uzumaki, fils de Naruto Uzumaki et Hinata Hyûga, vit dans l\'ombre de celui-ci. Cherchant toujours à attirer l\'attention de ce dernier, il a pris la ferme résolution de le surpasser. Mais la vie que mènent les ninjas de haute-volée est rythmée par les missions complexes et les entraînements rigoureux, il va d\'ailleurs apprendre à ses dépens que devenir le meilleur ninja n\'est pas une tâche aisée. En compagnie de Sarada Uchiwa, la fille de Sasuke Uchiwa et Sakura Haruno et de Mitsuki le fils d\'Orochimaru, Boruto va dès lors découvrir l\'univers des ninjas, ainsi que ses fondements.', 8, 5, 1, '1.jpg', 1),
(2, 'Fairy Tail', 'L’histoire se focalise principalement sur les missions effectuées par l’une des équipes de la guilde Fairy Tail, composée de Natsu Dragnir (chasseur de dragon de feu), Lucy Heartfilia (constellationniste) et Happy (un Exceed, chat bleu pouvant se faire pousser des ailes, voler et parler), qui seront très vite rejoints par Erza Scarlett (mage chevalier) et Grey Fullbuster (Mage de glaces puis plus tard Chasseur de démons de Glace), deux autres membres de la fameuse guilde. Ils sont rejoints au cours de l\'aventure par Carla (une chatte blanche Exceed, comme Happy), Wendy (chasseuse de dragon céleste), et par bien d\'autres.', 8, 50, 1, '2.jpg', 1),
(7, 'Fire Force', 'En l\'an 198 du calendrier solaire, le monde fait face au phénomène de combustion humaine où l\'humanité peut s\'enflammer sans prévenir et se transformer en « torche humaine ». Les membres des brigades spéciales Fire Force du royaume de Tokyo cherchent à découvrir les raisons de ce phénomène et parmi eux se trouve Shinra Kusakabe, surnommé « le démon », qui intègre la 8e brigade pour éradiquer le phénomène de combustion humaine et découvrir la vérité sur l\'incendie ayant coûté la vie à sa mère et son frère, il y a douze ans.', 8, 50, 1, '7.jpg', 1),
(8, 'Hunter x Hunter', 'Gon Freecss a douze ans, et rêve de devenir hunter (chasseur en anglais). Les hunters sont des aventuriers d\'élite qui peuvent être chasseurs de prime, chefs-cuisinier, archéologues, zoologues, justiciers ou consultants dans divers domaines. Son père, Ging Freecss, qu\'il ne connaît pas directement, est considéré comme un des plus grands hunters de son temps. C\'est aussi pour le retrouver que Gon veut devenir hunter.', 8, 50, 1, '8.jpg', 1),
(9, 'Assassination Classroom', 'L\'histoire se déroule au prestigieux collège Kunugigaoka. Koro-sensei est une étrange créature qui déclare avoir subitement détruit 70 % de la Lune. Il prévoit ensuite de détruire la Terre en mars prochain pour des raisons inconnues. Il se présente ensuite au gouvernement japonais et annonce vouloir devenir le professeur principal de la classe 3-E du collège Kunugigaoka pour pouvoir les former en tant qu\'assassins et éliminer une cible bien particulière : lui-même, leur propre enseignant.  Les élèves de cette classe auront donc pour objectif d\'assassiner leur professeur afin de sauver la Terre, la récompense étant de 10 milliards de yens. Cependant un problème se pose : Koro-sensei se déplace à Mach 20, possède des tentacules à fonctions infinies et, de plus, c\'est un excellent professeur ! Le gouvernement va accepter pour pouvoir le garder à l’œil à condition que Koro-sensei ne fasse pas de mal aux élèves ; mais les élèves réussiront-ils leur mission avant la date impartie ?', 8, 50, 1, '9.jpg', 1),
(10, 'Bakuman', 'Moritaka Mashiro est en 3e année de collège et est très doué pour le dessin, c\'est d\'ailleurs le neveu d\'un mangaka qui a connu son heure de gloire avant de ne plus avoir de succès et de mourir dans l\'indifférence du public. Mashiro est amoureux d\'une fille de sa classe, Miho Azuki, mais n\'ose pas lui avouer ses sentiments. Akito Takagi, le premier de la classe, propose à Mashiro de s\'associer avec lui afin qu\'ils réalisent un manga.  Mashiro refuse tout d\'abord la proposition, jusqu\'au soir où Takagi lui propose de le rejoindre devant chez Azuki. Celle-ci leur confirme alors vouloir devenir comédienne de doublage. Établissant un lien avec l\'histoire de son oncle, Mashiro, fort troublé, lui dit alors, machinalement : « Si nous arrivons à réaliser notre rêve, voudras-tu m\'épouser ? » À la surprise des deux protagonistes, Miho accepte, mais à condition qu\'ils ne se voient plus jusqu\'à ce que leur rêve soit devenu réalité. Mashiro et Akito se lancent alors dans la folle aventure de créer un manga à succès, avec le soutien de la famille de Mashiro qui lui confie les clés de l\'atelier de son oncle défunt.  Les deux adolescents se consacrent ainsi à l\'écriture d\'un manga et découvrent l\'univers de l\'édition manga au Japon, avec ses joies et ses déconvenues.', 8, 50, 1, '10.jpg', 1),
(11, 'Radiant', 'Dans un univers fantastique, des monstres, appelés Némésis, tombent du ciel. L\'origine de ces monstres reste inconnue, mais une chose est sûre, ils ne sont pas là pour notre bien ! Heureusement, des hommes et des femmes organisent la lutte contre ces Némésis. Ces individus sont des infectés rejetés par la société et bien souvent aussi craints que les créatures elles-mêmes. Ils représentent pourtant le seul et unique rempart contre cette menace. Ce sont les sorciers.  D\'après certaines rumeurs, ces monstres tomberaient d\'un nid de Némésis appelé « Radiant ».  Seth, le protagoniste de Radiant, est un adolescent qui a survécu à une attaque de Némésis. Il rêve de vaincre tous les Némésis et d\'apporter la paix entre les sorciers et le reste de l\'humanité. Pour ce faire, il doit trouver le lieu d\'origine des Némésis, le légendaire Radiant, et ainsi détruire leur berceau. Lui et d\'autres sorciers parcourent la région à la recherche du Radiant tout en évitant l\'inquisition, une organisation opposée aux Sorciers.', 8, 50, 1, '11.jpg', 1),
(12, 'Gintama', 'À l\'ère Edo, le Japon est envahi par des extraterrestres appelés Amanto, des créatures de formes diverses, mais toutes plus ou moins humanoïdes. Ceux-ci parviennent à vaincre les samouraï après de longs combats. Dès lors, une futurisation radicale tranchant avec le décor classique du Japon se met en place et les Amanto interdisent le port du sabre en public. Malgré tout, il en reste qui préfèrent conserver leur bushido. Dans ce Japon complètement anachronique, subsistent ainsi des personnes qui refusent d\'abandonner leur sabre. Parmi eux, Gintoki Sakata, ancien samouraï excentrique qui aide un adolescent nommé Shinpachi Shimura, à sauver sa sœur Tae d\'un groupe d\'extraterrestres qui veulent la faire rejoindre une maison close. Impressionné par Gintoki, Shinpachi devient son apprenti et travaille avec lui comme homme à tout faire dans le but de payer le loyer de Gintoki.', 8, 50, 1, '12.jpg', 1),
(13, 'Gamaran', 'Fin de l\'ère Edo. Une région est devenue le lieu de rassemblement privilégié des adeptes d\'arts martiaux. Le nom de cette région est Unabara, l\'antre des démons. Naosata Washizu, le seigneur d\'Unabara, a décidé d\'organiser une gigantesque compétition d\'arts martiaux pour déterminer qui est le plus fort. Celui de ses 31 fils qui saura trouver l\'expert en arts martiaux le plus fort deviendra son successeur. Naoyoshi Washizu, le 27e fils du seigneur, part à la recherche du légendaire Jinsuke Kurogane, dont on dit qu\'il a tué 1000 adeptes d\'arts martiaux. Mais Jinsuke Kurogane semble avoir disparu et Naoyoshi va rencontrer Gama, le dernier élève de l\'école Ogame. C\'est finalement Gama qui va accompagner le 27e fils du seigneur d\'Unabara à la Grande compétition. Une histoire pleine de promesses et de combats.', 8, 50, 1, '13.jpg', 1),
(14, 'Chronos Ruler', 'L\'histoire se concentre sur deux \"Chronos Rulers\", Victor et Kiri, qui combattent des créatures appelées \"Hora\". Celles-ci ont la capacité de \"dévorer\" les sentiments négatifs des gens qui veulent modifier le cours du temps.', 8, 50, 1, '14.jpg', 1),
(15, 'Blue Spring Ride', 'Alors que Futaba Yoshioka fait son entrée au lycée, elle ne garde pas de bons souvenirs du collège, où le garçon dont elle était amoureuse, Kô Tanaka, partit sans qu\'elle ait pu lui avouer ses sentiments. La chance tourne puisqu\'elle le retrouve par hasard au lycée. Cependant, il ne porte pas le même nom et sa personnalité a quelque peu changé. Avec ses nouveaux amis, elle va apprendre à l\'apprivoiser et à se rapprocher de lui, mais aussi à le connaître et à trouver de nouveau confiance en elle.  Personnages', 8, 50, 2, '15.jpg', 1),
(16, 'Daytime Shooting Star', 'Entourée de ses parents et de ses amis, Suzumé mène une vie tout à fait ordinaire à la campagne. Son quotidien change radicalement quand ses parents l’envoient vivre à Tokyo. À son arrivée à la capitale, Suzumé se perd et rencontre l’ami de son oncle qui est en fait son professeur principal ! Une nouvelle vie commence pour elle…', 8, 50, 2, '16.jpg', 1),
(17, '@Ellie', 'Eriko est une lycéenne discrète que l’on ne remarque pas. Son seul plaisir est d’admirer Akira Ômi, un beau jeune homme plein de fraîcheur, et de tweeter ses fantasmes quotidiens sur Internet sous le pseudo « Ellie ». Mais, un jour, elle découvre par hasard la vraie nature d’Ômi. Et ce dernier prend connaissance des tweets embarrassants d’Ellie…!!', 8, 50, 2, '17.jpg', 1),
(18, 'Hotaru', 'Hotaru Amemiya travaille dans une entreprise de design intérieur et mène une petite vie tranquille : elle sort avec ses amies, lit des mangas, traînasse dans son appartement une bière à la main les jours de congé, ne se prend pas la tête et, surtout, ne s’intéresse pas aux hommes. Pourtant sa vie va changer petit à petit le jour où, par un caprice du destin, Hotaru commence une insouciante cohabitation avec son chef, le séduisant Seiichi Takano, séparé de son épouse. Insouciante, certes, mais non sans difficultés. En effet, Takano ne se lasse pas de la rappeler à l’ordre… Il la surnomme même « le poisson séché » car sa vie amoureuse est inexistante. Pourtant sur ce point-là aussi les choses vont évoluer pour Hotaru. Quand elle rencontre le charmant designer Makoto, son coeur s’emballe et c’est avec confiance qu’elle se tourne vers Takano qui va lui expliquer le coeur des hommes.  Satoru Hiura nous livre ici une histoire romantique à souhait qui a été adaptée en drama par la chaîne NTV en 2007. Tournez vite les pages et découvrez la transformation d’Hotaru qui découvre l’amour.', 8, 50, 2, '18.jpg', 1),
(19, 'Ore no Monogatarie', 'Takéo Gôda est un lycéen pataud bâti comme une armoire à glace. Les filles dont il tombe amoureux s’éprennent toutes de son ami d’enfance: le beau Sunakawa. Mais un jour il sauve une jeune fille des griffes d’un pervers. Et, pour la première fois, il semble qu’une fille craque pour lui !', 8, 50, 2, '19.jpg', 1),
(20, 'Sawako', 'La jeune Sawako, avec ses longs cheveux noirs et son allure plutôt sombre effraie ses condisciples qui préfèrent donc l’éviter ou se moquer d’elle. La rumeur prétend même qu’elle peut voir les fantômes ou vous lancer un mauvais sort !  Timide et renfermée ainsi qu’extrêmement sensible, Sawako vit très mal cette marginalisation forcée. Elle est pourtant très gentille et n’épargne pas sa peine pour essayer de le démontrer, de rendre service dès qu’elle le peut.  Seul Kazehaya, un jeune homme charismatique et au charme ravageur semble ne pas se soucier de ce que l’on dit sur Sawako. Il la salue tous les matins et lui prodigue même quelques conseils : si Sawako surpasse sa timidité pour aller vers les autres et leur dire ce qu’elle pense vraiment, tout devrait s’améliorer. Mais ce n’est pas si simple… Difficile en effet de combattre les préjugés !', 8, 50, 2, '20.jpg', 1),
(21, 'Short Love Stories', 'Pour tous les amateurs de shojo, voici la collection « Short Love Stories » !  Il ne s’agit pas d’une nouvelle série au sens propre pour la simple et bonne raison que chaque tome représentera un auteur de vos shojo préférés en regroupant plusieurs histoires courtes dessinées par l’auteur.', 8, 50, 2, '21.jpg', 1),
(22, 'Cat Street', 'Keito Aoyama est une jeune fille de seize ans qui a quitté l’école et ne sort presque pas depuis sept ans. Poussée par ses parents, elle a été une baby star, enchaînant les publicités et les spectacles. À neuf ans, elle est choisie pour le premier rôle d’une comédie musicale à succès et partage ce rôle avec Nako, une fille de son âge qui vient de commencer ce métier. Keito, qui n’avait pas d’amie jusqu’ici, est heureuse de rencontrer Nako et n’hésite pas à tout lui apprendre. Mais lorsque Nako est au sommet, elle délaisse Keito. La petite fille est paralysée, trahie par sa meilleure amie, elle est incapable de remonter sur les planches ni de revenir à une vie normale.  Jusqu’au jour où elle fait la connaissance d’un étrange directeur qui lui ouvre les portes de son établissement très particulier. Pas de cours fixes, les adolescents peuvent entrer et sortir comme bon leur semble… Grâce à ses nouvelles rencontres et à ses retrouvailles avec un ancien garçon de sa classe, Keito va peu à peu s’ouvrir aux autres.', 8, 50, 2, '22.jpg', 1),
(23, 'Le Sablier', 'À la suite du divorce de ses parents, An Uekusa doit quitter Tokyo avec sa mère pour emménager chez ses grands-parents maternels, dans un petit village. Sur le chemin, elle visite un musée où elle achète un sablier miniature qui deviendra, au fil du temps, son porte-bonheur et le symbole d’un changement de vie !  Pour l’heure, le contraste entre la ville et la campagne perturbe grandement la jeune fille qui perd tous ses repères. An trouve, par exemple, que les gens de la campagne sont trop familiers et qu’ils se mêlent un peu trop de la vie privée des autres. Heureusement, sa rencontre avec son voisin, Daigo, dont elle va tomber amoureuse, et les quelques nouveaux amis qu’elle parviendra à se faire vont l’aider à s’habituer à sa nouvelle vie.  Très vite, pourtant, son quotidien sera de nouveau bouleversé par le suicide de sa mère. An devra grandir et se forger sa personnalité dans l’incompréhension du terrible geste de sa mère.  Mais que l’on ne s’y trompe pas, « Le Sablier » est d’abord une grande histoire romantique dans laquelle on retrouve les éléments familiers du shojo, les sentiments, la rivalité amoureuse, le questionnement.  Toutefois, cette série aborde aussi des sujets très sérieux comme le suicide, le deuil, les inégalités sociales, etc. ce qui en fait un shojo contemporain très touchant, au propos particulièrement riche !', 8, 50, 2, '23.jpg', 1),
(24, 'Jardin Secret', 'Ran est une fille assez parfaite que beaucoup considèrent comme un modèle à suivre : sérieuse, sportive, intelligente, soucieuse de sa santé, etc. Mais il n’est pas facile de rencontrer un garçon quand ces derniers la considèrent, à son grand dam, comme « l’inaccessible étoile » ! Un jour, elle fait fortuitement la connaissance de Akira, un garçon solaire, naturel, franc et amical et elle découvre également son « secret »: il est fils de fleuristes, apprécie beaucoup travailler au magasin de ses parents et sait déjà qu’il deviendra lui aussi fleuriste. Mais il n’ose l’avouer à personne de peur que l’on se moque de lui.', 8, 50, 2, '24.jpg', 1),
(25, 'Deadman Wonderlan', 'Un puissant séisme a ravagé la partie continentale du Japon et a détruit en grande partie Tokyo, provoquant l\'immersion des trois quarts de la ville dans l\'océan. Dix ans plus tard, l\'histoire se centre sur Ganta Igarashi, un étudiant apparemment ordinaire qui fréquente le collège de la préfecture de Nagano. Bien que survivant du tremblement de terre, Ganta n\'a aucun souvenir de la tragédie et a vécu une vie ordinaire. Tout cela change quand un homme étrange couvert de sang et portant une armure pourpre flotte devant les fenêtres de la classe. Souriant comme un fou, l\'Homme en Rouge massacre toute la classe de Ganta et, plutôt que de le tuer, lui incruste un éclat de cristal rouge dans la poitrine. Quelques jours après le massacre, Ganta est déclaré l\'unique suspect et, après un procès rapide, est condamné à la prison à vie dans Deadman Wonderland, une prison doublée d\'un parc d\'attraction.', 8, 50, 3, '25.jpg', 1),
(26, 'Death Note', 'Light Yagami est un lycéen surdoué qui juge le monde actuel criminel, pourri et corrompu. Sa vie change du tout au tout le jour où il ramasse par hasard un mystérieux cahier intitulé « Death Note ». Son mode d\'emploi indique que « la personne dont le nom est écrit dans ce cahier meurt ». D\'abord sceptique, Light décide toutefois de tester le cahier et découvre que son pouvoir est bien réel. Il rencontre l\'ancien propriétaire du Death Note, un dieu de la mort nommé Ryûk. Celui-ci déclare avoir volontairement laissé tomber son carnet dans le but de se divertir.  Light décide d\'utiliser le Death Note pour exterminer les criminels, dans le but de bâtir un monde parfait dont il sera le dieu. Il apprend peu à peu à se servir des pouvoirs du cahier et de ses règles : l\'utilisateur ne peut tuer une personne que s\'il connait son visage, en y inscrivant son prénom et son nom de famille. Il peut également en préciser la cause et les circonstances détaillées, la cause par défaut étant la crise cardiaque.', 8, 50, 3, '26.jpg', 1),
(27, 'Gleipnir', 'Shūichi Kagaya est d\'apparence un simple lycéen mais il cache quelque chose ; ce dernier dispose en réalité d\'un pouvoir qui peut le transformer en un monstre ressemblant à un yuru-chara de chien. Cependant, en sauvant Claire Aoki d\'un entrepôt en feu, celle-ci découvre son secret et va l\'utiliser à son avantage en lui faisant du chantage car cette dernière à un but précis : retrouver sa grande sœur parricide.', 8, 50, 3, '27.jpg', 1),
(28, 'Hell\'s Kitchen', 'Satoru est un jeune homme normal qui vit avec sa sœur dans un appartement modique. Alors qu\'il s\'apprêtait à manger, Dogma, mieux connu sous le nom de comte Antigaspi, apparait devant lui. Dogma est un démon des enfers qui se nourrit principalement d\'âmes de chefs cuisiniers. Malheureusement, toutes les âmes qu\'il mange sont fades et sans réel goût. Il décide alors de prendre Satoru qui ne sait même pas cuire un œuf et de lui apprendre la cuisine afin d\'en faire le meilleur cuisinier pour pouvoir par la suite manger son âme.', 8, 50, 3, '28.jpg', 1),
(29, 'Psycho-Pass', 'Au début de l\'année 2112, il est possible de mesurer instantanément l\'état mental d\'une personne, sa personnalité et la probabilité qu\'elle commette des crimes grâce à un dispositif installé sur le corps de chaque citoyen appelé « Psycho-Pass ». Ce système est appelé « Sybil », et est mis en place par le Ministère du Bien-être ; accompagné d\'une auto-suffisance alimentaire, d\'un contrôle des arts, d\'un isolationnisme complet et de travaux pour rallonger la vie humaine (notamment par le biais d\'organes artificiels), Sybil a transformé la société en « monde parfait ». La quasi-totalité des mesures de prévention de la criminalité sont électroniques : scanneurs ou drones de surveillance mesurent en permanence l\'état de chacun.', 8, 50, 3, '29.jpg', 1),
(30, 'Ragna Crimson', 'Les chasseurs de dragons tuent leurs proies avec leur épée d\'argent afin de toucher une récompense. Parmi eux, il y a Ragna, un jeune homme plutôt faible faisant équipe avec Léonica, une chasseuse de génie qui peut se vanter d\'avoir tué bien plus de dragons que n\'importe quel chasseur. Ragna n\'a qu\'un seul désir : rester pour toujours à ses côtés.  Mais, suite à l\'apparition d\'un ennemi impitoyable, le souhait du jeune homme ne pourra jamais être exaucé... Seul un être puissant peut défier ces créatures. Pour s\'opposer au terrible destin qui s\'annonce et changer le cours de l\'histoire, Ragna n\'aura pas d\'autre choix que de passer un pacte avec l\'ennemi...!', 8, 50, 3, '30.jpg', 1),
(31, 'Sky-High Survival', 'Yuri, qui se retrouve sans savoir comment sur le toit d\'un gratte-ciel dans un monde qu\'elle ne reconnaît pas, se fait aussitôt attaquer par un homme masqué et armé qu\'elle réussit à esquiver. Le seul moyen sûr de se déplacer dans cette ville hostile est d\'utiliser des ponts, reliant les toits des immeubles. Quitter ce monde dangereux, retrouver son frère et savoir qui sont ces hommes masqués et pourquoi ils l\'attaquent deviennent alors la préoccupation majeure de Yuri. Elle découvre ensuite que ces gratte-ciel et les hommes masqués sont faits pour que les personnes se suicident en sautant des toits.', 8, 50, 3, '31.jpg', 1),
(32, 'Arcanum', 'Il y a dix ans, des Idra, créatures dont l’origine reste encore inconnue, ont dévasté Washington D.C. Paralysé depuis ses 5 ans, Ilya Kravitz ne vit que pour devenir un jour pilote d’un Arcanum, la seule arme capable de détruire ces monstres. Grâce au soutien de sa soeur, Anna, il est aujourd’hui sur le point de réaliser son rêve. Mais ce qui se cache vraiment derrière ces armes est impitoyable et la guerre ne fait que commencer…', 8, 50, 3, '32.jpg', 1),
(33, 'Moriarty', 'Deux frères orphelins sont accueillis dans la famille Moriarty, grâce aux ambitions cachées du fils aîné Moriarty, Albert. Ce dernier abhorre l\'aristocratie à laquelle il appartient et le système social qui régit la société britannique. Albert a vu en l\'aîné l\'intelligence et le charisme dont il avait besoin pour accomplir son rêve de nettoyer la société de ces \"êtres inutiles et sales\". Albert propose de leur offrir sa richesse et son influence à condition que les garçons mettent leur intelligence au service de son rêve. 13 ans plus tard, à côté de leurs activités officielles, les frères Moriarty sont devenus des \"conseillers privés\". Avec William à leur tête, ils aident les gens du peuple, victimes d\'injustices, à se venger des riches qui les ont fait souffrir. Leur sanction est impitoyable, car la punition qu\'ils infligent n\'est autre que...la mort !', 8, 50, 3, '33.jpg', 1),
(34, 'Dog-End', 'Afin d’assurer la protection d’une jeune fille de 14 ans coincée dans une guerre de succession entre clans mafieux et autres puissants conglomérats, le sérieux inspecteur Hatori se voit contraint de collaborer avec le fantasque Kurômaru Wakatsuki, un tueur légendaire, connu dans le milieu sous le nom de « Black Dog ». Ce duo mal assorti parviendra-t-il à s’entendre suffisamment pour tirer la jeune Mana des griffes de la horde de tueurs lancés à ses trousses ?', 8, 50, 3, '34.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `adress`, `password`, `is_admin`) VALUES
(1, 'Tristan', 'Gauthier', 'admin@admin.fr', '152 rue de chevilly 94800 Villejuif', '21232f297a57a5a743894a0e4a801fc3', 1),
(16, 'John', 'Aplogan', 'aplogan.john@gmail.com', '1 rue de laraie Montcuq', '900150983cd24fb0d6963f7d28e17f72', 0),
(17, 'Wesley', 'Ede', 'bgdu93@vlf.com', '1 rue du gansta', '47818a72fcc34b8c1da1cdc9e52c911d', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

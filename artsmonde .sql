-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 déc. 2021 à 16:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artsmonde`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prix` float NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `couleur` varchar(50) CHARACTER SET utf8 NOT NULL,
  `url` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `prix`, `type`, `couleur`, `url`) VALUES
(1, 'La Joconde', 14.99, 'Tee-shirt', 'black', 'https://www.tshirtbuster.com/14105-16169-tm_large_default/shirt-la-joconde-noir-mixtes.jpg'),
(2, 'La Nuit étoilée', 9.99, 'Tee-shirt', 'grey', 'https://th.bing.com/th/id/OIP.mm5OqXvH7YkALS7CtCwvbAHaHa?pid=ImgDet&rs=1'),
(3, 'Le cri', 14.99, 'Tee-shirt', 'white', 'https://ae01.alicdn.com/kf/HTB14AUffv5TBuNjSspcq6znGFXaF/2019-Summer-Tee-Shirt-T-shirt-Homme-Le-Cri-Munch-Batman-Joker-Film-Amusant-Peinture-Dessin.jpg'),
(4, 'Garçon à la pipe', 19.99, 'Tee-shirt', 'brown', 'https://images-na.ssl-images-amazon.com/images/I/61Oe6w18g%2BL._AC_UL1150_.jpg'),
(5, 'Portrait du Dr. Paul Gachet', 9.99, 'Tee-shirt', 'blue', 'https://res.cloudinary.com/teepublic/image/private/s--J_wc2wfV--/t_Resized%20Artwork/c_crop,x_10,y_10/c_fit,w_470/c_crop,g_north_west,h_626,w_470,x_0,y_0/g_north_west,u_upload:v1462829022:production:blanks:beqtwr2j6utublaobvi0,x_-395,y_-325/b_rgb:eeeeee/c_limit,f_auto,h_630,q_90,w_630/v1597514748/production/designs/13101796_0.jpg'),
(6, 'La Joconde', 29.99, 'Sweat-shirt', 'grey', 'https://th.bing.com/th/id/R.cfcdb4ecec34f35c34a1c23fa8ae3b37?rik=mG3fUSU8i2Ghcg&riu=http%3a%2f%2fstatic.galerieslafayette.com%2fmedia%2f261%2f26115055%2fG_26115055_232_ZP_1.jpg&ehk=Flz7eS%2fIRnl3bBbnwm%2fQn%2fs%2bk3rU469l%2bLWarHjWSmk%3d&risl=&pid=ImgRaw&r=0'),
(7, 'La Nuit étoilée', 34.99, 'Sweat-shirt', 'green', 'https://images-na.ssl-images-amazon.com/images/I/81HfZzHrVWL._AC_UX569_.jpg'),
(8, 'La Nuit étoilée', 29.99, 'Sweat-shirt', 'black', 'https://images-na.ssl-images-amazon.com/images/I/81HA1TuXt4L._AC_UX569_.jpg'),
(9, 'La Joconde', 34.99, 'Sweat-shirt', 'black', 'https://th.bing.com/th/id/OIP.xKWFNNI1tzZuAZ0a4-NBxwAAAA?pid=ImgDet&rs=1'),
(10, 'Portrait du Dr. Paul Gachet', 9.99, 'Débardeur', 'blue', 'https://res.cloudinary.com/teepublic/image/private/s--kcfP9rcK--/t_Resized%20Artwork/c_crop,x_10,y_10/c_fit,w_378/c_crop,g_north_west,h_504,w_378,x_0,y_0/g_north_west,u_upload:v1457730343:production:blanks:bqdxnmqfmzyhojlxpqdz,x_-450,y_-392/b_rgb:eeeeee/c_limit,f_auto,h_630,q_90,w_630/v1597514748/production/designs/13101796_0.jpg'),
(11, 'Le Rêve', 14.99, 'Tee-shirt', 'white', 'https://th.bing.com/th/id/R.e51805edae1753c28c457963e81eea13?rik=p6ZFWizktGgKng&pid=ImgRaw&r=0'),
(12, 'Dora Maar au chat', 9.99, 'Tee-shirt', 'grey', 'https://th.bing.com/th/id/OIP.dqZlgqnmg3aZzYdWAhf4ygHaI4?pid=ImgDet&rs=1'),
(13, 'Interchange', 19.99, 'Tee-shirt', 'black', 'https://th.bing.com/th/id/OIP.PuG6IIgGMpIxDdkVnt7BCQHaHa?pid=ImgDet&rs=1');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `prixTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `idUser`, `prixTotal`) VALUES
(1, 2, 59.96),
(2, 2, 164.89);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `idCommande` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `qteArticle` int(11) NOT NULL,
  `taille` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`idCommande`, `idArticle`, `qteArticle`, `taille`) VALUES
(1, 3, 1, 'S'),
(1, 1, 3, 'S'),
(2, 2, 1, 'S'),
(2, 4, 1, 'S'),
(2, 3, 9, 'XL');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvres`
--

CREATE TABLE `oeuvres` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nomArtiste` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenomArtiste` varchar(30) CHARACTER SET utf8 NOT NULL,
  `anneeCreation` int(11) NOT NULL,
  `prix` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `longueur` int(11) NOT NULL,
  `hauteur` int(11) NOT NULL,
  `lieu` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'Inconnu',
  `url` varchar(500) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `oeuvres`
--

INSERT INTO `oeuvres` (`id`, `nom`, `nomArtiste`, `prenomArtiste`, `anneeCreation`, `prix`, `description`, `longueur`, `hauteur`, `lieu`, `url`, `type`) VALUES
(1, 'LA JOCONDE', 'De Vinci', 'Leonard', 1516, '2 000 000 000', 'La Joconde, ou Portrait de Mona Lisa, est un tableau de l&#039;artiste Léonard de Vinci, réalisé entre 1503 et 1506 ou entre 1513 et 15161,2, et peut-être jusqu&#039;à 1519 (l&#039;artiste étant mort cette année-là, le 2 mai)3, qui représente un portrait mi-corps, probablement celui de la Florentine Lisa Gherardini, épouse de Francesco del Giocondo. Acquise par François Ier, cette peinture à l&#039;huile sur panneau de bois de peuplier de 77 × 53 cm est exposée au musée du Louvre à Paris. La Joconde est l&#039;un des rares tableaux attribués de façon certaine à Léonard de Vinci.', 53, 77, 'Paris', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/800px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg', 'Peinture'),
(5, 'LE CRI', 'Munch', 'Edvard ', 1917, '120 000 000 ', 'Le Cri (en norvégien : Skrik) est une œuvre expressionniste de l&#039;artiste norvégien Edvard Munch dont il existe cinq versions (deux peintures, un pastel, un au crayon et une lithographie) réalisée en 1917. Symbolisant l&#039;homme moderne emporté par une crise d&#039;angoisse existentielle, elle est considérée comme l&#039;œuvre la plus importante de l&#039;artiste. Le paysage en arrière-plan est le fjord d&#039;Oslo, vu d&#039;Ekeberg. L&#039;une des cinq versions a été vendue par Sotheby&#039;s à New York pour un montant de 120 millions de dollars. Elle détient ainsi, le 2 mai 2012, le record de vente d&#039;une peinture aux enchères.', 74, 91, 'Inconnu', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Edvard_Munch%2C_1893%2C_The_Scream%2C_oil%2C_tempera_and_pastel_on_cardboard%2C_91_x_73_cm%2C_National_Gallery_of_Norway.jpg/800px-Edvard_Munch%2C_1893%2C_The_Scream%2C_oil%2C_tempera_and_pastel_on_cardboard%2C_91_x_73_cm%2C_National_Gallery_of_Norway.jpg', 'Peinture'),
(6, 'PORTRAIT DU DR. PAUL GACHET', 'van Gogh', 'Vincent', 1890, '148 000 000', 'Peinte pendant les derniers mois de la vie de l’artiste avant son suicide, cette toile représente le médecin qui a pris soin de Vincent Van Gogh à Auvers-sur-Oise. La branche de digitale que tient le modèle représente sa fonction de médecin.Le tableau existe en deux versions, et c’est la deuxième qui atteindra un prix de vente record pour l’artiste lors de sa vente à Christie’s New York le 15 mai 1990. La première version est, elle, exposée au musée d’Orsay à Paris.', 57, 66, 'Paris', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Portrait_of_Dr._Gachet.jpg/260px-Portrait_of_Dr._Gachet.jpg', 'Peinture'),
(7, 'PORTRAIT D’ADÈLE PLOCH-BAUER', 'Klimt ', 'Gustav ', 1907, '154 900 000', 'Le Portrait d&#039;Adele Bloch-Bauer I (également appelé La Dame en or ou La Femme en or) est un tableau du peintre symboliste autrichien Gustav Klimt, réalisé entre 1903 et 1907.Commandé par Ferdinand Bloch-Bauer, banquier et producteur de sucre, le mari d’Adele Bloch-Bauer, ce portrait est l&#039;œuvre la plus représentative du cycle d&#039;or de Klimt. C&#039;est le premier des deux portraits d&#039;Adele par Klimt — le second date de 1912 et tous deux font partie des nombreuses œuvres de l&#039;artiste appartenant à la famille Bloch-Bauer.', 138, 138, 'New York', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Gustav_Klimt%2C_1907%2C_Adele_Bloch-Bauer_I%2C_Neue_Galerie_New_York.jpg/1024px-Gustav_Klimt%2C_1907%2C_Adele_Bloch-Bauer_I%2C_Neue_Galerie_New_York.jpg', 'Peinture'),
(8, 'LE RÊVE', 'Picasso', 'Pablo', 1932, '155 000 000', 'Le Rêve est une œuvre de Pablo Picasso datant de 1932. Il s&#039;agit d&#039;une huile sur toile de 130 × 97 cm représentant le portrait de Marie-Thérèse Walter, sa jeune compagne d&#039;alors, assise dans un fauteuil mais décrivant en réalité une représentation érotique intense et colorée. La toile a été peinte en une seule après-midi le 24 janvier 1932. Elle appartient à la période néoclassique de Picasso. Cette toile est restée dans de nombreuses collections privées, notamment celle de Steve Wynn et fut exposée à Las Vegas. Elle appartient depuis mars 2013 à Steven Cohen.', 97, 130, 'Connecticut', 'https://upload.wikimedia.org/wikipedia/en/9/9d/Le-reve-1932.jpg', 'Peinture'),
(9, 'QUAND TE MARIES-TU ?', 'Gauguin ', 'Paul', 1892, '300 000 000', 'Quand te maries-tu ?, ou en tahitien Nafea faa ipoipo ?, est un tableau de Paul Gauguin peint en 1892 en Polynésie française.Vendu pour 7 francs à la mort de l&#039;artiste, il a été acheté, en 2015, par l&#039;émir du Qatar pour 300 millions de dollars, ce qui en fait la deuxième œuvre d&#039;art la plus chère du monde, à la famille Gauguin. Elle avait été confiée au Musée du Louvre en ville de Bâle, le Kunstmuseum Basel, dans le cadre d&#039;un prêt à long terme par la fondation de la famille de l&#039;industriel Rudolf Staechelin1 (1881-1946), qui avait constitué sa collection au moment de la Première Guerre mondiale.', 77, 101, 'Quatar', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Paul_Gauguin%2C_Nafea_Faa_Ipoipo%3F_%28When_Will_You_Marry%3F%29_1892%2C_oil_on_canvas%2C_101_x_77_cm.jpg/800px-Paul_Gauguin%2C_Nafea_Faa_Ipoipo%3F_%28When_Will_You_Marry%3F%29_1892%2C_oil_on_canvas%2C_101_x_77_cm.jpg', 'Peinture'),
(10, 'WOMAN III', 'de Kooning', 'Willem', 1953, '158 800 000', 'Woman III est une peinture de Willem de Kooning issue d&#039;une série de 6 peintures dont le thème est la femme. Il s&#039;agit d&#039;un nu réalisé en deux ans, de 1951 à 1953.En novembre 2006, cette peinture a été vendue par David Geffen au milliardaire Steven A. Cohen pour 137 500 000 dollars1, devenant ainsi la troisième peinture la plus chère vendue à cette date.', 123, 173, 'Connecticut', 'https://static01.nyt.com/images/2006/11/18/arts/18pain.450.jpg', 'Peinture'),
(11, 'LA FILLETTE À LA CORBEILLE FLEURIE ', 'Picasso', 'Pablo', 1905, '115 000 000', 'Jeune fille avec un panier de fleurs (français : Fillette à la corbeille fleurie ou Jeune fille nue avec panier de fleurs ou Fillette nue au panier de fleurs ou Le panier fleuri) est une huile sur toile de 1905 de Pablo Picasso de sa période rose. Le tableau représente une fille des rues de Paris, nommée \"Linda\", dont le destin est inconnu. Il a été peint à une phase clé de la vie de Picasso, alors qu\'il passait d\'un bohème appauvri au début de 1905 à un artiste à succès à la fin de 1906. Le tableau est répertorié comme l\'un des tableaux les plus chers, après avoir atteint un prix de 115 millions de dollars lors de sa vente chez Christie\'s le 8 mai 2018. ', 66, 155, 'New York', 'https://upload.wikimedia.org/wikipedia/en/9/96/Pablo_Picasso%2C_1905%2C_Fillette_nue_au_panier_de_fleurs_%28Le_panier_fleuri%29%2C_oil_on_canvas%2C_155_x_66_cm%2C_private_collection%2C_New_York.jpg', 'Peinture'),
(12, 'GARÇON À LA PIPE', 'Picasso', 'Pablo', 1905, '107 000 000', 'L&#039;huile sur toile représente un garçon tenant une pipe dans sa main gauche et portant une couronne de fleurs. On peut noter vraisemblablement une source d&#039;inspiration au travers l’œuvre de Édouard Manet, mais également une référence marquée à la toile \"Annah la Javanaise\" de Paul Gauguin, en ce qui concerne la palette de couleurs notamment. Garçon à la pipe constitua le premier tableau dans l\'histoire dépassant la barre symbolique des 104 millions de dollars.', 81, 100, 'Inconnu', 'https://upload.wikimedia.org/wikipedia/en/9/9c/Gar%C3%A7on_%C3%A0_la_pipe.jpg', 'Peinture'),
(13, 'NURSE', 'Lichtenstein ', 'Roy', 1964, '95 365 000', 'Nurse est un tableau du peintre américain de pop art Roy Lichtenstein réalisé en 1964.Nurse a été à un moment donné le 34e tableau le plus cher jamais vendu, acheté le 9 novembre 2015 par un acheteur anonyme pour 95 365 000 dollars, le prix record de l&#039;époque pour une œuvre d&#039;un peintre pop art américain. Elle avait déjà été vendue aux enchères en 1995 pour 1,7 million de dollars. Christie&#039;s, la maison de vente aux enchères impliquée pour la vente, a qualifié Nurse de \"quintessence de l\'héroïne de Lichtenstein\".', 122, 122, 'Inconnu', 'https://upload.wikimedia.org/wikipedia/commons/d/db/Nurse.jpg', 'Peinture'),
(14, 'INTERCHANGE', 'de Kooning', 'Willem', 1955, '300 000 000', 'nterchange, également connu sous le nom de Interchanged, est une peinture à l\'huile expressionniste abstraite sur toile du peintre américano-néerlandais Willem de Kooning (1904-1997). Comme Jackson Pollock, de Kooning est l\'un des premiers artistes du mouvement de l\'expressionnisme abstrait, le premier mouvement d\'art moderne américain. Le tableau mesure 200,7 sur 175,3 centimètres et a été achevé en 1955. Elle marque la transition des sujets des peintures de Kooning, des femmes aux paysages urbains abstraits.', 175, 201, 'Chicago', 'https://upload.wikimedia.org/wikipedia/en/5/5f/Photo_of_Interchanged_by_Willem_de_Kooning.jpg', 'Peinture'),
(15, 'NU AU PLATEAU DE SCULPTEUR', 'Picasso', 'Pablo', 1932, '106 400 000', 'Nu au plateau de sculpteur est un tableau de Pablo Picasso réalisé en 1932. Le sujet est Marie-Thérèse Walter, la maîtresse de Picasso. Cette œuvre fait partie d&#039;une série de portraits que Picasso a peints de sa maîtresse et muse Marie-Thérèse Walter en 1932. La toile à prédominance bleue/violette mesure 1,62 sur 1,30 mètre. Un nu, un buste et une plante verte sont visibles.', 130, 162, 'Londres', 'https://upload.wikimedia.org/wikipedia/en/2/2b/Nude_Green_Leaves_and_Bust_by_Picasso.jpg', 'Peinture'),
(16, 'DORA MAAR AU CHAT', 'Picasso', 'Pablo', 1941, '95 200 000', 'Dora Maar au chat est un tableau de Pablo Picasso réalisé en 1941 au plus fort de la relation entre Picasso et sa muse Dora Maar, qui avait duré de 1935 à 1945. Ce grand portrait est considéré comme une des œuvres magistrales du peintre. Dora Maar au chat est une toile de 130 × 97 cm. Dora Maar y figure en robe bleue à petits points verts chamarrée de perles orange et noire, le corsage vert strié. Elle est assise sur un fauteuil, coiffée d&#039;un de ses chapeaux dont elle raffolait. Les mains tordues sur les accoudoirs du fauteuil, des ongles bleus inquiétants comme des griffes de tigre, elle est placée de trois quarts.', 97, 103, 'Inconnu', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Dora_Maar_Au_Chat.jpg', 'Peinture'),
(17, 'PORTRAIT D&#039;UN JEUNE HOMME TENANT UN MÉDAILLON', 'Botticelli', 'Sandro', 1475, '92 200 000', 'Le Portrait d&#039;un jeune homme tenant un médaillon (en italien, Giovane uomo con in mano una medaglia) est un tableau en détrempe sur bois de peuplier réalisé par Sandro Botticelli vers 1470-1480. Depuis sa vente aux enchères chez Sotheby&#039;s New York le 28 janvier 2021, il est devenu le portrait le plus cher au monde.', 39, 58, 'Inconnu', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Botticelli_-_Portrait_of_a_young_man_holding_a_medallion.jpg/800px-Botticelli_-_Portrait_of_a_young_man_holding_a_medallion.jpg', 'Peinture'),
(18, 'WHITE CENTER', 'Rothko', 'Mark', 1950, '72 840 000', 'White Center (Yellow, Pink and Lavender on Rose) est une peinture abstraite de Mark Rothko réalisée en 1950. Le tableau a été acheté en 1960 par Eliza Bliss Parkinson (la nièce de Lillie P. Bliss, l&#039;un des fondateurs du Museum of Modern Art) à la Sidney Janis Gallery de New York avant d&#039;être acheté en juin 1960 par David Rockefeller.L&#039;œuvre a été vendue en mai 2007 par Sotheby&#039;s au nom de David Rockefeller à la famille royale du Qatar, le cheikh Hamad bin Khalifa Al-Thani, et son épouse, Mozah bint Nasser Al Missned.', 141, 205, 'Quatar', 'https://upload.wikimedia.org/wikipedia/en/9/93/White_Center_%28Yellow%2C_Pink_and_Lavender_on_Rose%29.jpg', 'Peinture');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'client'),
(2, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 NOT NULL,
  `civilite` varchar(5) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `mdp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `civilite`, `email`, `role`, `mdp`) VALUES
(1, 'DAOUD', 'NASSIM', 'M.', 'nassim.daoud@etudiant.univ-lr.fr', 2, '$2y$10$V9IlJQm/7CS2gzp4mhL6L.PrKXUGVydAuf0ZtPJavUroQwlXiffZy'),
(2, 'JEAN', 'DENIS', 'M.', 'Jeanaimarre@gmail.com', 1, '$2y$10$rE4x/K0yz6JLZFnFr8ujQO3HasEwTlJWvmmRWhhEBjgEfCaRjlCfa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD KEY `idArticle` (`idArticle`),
  ADD KEY `idCommande` (`idCommande`);

--
-- Index pour la table `oeuvres`
--
ALTER TABLE `oeuvres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oeuvres`
--
ALTER TABLE `oeuvres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `ligne_commande_ibfk_3` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

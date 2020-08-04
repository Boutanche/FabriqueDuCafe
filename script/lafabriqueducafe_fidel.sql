-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 04 août 2020 à 17:37
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lafabriqueducafe_fidel`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
                                          `id_customer` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Numero de la carte fidélité',
                                          `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'Nom',
                                          `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'Prénom',
                                          `mail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'e_mail',
                                          `tel` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci DEFAULT NULL,
                                          `adresse` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'adresse',
                                          `cp` int(10) DEFAULT NULL COMMENT 'code postal',
                                          `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'Ville',
                                          `fidel_point` int(2) NOT NULL COMMENT 'Points de fidélité',
                                          `complet_card` int(3) NOT NULL COMMENT 'Nombre de carte complétes',
                                          `creation_date` date NOT NULL COMMENT 'Date de création',
                                          `current_card_date` date NOT NULL COMMENT 'Date de la carte en cours',
                                          `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci,
                                          PRIMARY KEY (`id_customer`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_roman_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id_customer`, `lastname`, `firstname`, `mail`, `tel`, `adresse`, `cp`, `city`, `fidel_point`, `complet_card`, `creation_date`, `current_card_date`, `comment`) VALUES
(3, 'BERTRAND', 'Benoit', 'benoit.bertrand@live.fr', '0611515127', '27 rue Elie Berthet', 87000, 'Limoges', 1, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : '),
(8, 'BERTRAND', 'Alain', '', '', '', 0, '', 0, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : '),
(7, 'BERTRAND \"super Stage\"', 'Benoit', '', '', '', 0, '', 0, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : '),
(5, 'JEAN', 'Michel', 'jeanmichel@Lou.com', '06124524', '', 0, '', 2, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : '),
(9, 'BERTRAND 01', 'Alain', '', '', '', 0, '', 0, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : '),
(10, 'Ginette', 'Laplaud', '', '', '', 0, '', 0, 0, '2020-08-03', '0000-00-00', 'Votre commentaire ici : ');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
                                      `id_page` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'id de la page',
                                      `key_file` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'clé de la page',
                                      `metatitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'Titre Meta',
                                      `metadescription` varchar(250) COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'Description Meta',
                                      `h1` varchar(150) COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'Titre de la page',
                                      `h2` varchar(150) COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'Sous Titre de la page',
                                      `menu` varchar(20) COLLATE utf8mb4_roman_ci NOT NULL COMMENT 'Affichage Menu',
                                      `navbar` int(2) NOT NULL COMMENT 'Appartien au menu',
                                      `keywords` varchar(500) COLLATE utf8mb4_roman_ci DEFAULT NULL COMMENT 'Mots clès',
                                      PRIMARY KEY (`id_page`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_roman_ci COMMENT='Gestion des pages de El_Fidel';

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id_page`, `key_file`, `metatitle`, `metadescription`, `h1`, `h2`, `menu`, `navbar`, `keywords`) VALUES
(1, 'no_log', NULL, NULL, 'El_Fidel : Vous n\'êtes pas autorisé dans cette zone', 'Accès Interdit', 'no log', 0, NULL),
(2, 'home', 'El Fidel : La Fabrique du café Gestion Interne de la fidélisation client', 'Environnement Logiciel de gestion de la Fidélisation à la Fabrique du café', 'El Fidel : Environnement Logiciel de Gestion de Fidélisation', 'Tableau de Bord', 'Tableau de Bord', 1, 'Dashboard, tableau de bord, Gestion client, fidélité'),
(3, 'create_card', 'Création d\'une carte de fidélité', 'Création de cartes de fidélités pour la fabrique du café', 'Carte El_Fidel :', 'Création d\'une carte de fidélité', 'Créer une carte', 2, 'Carte'),
(4, 'search_card', 'Rechercher une carte', 'Les cartes de fidélités de la Fabrique du Café', 'Rechercher un carte', 'Les cartes de fidélité', 'Rechercher une carte', 2, 'Rechercher'),
(5, 'sell', NULL, NULL, 'Vente', 'Enregistrer une vente', 'Vendre un produit', 2, NULL),
(6, 'consult', '', NULL, 'Consulter', 'Stock des produits', 'Tous les produits', 2, NULL),
(7, 'order', NULL, NULL, 'Commandes', 'Commandes à traiter', 'Commandes', 2, NULL),
(8, 'all_cards', NULL, NULL, 'Toutes les cartes', 'Cartes de fidélité', 'Cartes', 2, NULL),
(9, 'all_products', NULL, NULL, 'Tous les produits', 'Consultation tous les produits', 'Produits', 2, NULL),
(10, 'all_orders', NULL, NULL, 'Toutes les commandes', 'Consultation liste des commandes', 'Commandes', 2, NULL),
(11, 'emergency', NULL, NULL, 'Alertes', 'Alertes en cours', 'Alertes', 2, NULL),
(12, 'message', NULL, NULL, 'Messages', 'Messages en cours', 'Messages', 2, NULL),
(13, 'graphs', NULL, NULL, 'Graphiques', 'Activités', 'Graphiques', 2, NULL),
(14, 'tables', NULL, NULL, 'Tables', 'Toutes les tables', 'Tables', 2, NULL),
(15, 'profile', NULL, NULL, 'Profil Utilisateur', 'Mon Profil', 'Profil', 1, NULL),
(16, 'settings', NULL, NULL, 'Propriétés', 'Mes propriétés', 'Configuration', 1, NULL),
(17, 'activity', NULL, NULL, 'Activités', 'Analyse des activités', 'Activités', 1, NULL),
(18, 'my_message', NULL, NULL, 'Mes messages', 'Messagerie', 'Messages', 1, NULL),
(19, 'my_emergency', NULL, NULL, 'Alertes', 'Mes alertes', 'Alertes', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
                                      `id_role` int(2) NOT NULL AUTO_INCREMENT,
                                      `designation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL,
                                      PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_roman_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `designation`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `test_benoit`
--

DROP TABLE IF EXISTS `test_benoit`;
CREATE TABLE IF NOT EXISTS `test_benoit` (
                                             `id` int(11) NOT NULL AUTO_INCREMENT,
                                             `nom` varchar(25) COLLATE utf8mb4_roman_ci NOT NULL,
                                             `prenom` varchar(25) COLLATE utf8mb4_roman_ci NOT NULL,
                                             `dcarte` date NOT NULL,
                                             PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_roman_ci;

--
-- Déchargement des données de la table `test_benoit`
--

INSERT INTO `test_benoit` (`id`, `nom`, `prenom`, `dcarte`) VALUES
(1, 'Bertrand', 'Benoit', '2020-07-28');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
                                      `id_user` int(2) NOT NULL AUTO_INCREMENT,
                                      `login` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL,
                                      `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL,
                                      `fk_id_role` int(2) NOT NULL,
                                      `fk_id_card` int(5) DEFAULT NULL,
                                      PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_roman_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `fk_id_role`, `fk_id_card`) VALUES
(1, 'SuperStage', 'Benoit9915', 1, NULL),
(3, 'Jacques Chirac', '$2y$10$IE0Mm5l4uCyxLFiBgZuCqOaBqp3i3zncwi6A5sQeKXo2AbdEDKFym', 2, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

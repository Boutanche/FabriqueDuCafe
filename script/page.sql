-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 30 juil. 2020 à 21:26
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

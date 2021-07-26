-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 juil. 2021 à 10:57
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abe_business`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `plaquette` int(11) DEFAULT NULL,
  `date_pub` int(11) DEFAULT NULL,
  `online` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `siege_sociale` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(3) NOT NULL,
  `id_theme` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `date_mj` date NOT NULL,
  `nombre_vue` int(11) NOT NULL,
  `contenu` varchar(10000) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `auteur` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `banniere`
--

CREATE TABLE `banniere` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) DEFAULT NULL,
  `code` text NOT NULL,
  `texte1` text DEFAULT NULL,
  `texte2` text DEFAULT NULL,
  `texte3` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_produit` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  `date_pub` date NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `banniere`
--

INSERT INTO `banniere` (`id`, `id_entreprise`, `code`, `texte1`, `texte2`, `texte3`, `photo`, `id_produit`, `id_position`, `date_pub`, `online`) VALUES
(1, 1, '', '<p>INFOGRAPHIE</p>', '<p><span style=\"text-align: justify;\">L\'exp&eacute;rience et la cr&eacute;ativit&eacute; de notre &eacute;quipe de designers subliment le rendu finale des travaux d\'inforgraphie qui nous sont confi&eacute;s.&nbsp; Quelque soit votre besoin, le gage de qualit&eacute; et de d&eacute;lai sont respect&eacute;s. La satisfaction absolue&nbsp; des clients est de rigueur chez&nbsp; ABE.&nbsp;</span></p>', NULL, 'assets/img/slide/slide-1.jpg', 0, 1, '0000-00-00', 1),
(2, 1, '', '<p>IMPRESSION</p>', '<p>En impression offset et numerique, ancrer vos valeurs sur vos gadgets de communication et de publicit&eacute;s: calendriers, cartes de visite, flyers, plaquettes, portes-cl&eacute;s, tasses, tee-shirts, casquettes, b&acirc;ches, vinyles, parapluies, s&eacute;r&eacute;graphie, cl&eacute;s-usb, montres, etc...</p>', NULL, 'assets/img/slide/slide-2.jpg', 0, 1, '0000-00-00', 1),
(3, 1, '', '<p>WEB MARKETING</p>', '<p>Notre expertise en matier de marketing sur internet nous permet de vous proposer un ensemble de services afin d\'am&eacute;liorer votre visibilit&eacute; et votre notorit&eacute; &agrave; travers les m&eacute;dias sociaux. De la r&eacute;alisation de votre site internet au pilotage de vos campagnes de communication digitale, nous saurons faire booster votre chiffre d\'affaire.</p>', NULL, 'assets/img/slide/slide-3.jpg', 0, 1, '0000-00-00', 1),
(4, NULL, '0k6h120r0e', 'Construction &amp; Maintenance', '<strong>ABE</strong>&nbsp; fabrique et maintien des ensembles complets ou non avec un planning de fabrication pr&eacute;cis et la recherche de la meilleure solution au meilleur co&ucirc;t. Les fabrications peuvent &ecirc;tre de toutes tailles et elles sont effectu&eacute;es en atelier ou sur site avant installation.', NULL, NULL, 0, 1, '0000-00-00', -1),
(5, NULL, 'jyyyy1eq2k', 'Formation - Audit - Conseil', 'La formation, l\'audit et le conseil de ses clients&nbsp; est le levier de l\'&eacute;fficacit&eacute; de la d&eacute;marche projet de <strong>ABE</strong>.', NULL, NULL, 0, 1, '0000-00-00', -1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `online` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_closing` date DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `closing` int(11) NOT NULL DEFAULT -1,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conditionnement`
--

CREATE TABLE `conditionnement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) DEFAULT 1,
  `id_agence` int(11) DEFAULT 1,
  `type` varchar(255) NOT NULL,
  `valeur` varchar(70) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `corporation_customer`
--

CREATE TABLE `corporation_customer` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `site_web` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE `couleur` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `code_hexadecimal` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `nom`, `pays`, `ville`, `adresse`, `tel`, `email`, `online`, `id_entreprise`) VALUES
(1, 'Guy NOBI', 'Cameroun', 'Douala', 'Akwa Ngodi', '691481493', 'nobsonguy@yahoo.fr', 1, 0),
(2, '', '', '', '', '', NULL, 1, 6),
(3, '', '', '', '', '', NULL, 1, 6),
(4, '', '', '', '', '', NULL, 1, 7),
(5, '', '', '', '', '', NULL, 1, 8),
(6, '', '', '', '', '', NULL, 1, 9),
(7, '', '', '', '', '', NULL, 1, 4),
(8, '', '', '', '', '', NULL, 1, 4),
(9, '', '', '', '', '', NULL, 1, 4),
(10, '', '', '', '', '', NULL, 1, 10),
(11, '', '', '', '', '', NULL, 1, 11),
(12, '', '', '', '', '', NULL, 1, 12),
(13, '', '', '', '', '', NULL, 1, 12),
(14, '', '', '', '', '', NULL, 1, 12),
(15, '', '', '', '', '', NULL, 1, 12),
(16, '', '', '', '', '', NULL, 1, 13),
(17, '', '', '', '', '', NULL, 1, 14),
(18, '', '', '', '', '', NULL, 1, 15),
(19, '', '', '', '', '', NULL, 1, 16),
(20, '', '', '', '', '', NULL, 1, 17),
(21, '', '', '', '', '', NULL, 1, 18);

-- --------------------------------------------------------

--
-- Structure de la table `detail_prestation`
--

CREATE TABLE `detail_prestation` (
  `id` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detail_produit_prestation`
--

CREATE TABLE `detail_produit_prestation` (
  `id` int(11) NOT NULL,
  `id_produit_prestation` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(11) NOT NULL,
  `nom_prospect` varchar(255) NOT NULL,
  `tel_prospect` int(255) NOT NULL,
  `email_prospect` varchar(255) NOT NULL,
  `fonction_prospect` varchar(255) NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `email_entreprise` varchar(255) NOT NULL,
  `fax_entreprise` varchar(255) DEFAULT NULL,
  `tel_entreprise` varchar(255) NOT NULL,
  `date_demarrage` date DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `adresse_entreprise` varchar(255) NOT NULL,
  `site_web_entreprise` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `objet` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `closing` int(11) NOT NULL DEFAULT -1,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `devise`
--

CREATE TABLE `devise` (
  `id` int(3) NOT NULL,
  `id_prix_produit` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `taux` double NOT NULL,
  `code_devise` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `plaquette` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(11) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1,
  `description` longtext DEFAULT NULL,
  `site_web` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `logo`, `plaquette`, `slogan`, `adresse`, `ville`, `pays`, `online`, `description`, `site_web`, `email`, `tel`, `fax`, `date_creation`) VALUES
(1, 'Africa Business & Engineering', 'img/logo.png', '', 'Mieux servir partout et toujours', 'Douala, Rond point Maetur Bonamoussadi', 'Douala', 'Cameroun', 1, '<p>Africa Business Engeneering est un partenaire fiable qui vous accompagne dans la r&eacute;alisation de vous projets, en assurant la qualit&eacute; des livrable dans le respect des d&eacute;lais et des co&ucirc;ts.</p>', 'www.abecameroon.com', 'contact@abecameroon.com', '+237 694 80 18 97', NULL, '2020-12-28 11:15:31');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  `resume` text NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id`, `id_entreprise`, `titre`, `date_creation`, `resume`, `online`) VALUES
(1, 1, 'Construction du dépôt pétrolier de MARADI: Supervision et contrôle des travaux', '2020-07-08 14:51:10', '<b>Maître d\'oeuvrage:</b> SONIDEP<br>\n<b>Client:</b> Parlym internationnal / Parlym Cameroun<br>\n<b>Lieux:</b> MARADI-NIGER<br>\n<b>Delai:</b> 17 mois<br>\n<b>Démarrage:</b> Septembre 2016<br>\n<b>Achèvement:</b> Février 2018<br><br>\n\n<u><b>Description:</b></u><br>\n\n<i class=\"ri-check-double-line\"></i> Direction des prestations <br>\n<i class=\"ri-check-double-line\"></i> Contrôle  de conformité des réalisations<br>\n<i class=\"ri-check-double-line\"></i> Gestion financières<br>\n<i class=\"ri-check-double-line\"></i> Ordonnancement, pilotage et coordination du chantier<br>\n<i class=\"ri-check-double-line\"></i> Assistance aux opérations de réception des prestations<br>\n<i class=\"ri-check-double-line\"></i> Production du rapport final et du dossier de recollement \n', 1),
(2, 1, 'Agency', '2020-06-16 14:51:10', 'piloting and deliverable', -1),
(3, 1, 'Boat', '2020-06-25 14:51:10', 'docking', -1),
(4, 1, 'Freight', '2020-06-03 13:15:19', 'freight transport', -1),
(5, 1, 'Tools', '2020-06-25 14:51:10', 'our transport tools', -1);

-- --------------------------------------------------------

--
-- Structure de la table `icone`
--

CREATE TABLE `icone` (
  `id` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_article`
--

CREATE TABLE `illustration_article` (
  `id` int(3) NOT NULL,
  `id_article` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_banniere`
--

CREATE TABLE `illustration_banniere` (
  `id` int(3) NOT NULL,
  `id_banniere` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `illustration_banniere`
--

INSERT INTO `illustration_banniere` (`id`, `id_banniere`, `lien`, `type`, `online`) VALUES
(1, 1, 'assets/img/slide/1.png', 'image', 1),
(2, 2, 'assets/img/slide/2.jpg', 'image', 1),
(3, 3, 'assets/img/slide/3.jpg', 'image', 1),
(4, 4, 'assets/img/slide/4.jpg', 'image', 1),
(5, 5, 'assets/img/slide/5.jpg', 'image', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_gallery`
--

CREATE TABLE `illustration_gallery` (
  `id` int(3) NOT NULL,
  `id_gallery` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `couverture` tinyint(4) NOT NULL DEFAULT 1,
  `date_pub` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `illustration_gallery`
--

INSERT INTO `illustration_gallery` (`id`, `id_gallery`, `lien`, `type`, `detail`, `couverture`, `date_pub`, `online`) VALUES
(1, 1, 'assets/img/portfolio/portfolio-1.jpg', 'photo', '', 1, '2020-08-03', 1),
(2, 1, 'assets/img/portfolio/portfolio-2.jpg', 'photo', '', 1, '2020-06-10', 1),
(3, 1, 'assets/img/portfolio/portfolio-3.jpg', 'photo', '', 1, '2020-07-10', 1),
(4, 1, 'assets/img/portfolio/portfolio-4.jpg', 'photo', '', 1, '2020-08-05', 1),
(5, 1, 'assets/img/portfolio/portfolio-5.jpg', 'photo', '', 1, '2020-08-24', -1),
(6, 1, 'assets/img/portfolio/portfolio-6.jpg', 'photo', '', 1, '2020-08-26', -1),
(7, 1, 'assets/img/portfolio/portfolio-7.jpg', 'photo', '', 1, '2020-08-18', -1),
(8, 2, 'assets/img/portfolio/portfolio-11.jpg', 'photo', '', 1, '2020-08-20', 1),
(9, 2, 'assets/img/portfolio/portfolio-12.jpg', 'photo', '', 1, '2020-08-05', 1),
(10, 2, 'assets/img/portfolio/portfolio-13.jpg', 'photo', '', 1, '2020-08-07', 1),
(11, 2, 'assets/img/portfolio/portfolio-14.jpg', 'photo', '', 1, '2020-07-13', 1),
(12, 2, 'assets/img/portfolio/portfolio-15.jpg', 'photo', '', 1, '2020-07-01', 1),
(13, 2, 'assets/img/portfolio/portfolio-16.jpg', 'photo', '', 1, '2020-08-18', 1),
(14, 2, 'assets/img/portfolio/portfolio-17.jpg', 'photo', '', 1, '2020-08-18', 1),
(15, 3, 'assets/img/portfolio/portfolio-21.jpg', 'photo', '', 1, '2020-08-18', 1),
(16, 3, 'assets/img/portfolio/portfolio-22.jpg', 'photo', '', 1, '2020-08-18', 1),
(17, 3, 'assets/img/portfolio/portfolio-23.jpg', 'photo', '', 1, '2020-08-18', 1),
(18, 3, 'assets/img/portfolio/portfolio-24.jpg', 'photo', '', 1, '2020-08-18', 1),
(19, 3, 'assets/img/portfolio/portfolio-25.jpg', 'photo', '', 1, '2020-08-18', 1),
(20, 3, 'assets/img/portfolio/portfolio-26.jpg', 'photo', '', 1, '2020-08-18', 1),
(21, 3, 'assets/img/portfolio/portfolio-27.jpg', 'photo', '', 1, '2020-08-18', 1),
(22, 4, 'assets/img/portfolio/portfolio-31.jpg', 'photo', '', 1, '2020-08-18', 1),
(23, 4, 'assets/img/portfolio/portfolio-32.jpg', 'photo', '', 1, '2020-08-18', 1),
(24, 4, 'assets/img/portfolio/portfolio-33.jpg', 'photo', '', 1, '2020-08-18', 1),
(25, 4, 'assets/img/portfolio/portfolio-34.jpg', 'photo', '', 1, '2020-08-18', 1),
(26, 4, 'assets/img/portfolio/portfolio-35.jpg', 'photo', '', 1, '2020-08-18', 1),
(27, 4, 'assets/img/portfolio/portfolio-36.jpg', 'photo', '', 1, '2020-08-18', 1),
(28, 4, 'assets/img/portfolio/portfolio-37.jpg', 'photo', '', 1, '2020-08-18', 1),
(29, 5, 'assets/img/portfolio/portfolio-41.jpg', 'photo', '', 1, '2020-08-18', 1),
(30, 5, 'assets/img/portfolio/portfolio-42.jpg', 'photo', '', 1, '2020-08-18', 1),
(31, 5, 'assets/img/portfolio/portfolio-43.jpg', 'photo', '', 1, '2020-08-18', 1),
(32, 5, 'assets/img/portfolio/portfolio-44.jpg', 'photo', '', 1, '2020-08-18', 1),
(33, 5, 'assets/img/portfolio/portfolio-45.jpg', 'photo', '', 1, '2020-08-18', 1),
(34, 5, 'assets/img/portfolio/portfolio-46.jpg', 'photo', '', 1, '2020-08-18', 1),
(35, 5, 'assets/img/portfolio/portfolio-47.jpg', 'photo', '', 1, '2020-08-18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_presentation`
--

CREATE TABLE `illustration_presentation` (
  `id` int(3) NOT NULL,
  `id_presentation` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `illustration_presentation`
--

INSERT INTO `illustration_presentation` (`id`, `id_presentation`, `lien`, `type`, `online`) VALUES
(1, 7, '', 'image', 1),
(2, 8, 'assets/img/aboutus/mission_vision_and_value.jpg', 'image', 1),
(3, 9, 'assets/img/aboutus/corporate_history.jpg', 'image', 1),
(4, 10, 'assets/img/aboutus/corporate_structure.jpg', 'image', 1),
(5, 11, 'assets/img/aboutus/Ceo.jpg', 'image', 1),
(6, 12, 'assets/img/aboutus/mission.jpg', 'image', -1),
(7, 13, 'assets/img/aboutus/vision.jpg', 'image', -1),
(8, 14, 'assets/img/aboutus/value.jpg', 'image', -1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_prestation`
--

CREATE TABLE `illustration_prestation` (
  `id` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_produit`
--

CREATE TABLE `illustration_produit` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_produit_prestation`
--

CREATE TABLE `illustration_produit_prestation` (
  `id` int(3) NOT NULL,
  `id_produit_prestation` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_theme`
--

CREATE TABLE `illustration_theme` (
  `id` int(3) NOT NULL,
  `id_theme` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `management_team`
--

CREATE TABLE `management_team` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `compte_facebook` varchar(255) NOT NULL,
  `compte_linkedin` varchar(255) NOT NULL,
  `compte_twitter` varchar(255) NOT NULL,
  `compte_instagram` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(3) NOT NULL,
  `id_prestation` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `objet` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `fonction_personne` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT 1,
  `date_message` date NOT NULL,
  `date_commande` date NOT NULL,
  `statut` int(1) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_taille` int(3) NOT NULL,
  `id_couleur` int(3) NOT NULL,
  `pu` int(11) DEFAULT 0,
  `qt` int(11) NOT NULL DEFAULT 0,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `position_banniere`
--

CREATE TABLE `position_banniere` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `position_banniere`
--

INSERT INTO `position_banniere` (`id`, `nom`, `online`) VALUES
(1, 'home', 1);

-- --------------------------------------------------------

--
-- Structure de la table `position_presentation`
--

CREATE TABLE `position_presentation` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `position_presentation`
--

INSERT INTO `position_presentation` (`id`, `nom`, `online`) VALUES
(1, 'aboutus_home', 1),
(2, 'aboutu_value', 1),
(3, 'aboutus_page', 1),
(4, 'metier', 1);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) NOT NULL,
  `id_entreprise` int(3) NOT NULL DEFAULT 1,
  `id_position` varchar(255) NOT NULL,
  `rubrique` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `resume` longtext DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `id_parent`, `id_entreprise`, `id_position`, `rubrique`, `description`, `resume`, `online`) VALUES
(7, 0, 1, '3', 'Management team', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit ', 'It is in this aspect of the business where corrective action has been most decisive and the transformation is most intense.\r\n(a) We have redesigned the mechanisms and procedures we use to measure and manage the risks of tenders and to control\r\nproject execution. (b) We have made in-depth changes to the governance model for the geographies, specifying the functions\r\nof Country Managers as contrasted with those of the heads of business units and corporate areas. (c) In the Tenders\r\nCommittee we have implemented a new transaction approval procedure using risk-based thresholds, reaching the company’s\r\nManagement Committee. (d) And we have created new functions and mechanisms to improve control over transactions,\r\nespecially international deals, such as the Execution and Delivery Committee', 0),
(8, 0, 1, '0', 'Mission, Vision and value', '<h4><strong>Mission</strong></h4><hr/>\nTo create value to our clients by delivering innovative tailored solutions to move products and information more efficiently with the best people, systems and processes. <br/></br>\n<h4><strong>Vision</strong></h4><hr/>\nTo be recognized as one of the most admired companies in our industry because of our commitments to clients, employees and business partners.<br/><br/>\n<h4><strong>Values</strong></h4><hr/>\n<ul>\n<li>Client focus; we partner with our clients as align our collective goals in order to exceed expectations.\n<li>Integrity; we conduct ourselves with the highest levels of trust, honesty and ethical standards.</li>\n<li>Team work; we support and respect our team members in order to promote a positive environment.</li>\n</li>Continuous improvement; we nurture ongoing education, dedication to compliance and safety awareness.</li>\n<li>Communication; we encourage active listening to clarify needs and values responsiveness in all communications.</li>\n</ul>\n', 'It is in this aspect of the business where corrective action has been most decisive and the transformation is most intense.\r\n(a) We have redesigned the mechanisms and procedures we use to measure and manage the risks of tenders and to control\r\nproject execution. (b) We have made in-depth changes to the governance model for the geographies, specifying the functions\r\nof Country Managers as contrasted with those of the heads of business units and corporate areas. (c) In the Tenders\r\nCommittee we have implemented a new transaction approval procedure using risk-based thresholds, reaching the company’s\r\nManagement Committee. (d) And we have created new functions and mechanisms to improve control over transactions,\r\nespecially international deals, such as the Execution and Delivery Committee', -1),
(9, 0, 1, '1', 'Corporate History', '<p>Sp&eacute;cialis&eacute;e dans les travaux d&rsquo;ing&eacute;nierie conseil, ing&eacute;nierie industrielle, construction et maintenance industrielle. ABE Cameroon dispose de comp&eacute;tences requises pour la conception et la r&eacute;alisation d&rsquo;unit&eacute;s industrielles. Elle met en avant son savoir-faire au service de plusieurs secteurs d\'activit&eacute;s notamment le g&eacute;nie civil, la chaudronnerie, la structure m&eacute;tallique, la tuyauterie industrielle et la m&eacute;canique g&eacute;n&eacute;rale.</p>\n<p>L&rsquo;expression de ce savoir-faire s&rsquo;exerce dans le cadre des missions d&rsquo;&eacute;tudes techniques ou d&rsquo;expertises sp&eacute;cifiques, qui nous permet d\'accompagner nos clients sur les phases d\'ing&eacute;nierie projet (APS, APD, STD&hellip;) ainsi que sur les phases op&eacute;rationnelles (construction, essais et mise en service, exploitation, maintenance).</p>', '<p>Cr&eacute;&eacute; en 2014,<strong> Africa Business and Engineering (ABE)</strong> est une unit&eacute; &eacute;conomique moderne dont la vision est d&rsquo;&ecirc;tre performante par des comp&eacute;tences distinctives. C&rsquo;est fort de cette logique qu&rsquo;elle a connu en ce d&eacute;but d&rsquo;ann&eacute;e 2018 une mutation de son statut juridique en devenant une Soci&eacute;t&eacute; &agrave; Responsabilit&eacute; Limit&eacute; Pluripersonnel (Sarl).</p>\n<p>\nSp&eacute;cialis&eacute;e dans les travaux d&rsquo;ing&eacute;nierie conseil, ing&eacute;nierie industrielle, construction et maintenance industrielle. ABE Cameroon dispose de comp&eacute;tences requises pour la conception et la r&eacute;alisation d&rsquo;unit&eacute;s industrielles. Elle met en avant son savoir-faire au service de plusieurs secteurs d\'activit&eacute;s notamment le g&eacute;nie civil, la chaudronnerie, la structure m&eacute;tallique, la tuyauterie industrielle et la m&eacute;canique g&eacute;n&eacute;rale.</p>', 1),
(10, 0, 1, '3', 'Corporate Structure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit ', 'It is in this aspect of the business where corrective action has been most decisive and the transformation is most intense.\r\n(a) We have redesigned the mechanisms and procedures we use to measure and manage the risks of tenders and to control\r\nproject execution. (b) We have made in-depth changes to the governance model for the geographies, specifying the functions\r\nof Country Managers as contrasted with those of the heads of business units and corporate areas. (c) In the Tenders\r\nCommittee we have implemented a new transaction approval procedure using risk-based thresholds, reaching the company’s\r\nManagement Committee. (d) And we have created new functions and mechanisms to improve control over transactions,\r\nespecially international deals, such as the Execution and Delivery Committee', -1),
(11, 0, 1, '3', 'Mot du Directeur Général', 'Madame, Monsieur, <br> \r\n<p>Les mutations techniques et économiques qui caractérisent notre ère font subir de profondes modifications aux entreprises. Elles mobilisent l’ensemble des ressources qui y sont affectées afin de parvenir à la maitrise d’un système de production qui se veut de nos jours dynamique et constamment adapté aux exigences de l’environnement de l’entreprise. Par ailleurs, le phénomène galopant de la mondialisation et la rapide évolution des droits et libertés collectives et individuelles imposent aux unités modernes de production de nouvelles contraintes tant au niveau interne qu’externe. Ainsi la quête de la performance se place de nos jours au cœur de la réflexion stratégique de l’entreprise avec comme problématique l’amélioration globale c’est-à-dire l’optimisation de l’ensemble des déterminants utiles à l’atteinte des résultats positifs.</p>\r\n<p>\r\n<strong>Africa Business and Engineering Cameroon Sarl </strong> (ABE Cameroon Sarl), se veut être dans ce contexte l’une des principales unités de production sous régional dans le domaine des constructions industrielle qui élabore et implémente les solutions techniques à la demande. La réalisation de cette mission s’appuie sur un concept qualité explicité autour de trois axes à savoir:<br>\r\n<ul style=\'list-style:square;\' >\r\n<li><strong>Qualité des hommes :</strong> l’entreprise s’engage à la mise en œuvre d’une politique social visant l’épanouissement intégral du personnel.</li>\r\n<li><strong>Qualité des procédés :</strong> La direction générale veillera à l’implémentation d’un système de pilotage des activités de production performant. </li>\r\n<li><strong>Qualité du produit : </strong>celle-ci s’appuie sur la mise en œuvre d’une politique de management de la relation client rentable.</li>\r\n<ul>\r\n</p>', '', 1),
(12, 0, 1, '3', 'Notre vision', ' La vision d’Africa Business and Engineering Cameroon est : <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> <strong> être performante par les competences distinctives  </strong> <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i> d’où notre slogan mieux servir partout et toujours. La mise en œuvre de cette vision s’appuie sur un concept qualité explicité autour de trois axes à savoir :<br><br>\n\n<i class=\"ri-check-double-line\"></i> <strong>Qualité des hommes:</strong> l’entreprise s’engage à la mise en œuvre d’une politique social visant l’épanouissement intégral du personnel.<br>\n<i class=\"ri-check-double-line\"></i> <strong>Qualité des procédés:</strong> La direction générale veillera à l’implémentation d’un système de pilotage des activités de production performante.  <br>\n<i class=\"ri-check-double-line\"></i> <strong>Qualité du produit </strong>: celle-ci s’appuie sur la mise en œuvre d’une politique de management de la relation client rentable.<br>', '', -1),
(13, 0, 1, '3', 'Notre mission', 'Être l’une des principales unités de production sous régional dans le domaine des constructions industrielle en qui élabore et implémente les solutions techniques à la demande.', '', 1),
(14, 0, 1, '3', 'Nos valeurs', '<p><i class=\"ri-check-double-line\"></i> <strong>QUALITE DE SERVICE  </strong><br>\nABE applique naturellement une démarche qualité à tous les niveaux de ses interventions et prestations. Cette volonté de perfection s’appuie sur une méthodologie reposant sur l’honnêteté, l’innovation et l’esprit d’équipe. En somme, la quête de la qualité consiste à :\n<ul>\n<li>Optimiser le fonctionnement de l’entreprise ;</li>\n<li>Anticiper les problèmes avant qu’ils n’apparaissent ;</li>\n<li>Gagner du temps et de l’efficacité ; </li>\n<li>Créer des outils pour optimiser chaque phase d’un projet.</li>\n</ul>\n</p>\n<p>\n<i class=\"ri-check-double-line\"></i> <strong>QUALITE DES HOMMES </strong> <br>\nLa vision d’ABE est ‘’ETRE PERFORMANTE PAR LES COMPETENCES DISTINCTIVES ’’ c’est pourquoi elle croit en l’individu en donnant la chance à tous ses salariés notamment aux jeunes diplômés d’évoluer au sein de l’entreprise par le biais de la formation professionnelle interne et externe. ABE pérennise son propre développement tout en favorisant l’épanouissement professionnel de l’ensemble de ses collaborateurs\n</p>\n<p>\n <i class=\"ri-check-double-line\"></i>  <strong>HYGIENE -SECURITE -ENVIRONNEMENT  </strong> <br>\nLa Sécurité des personnes, la Santé et la Vie ; le respect de l’Environnement, la préservation des Infrastructures, des installations et des équipements, la Sécurité dans le travail est la priorité absolue de ABE.\n<ul>\n<li> <strong>Santé sécurité au travail </strong><br>\nChez ABE, l’homme fait l’objet de toutes les attentions particulières caractérisées par l’évaluation des risques, l’application des démarches sécurité, la mise à disposition des équipements de protection adaptés. Bref, chez nous tout est mis en œuvre pour tendre vers un seul objectif : zéro accident.<br>\n</li>\n<li> <strong>Environnement </strong><br>\nABE s’engage pour un développement durable. Le respect de l’environnement est une démarche constante de nos équipes qui cherchent à limiter au maximum l’impact des chantiers aussi bien sur le milieu environnant que sur les riverains. Illustrant cet engagement qui nous guide de la conception à la réalisation de tous les projets, les déchets inertes issus de chacun de nos chantiers sont récupérés et stockés pour être ensuite concassés en vue de leur valorisation et de leur réemploi. Les autres types de déchets (plastiques, bois...) sont triés et évacués dans des décharges agréé. \n</li>\n</ul>\n</p>', '', 1),
(15, 0, 1, '4', 'Chaudronnerie et tuyauterie', '<p style=\"text-align:justify;\">La synthèse de nos actions s’articule autour de la mise en œuvre par nos ingénieurs des opérations de conception, de réalisation, et de réhabilitation des ouvrages et infrastructures en acier conformément aux normes et règlements requis par le donneur d’ordre (<strong>CM66 + ADD 80, EUROCO DES STRUCTURAUX, CODAP 2010, CODRES 2007, CODETI 2006, ASME 2008, API 650 </strong>). Le domaine d’application de ce savoir-faire au sein d’Africa Business And Engineering s’oriente principalement sur des axes tels que :\n</p>\n<p  style=\"text-align:justify;\">\n<strong> <span class=\"ri-check-double-line\"></span> La construction des unités industrielles :</strong> Usine, entrepôts, et réservoirs;<br><br>\n<strong> <span class=\"ri-check-double-line\"></span> La construction des ouvrages d’art :</strong> pont en acier, monuments;<br><br>\n<strong><span class=\"ri-check-double-line\"></span> La construction et l’entretien de tout ouvrage de tuyauterie</strong> quel que  soit le produit transporté (incompressibles, haute pression, compressibles).\n</p>', NULL, -1),
(16, 0, 1, '4', 'Mécanique Générale', '<p  style=\"text-align:justify;\">\nA <strong>Africa Business and Engineering</strong>, nos équipes ont pour principale mission de donner vie aux besoins des clients. Ainsi nos ingénieurs et techniciens  s’activent conformément aux exigences qualités réglementaires aux actions de :\n</p>\n<p  style=\"text-align:justify;\">\n<span class=\"ri-check-double-line\"></span>  Conception et l’entretien des machines;</br>\n<span class=\"ri-check-double-line\"></span> Fabrication et la réfection des pièces mécaniques;</br>\n<span class=\"ri-check-double-line\"></span> Installation et la maintenance des unités industrielles.\n</p>\n', NULL, -1),
(17, 0, 1, '4', 'Web marketing', '<p  style=\"text-align:justify;\">\nNos ingénieurs s’occupent de la conception, de la réalisation, de l’exploitation et de la réhabilitation d’ouvrages de construction et d’infrastructures dont ils assurent la gestion afin de répondre aux besoins du client, tout en assurant la sécurité du public et la protection de l’environnement. Très variées, leurs réalisations se répartissent principalement dans les champs d’intervention tels que les structures, l’hydraulique, et l’environnement.\n</p>', NULL, 1),
(18, 0, 1, '4', 'Impression numerique et offset', '<p  style=\"text-align:justify;\">\nA <strong>Africa Business and Engineering</strong>, nos équipes ont pour principale mission de donner vie aux besoins des clients. Ainsi nos ingénieurs s’occupent de la conception, la réalisation, et la réhabilitation des installations industrielles.\n</p>', NULL, 1),
(19, 0, 1, '4', 'Infographie', '<p style=\"text-align: justify;\">L\'exp&eacute;rience et la cr&eacute;ativit&eacute; de notre &eacute;quipe de designer sublimes le rendu finale des travaux d\'inforgraphie qui nous sont confi&eacute;s. La satisfaction absolue&nbsp; des clients est de rigueur chez&nbsp; ABE.</p>', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) DEFAULT NULL,
  `id_entreprise` int(3) DEFAULT 1,
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `resume` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_pub` datetime DEFAULT current_timestamp(),
  `online` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `id_parent`, `id_entreprise`, `titre`, `description`, `resume`, `type`, `date_pub`, `online`) VALUES
(1, 0, 1, 'Créativités et visuels', '<p> <h3>De la créativité et des idées</h3> Beau + efficace, tels pourraient être les deux critères de notre approche graphique. Notre objectif est simple : vous permettre de remporter l’adhésion de votre public grâce à une communication visuelle percutante, dès le premier coup d’oeil. Du print au web,<strong> ABE </strong>  met son professionnalisme au service de ses clients pour le meilleur résultat.</p> <p> <h3>Illustration</h3> Parce qu’un dessin vaut parfois plus que de belles paroles, nous nous sommes entourés d’illustrateurs talentueux, aux styles différents qui représentent au mieux les histoires que nous créons pour nos clients. </p> <p><h3>Print</h3> Faire passer un message au travers d’affiches, de brochures ou de plaquettes, véhiculer un savoir faire, accrocher le regard au premier coup d’œil, convaincre, c’est un défi que nos graphistes adorent relever !</p>', '', 'Service', '2021-07-06 00:00:00', 1),
(2, 1, 1, 'Création ', '', '', 'Service', '2021-07-06 00:00:00', 1),
(3, 1, 1, 'Conception ', '', '', 'Service', '2021-07-06 00:00:00', 1),
(4, 1, 1, 'Réalisation des travaux', '', '', 'Service', '2021-07-06 00:00:00', 1),
(5, 1, 1, 'Imprimerie', '', '', 'Service', '2021-07-06 00:00:00', 1),
(6, 0, 1, 'Objets publicitaires', '<p> <h3> Communiquer par l’objet</h3> <strong> ABE</strong>  s’engage à offrir un service global à ses clients aux meilleurs prix. Une vision globale qui repose sur une large gamme de goodies publicitaires touchant de nombreuses thématiques et secteurs d’activité, pouvant être personnalisés ou non d’un marquage.<br><br> Plébiscités grâce à leurs taux de mémorisation, de conservation et de satisfaction, les objets publicitaires sont un support incontournable de communication. Idéaux pour toucher un large public lors d’un événement ou une action, les goodies d\'entreprise sont parfaits pour fidéliser ou remercier ses clients.<br><br> L’objet publicitaire est indéniablement un média affectif et de proximité, qui assure le meilleur retour sur investissement. Les possibilités que les goodies d\'entreprise et cadeaux d‘affaires offrent sont inépuisables. Formes, couleurs, matières... Autant de possibilités de personnalisation participant à la création d’un objet publicitaire personnalisé spécialement adapté pour chaque opération promotionnelle. </p> <p> <h3> Offrez le cadeau d\'entreprise parfait </h3> Stylo publicitaire, tee-shirt personnalisé, clé usb promotionnelle ou parapluie marqué,  tasses  et autres, choisissez les articles personnalisables qui véhiculeront, toute l’année, vos messages auprès de vos clients ou prospects. <p>', '', 'Service', '2021-07-06 00:00:00', 1),
(7, 6, 1, 'Stylo', '', '', 'Service', '2021-07-06 00:00:00', 1),
(8, 6, 1, 'Porte-clés', '', '', 'Service', '2021-07-06 00:00:00', 1),
(9, 6, 1, 'Montres', '', '', 'Service', '2021-07-06 00:00:00', 1),
(10, 6, 1, 'Tasses', '', '', 'Service', '2021-07-06 00:00:00', 1),
(11, 1, 1, 'Infographie', '', '', 'Service', '2021-07-06 00:00:00', 1),
(12, 6, 1, 'Bracelets', '', '', 'Service', '2021-07-06 00:00:00', 1),
(13, 0, 1, 'Impression offset', '', '', 'Service', '2021-07-06 00:00:00', 1),
(14, 13, 1, 'Cartes de visites', '', '', 'Service', '2021-07-06 00:00:00', 1),
(15, 13, 1, 'Dépliants', '', '', 'Service', '2021-07-06 00:00:00', 1),
(16, 13, 1, 'Plaquettes', '', '', 'Service', '2021-07-06 00:00:00', 1),
(17, 13, 1, 'Flyers', '', '', 'Service', '2021-07-06 00:00:00', 1),
(18, 13, 1, 'Calendriers', '', '', 'Service', '2021-07-06 00:00:00', 1),
(19, 0, 1, 'Impression numerique', '', '', 'Service', '2021-07-06 00:00:00', 1),
(20, 19, 1, 'Vinyle', '', '', 'Service', '2021-07-06 00:00:00', 1),
(21, 19, 1, 'Papier', '', '', 'Service', '2021-07-06 00:00:00', 1),
(22, 19, 1, 'Baâches', '', '', 'Service', '2021-07-06 00:00:00', 1),
(23, 19, 1, 'Tee-shirts', '', '', 'Service', '2021-07-06 00:00:00', 1),
(24, 19, 1, 'Sérégraphie', '', '', 'Service', '2021-07-06 00:00:00', 1),
(25, 0, 1, 'Production photos et videos', '', '', 'Service', '2021-07-06 00:00:00', 1),
(26, 0, 1, 'Web marketing et consulting', '<p> <strong>ABE</strong>, expert en stratégie digitale propose d\'élaborer votre site internet et les outils de votre communication digitale autour de trois notions : webmarketing, l\'ergonomie et  le social média management. </p> <p> <h3>Webmarketing</h3> Il a pour but de comprendre sa cible et de se faire comprendre par elle, et ainsi de définir les objectifs R.O.I, d\'améliorer la notoriété, la visibilité et l\'e-réputation de l\'entreprise. La mise en oeuvre du webmarketing et donc la méthode employée pour toucher une cible. Du corporate au flat design, l\'enjeu du concept est de transmettre une histoire, une émotion, une expérience au visiteur afin de stimuler son intérêt afin qu\'il se souvienne de l\'entreprise. </p>  <p> <h3>L\'ergonomie</h3> C\'est la capacité d\'un système à permettre à un utilisateur classique de faire exactement et simplement ce pourquoi il consulte le site internet. </p> <p> <h3>Le social média management. </h3> Les réseaux sociaux sont devenus indispensables dans tous les dispositifs de communication. Pourquoi ? Parce qu’ils permettent de toucher plus de monde que les médias traditionnels, à moindre frais. Notre approche ciblée des communautés nous permet d’obtenir des résultats bien supérieurs aux formes classiques de publicité, grâce à une plus grande proximité avec le public et à un engagement plus fort des consommateurs sur les réseaux sociaux. </p>', '', 'Service', '2021-07-06 00:00:00', 1),
(27, 25, 1, 'Montage photo', '', '', 'Service', '2021-07-06 00:00:00', 1),
(28, 25, 1, 'Montage video', '', '', 'Service', '2021-07-06 00:00:00', 1),
(29, 25, 1, 'Motion design', '', '', 'Service', '2021-07-06 00:00:00', 1),
(30, 25, 1, 'shooting ', '', '', 'Service', '2021-07-06 00:00:00', 1),
(31, 25, 1, 'Couverture événements', '', '', 'Service', '2021-07-06 00:00:00', 1),
(32, 26, 1, 'Création site web', '', '', 'Service', '2021-07-06 00:00:00', 1),
(33, 26, 1, 'Création des logo', '', '', 'Service', '2021-07-06 00:00:00', 1),
(34, 26, 1, 'Social marketing', '', '', 'Service', '2021-07-06 00:00:00', 1),
(35, 26, 1, 'Networking', '', '', 'Service', '2021-07-06 00:00:00', 1),
(36, 26, 1, 'E-mailing', '', '', 'Service', '2021-07-06 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prix_produit`
--

CREATE TABLE `prix_produit` (
  `id` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `montant` int(20) NOT NULL,
  `date` int(11) NOT NULL,
  `onlline` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(3) NOT NULL,
  `id_cat` int(3) DEFAULT NULL,
  `id_prix_produit` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_marque` int(3) NOT NULL,
  `quantite` int(50) DEFAULT NULL,
  `conditionnement` varchar(255) DEFAULT NULL,
  `disponible` int(255) DEFAULT 1,
  `description` longtext CHARACTER SET latin1 DEFAULT NULL,
  `online` tinyint(1) DEFAULT 1,
  `vitrine` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit_prestation`
--

CREATE TABLE `produit_prestation` (
  `id` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mode` tinyint(1) NOT NULL DEFAULT 1,
  `prix` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `timing` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE `reference` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `chiffre` int(4) DEFAULT NULL,
  `date_reference` date DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `site_web` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reference`
--

INSERT INTO `reference` (`id`, `id_entreprise`, `nom`, `logo`, `description`, `type`, `chiffre`, `date_reference`, `online`, `site_web`) VALUES
(1, 1, 'SONARA', 'assets/img/testimonials/SONARA.jpg', 'SONARA IN A FEW WORDS Created in 1973 and inaugurated in 1981, SONARA is a topping reforming refinery', 'partenaire', NULL, '2020-06-20', 1, NULL),
(2, 1, 'EASTERN PACIFIC SHIPPING', 'assets/img/testimonials/EASTERN PACIFIC SHIPPING.jpg', 'Tanker Pacific is the largest privately owned tanking fleet globally.Founded in 1989, it is headquartered in Singapore and owned by London-based Israeli businessman Idan Ofer.', 'partenaire', NULL, '2020-06-20', 1, NULL),
(3, 1, 'STEALTH MARITIME', 'assets/img/testimonials/STEALTH MARITIME.png', 'The company began with cautious and well examined moves quickly becoming one of the fastest growing shipping companies in Greece.', 'partenaire', NULL, '2020-06-20', 1, NULL),
(4, 1, 'MENA ENERGY DUBAI', 'assets/img/testimonials/MENA ENERGY DUBAI.png', 'We deliver more than 5 million metric tonnes of crude and refined products to world markets, but our state-of-the-art logistical capabilities tell only part of the story', 'partenaire', NULL, '2020-06-20', 1, NULL),
(5, 1, 'BRS BROKERS', 'assets/img/testimonials/BRS BROKERS.jpg', 'The BRS Group is one of the world’s leading shipbrokers, with more than 150 years’ experience in the international maritime industry.', 'partenaire', NULL, '2020-06-20', 1, NULL),
(6, 1, 'SIGNAL MARITIME', 'assets/img/testimonials/SIGNAL MARITIME.png', 'Signal Maritime is a commercial ship management company with a twist. A spin-off from Thenamaris Ships Management, who has been setting industry ...', 'partenaire', NULL, '2020-06-20', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `r_produit_couleur`
--

CREATE TABLE `r_produit_couleur` (
  `id` int(4) NOT NULL,
  `id_couleur` int(4) NOT NULL,
  `id_produit` int(4) NOT NULL,
  `online` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `r_produit_taille`
--

CREATE TABLE `r_produit_taille` (
  `id` int(4) NOT NULL,
  `id_taille` int(4) NOT NULL,
  `id_produit` int(4) NOT NULL,
  `online` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE `taille` (
  `id` int(3) NOT NULL,
  `numero` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `theme_blog`
--

CREATE TABLE `theme_blog` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `theme_blog`
--

INSERT INTO `theme_blog` (`id`, `id_parent`, `titre`, `resume`, `online`) VALUES
(1, 0, 'Actualité industrie et infrastructures', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam', 1),
(2, 0, 'Actualité chez ABE SARL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam', 1),
(3, 0, 'actualité coronavirus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(3) NOT NULL,
  `montant` int(5) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_trans` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_prestation`
--

CREATE TABLE `type_prestation` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_prestation`
--

INSERT INTO `type_prestation` (`id`, `titre`, `code`, `online`) VALUES
(1, 'Service', 'Service', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `banniere`
--
ALTER TABLE `banniere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conditionnement`
--
ALTER TABLE `conditionnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `corporation_customer`
--
ALTER TABLE `corporation_customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `couleur`
--
ALTER TABLE `couleur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `detail_prestation`
--
ALTER TABLE `detail_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `detail_produit_prestation`
--
ALTER TABLE `detail_produit_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devise`
--
ALTER TABLE `devise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `icone`
--
ALTER TABLE `icone`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_article`
--
ALTER TABLE `illustration_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_banniere`
--
ALTER TABLE `illustration_banniere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_gallery`
--
ALTER TABLE `illustration_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_presentation`
--
ALTER TABLE `illustration_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_prestation`
--
ALTER TABLE `illustration_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_produit`
--
ALTER TABLE `illustration_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_produit_prestation`
--
ALTER TABLE `illustration_produit_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration_theme`
--
ALTER TABLE `illustration_theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `management_team`
--
ALTER TABLE `management_team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `position_banniere`
--
ALTER TABLE `position_banniere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `position_presentation`
--
ALTER TABLE `position_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prix_produit`
--
ALTER TABLE `prix_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_prestation`
--
ALTER TABLE `produit_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `r_produit_couleur`
--
ALTER TABLE `r_produit_couleur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `r_produit_taille`
--
ALTER TABLE `r_produit_taille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taille`
--
ALTER TABLE `taille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theme_blog`
--
ALTER TABLE `theme_blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_prestation`
--
ALTER TABLE `type_prestation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banniere`
--
ALTER TABLE `banniere`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conditionnement`
--
ALTER TABLE `conditionnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `corporation_customer`
--
ALTER TABLE `corporation_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `couleur`
--
ALTER TABLE `couleur`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `detail_prestation`
--
ALTER TABLE `detail_prestation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detail_produit_prestation`
--
ALTER TABLE `detail_produit_prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `devise`
--
ALTER TABLE `devise`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `icone`
--
ALTER TABLE `icone`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_article`
--
ALTER TABLE `illustration_article`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_banniere`
--
ALTER TABLE `illustration_banniere`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `illustration_gallery`
--
ALTER TABLE `illustration_gallery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `illustration_presentation`
--
ALTER TABLE `illustration_presentation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `illustration_prestation`
--
ALTER TABLE `illustration_prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_produit`
--
ALTER TABLE `illustration_produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_produit_prestation`
--
ALTER TABLE `illustration_produit_prestation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_theme`
--
ALTER TABLE `illustration_theme`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `management_team`
--
ALTER TABLE `management_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `position_banniere`
--
ALTER TABLE `position_banniere`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `position_presentation`
--
ALTER TABLE `position_presentation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `prestation`
--
ALTER TABLE `prestation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `prix_produit`
--
ALTER TABLE `prix_produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit_prestation`
--
ALTER TABLE `produit_prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `r_produit_couleur`
--
ALTER TABLE `r_produit_couleur`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `r_produit_taille`
--
ALTER TABLE `r_produit_taille`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taille`
--
ALTER TABLE `taille`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `theme_blog`
--
ALTER TABLE `theme_blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_prestation`
--
ALTER TABLE `type_prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

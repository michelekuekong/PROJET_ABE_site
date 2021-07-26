-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 juil. 2021 à 10:58
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
-- Base de données : `abe`
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

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `id_theme`, `titre`, `date_creation`, `date_mj`, `nombre_vue`, `contenu`, `resume`, `online`, `auteur`, `source`) VALUES
(1, 1, 'Togo : La Création De Deux Parcs Industriels Vise À Attirer Plus De 1000 Milliards Fcfa D’investissements En 4 Ans', '2021-01-24', '2021-01-24', 0, '<p>Le gouvernement togolais pr&eacute;voit dans le Plan National de D&eacute;veloppement 2018-2022 en cours de finalisation, la mise en place d&rsquo;un p&ocirc;le manufacturier et de deux parcs industriels pour donner vie au secteur industriel, peu d&eacute;velopp&eacute; &agrave; ce jour. Les parcs industriels devront &ecirc;tre constitu&eacute;s chacun, de 15 usines intensives, tourn&eacute;es vers l&rsquo;exportation du textile, des chaussures, etc.</p>\n<p>Selon le site Togo First, la concr&eacute;tisation de ce plan devrait booster les exportations du textile togolais vers plusieurs pays, dont les Etats Unis. Le pays b&eacute;n&eacute;ficie, en effet, d&rsquo;un visa textile destin&eacute; &agrave; faciliter l&rsquo;acc&egrave;s de ses produits textiles au march&eacute; am&eacute;ricain dans le cadre de la loi sur la croissance et les opportunit&eacute;s de d&eacute;veloppement en Afrique (AGOA).</p>\n<p>Dans la fili&egrave;re textile, priorit&eacute; sera donn&eacute;e &agrave; la promotion du savoir-faire local, &agrave; la production de coton et &agrave; la recherche de partenaires strat&eacute;giques &eacute;trangers.</p>\n<p>Ce projet ambitieux devrait attirer des investissements directs &eacute;trangers de l&rsquo;ordre de 1000 milliards FCFA sur la p&eacute;riode 2018-2022, pr&eacute;cise-t-on. L&rsquo;am&eacute;lioration en cours du climat des affaires devrait rassurer les investisseurs &eacute;trangers.</p>\n<p>Le projet vise &agrave; cr&eacute;er 100 000 emplois sur la p&eacute;riode indiqu&eacute;e. Pour ce faire, il est pr&eacute;vu le d&eacute;ploiement d&rsquo;une strat&eacute;gie ax&eacute;e sur le d&eacute;veloppement de cha&icirc;nes de valeurs compl&egrave;tes des fili&egrave;res cl&eacute;s de l&rsquo;agro-industrie.</p>\n<p>A terme, le gouvernement envisage r&eacute;aliser une croissance annuelle moyenne du secteur industriel et manufacturier de l&rsquo;ordre de 10% par ann&eacute;e, port&eacute; par de nouvelles fili&egrave;res.&nbsp;</p>', 'Le gouvernement togolais prévoit dans le Plan National de Développement 2018-2022 en cours de finalisation, la mise en place d’un pôle manufacturier et de deux parcs industriels pour donner vie au secteur industriel, peu développé à ce jour.', 1, 'Agence Ecofin', 'https://www.cac-international.com/'),
(2, 1, 'La Magzi veut créer plus de 6700 hectares de nouvelles zones industrielles au Cameroun', '2021-01-24', '2021-01-24', 0, 'Selon la Commission technique de réhabilitation des entreprises du secteur public et parapublic (CTR), la Mission d’aménagement et de gestion des zones industrielles (Magzi) au Cameroun ambitionne d’aménager de nouvelles zones industrielles sur une superficie globale de plus de 6700 hectares.<br>\n\nCes projets visent à « positionner définitivement » l’entreprise que dirige Christol Georges Manon (photo) « comme leader et garant de l’implantation des unités industrielles au Cameroun ». Ils seront réalisés dans les villes de Dibombari (500 hectares), dans le Littoral ; Kribi (5000 hectares), dans la région du Sud ; Maroua (203 hectares), dans l’Extrême-Nord ; et Limbe (1000 hectares), dans la région du Sud-Ouest.<br>\n\n« La demande de terrain par les entreprises est très forte. La plupart des prospects, investisseurs potentiels venant de l’étranger, qui sollicitent des parcelles de terrain afin de s’installer restent insatisfaits, du fait de l’offre qui se situe en deçà des prescriptions et des exigences minimales », souligne la CTR dans son rapport 2019 sur les entreprises à capitaux publics.<br>\n\n En effet, apprend-on, faute de financements, situation parfois consécutive à l’accumulation des impayés par les locataires de la Magzi, cette entreprise publique est confrontée à d’importants problèmes d’aménagement de ses zones industrielles. Mais, souligne la CTR, le « nouveau statut juridique » de cette société d’État « constitue un atout dans la recherche des financements nécessaires au développement desdites zones », avec notamment, apprend-on, la possibilité pour l’État d’accompagner cette entreprise « vers d’autres guichets de financement ».<br>', 'Selon la Commission technique de r&eacute;habilitation des entreprises du secteur public et parapublic (CTR), la Mission d&rsquo;am&eacute;nagement et de gestion des zones industrielles (Magzi) au Cameroun ambitionne d&rsquo;am&eacute;nager de nouvelle', 1, 'Investir au Cameroun', 'https://www.investiraucameroun.com/'),
(3, 3, ' Coronavirus en France : la campagne de vaccination en difficulté, les dernières infos', '2021-01-24', '2021-01-24', 0, 'La Haute autorité de Santé (HAS) a recommandé, dans un communiqué publié samedi, de décaler l\'injection de la deuxième dose de vaccin à six semaines, contre trois aujourd’hui. Le but est d’accélérer la vaccination. \"Le nombre toujours important de contaminations et l’arrivée préoccupante de nouveaux variants appellent à une accélération de la vaccination pour faire face au risque de flambée de l’épidémie dans les prochaines semaines. Afin de protéger plus vite un plus grand nombre de personnes à risque d’hospitalisation ou de décès, la HAS préconise d’élargir à 6 semaines le délai entre 2 doses de vaccin à ARN messager (vaccins de Pfizer et de Moderna)\", peut-on lire dans le communiqué. Espacer les deux doses \"permettrait de vacciner au moins 700 000 personnes de plus le premier mois\". <br>\n\nPour répondre à la polémique autour de la sixième dose de vaccin dans les flacons, Pfizer a indiqué dans un communiqué vendredi, que \"les commandes portent sur des quantités de doses et non de flacons\". En réaction à cette annonce, le secrétaire d\'État français aux Affaires étrangères européennes Clément Beaune a demandé au laboratoire, sur BFMTV, d\'\"honorer ses engagements\".', 'La Haute autorité de Santé a recommandé de décaler l\'injection de la deuxième dose de vaccin à six semaines, afin d\'accélérer la vaccination. 230 décès étaient recensés en 24 heures samedi.', 1, 'linternaute.com', 'https://www.linternaute.com/'),
(4, 2, '15 COVID Affected Filipino Seafarers In Singapore Had Arrived From India, Says MPA ', '2020-08-27', '2020-08-27', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.\r\n\r\nUt velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. ', 'The Maritime Port and Authority, Singapore has reported that the vessel carrying the 15 COVID-19 positive Filipino workers that halted at Singapore for repairs and refuel had arrived from India on Aug 8, 2020.', -1, 'Rachel Roth', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,'),
(5, 3, 'Panama Canal Celebrates 106 Years With Its Validity Strengthened ', '2020-08-31', '2020-08-31', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.\r\n\r\nUt velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. ', 'The Panama Canal reaches its 106 years of operation this August 15, with its validity strengthened in the midst of an unprecedented health crisis.', -1, 'Rachel Roth', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,'),
(6, 3, 'YILPORT Joins Tradelens To Increase Collaboration And Digitization In Supply Chain', '2020-09-01', '2020-09-01', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.\r\n\r\nUt velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. ', 'YILPORT- TradeLens cooperation started in July 2020 with data integration from YILPORT Gebze and Gemport Terminals to the blockchain based platform.', -1, 'Rachel Roth', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,');

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
(1, 1, '', 'Assistance technique', 'Afin de pouvoir vous accompagner au mieux dans la r&eacute;alisation de vos projets, <strong>ABE</strong> vous propose la r&eacute;alisation de prestations sous forme d&rsquo;assistance technique. Celles-ci se concr&eacute;tisent par l&rsquo;intervention d&rsquo;experts dans vos locaux, en fonction de vos besoins : Dessinateurs d&rsquo;&eacute;tudes, Dessinateurs projeteurs, Charg&eacute;s de projets, Calculateurs, Automaticiens, et Ing&eacute;nieurs.', NULL, 'assets/img/slide/slide-1.jpg', 0, 1, '0000-00-00', 1),
(2, 1, '', 'Ing&eacute;nierie industrielle', 'Les &eacute;quipes de <strong>ABE</strong> sont compos&eacute;es d\'Ing&eacute;nieurs et de Techniciens et notre vocation est de vous assister dans l\'ing&eacute;nierie de d&eacute;veloppement de vos produits et de vos installations industrielles.', NULL, 'assets/img/slide/slide-2.jpg', 0, 1, '0000-00-00', 1),
(3, 1, '', '<p>Inspection industrielle</p>', '<strong>ABE</strong> r&eacute;alise aussi des inspections industrielles. Celles-ci sont destin&eacute;es &agrave; contr&ocirc;ler tout ce qui est en lien avec une industrie : les &eacute;quipements (montage, fabrication&hellip;), points d&rsquo;inspection, r&eacute;servoirs de stockage, etc&hellip.', NULL, 'assets/img/slide/slide-3.jpg', 0, 1, '0000-00-00', 1),
(4, NULL, '0k6h120r0e', 'Construction &amp; Maintenance', '<strong>ABE</strong>&nbsp; fabrique et maintien des ensembles complets ou non avec un planning de fabrication pr&eacute;cis et la recherche de la meilleure solution au meilleur co&ucirc;t. Les fabrications peuvent &ecirc;tre de toutes tailles et elles sont effectu&eacute;es en atelier ou sur site avant installation.', NULL, NULL, 0, 1, '0000-00-00', 1),
(5, NULL, 'jyyyy1eq2k', 'Formation - Audit - Conseil', 'La formation, l\'audit et le conseil de ses clients&nbsp; est le levier de l\'&eacute;fficacit&eacute; de la d&eacute;marche projet de <strong>ABE</strong>.', NULL, NULL, 0, 1, '0000-00-00', 1);

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

--
-- Déchargement des données de la table `corporation_customer`
--

INSERT INTO `corporation_customer` (`id`, `nom`, `tel`, `fax`, `email`, `site_web`, `adresse`, `ville`, `pays`, `online`) VALUES
(1, 'Alchimiste', '690097332', '', '', '', '', NULL, NULL, 1),
(2, 'Alchimiste', '694784719', '', '', '', '', NULL, NULL, 1),
(3, 'Alchimiste97', '650295792', '3454', 'tankeukelvin@gmail.com', 'www.facebook.com', '', NULL, NULL, 1),
(4, 'al', '', '', '', '', '', NULL, NULL, 1),
(5, 'alchimiste46', '8983948', '4332', 'kelvintankeu@yahoo.fr', '', '', NULL, NULL, 1),
(6, 'alchimiste46', '676890937', '4356', 'kelvintankeu@yahoo.fr', 'www.facebook.com', '', NULL, NULL, 1),
(7, 'Alchimiste89', '677453432', '8998', 'kelvintankeu6@yahoo.fr', 'www.instagram.com', 'Akwa', NULL, NULL, 1),
(8, 'alchimiste90', '674873928', '89685', '', '', '', NULL, NULL, 1),
(9, 'alchimiste78', '697875654', '7898', 'kelvintankeu43@yahoo.fr', 'www.skype.com', 'Ndogbon', NULL, NULL, 1),
(10, 'kouakep tankeu', '678876787', NULL, 'kelvintankeu@yahoo.fr', NULL, NULL, NULL, NULL, 1),
(11, '', '678232112', '', 'tankeukelvin4@gmail.com', '', '', NULL, NULL, 1),
(12, 'rostand', '688986453', NULL, 'kelvintankeu97@yahoo.fr', NULL, NULL, NULL, NULL, 1),
(13, 'rostand34', '67897890', NULL, 'kelvintankeu1997@yahoo.fr', NULL, NULL, NULL, NULL, 1),
(14, 'rostand34', '678908965', NULL, 'kelvintankeu1997@yahoo.fr', NULL, NULL, NULL, NULL, 1),
(15, 'rostand', '654321223', NULL, 'tankeukelvin90@gmail.com', NULL, NULL, NULL, NULL, 1),
(16, 'rostand67', '678654533', NULL, 'tankeukelvin2020@gmail.com', NULL, NULL, NULL, NULL, 1),
(17, 'rostand96', '678877733', NULL, 'kelvintankeu2021@yahoo.fr', NULL, NULL, NULL, NULL, 1),
(18, 'kelvin tankeu', '678004524', NULL, 'kelvintankeu435@yahoo.fr', NULL, NULL, NULL, NULL, 1);

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

--
-- Déchargement des données de la table `detail_produit_prestation`
--

INSERT INTO `detail_produit_prestation` (`id`, `id_produit_prestation`, `detail`, `description`, `online`) VALUES
(1, 5, 'Gestion de la paie', 'PANESS Informatique se positionne avec\ndes partenaires éditeurs internationaux\n(GOOGLE – JWAY…) sur le marché de\nl’intégration de solutions de\ndématérialisation et de Cloud Computing,\nnotamment sur la dimension Software asPANESS Informatique se positionne avec\ndes partenaires éditeurs internationaux\n(GOOGLE – JWAY…) sur le marché de\nl’intégration de solutions de\ndématérialisation et de Cloud Computing,\nnotamment sur la dimension Software as\na Service (SaaS).\na Service (SaaS).', 1),
(2, 5, 'Gestion des carrières', 'à remplir', 1),
(3, 5, 'Suivi des performances', 'A renseigner', 1),
(4, 5, 'Formation et recrutement', 'ras', 0),
(5, 5, 'Gestion des compétences', 'ras', 1),
(6, 5, 'Evaluation des performances', 'ras', 1),
(7, 5, 'Organisation, structure et effectifs', 'ras', 1),
(8, 5, 'Tableaux de bord et statistiques ', 'ras', 1),
(9, 5, 'Gestion administrative du personnel', 'ras', 1);

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

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `nom_prospect`, `tel_prospect`, `email_prospect`, `fonction_prospect`, `nom_entreprise`, `email_entreprise`, `fax_entreprise`, `tel_entreprise`, `date_demarrage`, `date_creation`, `adresse_entreprise`, `site_web_entreprise`, `description`, `objet`, `statut`, `closing`, `online`) VALUES
(1, 'admin paness', 2147483647, 'serversiteweb@gmail.com', 'DIGITAL METRIK CONSULTING SARL', 'SHESTERFOR', '5855555', 'DIGITAL METRIK CONSULTING SARL', '5855555', NULL, '2020-12-30 01:50:00', 'Douala', 'DIGITAL METRIK CONSULTING SARL', '<u>Site projet</u><br />\n  Pays: Cameroun<br />\n Ville: <br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: 2020-12-10<br />\n Service cible: <br />\n Description du projet: ', 'DEMANDE DEVIS', 0, -1, 1),
(2, 'admin paness', 2147483647, 'serversiteweb@gmail.com', 'DIGITAL METRIK CONSULTING SARL', 'SHESTERFOR', '5855555', 'DIGITAL METRIK CONSULTING SARL', '5855555', NULL, '2020-12-30 01:51:51', 'Douala', 'DIGITAL METRIK CONSULTING SARL', '<u>Site projet</u><br />\n  Pays: Cameroun<br />\n Ville: Douala<br />\n Adresse: Akwa Ngodi<br />\n A propos du projet<br />\n Date de démarrage: 2020-12-10<br />\n Service cible: <br />\n Description du projet: fqsf', 'DEMANDE DEVIS', 1, -1, 1),
(3, 'Jen', 0, 'jen@the-fastest.net', '', 'Jen', '000-000-0000', 'TS', '000-000-0000', NULL, '2021-02-10 14:46:19', 'TS', 'TS', '<u>Site projet</u><br />\n  Pays: <br />\n Ville: <br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: Avxdg mqt<br />\n Service cible: <br />\n Description du projet: Hi,<br />\r\n<br />\r\nI thought you may like our services. <br />\r\n<br />\r\nWe can send thousands of interested people to your website daily.<br />\r\nThis is because visitors will come from online publications in your exact niche.<br />\r\n<br />\r\nPricing:<br />\r\n5,000 interested people to your site just $54.99 or 10,000 for  $74.99.<br />\r\nWe also have great larger packages (some sold out for 1 month).<br />\r\n<br />\r\nWe look forward to seeing you.<br />\r\n<br />\r\nKind regards,<br />\r\nJen<br />\r\nhttps://traffic-stampede.com<br />\r\nSince 2005<br />\r\n<br />\r\n', '', 0, -1, 1),
(4, 'Diane', 555, 'socialblast@airpost.net', '', 'Diane', '555-555-5555', 'SMB', '555-555-5555', NULL, '2021-02-11 14:35:44', 'SMB', 'SMB', '<u>Site projet</u><br />\n  Pays: <br />\n Ville: <br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: O Rr hz<br />\n Service cible: <br />\n Description du projet: Hi,<br />\r\n<br />\r\nI thought you might be interested in our social media services. <br />\r\nFacebook, Twitter, Instagram and Youtube.<br />\r\n<br />\r\nGet your social media a huge amount of followers,<br />\r\nlikes, shares, subscribers and views in 48 hours and at a great price.<br />\r\n<br />\r\nFollowers, Likes and a High Amount of Views Improve All of Your Profiles<br />\r\nAnd Increase the Authenticity of Your Accounts<br />\r\n<br />\r\nFor more info please visit us at https://social-media-blast.com<br />\r\n<br />\r\nWe look forward to hopefully seeing you on our site.<br />\r\n<br />\r\nBest,<br />\r\nDiane<br />\r\nSMB<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n', '', 0, -1, 1),
(5, 'Michelle', 0, 'turnkey@swift-mail.com', '', 'Michelle', '000-000-0000', 'DSI', '000-000-0000', NULL, '2021-02-13 14:10:46', 'DSI', 'DSI', '<u>Site projet</u><br />\n  Pays: <br />\n Ville: <br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: Nb Nb jpri<br />\n Service cible: <br />\n Description du projet: Hi,<br />\r\n<br />\r\nI thought you may be interested.<br />\r\n <br />\r\nWe supply the best niche turnkey dropshipping stores out there.<br />\r\nYou keep all of the profit. We are the designers this is all we do.<br />\r\n<br />\r\nFree hosting (we can also transfer store to your hosting if you wish at n/c), <br />\r\ndomain and social media marketing materials included.<br />\r\nJust a one time fee for your dropship store and thats it.<br />\r\n<br />\r\nIf this sounds of interest please see our available sites at https://dropshippingincome.com<br />\r\n<br />\r\nThank you for your time and hope to see you there.<br />\r\n<br />\r\nBest,<br />\r\nMichelle L.<br />\r\nDSI <br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n', '', 0, -1, 1),
(6, 'Kate', 0, 'expressvisits@outlook.com', '', 'Kate', '000-000-0000', 'T.S.', '000-000-0000', NULL, '2021-02-18 12:08:57', 'T.S.', 'T.S.', '<u>Site projet</u><br />\n  Pays: <br />\n Ville: <br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: Tndhwfw<br />\n Service cible: <br />\n Description du projet: Hi,<br />\r\n<br />\r\nJust a brief moment of your time as our services may be of interest.<br />\r\n<br />\r\nWe can send thousands of interested people to your website every day. <br />\r\n<br />\r\nPeople will come from related major online publications in your EXACT niche.<br />\r\nWe send them to you for your approval before campain starts.<br />\r\n<br />\r\nPrices start at just $54.99.<br />\r\nCheck out our 3 day 10,000 visitors sale.<br />\r\nMost larger packages sold out for 30 days. Please check for availability.<br />\r\n<br />\r\nFor more info please visit us at https://traffic-stampede.com<br />\r\n<br />\r\nThank you for your time and hope to see you there.<br />\r\n<br />\r\nKind regards,<br />\r\nKate W.<br />\r\n<br />\r\n<br />\r\n<br />\r\n', '', 0, -1, 1),
(7, 'Charity', 972, 'traylor.charity56@gmail.com', '', 'Charity', '972-222-8409', '972-222-8409', '972-222-8409', NULL, '2021-03-02 12:56:56', '225 Hope Street', '225 Hope Street', '<u>Site projet</u><br />\n  Pays: United States<br />\n Ville: Mesquite<br />\n Adresse: 225 Hope Street<br />\n A propos du projet<br />\n Date de démarrage: Eihprz<br />\n Service cible: <br />\n Description du projet: Do you need more business for your online business? We can provide targeted visitors precisely for your business model<br />\r\n For additional information Check out: https://bit.ly/buy-targeted-web-traffic', '', 0, -1, 1),
(8, 'Nola', 0, 'leon.lund@mail.ru', '', 'Nola', '(08) 9052 7998', '(08) 9052 7998', '(08) 9052 7998', NULL, '2021-04-27 03:53:17', '61 Maritime Avenue', '61 Maritime Avenue', '<u>Site projet</u><br />\n  Pays: Australia<br />\n Ville: Mount Observation<br />\n Adresse: 61 Maritime Avenue<br />\n A propos du projet<br />\n Date de démarrage: Kj Zqms o Bv<br />\n Service cible: <br />\n Description du projet: Hello,<br />\r\n<br />\r\nAre you currently working with Wordpress/Woocommerce or maybe you intend to implement it sometime soon ? We currently offer much more than 2500 premium plugins and themes to download : http://shortsy.buzz/m0qXP<br />\r\n<br />\r\nThank You,<br />\r\n<br />\r\nNola', '', 0, -1, 1),
(9, 'Donaldheili', 2147483647, 'no-replySpell@gmail.com', '', 'Donaldheili', '85669536558', '89855723878', '85669536558', NULL, '2021-05-05 15:44:18', 'Walvis Bay', 'google', '<u>Site projet</u><br />\n  Pays: Donaldheili<br />\n Ville: Donaldheili<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Hello!  abecameroon.com <br />\r\n <br />\r\nDid you know that it is possible to send business offer   legal? <br />\r\nWe presentation a new unique way of sending letter through contact forms. Such forms are located on many sites. <br />\r\nWhen such business offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. <br />\r\nalso, messages sent through contact Forms do not get into spam because such messages are considered important. <br />\r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. <br />\r\nThe cost of sending one million messages is 49 USD. <br />\r\n <br />\r\nThis offer is created automatically. Please use the contact details below to contact us. <br />\r\n <br />\r\nContact us. <br />\r\nTelegram - @FeedbackMessages <br />\r\nSkype  live:contactform_18 <br />\r\nWhatsApp - +375259112693 <br />\r\n <br />\r\nWe only use chat.', 'DEMANDE DEVIS', 0, -1, 1),
(10, 'Mike Neal\r\n', 2147483647, 'no-replyCof@gmail.com', '', 'Mike Neal\r\n', '84712156392', '89328168523', '84712156392', NULL, '2021-05-11 03:08:48', 'Albany', 'google', '<u>Site projet</u><br />\n  Pays: Mike Neal<br />\r\n<br />\n Ville: Mike Neal<br />\r\n<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Hello <br />\r\n <br />\r\nI have just took a look on your SEO for  abecameroon.com for the Local ranking keywords and seen that your website could use an upgrade. <br />\r\n <br />\r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. <br />\r\n <br />\r\nPlease check our pricelist here, we offer SEO at cheap rates. <br />\r\nhttps://speed-seo.net/product/local-seo-package/ <br />\r\n <br />\r\nStart enhancing your local visibility with us, today! <br />\r\n <br />\r\nregards <br />\r\nMike Neal<br />\r\n <br />\r\nSpeed SEO Digital Agency <br />\r\nsupport@speed-seo.net', 'DEMANDE DEVIS', 0, -1, 1),
(11, 'Mazlan Selvi', 2147483647, 'no-replyPram@gmail.com', '', 'Mazlan Selvi', '85773756136', '86752484214', '85773756136', NULL, '2021-05-13 17:25:50', 'Kuala Lumpur', 'google', '<u>Site projet</u><br />\r\n  Pays: Mazlan Selvi<br />\r\n Ville: Mazlan Selvi<br />\r\n Adresse: <br />\r\n A propos du projet<br />\r\n Date de démarrage: <br />\r\n Service cible: <br />\r\n Description du projet: Dear Friend, <br />\r\n <br />\r\nMy names are Mr. Mezlan Selvi, a lawyer base in Kuala Lumpur - Malaysia. I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death but no response from you. <br />\r\n <br />\r\nHowever, I am contacting you once again with strong believe that you will work /partner with me to execute this business transaction in good faith. Please if you are interested in proceeding with me, kindly respond to me via my private email mselvi@ponnusamylawassociates-my.com for more detailed information. <br />\r\n <br />\r\nAs a matter of fact, this transaction is 100% risk free and I look forward to your acknowledgement. <br />\r\n <br />\r\nRegards, <br />\r\nMr. Mazlan Selvi <br />\r\nEmail: mselvi@ponnusamylawassociates-my.com', 'DEMANDE DEVIS', 0, -1, 1),
(12, 'Yahoo', 2147483647, 'press@yahoo.com', '', 'Yahoo', '86395743693', '89715455469', '86395743693', NULL, '2021-05-15 00:00:44', 'New York', 'google', '<u>Site projet</u><br />\n  Pays: Yahoo<br />\n Ville: Yahoo<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Most profitable cryptocurrency miners has been released : <br />\r\nDBT Miner: $7,500 (Bitcoin), $13,000 (Litecoin), $13,000 (Ethereum), and $15,000 (Monero) <br />\r\n <br />\r\nGBT Miner: $22,500 (Bitcoin), $39,000 (Litecoin), $37,000 (Ethereum), and $45,000 (Monero) <br />\r\nRead more here : <br />\r\nhttps://www.yahoo.com/now/bitwats-release-most-profitable-asic-195600764.html', 'DEMANDE DEVIS', 0, -1, 1),
(13, 'Mike Backer\r\n', 2147483647, 'no-reply@google.com', '', 'Mike Backer\r\n', '86387759815', '84528722113', '86387759815', NULL, '2021-05-15 22:26:19', 'Kaohsiung Municipality', 'google', '<u>Site projet</u><br />\n  Pays: Mike Backer<br />\r\n<br />\n Ville: Mike Backer<br />\r\n<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Hello <br />\r\n <br />\r\nI have just verified your SEO on  abecameroon.com for its SEO metrics and saw that your website could use an upgrade. <br />\r\n <br />\r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. <br />\r\n <br />\r\nPlease check our services below, we offer SEO at cheap rates. <br />\r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ <br />\r\n <br />\r\nStart enhancing your sales and leads with us, today! <br />\r\n <br />\r\nregards <br />\r\nMike Backer<br />\r\n <br />\r\nHilkom Digital Team <br />\r\nsupport@hilkom-digital.de', 'DEMANDE DEVIS', 0, -1, 1),
(14, 'Sambo Dasuki', 2147483647, 'mmzxxz288@gmail.com', '', 'Sambo Dasuki', '88478224154', '82465561493', '88478224154', NULL, '2021-05-18 17:21:33', 'Miami', 'google', '<u>Site projet</u><br />\n  Pays: Sambo Dasuki<br />\n Ville: Sambo Dasuki<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Dear Partner; <br />\r\n <br />\r\nI came across your email contact on Database; Where i was searching for a competent Partner who can handle a lucrative business for me as trustee and manager. I anticipate to read from you soon so I can provide you with more details. <br />\r\n <br />\r\nYours Sincerely, <br />\r\nAlh. Sambo Dasuki <br />\r\nmmzxxz288@gmail.com', 'DEMANDE DEVIS', 0, -1, 1),
(15, 'Mike Wesley\r\n', 2147483647, 'no-reply@google.com', '', 'Mike Wesley\r\n', '83131758246', '87161347974', '83131758246', NULL, '2021-05-23 21:07:54', 'Kaohsiung Municipality', 'google', '<u>Site projet</u><br />\n  Pays: Mike Wesley<br />\r\n<br />\n Ville: Mike Wesley<br />\r\n<br />\n Adresse: <br />\n A propos du projet<br />\n Date de démarrage: <br />\n Service cible: <br />\n Description du projet: Good Day <br />\r\n <br />\r\nI have just verified your SEO on  abecameroon.com for the ranking keywords and saw that your website could use an upgrade. <br />\r\n <br />\r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. <br />\r\n <br />\r\nPlease check our pricelist here, we offer SEO at cheap rates. <br />\r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ <br />\r\n <br />\r\nStart increasing your sales and leads with us, today! <br />\r\n <br />\r\nregards <br />\r\nMike Wesley<br />\r\n <br />\r\nHilkom Digital Team <br />\r\nsupport@hilkom-digital.de', 'DEMANDE DEVIS', 0, -1, 1),
(16, 'Rajiv Michael', 2147483647, 'rajiindian3@gmail.com', '', 'Rajiv Michael', '84196183893', '84148159776', '84196183893', NULL, '2021-05-25 16:26:17', 'Albany', 'google', '<u>Site projet</u><br />\r\n  Pays: Rajiv Michael<br />\r\n Ville: Rajiv Michael<br />\r\n Adresse: <br />\r\n A propos du projet<br />\r\n Date de démarrage: <br />\r\n Service cible: <br />\r\n Description du projet: Hello Dear, <br />\r\n <br />\r\nI am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. <br />\r\n <br />\r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, <br />\r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. <br />\r\n <br />\r\nYour response is most anticipated if this is of interest to you. Reach me on email: financial@eurocleargroups.email or rajiindian3@gmail.com <br />\r\n <br />\r\n <br />\r\nKind regards, <br />\r\n <br />\r\nRajiv Michael <br />\r\nFinancial Consultant <br />\r\nWhatsApp: +15183802182 <br />\r\nTelegram@ +12092482370 <br />\r\nEuroclear Groups <br />\r\nfinancial@eurocleargroups.email <br />\r\nUrl: http://euroclear.com', 'DEMANDE DEVIS', 0, -1, 1);

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
(1, 'Africa Business & Engineering', 'img/logo.png', '', 'Mieux servir partout et toujours', 'Douala, Rond point Maetur Bonamoussadi', 'Douala', 'Cameroun', 1, '<p>Africa Business & Engeneering est un partenaire fiable qui vous accompagne dans la r&eacute;alisation de vous projets, en assurant la qualit&eacute; des livrable dans le respect des d&eacute;lais et des co&ucirc;ts.</p>', 'www.abecameroon.com', 'contact@abecameroon.com', '+237 694 80 18 97', NULL, '2020-12-28 11:15:31');

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

--
-- Déchargement des données de la table `illustration_article`
--

INSERT INTO `illustration_article` (`id`, `id_article`, `lien`, `type`, `online`) VALUES
(1, 1, 'assets/img/blog/blog1.jpg', 'image', 1),
(2, 2, 'assets/img/blog/blog2.jpg', 'image', 1),
(3, 3, 'assets/img/blog/blog3.jpg', 'image', 1),
(4, 4, 'assets/img/blog/blog11.jpg', 'image', 1),
(5, 5, 'assets/img/blog/blog12.jpg', 'image', 1),
(6, 6, 'assets/img/blog/blog13.jpg', 'image', 1),
(7, 7, 'assets/img/blog/blog21.jpg', 'image', 1),
(8, 8, 'assets/img/blog/blog22.jpg', 'image', 1),
(9, 9, 'assets/img/blog/blog23.jpg', 'image', 1);

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

--
-- Déchargement des données de la table `illustration_prestation`
--

INSERT INTO `illustration_prestation` (`id`, `id_prestation`, `lien`, `type`, `online`) VALUES
(1, 1, 'assets/img/services/ingenierieindustri_1.jpg', 'image', 1),
(2, 2, 'assets/img/services/_2.png', 'image', 1),
(3, 3, 'assets/img/services/interventionsur_sit_3.jpg', 'image', 1),
(4, 4, 'assets/img/services/inspection_4.jpg', 'image', 1),
(5, 5, 'assets/img/services/ships_services.jpg', 'image', 1),
(6, 6, 'assets/img/services/sts_and_bunkering.jpg', 'image', 1),
(7, 1, 'assets/img/sevices/ingenierieindustri_7.jpg', 'Ban', -1),
(8, 2, 'assets/img/sevices/_8.jpg', 'Ban', -1),
(9, 3, 'assets/img/services/operations_and_post_fixture_management_1.jpg', 'Ban', -1),
(10, 4, 'assets/img/services/freight_forwarding_services_1.jpg', 'Ban', -1),
(11, 5, 'assets/img/services/ships_services_1.jpg', 'Ban', 1),
(12, 6, 'assets/img/services/sts_and_bunkering_1.jpg', 'Ban', 1),
(13, 1, 'assets/img/sevices/ingenierieindustri_13.jpg', 'Ban', -1),
(14, 1, 'assets/img/services/ingenierieindustri_14.jpg', 'Ban', 1),
(15, 2, 'assets/img/services/_15.jpg', 'Ban', 1),
(16, 3, 'assets/img/services/interventionsur_sit_16.jpg', 'Ban', 1),
(17, 4, 'assets/img/services/inspection_17.png', 'Ban', 1);

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

--
-- Déchargement des données de la table `illustration_produit_prestation`
--

INSERT INTO `illustration_produit_prestation` (`id`, `id_produit_prestation`, `lien`, `type`, `online`) VALUES
(1, 15, 'https://panessconseils.com/conduite-de-lentretien-individuel-annuel-devaluation-des-performances/', 'contenu_theme', 1),
(2, 5, 'img/solution/huris_produit.png', 'image', 1),
(3, 5, 'img/solution/huris.png', 'image_page_single', 1);

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

--
-- Déchargement des données de la table `management_team`
--

INSERT INTO `management_team` (`id`, `nom`, `description`, `fonction`, `departement`, `compte_facebook`, `compte_linkedin`, `compte_twitter`, `compte_instagram`, `img`, `email`, `online`, `id_entreprise`) VALUES
(1, 'Mendo Zang Jean Francois', '', 'Director General', '', '', '', '', '', 'assets/img/team/director_general.jpg', '', 1, 1),
(2, 'Malobe Sylvie', '', 'Secretary General', '', '', '', '', '', 'assets/img/team/secretary_general.jpg', '', 1, 1),
(3, 'Olele N. V. Emile', '', 'Head Of Service - Operations', '', '', '', '', '', 'assets/img/team/head_of_service_operations.jpg', '', 1, 1),
(4, 'Ogodigo Danielle', '', 'Head Of Service - HR', '', '', '', '', '', 'assets/img/team/head_of_service_hr.jpg', '', 1, 1),
(5, 'Frank Tiako', '', 'Accountant', '', '', '', '', '', 'assets/img/team/accountant.jpg', '', 1, 1);

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
(10, 0, 1, '3', 'Corporate Structure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit ', 'It is in this aspect of the business where corrective action has been most decisive and the transformation is most intense.\r\n(a) We have redesigned the mechanisms and procedures we use to measure and manage the risks of tenders and to control\r\nproject execution. (b) We have made in-depth changes to the governance model for the geographies, specifying the functions\r\nof Country Managers as contrasted with those of the heads of business units and corporate areas. (c) In the Tenders\r\nCommittee we have implemented a new transaction approval procedure using risk-based thresholds, reaching the company’s\r\nManagement Committee. (d) And we have created new functions and mechanisms to improve control over transactions,\r\nespecially international deals, such as the Execution and Delivery Committee', 0),
(11, 0, 1, '3', 'Mot du Directeur Général', 'Madame, Monsieur, <br> \r\n<p>Les mutations techniques et économiques qui caractérisent notre ère font subir de profondes modifications aux entreprises. Elles mobilisent l’ensemble des ressources qui y sont affectées afin de parvenir à la maitrise d’un système de production qui se veut de nos jours dynamique et constamment adapté aux exigences de l’environnement de l’entreprise. Par ailleurs, le phénomène galopant de la mondialisation et la rapide évolution des droits et libertés collectives et individuelles imposent aux unités modernes de production de nouvelles contraintes tant au niveau interne qu’externe. Ainsi la quête de la performance se place de nos jours au cœur de la réflexion stratégique de l’entreprise avec comme problématique l’amélioration globale c’est-à-dire l’optimisation de l’ensemble des déterminants utiles à l’atteinte des résultats positifs.</p>\r\n<p>\r\n<strong>Africa Business and Engineering Cameroon Sarl </strong> (ABE Cameroon Sarl), se veut être dans ce contexte l’une des principales unités de production sous régional dans le domaine des constructions industrielle qui élabore et implémente les solutions techniques à la demande. La réalisation de cette mission s’appuie sur un concept qualité explicité autour de trois axes à savoir:<br>\r\n<ul style=\'list-style:square;\' >\r\n<li><strong>Qualité des hommes :</strong> l’entreprise s’engage à la mise en œuvre d’une politique social visant l’épanouissement intégral du personnel.</li>\r\n<li><strong>Qualité des procédés :</strong> La direction générale veillera à l’implémentation d’un système de pilotage des activités de production performant. </li>\r\n<li><strong>Qualité du produit : </strong>celle-ci s’appuie sur la mise en œuvre d’une politique de management de la relation client rentable.</li>\r\n<ul>\r\n</p>', '', 1),
(12, 0, 1, '3', 'Notre vision', ' La vision d’Africa Business and Engineering Cameroon est : <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i> <strong> être performante par les competences distinctives  </strong> <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i> d’où notre slogan mieux servir partout et toujours. La mise en œuvre de cette vision s’appuie sur un concept qualité explicité autour de trois axes à savoir :<br><br>\n\n<i class=\"ri-check-double-line\"></i> <strong>Qualité des hommes:</strong> l’entreprise s’engage à la mise en œuvre d’une politique social visant l’épanouissement intégral du personnel.<br>\n<i class=\"ri-check-double-line\"></i> <strong>Qualité des procédés:</strong> La direction générale veillera à l’implémentation d’un système de pilotage des activités de production performante.  <br>\n<i class=\"ri-check-double-line\"></i> <strong>Qualité du produit </strong>: celle-ci s’appuie sur la mise en œuvre d’une politique de management de la relation client rentable.<br>', '', 1),
(13, 0, 1, '3', 'Notre mission', 'Être l’une des principales unités de production sous régional dans le domaine des constructions industrielle en qui élabore et implémente les solutions techniques à la demande.', '', 1),
(14, 0, 1, '3', 'Nos valeurs', '<p><i class=\"ri-check-double-line\"></i> <strong>QUALITE DE SERVICE  </strong><br>\nABE applique naturellement une démarche qualité à tous les niveaux de ses interventions et prestations. Cette volonté de perfection s’appuie sur une méthodologie reposant sur l’honnêteté, l’innovation et l’esprit d’équipe. En somme, la quête de la qualité consiste à :\n<ul>\n<li>Optimiser le fonctionnement de l’entreprise ;</li>\n<li>Anticiper les problèmes avant qu’ils n’apparaissent ;</li>\n<li>Gagner du temps et de l’efficacité ; </li>\n<li>Créer des outils pour optimiser chaque phase d’un projet.</li>\n</ul>\n</p>\n<p>\n<i class=\"ri-check-double-line\"></i> <strong>QUALITE DES HOMMES </strong> <br>\nLa vision d’ABE est ‘’ETRE PERFORMANTE PAR LES COMPETENCES DISTINCTIVES ’’ c’est pourquoi elle croit en l’individu en donnant la chance à tous ses salariés notamment aux jeunes diplômés d’évoluer au sein de l’entreprise par le biais de la formation professionnelle interne et externe. ABE pérennise son propre développement tout en favorisant l’épanouissement professionnel de l’ensemble de ses collaborateurs\n</p>\n<p>\n <i class=\"ri-check-double-line\"></i>  <strong>HYGIENE -SECURITE -ENVIRONNEMENT  </strong> <br>\nLa Sécurité des personnes, la Santé et la Vie ; le respect de l’Environnement, la préservation des Infrastructures, des installations et des équipements, la Sécurité dans le travail est la priorité absolue de ABE.\n<ul>\n<li> <strong>Santé sécurité au travail </strong><br>\nChez ABE, l’homme fait l’objet de toutes les attentions particulières caractérisées par l’évaluation des risques, l’application des démarches sécurité, la mise à disposition des équipements de protection adaptés. Bref, chez nous tout est mis en œuvre pour tendre vers un seul objectif : zéro accident.<br>\n</li>\n<li> <strong>Environnement </strong><br>\nABE s’engage pour un développement durable. Le respect de l’environnement est une démarche constante de nos équipes qui cherchent à limiter au maximum l’impact des chantiers aussi bien sur le milieu environnant que sur les riverains. Illustrant cet engagement qui nous guide de la conception à la réalisation de tous les projets, les déchets inertes issus de chacun de nos chantiers sont récupérés et stockés pour être ensuite concassés en vue de leur valorisation et de leur réemploi. Les autres types de déchets (plastiques, bois...) sont triés et évacués dans des décharges agréé. \n</li>\n</ul>\n</p>', '', 1),
(15, 0, 1, '4', 'Chaudronnerie et tuyauterie', '<p style=\"text-align:justify;\">La synthèse de nos actions s’articule autour de la mise en œuvre par nos ingénieurs des opérations de conception, de réalisation, et de réhabilitation des ouvrages et infrastructures en acier conformément aux normes et règlements requis par le donneur d’ordre (<strong>CM66 + ADD 80, EUROCO DES STRUCTURAUX, CODAP 2010, CODRES 2007, CODETI 2006, ASME 2008, API 650 </strong>). Le domaine d’application de ce savoir-faire au sein d’Africa Business And Engineering s’oriente principalement sur des axes tels que :\n</p>\n<p  style=\"text-align:justify;\">\n<strong> <span class=\"ri-check-double-line\"></span> La construction des unités industrielles :</strong> Usine, entrepôts, et réservoirs;<br><br>\n<strong> <span class=\"ri-check-double-line\"></span> La construction des ouvrages d’art :</strong> pont en acier, monuments;<br><br>\n<strong><span class=\"ri-check-double-line\"></span> La construction et l’entretien de tout ouvrage de tuyauterie</strong> quel que  soit le produit transporté (incompressibles, haute pression, compressibles).\n</p>', NULL, 1),
(16, 0, 1, '4', 'Mécanique Générale', '<p  style=\"text-align:justify;\">\nA <strong>Africa Business and Engineering</strong>, nos équipes ont pour principale mission de donner vie aux besoins des clients. Ainsi nos ingénieurs et techniciens  s’activent conformément aux exigences qualités réglementaires aux actions de :\n</p>\n<p  style=\"text-align:justify;\">\n<span class=\"ri-check-double-line\"></span>  Conception et l’entretien des machines;</br>\n<span class=\"ri-check-double-line\"></span> Fabrication et la réfection des pièces mécaniques;</br>\n<span class=\"ri-check-double-line\"></span> Installation et la maintenance des unités industrielles.\n</p>\n', NULL, 1),
(17, 0, 1, '4', 'Génie civil', '<p  style=\"text-align:justify;\">\nNos ingénieurs s’occupent de la conception, de la réalisation, de l’exploitation et de la réhabilitation d’ouvrages de construction et d’infrastructures dont ils assurent la gestion afin de répondre aux besoins du client, tout en assurant la sécurité du public et la protection de l’environnement. Très variées, leurs réalisations se répartissent principalement dans les champs d’intervention tels que les structures, l’hydraulique, et l’environnement.\n</p>', NULL, 1),
(18, 0, 1, '4', 'Electricité-instrumentation et automatisme', '<p  style=\"text-align:justify;\">\nA <strong>Africa Business and Engineering</strong>, nos équipes ont pour principale mission de donner vie aux besoins des clients. Ainsi nos ingénieurs s’occupent de la conception, la réalisation, et la réhabilitation des installations industrielles.\n</p>', NULL, 1),
(19, 0, 1, '4', 'Gestion industrielle', '<p  style=\"text-align:justify;\">\nNotre équipe d’experts et consultants dans cette spécialité a pour objectif pendant les missions en entreprises d’identifier, concevoir et implémenter les solutions visant à gérer et optimiser toutes les fonctions, ressources et flux industriels de l’entreprise, partant de la commande jusqu’à la livraison du produit. Nos activités en gestion industrielle couvrent les systèmes de pilotage, de décision, d’information et physique de l’entreprise\n</p>', NULL, 1);

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
(1, 0, 1, 'Ingénierie industrielle', '<i class=\"ri-check-double-line\"></i> <strong>Calculs</strong> : Pré dimensionnement, dimensionnement, calcul de structure, vérification … ;<br>\n<i class=\"ri-check-double-line\"></i> <strong>Elaboration des schémas et plans :</strong> plans de procèss(PID et PFD), plan généreaux, plan guides, plan d’éxécution … ;<br>\n<i class=\"ri-check-double-line\"></i> <strong>Réalisation des maquettes :</strong> maquette virtuel(3D) et ou physique ;<br>\n<i class=\"ri-check-double-line\"></i> <strong>Etude et conception :</strong> machinerie, unités industrielles, systèmes mécaniques … ;<br>\n<i class=\"ri-check-double-line\"></i> <strong>Production de documents :</strong> note de calculs, rapport d’études(APD,APS,STD,DCE), dossier d’éxécution, dossier de fin d’affaire ;', 'Nous mettons à votre disposition une expertise avérée dans pour la réalisation  de vos projets industriels : pré-dimensionnement et dimensionnement, calcul de structure, étude, élaboration  et réalisation des maquettes', 'Service', NULL, 1),
(2, 0, 1, 'Assistance à la maîtrise d\\\'oeuvrage', '<i class=\"ri-check-double-line\"></i> Supervision et coordination des travaux ; <br>\n<i class=\"ri-check-double-line\"></i> Validation des procédures et documents d’exécution ;\n<br><i class=\"ri-check-double-line\"></i> Contrôle qualité des travaux, matériaux et fournitures ;\n<br><i class=\"ri-check-double-line\"></i> Assistance aux opérations de réception des prestations ;\n<br><i class=\"ri-check-double-line\"></i> L’ordonnancement, le pilotage et la coordination du chantier ;\n<br><i class=\"ri-check-double-line\"></i> Production des rapports d’avance et du dossier de fin d’affaire.\n', 'De la pharse de conception à la phase de réalisation ABE vous assiste assiste dans vos missions de Maîtrise d’œuvre : Planification, pilotage des travaux, contrôle qualité, validation des livrables et repporting.', 'Service', NULL, 1),
(3, 0, 1, 'Intervention sur site', '<i class=\"ri-check-double-line\"></i> Construction et entretien  d’unité industrielle ;\n<br><i class=\"ri-check-double-line\"></i> Construction et entretien  des bâtiments industriels;\n<br><i class=\"ri-check-double-line\"></i> Construction et entretien  des installations de tuyauterie industrielle;\n<br><i class=\"ri-check-double-line\"></i> Fabrication et entretien des machines et des systèmes mécanique.\n', 'Construction et entretien dans le secteur industriel : Unité de production, bâtiment,  des installations de tuyauterie ;  Fabrication et entretien des machines et des systèmes mécanique.', 'Service', NULL, 1),
(4, 0, 1, 'Inspection', '<i class=\"ri-check-double-line\"></i> Contrôle des soudures (CND);\n<br><i class=\"ri-check-double-line\"></i> Inspection des sites et installations industrielles;\n<br><i class=\"ri-check-double-line\"></i> Préparation et supervision épreuves hydrauliques;\n<br><i class=\"ri-check-double-line\"></i> Etude des dangers et analyse des risques opérationnels.', 'Dans toutes les opérations de construction métallique ( réalisation d’un ouvrage neuf ou du renforcement d’un ouvrage existant),  ABE peut réaliser des missions de vérification et de contrôle.', 'Service', NULL, 1),
(5, 0, 1, 'Ship\'s services', '<p style=\" text-align: justify\"><strong>DSC Marine Services S.A</strong> is among the leading ship’s agencies in Cameroon since our foundation and reputation is built on high level personalized services provided by experienced staffs in all aspects of shipping. We can offer the commercial knowledge and personal contacts that we have developed with local firms and authorities associated with the trade.</p> \r\n <p style=\" text-align: justify\">We have the expertise for various types of cargo ships calling Cameroon ports such as petroleum and chemical tankers, general cargo ships and bulkers. We also provide ships and ship owners with various related services such as custom clearance and documentation, port operations coordination, husbandry services, owners/charterer protecting agent services, arrange and attend to all vessel repairs inspections etc.</p>\r\n', 'We provide full agency, husbandry and protective agency services in major ports in Cameroon ensured by our boarding agents who will take care of your interest during each port calls.', 'Service', NULL, -1),
(6, 0, 1, 'STS and bunkering', '<p style=\" text-align: justify\">A Ship-to-ship operation is an operation where crude oil/petroleum products/liquefied gases are transshipped between seagoing ships moored alongside each other. Such operation may take place in port, anchor or underway following the latest ICS/OCIMF Ship-to-ship Transfer Guides with the strictest adherence to safety regulations. The overall safety of any STS operation is reliant upon training, experience, correct equipment and good planning. </p>\r\nEach operation includes;\r\n<ul>\r\n<li>Approach manœuvre</li>\r\n<li>Mooring</li>\r\n<li>Hose connection</li>\r\n<li>Cargo transfer</li> \r\n<li>Unmooring.</li>\r\n</ul>\r\n<p style=\" text-align: justify\"><strong>DSC Marine Services S.A</strong> ensure that all necessary expertise is in place and that all STS equipment is of the highest quality and certified to undertake STS operations involving varying ship sizes and conditions with the strict adherence to our company’s HSE policies, Quality Management System and all local and international safety, security and environmental regulations.</p>\r\n <p style=\" text-align: justify\">Our expertise is evidenced by a strong track record of successful STS transfer operations offshore Cap-limboh. The company has the reputation of been the first shipping company to execute STSs of petroleum and petroleum products in the country for the national refinery; SONARA.</p>\r\n<p style=\" text-align: justify\">Our team will work closely with you the review your operational requirements, aligning our processes to your needs to offer you a complete STS transfer solution offshore or in port.</p>\r\nWe provide the following STS related services;\r\n<ul>\r\n<li>Loss control. </li>\r\n<li>STS operation coordination. </li>\r\n<li>Ordering of pilots and tugs. </li>\r\n<li>Floating storage service. </li>\r\n<li>Cargo documentation. </li>\r\n<li>Hire and handling of STS equipment. </li>\r\n<li>De-slopping. </li>\r\n<li>Tanks washing. </li>\r\n<li>Bunkering services. </li>\r\n', 'Our STS-team, operated from our office in Limbe offers a comprehensive bunkering and ship-to-ship of petroleum and petroleum products around the Gulf of Guinea that respects international regulations and environmental friendly.', 'Service', NULL, -1);

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

--
-- Déchargement des données de la table `produit_prestation`
--

INSERT INTO `produit_prestation` (`id`, `id_prestation`, `titre`, `resume`, `description`, `mode`, `prix`, `rating`, `online`, `timing`) VALUES
(1, 13, 'Cloud Computing Foundation (certification Exin) ', NULL, NULL, 1, 800000, 0, 1, '04 jours'),
(2, 13, 'Cloud Computing: Architectures et Services Avancée', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(3, 4, 'Stratégie de digitalisation', NULL, NULL, 1, 350000, 0, 1, '02 jours'),
(4, 4, 'Pratique du management collaboratif', NULL, NULL, 1, 350000, 0, 1, '02 jours'),
(5, 15, 'HURIS', 'Logiciel de gestion des ressources humaines', 'PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS). PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS). PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS).', 1, 0, 0, 1, '0'),
(6, 20, 'Analyse de la maturité digitale', NULL, NULL, 1, 0, 0, 1, '0');

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

--
-- Déchargement des données de la table `r_produit_couleur`
--

INSERT INTO `r_produit_couleur` (`id`, `id_couleur`, `id_produit`, `online`) VALUES
(1, 1, 1, 1),
(2, 9, 1, 1),
(3, 3, 2, 1),
(4, 8, 2, 1),
(5, 9, 2, 1),
(6, 10, 3, 1),
(7, 7, 3, 1),
(8, 5, 3, 1),
(9, 2, 3, 1),
(10, 9, 6, 1),
(11, 7, 6, 1),
(12, 4, 6, 1),
(13, 10, 7, 1),
(14, 1, 7, 1),
(15, 2, 7, 1),
(16, 8, 8, 1),
(17, 6, 8, 1),
(18, 5, 8, 1),
(19, 3, 9, 1);

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

--
-- Déchargement des données de la table `r_produit_taille`
--

INSERT INTO `r_produit_taille` (`id`, `id_taille`, `id_produit`, `online`) VALUES
(1, 1, 1, 1),
(2, 3, 1, 1),
(3, 4, 1, 1),
(4, 2, 2, 1),
(5, 3, 2, 1),
(6, 5, 3, 1),
(7, 1, 6, 1),
(8, 3, 6, 1),
(9, 5, 6, 1),
(10, 6, 6, 1),
(11, 1, 7, 1),
(12, 2, 7, 1),
(13, 3, 7, 1),
(14, 4, 7, 1),
(15, 5, 7, 1),
(16, 1, 8, 1),
(17, 2, 8, 1),
(18, 3, 8, 1),
(19, 4, 8, 1),
(20, 5, 9, 1),
(21, 4, 9, 1);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `illustration_produit`
--
ALTER TABLE `illustration_produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `illustration_produit_prestation`
--
ALTER TABLE `illustration_produit_prestation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `illustration_theme`
--
ALTER TABLE `illustration_theme`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `management_team`
--
ALTER TABLE `management_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `r_produit_couleur`
--
ALTER TABLE `r_produit_couleur`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `r_produit_taille`
--
ALTER TABLE `r_produit_taille`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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

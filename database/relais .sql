-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 mars 2022 à 15:20
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `relais`
--

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

CREATE TABLE `header` (
  `nom` varchar(150) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `bouton` varchar(150) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `header`
--

INSERT INTO `header` (`nom`, `ville`, `bouton`, `tel`) VALUES
('Hôtel du Relais', 'THOUARS (79)', 'RÉSERVER AU MEILLEUR PRIX', '05 49 66 29 45');

-- --------------------------------------------------------

--
-- Structure de la table `horaires_infos`
--

CREATE TABLE `horaires_infos` (
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `horaires_infos`
--

INSERT INTO `horaires_infos` (`texte`) VALUES
('DU LUNDI AU JEUDI DE 7H À 12H\r\n								<br>\r\n								ET 16H À 21H30\r\n								<br>\r\n								<br>\r\n								LE VENDREDI DE 7H À 12H\r\n								<br>\r\n								ET 16H À 21H00\r\n								<br>\r\n								<br>\r\n								LE SAMEDI DE 8H À 21H\r\n								<br>\r\n								<br>\r\n								LE DIMANCHE DE 8H À 12H ET<br>L\'APRÈS MIDI UNIQUEMENT SUR<br>RÉSERVATION');

-- --------------------------------------------------------

--
-- Structure de la table `img_hotel`
--

CREATE TABLE `img_hotel` (
  `src` varchar(60) NOT NULL,
  `alt` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `img_hotel`
--

INSERT INTO `img_hotel` (`src`, `alt`) VALUES
('pics/Galerie/19.jpg', 'Extérieur de l\'hôtel');

-- --------------------------------------------------------

--
-- Structure de la table `main_tarif`
--

CREATE TABLE `main_tarif` (
  `mtarif_id` int(11) NOT NULL,
  `nom_main` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `main_tarif`
--

INSERT INTO `main_tarif` (`mtarif_id`, `nom_main`, `prix`) VALUES
(1, 'CHAMBRE SIMPLE', ''),
(2, 'CHAMBRE DOUBLE', ''),
(3, 'CHAMBRE TWIN', ''),
(4, 'CHAMBRE TRIPLE', ''),
(5, 'CHAMBRE COMMUNICANTE', ''),
(6, 'SUITE FAMILIALE', ''),
(7, 'PETIT DÉJEUNER BUFFET', '8 €'),
(8, 'SUPPLÉMENT SERVICE EN CHAMBRE', '1 €'),
(9, 'SOIRÉE ÉTAPE', '72,50 €'),
(10, 'MENU (DU LUNDI AU JEUDI)', '13,50 €'),
(11, 'ANIMAUX (SUR DEMANDE)', '5 €/nuit'),
(12, 'TAXE DE SÉJOUR', '0,70 €');

-- --------------------------------------------------------

--
-- Structure de la table `option_tarif`
--

CREATE TABLE `option_tarif` (
  `id` int(3) NOT NULL,
  `id_from_main` int(3) NOT NULL,
  `nom_option` varchar(100) NOT NULL,
  `prix_opt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `option_tarif`
--

INSERT INTO `option_tarif` (`id`, `id_from_main`, `nom_option`, `prix_opt`) VALUES
(2, 1, '-avec douche', '57 €'),
(3, 2, '-avec douche', '59 €'),
(4, 2, '-avec baignoire', '61 €'),
(5, 3, '(2 lits simples)', '61 €'),
(6, 4, '(1 lit de 160 - 1 lit de 90)', '68 €'),
(7, 5, '(1 lit de 160 et 2 lits de 90)', ''),
(8, 5, '-3 personnes', '73 €'),
(9, 5, '-4 personnes', '78 €'),
(10, 6, '(2 salles d\'eau)', ''),
(11, 6, '-2 personnes (2 lits)', '66 €'),
(12, 6, '-3 personnes', '74 €'),
(13, 6, '-4 personnes', '78 €'),
(14, 6, '-5 personnes', '83 €'),
(20, 1, '-avec baignoire', '59 €');

-- --------------------------------------------------------

--
-- Structure de la table `pic_hotel`
--

CREATE TABLE `pic_hotel` (
  `photel_id` int(11) NOT NULL,
  `picto_lien` varchar(255) NOT NULL,
  `picto_alt` text NOT NULL,
  `ordre` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pic_hotel`
--

INSERT INTO `pic_hotel` (`photel_id`, `picto_lien`, `picto_alt`, `ordre`) VALUES
(1, 'pics/Hotel/wifi.png', 'Wifi disponible dans l\'hôtel', 1),
(2, 'pics/Hotel/presses.png', 'Journaux disponibles dans l\'hôtel', 2),
(3, 'pics/Hotel/lit_bebe.png', 'Hôtel équipé pour les bébés', 3),
(4, 'pics/Hotel/parking.png', 'Parking réservé à l\'hôtel', 4),
(5, 'pics/Hotel/bein.png', 'Bein Sports disponible dans l\'hôtel', 5),
(6, 'pics/Hotel/vallee_du_thouet.png', 'Adhérent de La Vallée du Thouet', 6),
(7, 'pics/Hotel/velo_francette.png', 'Adhérent de La Vélo Francette', 7),
(8, 'pics/Hotel/logo_contact_hotel.png', 'Adhérent au groupe Contact Hôtel', 8);

-- --------------------------------------------------------

--
-- Structure de la table `pic_photo`
--

CREATE TABLE `pic_photo` (
  `pphoto_id` int(5) NOT NULL,
  `src` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `ordre` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pic_photo`
--

INSERT INTO `pic_photo` (`pphoto_id`, `src`, `alt`, `ordre`) VALUES
(1, 'Fichiers/4.jpg', 'facade', 1),
(2, 'Fichiers/105.jpg', 'SALON', 2),
(3, 'Fichiers/Petit dejeune.jpg', 'Petit déjeuné', 3),
(4, 'Fichiers/01.jpg', 'Chambre 1', 4),
(5, 'Fichiers/Souris.jpg', 'Plateau repas', 5),
(6, 'Fichiers/10.jpg', 'Chambre 9', 6),
(7, 'Fichiers/06.jpg', 'Chambre 6', 7),
(8, 'Fichiers/DSCN5989.jpg', 'Chambre Bain 5', 8),
(9, 'Fichiers/DSCN5990.jpg', 'Salle de bain Ch 5', 9),
(10, 'Fichiers/02.jpg', 'Chambre 2', 10),
(11, 'Fichiers/05.jpg', 'Chambre 5', 11),
(12, 'Fichiers/12.jpg', 'Chambre 11', 12),
(13, 'Fichiers/04.jpg', 'Chambre 4', 13),
(14, 'Fichiers/102.jpg', 'Accueil 1', 14),
(15, 'Fichiers/17.jpg', 'Extérieur', 15),
(16, 'Fichiers/Ville.jpg', 'Ville de Thouars', 16),
(17, 'Fichiers/07.jpg', 'Chambre 7', 17),
(18, 'Fichiers/11 (1).jpg', 'Chambre 11', 18);

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `id` int(3) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sorties`
--

INSERT INTO `sorties` (`id`, `img`, `nom`, `desc`, `link`) VALUES
(1, 'pics/tourisme/centerparcs.png', 'CENTER PARCS', 'LE CENTER PARCS - DOMAINE DU BOIS AUX DAIMS EST À 20 MINUTES', 'https://www.centerparcs.fr/fr-fr/france/fp_BD_vacances-domaine-le-bois-aux-daims?gclid=Cj0KCQjw3v3YBRCOARIsAPkLbK5eNQXlq_JpGmxoAnmS24IQT09DOk9r_Ci3u9KdxMIP5wlQYQDRHA0aAg2BEALw_wcB&gclsrc=aw.ds'),
(2, 'pics/tourisme/stmesmin.png', 'CHÂTEAU DE SAINT MESMIN', 'LE CHÂTEAU DE SAINT MESMIN EST À 45 MINUTES DE ROUTE DE L\'HÔTEL. CE CHÂTEAU FORT VOUS ACCUEILLE ENTRE VISITES HISTORIQUES ET ANIMATIONS DIVERSES.', 'https://www.chateau-saintmesmin.com/'),
(3, 'pics/tourisme/futuroscope.png', 'FUTUROSCOPE', 'LE FUTUROSCOPE EST UN PARC D\'ATTRACTION TRAVAILLANT LES NOUVELLES TECHNOLOGIES. IL EST SITUÉ À 50 MINUTES DE L\'HÔTEL', 'https://www.futuroscope.com'),
(4, 'pics/tourisme/kartingloudun.png', 'KARTING FRANCK TALON', 'LE KARTING DE LOUDUN (FRANCK TALON)', 'https://www.loudun-karting.com/');

-- --------------------------------------------------------

--
-- Structure de la table `text_chambres`
--

CREATE TABLE `text_chambres` (
  `tchambres_id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `text_chambres`
--

INSERT INTO `text_chambres` (`tchambres_id`, `texte`) VALUES
(1, 'L\'HÔTEL DU RELAIS VOUS OFFRE 15 CHAMBRES NON FUMEUR ET TOUTES PERSONNALISÉES. VOUS AUREZ LE CHOIX ENTRE LES CHAMBRES SIMPLES, DOUBLES, TRIPLES, ET LES SUITES FAMILIALES, AVEC DOUCHE OU BAIN.						<br>						<br>\r\n						TOUES NOS CHAMBRES SONT ÉQUIPÉES\r\n						<br>\r\n						<br>\r\n-D\'UNE LITERIE GRAND CONFORT<br>\r\n						-D\'UN DOUBLE VITRAGE<br>\r\n						-D\'UN SÈCHE CHEVEUX<br>\r\n						-D\'UNE TÉLÉVISION ÉCRAN PLAT DE 82 CM AVEC TNT, CANAL +, CANAL SAT, ET BEIN SPORT !');

-- --------------------------------------------------------

--
-- Structure de la table `text_hotel`
--

CREATE TABLE `text_hotel` (
  `thotel_id` int(1) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `text_hotel`
--

INSERT INTO `text_hotel` (`thotel_id`, `texte`) VALUES
(1, 'CÉLINE ET THIERRY VOUS ACCUEILLENT À L\'HÔTEL DU RELAIS DANS UN CADRE RÉCEMMENT RELOOKÉ. DANS UNE AMBIANCE CHALEUREUSE ET CONVIVIALE POUR VOTRE PLUS petit PLAISIR.\r\n							<br>\r\n							<br>\r\n							POUR VOS SÉJOURS DÉTENTES, TOURISTIQUES OU VOS DÉPLACEMENTS PROFESSIONNELS, VENEZ PROFITER DU CONFORT ET DU CALME DE NOS CHAMBRES TOUTES PERSONNALISÉES.\r\n							<br>\r\n							<br>\r\n							UNE SOIRÉE ÉTAPE VOUS EST PROPOSÉE DU LUNDI AU JEUDI. SUR RÉSERVATION AVANT 16 HEURES.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `main_tarif`
--
ALTER TABLE `main_tarif`
  ADD PRIMARY KEY (`mtarif_id`);

--
-- Index pour la table `option_tarif`
--
ALTER TABLE `option_tarif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pic_hotel`
--
ALTER TABLE `pic_hotel`
  ADD PRIMARY KEY (`photel_id`);

--
-- Index pour la table `pic_photo`
--
ALTER TABLE `pic_photo`
  ADD PRIMARY KEY (`pphoto_id`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `text_chambres`
--
ALTER TABLE `text_chambres`
  ADD PRIMARY KEY (`tchambres_id`);

--
-- Index pour la table `text_hotel`
--
ALTER TABLE `text_hotel`
  ADD PRIMARY KEY (`thotel_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `main_tarif`
--
ALTER TABLE `main_tarif`
  MODIFY `mtarif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `option_tarif`
--
ALTER TABLE `option_tarif`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `pic_hotel`
--
ALTER TABLE `pic_hotel`
  MODIFY `photel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `pic_photo`
--
ALTER TABLE `pic_photo`
  MODIFY `pphoto_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `text_chambres`
--
ALTER TABLE `text_chambres`
  MODIFY `tchambres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `text_hotel`
--
ALTER TABLE `text_hotel`
  MODIFY `thotel_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

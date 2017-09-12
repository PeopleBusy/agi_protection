-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 13 sep. 2017 à 01:28
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `agi_protection_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type_contrat` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `date_embauche` date NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `nom`, `prenom`, `telephone`, `type_contrat`, `date_embauche`, `etat`) VALUES
(1, 'TOTO', 'Paul', '901243131', 'CDD', '2017-09-06', '1'),
(2, 'DUPONT', 'Marc', '90232378', 'CDI', '2017-09-09', '1'),
(3, 'TINTIN', 'Pierre', '901243131', 'CDD', '2017-09-06', '0'),
(4, 'NEYMAR', 'Junior', '92394209', 'CDI', '2017-10-15', '1');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_agent`
--

CREATE TABLE `contrat_agent` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contrat_agent`
--

INSERT INTO `contrat_agent` (`id`, `agent_id`, `date_debut`, `date_fin`, `etat`) VALUES
(1, 1, '2017-09-01', '2017-09-30', '1'),
(2, 2, '2017-09-09', '2017-09-09', '1'),
(3, 3, '2017-09-10', '2017-10-30', '0'),
(4, 4, '2017-10-15', '2017-10-15', '1');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_site`
--

CREATE TABLE `contrat_site` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contrat_site`
--

INSERT INTO `contrat_site` (`id`, `site_id`, `date_debut`, `date_fin`, `etat`) VALUES
(1, 1, '2017-09-07', '2017-09-07', '1'),
(2, 2, '2017-09-07', '2017-09-07', '1'),
(3, 3, '2017-09-07', '2017-09-07', '1'),
(4, 4, '2017-09-07', '2017-09-07', '1'),
(5, 5, '2017-09-07', '2017-09-07', '1'),
(6, 6, '2017-09-07', '2017-09-07', '1'),
(7, 7, '2017-09-07', '2017-09-07', '1');

-- --------------------------------------------------------

--
-- Structure de la table `heure_panier`
--

CREATE TABLE `heure_panier` (
  `id` int(11) NOT NULL,
  `libelle` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `heure_panier`
--

INSERT INTO `heure_panier` (`id`, `libelle`, `heure_debut`, `heure_fin`) VALUES
(1, 'HEURE JOUR', '06:00:00', '21:00:00'),
(2, 'HEURE NUIT', '21:00:00', '06:00:00'),
(3, 'HEURE DE DIMANCHE', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `libelle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_heure` datetime NOT NULL,
  `auteur` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type_operation` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`id`, `agent_id`, `site_id`, `libelle`, `date_heure`, `auteur`, `type_operation`) VALUES
(1, 1, NULL, 'Enregistrement', '2017-09-06 21:57:41', 'admin', 1),
(2, 2, NULL, 'Enregistrement', '2017-09-06 21:57:55', 'admin', 1),
(3, 3, NULL, 'Enregistrement', '2017-09-06 21:58:16', 'admin', 1),
(4, 3, NULL, 'Suppression', '2017-09-06 21:58:53', 'admin', 0),
(5, 2, NULL, 'Suppression', '2017-09-06 22:04:14', 'admin', 0),
(6, 3, NULL, 'Suppression', '2017-09-06 22:10:58', 'admin', 0),
(7, 3, NULL, 'Suppression', '2017-09-06 22:14:10', 'admin', 0),
(8, 3, NULL, 'Suppression', '2017-09-06 22:51:55', 'admin', 0),
(9, 4, NULL, 'Enregistrement', '2017-09-07 00:52:31', 'admin', 1),
(10, NULL, 1, 'Enregistrement', '2017-09-07 01:39:10', 'admin', 1),
(11, NULL, 2, 'Enregistrement', '2017-09-07 01:44:26', 'admin', 1),
(12, NULL, 3, 'Enregistrement', '2017-09-07 01:46:19', 'admin', 1),
(13, NULL, 4, 'Enregistrement', '2017-09-07 01:46:55', 'admin', 1),
(14, NULL, 5, 'Enregistrement', '2017-09-07 01:48:02', 'admin', 1),
(15, NULL, 6, 'Enregistrement', '2017-09-07 14:24:42', 'admin', 1),
(16, NULL, 7, 'Enregistrement', '2017-09-07 14:38:48', 'admin', 1),
(17, NULL, 7, 'Modification', '2017-09-07 14:43:05', 'admin', 2),
(18, NULL, 3, 'Modification', '2017-09-07 15:11:55', 'admin', 2),
(19, NULL, 3, 'Modification', '2017-09-07 15:12:11', 'admin', 2),
(20, NULL, 7, 'Suppression', '2017-09-07 15:36:30', 'admin', 0),
(21, NULL, 6, 'Suppression', '2017-09-07 15:38:43', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `nom_site` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `heure_ouv_jour` time DEFAULT NULL,
  `heure_ferm_jour` time DEFAULT NULL,
  `heure_ouv_nuit` time DEFAULT NULL,
  `heure_ferm_nuit` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `nom_site`, `etat`, `heure_ouv_jour`, `heure_ferm_jour`, `heure_ouv_nuit`, `heure_ferm_nuit`) VALUES
(1, 'ACE', '1', '19:15:00', '07:15:00', NULL, NULL),
(2, 'RENOVA', '1', '08:00:00', '20:00:00', '20:00:00', '08:00:00'),
(3, 'BURGER KING', '1', '18:00:00', '00:30:00', '12:30:00', '08:00:00'),
(4, 'IKO', '1', NULL, NULL, '21:30:00', '03:00:00'),
(5, 'ROCKWOOL', '1', '06:30:00', '18:00:00', '18:30:00', '06:30:00'),
(6, 'SITE 1', '0', '14:15:00', '14:15:00', '14:15:00', '14:15:00'),
(7, 'SITE 2', '0', '08:30:00', '23:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vacation`
--

CREATE TABLE `vacation` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `date_vacation` date NOT NULL,
  `heure_panier` smallint(6) NOT NULL,
  `heure_deb_vac` datetime NOT NULL,
  `heure_fin_vac` datetime DEFAULT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `heure_jour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heure_nuit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heure_dimanche` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heure_ferie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `vacation`
--

INSERT INTO `vacation` (`id`, `agent_id`, `site_id`, `date_vacation`, `heure_panier`, `heure_deb_vac`, `heure_fin_vac`, `etat`, `heure_jour`, `heure_nuit`, `heure_dimanche`, `heure_ferie`) VALUES
(1, 1, 3, '2017-09-12', 1, '2017-09-10 05:00:00', '2017-09-10 18:00:00', '1', '12:00', '01:00', '13:00', '0'),
(2, 2, 3, '2017-09-12', 1, '2017-09-11 08:30:00', '2017-09-11 21:30:00', '1', '12:30', '00:30', '0', '0'),
(3, 4, 5, '2017-09-12', 1, '2017-09-12 06:00:00', '2017-09-12 21:00:00', '1', '15:00', '0', '0', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrat_agent`
--
ALTER TABLE `contrat_agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DCC9F55B3414710B` (`agent_id`);

--
-- Index pour la table `contrat_site`
--
ALTER TABLE `contrat_site`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2417ACFAF6BD1646` (`site_id`);

--
-- Index pour la table `heure_panier`
--
ALTER TABLE `heure_panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1981A66D3414710B` (`agent_id`),
  ADD KEY `IDX_1981A66DF6BD1646` (`site_id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E3DADF753414710B` (`agent_id`),
  ADD KEY `IDX_E3DADF75F6BD1646` (`site_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `contrat_agent`
--
ALTER TABLE `contrat_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `contrat_site`
--
ALTER TABLE `contrat_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `heure_panier`
--
ALTER TABLE `heure_panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contrat_agent`
--
ALTER TABLE `contrat_agent`
  ADD CONSTRAINT `FK_DCC9F55B3414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`);

--
-- Contraintes pour la table `contrat_site`
--
ALTER TABLE `contrat_site`
  ADD CONSTRAINT `FK_2417ACFAF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `FK_1981A66D3414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `FK_1981A66DF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `vacation`
--
ALTER TABLE `vacation`
  ADD CONSTRAINT `FK_E3DADF753414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `FK_E3DADF75F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

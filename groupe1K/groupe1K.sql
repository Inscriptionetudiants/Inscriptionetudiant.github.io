-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 mars 2022 à 13:57
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grouped`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `login_admin` varchar(20) NOT NULL,
  `mdp_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `login_admin`, `mdp_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `ine` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `ine`, `prenom`, `nom`, `email`, `tel`, `password`) VALUES
(1, 'N03503420191', 'ABLAYE ', 'SECK', 'ABLAYE20213@gmail.com', 772482768, 'SECK');

-- --------------------------------------------------------

--
-- Structure de la table `gestion_des_formations`
--

CREATE TABLE `gestion_des_formations` (
  `id` int(11) NOT NULL,
  `ine` varchar(20) NOT NULL,
  `formation` varchar(20) NOT NULL,
  `matieres` varchar(20) NOT NULL,
  `notes` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gestion_des_notes`
--

CREATE TABLE `gestion_des_notes` (
  `id` int(11) NOT NULL,
  `ine` varchar(12) NOT NULL,
  `formation_notes` varchar(20) NOT NULL,
  `html5` decimal(4,2) NOT NULL,
  `reseaux` decimal(4,2) NOT NULL,
  `design_editorial` decimal(4,2) NOT NULL,
  `montage_audiovisuel` decimal(4,2) NOT NULL,
  `e_crm` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gestion_des_notes`
--

INSERT INTO `gestion_des_notes` (`id`, `ine`, `formation_notes`, `html5`, `reseaux`, `design_editorial`, `montage_audiovisuel`, `e_crm`) VALUES
(1, 'N03503420191', 'MIC', '12.00', '16.00', '19.00', '18.00', '14.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestion_des_formations`
--
ALTER TABLE `gestion_des_formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestion_des_notes`
--
ALTER TABLE `gestion_des_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gestion_des_formations`
--
ALTER TABLE `gestion_des_formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestion_des_notes`
--
ALTER TABLE `gestion_des_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

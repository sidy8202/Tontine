-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 juin 2022 à 12:49
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tontine`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte_tontine`
--

CREATE TABLE `compte_tontine` (
  `Id_compte` int(11) NOT NULL,
  `num_compte` varchar(50) NOT NULL,
  `solte_tontine` int(50) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte_user`
--

CREATE TABLE `compte_user` (
  `id_compte_user` int(11) NOT NULL,
  `num_compte_user` varchar(50) NOT NULL,
  `sole` int(50) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `Id_cotisation` int(11) NOT NULL,
  `date_payement` date DEFAULT current_timestamp(),
  `heure_payement` time DEFAULT current_timestamp(),
  `mode_payement` varchar(50) DEFAULT NULL,
  `montant_payé` varchar(50) DEFAULT '30000',
  `Id_utilisateur` int(11) NOT NULL,
  `Id_programme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `Id_programme` int(11) NOT NULL,
  `date_progra` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `status_pro` varchar(50) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `programme`
--

INSERT INTO `programme` (`Id_programme`, `date_progra`, `heure`, `status_pro`, `Id_utilisateur`) VALUES
(1, '0000-00-00', '00:00:17', '', 3),
(2, '0000-00-00', '00:00:00', '', 1),
(3, '0000-00-00', '00:00:17', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_utilisateur` int(11) NOT NULL,
  `prenom_util` varchar(50) DEFAULT NULL,
  `nom_util` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'musoje',
  `type_compte` varchar(50) DEFAULT NULL,
  `date_crea` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte_tontine`
--
ALTER TABLE `compte_tontine`
  ADD PRIMARY KEY (`Id_compte`),
  ADD KEY `Id_utilisateur` (`Id_utilisateur`);

--
-- Index pour la table `compte_user`
--
ALTER TABLE `compte_user`
  ADD PRIMARY KEY (`id_compte_user`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`Id_cotisation`),
  ADD KEY `Id_utilisateur` (`Id_utilisateur`),
  ADD KEY `Id_programme` (`Id_programme`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`Id_programme`),
  ADD KEY `Id_utilisateur` (`Id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte_tontine`
--
ALTER TABLE `compte_tontine`
  MODIFY `Id_compte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_user`
--
ALTER TABLE `compte_user`
  MODIFY `id_compte_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `Id_cotisation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
  MODIFY `Id_programme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte_tontine`
--
ALTER TABLE `compte_tontine`
  ADD CONSTRAINT `compte_tontine_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`);

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `cotisation_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`);

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`Id_utilisateur`) REFERENCES `utilisateur` (`Id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

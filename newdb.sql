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
  `solde` int(50) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte_user`
--

INSERT INTO `compte_user` (`id_compte_user`, `num_compte_user`, `solde`, `id_utilisateur`) VALUES
(2, 'SFG02', 100000, 11),
(3, 'HCM01', 100000, 12),
(4, 'OD', 100000, 13),
(5, 'ADM03', 100000, 14),
(6, 'MDM04', 100000, 15),
(7, 'FKM05', 100000, 16),
(8, 'FKM05', 100000, 16),
(9, 'DKM06', 20000, 17),
(10, 'FCM', 3000000, 18);

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `Id_cotisation` int(11) NOT NULL,
  `date_payement` date ,
  `heure_payement` time,
  `montant_payé` varchar(50) DEFAULT '30000',
  `Id_utilisateur` int(11) NOT NULL,
  `Id_programme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`Id_cotisation`, `date_payement`, `heure_payement`, `montant_payé`, `Id_utilisateur`, `Id_programme`) VALUES
(3, NULL, NULL, '30000', 11, 9),
(4, NULL, NULL, '30000', 11, 9);

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
(9, '2022-06-15', '17:00:00', '', 11),
(10, '2022-07-15', '17:00:00', '', 12),
(13, '2022-08-15', '17:35:00', '', 13),
(14, '2022-09-15', '17:00:00', '', 14),
(15, '2022-10-15', '17:00:00', '', 15),
(16, '2022-11-15', '17:00:00', '', 16),
(17, '2022-12-15', '17:00:00', '', 17),
(18, '2023-01-15', '17:00:00', '', 18);

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
  `passwords` varchar(50) NOT NULL DEFAULT 'musoje',
  `type_compte` varchar(50) DEFAULT NULL,
  `date_crea` date NOT NULL DEFAULT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_utilisateur`, `prenom_util`, `nom_util`, `phone`, `email`, `adresse`, `username`, `passwords`, `type_compte`, `date_crea`) VALUES
(7, 'Mariama', 'Dao', '78.64.79.84', 'maria@gmail.com', 'Moussabougou', 'maria123', 'musoje', 'Gestionnaire', '2022-06-11'),
(11, 'Sanata', 'Fane', '78.25.69.74', 'sanatfane@yahoo.hr', 'Moussabougou', 'bijou123', 'musoje', 'Gestionnaire', '2022-06-14'),
(12, 'Haoua', 'Colibaly', '78.64.99.17', 'haoucoul@gmail.com', 'Korofina', 'gafou2020', 'musoje', 'Membre', '2022-06-14'),
(13, 'Oumou', 'Dagnoko', '66.85.49.17', 'omou24@gmail.com', 'Kati', 'oumouhs', 'musoje', 'Membre', '2022-06-14'),
(14, 'Aissata', 'Doumbia', '78.33.64.55', 'aissad@gmail.com', 'Wezin', 'codeuse10', 'musoje', 'Membre', '2022-06-14'),
(15, 'Malodo', 'Diall', '98.66.45.77', 'maldo22@yahoo.fr', 'Daoudabougou', 'rihanna', 'musoje', 'Membre', '2022-06-14'),
(16, 'Fatoumata', 'KOnta', '78.99.48.33', 'lobo25@gmail.com', 'Hamdallaye Aci ', 'lobo20', 'musoje', 'Membre', '2022-06-14'),
(17, 'Djeneba ', 'Koumar&eacute;', '68.22.47.98', 'adja25@yahoo.fr', 'Mamaribougou', 'adja223', 'musoje', 'Membre', '2022-06-14'),
(18, 'Fatoumata', 'Cisse', '67.22.46.77', 'fatcisse25@gmail.com', 'Korofina', 'fatciss', 'musoje', 'Membre', '2022-06-14');

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
  MODIFY `id_compte_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `Id_cotisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
  MODIFY `Id_programme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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


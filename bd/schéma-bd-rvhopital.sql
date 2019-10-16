-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 16 Octobre 2019 à 22:02
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rvhopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `identifiant` char(6) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `specialite` char(4) DEFAULT NULL,
  `service` char(4) DEFAULT NULL,
  `motpasse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`identifiant`, `nom`, `prenom`, `sexe`, `date_naiss`, `specialite`, `service`, `motpasse`) VALUES
('med001', 'Diokou', 'cheikhou', 'M', '1996-02-10', 'sp01', 'se01', '1996diokou'),
('med002', 'Diop', 'Badou', 'M', '1997-04-20', 'sp02', 'se04', ''),
('med003', 'ndiaye', 'fatou', 'F', '1992-05-23', 'sp03', 'se03', ''),
('med004', 'gorgui', 'Dieng', 'M', '1994-07-14', 'sp04', 'se02', ''),
('med005', 'dabo', 'khady', 'F', '1998-02-24', 'sp05', 'se02', ''),
('med006', 'sagna', 'bacary', 'M', '1997-01-12', 'sp06', 'se02', ''),
('med007', 'diouf', 'fatou', 'F', '1996-02-20', 'sp07', 'se05', '');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `matricule` char(6) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `maladie` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`matricule`, `nom`, `prenom`, `sexe`, `date_naiss`, `maladie`, `telephone`, `adresse`) VALUES
('pat001', 'mendy', 'alex', 'M', '1994-02-20', 'hypertention arterielle', NULL, NULL),
('pat002', 'seck', 'bineta', 'F', '1995-05-14', 'maladie coronarienne', NULL, NULL),
('pat003', 'fall', 'fatou', 'F', '1994-03-16', 'arret cardiaque', NULL, NULL),
('pat004', 'diop', 'Bineta', 'F', '1995-04-02', 'varicelle (peau)', NULL, NULL),
('pat005', 'thioub', 'sada', 'M', '1997-01-20', 'acné (peau)', NULL, NULL),
('pat006', 'niang', 'mbaye', 'M', '1995-05-06', 'eczema (peau)', NULL, NULL),
('pat007', 'sall', 'mackyss', 'M', '1992-02-03', 'retinopathie diabetique', NULL, NULL),
('pat008', 'ndong', 'salif', 'M', '1998-10-04', 'maladie de Bechet', NULL, NULL),
('pat009', 'dione', 'Mado', 'F', '1989-03-12', 'myopie', NULL, NULL),
('pat010', 'seck', 'mor', 'M', '1992-10-10', 'hépatite A', NULL, NULL),
('pat011', 'sane', 'Malick', 'M', '1993-03-30', 'canncer du pancreas', NULL, NULL),
('pat012', 'abdou', 'ba', 'M', '1992-02-20', 'tumeur hépatiques', NULL, NULL),
('pat013', 'diagne', 'sambou', 'M', '1994-02-12', 'cancer de l\'estomac', NULL, NULL),
('pat014', 'lopy', 'dione', 'M', '1988-10-01', 'cancer du canal anal', NULL, NULL),
('pat015', 'sene', 'adja', 'F', '1990-02-14', 'maladie de cron', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` smallint(6) NOT NULL,
  `secretaire` char(6) NOT NULL,
  `medecin` char(6) NOT NULL,
  `patient` char(6) NOT NULL,
  `date_rv` date NOT NULL,
  `heure` time DEFAULT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `etat` varchar(12) DEFAULT 'non effectué'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `identifiant` char(6) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `service` char(4) DEFAULT NULL,
  `motpasse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaire`
--

INSERT INTO `secretaire` (`identifiant`, `nom`, `prenom`, `sexe`, `date_naiss`, `service`, `motpasse`) VALUES
('emp001', 'sall', 'Fatou', 'F', '1996-02-10', 'se01', '1996diokou'),
('emp002', 'diallo', 'coumba', 'F', '1990-01-20', 'se02', ''),
('emp003', 'diop', 'sona', 'F', '1992-02-24', 'se05', ''),
('emp004', 'sene', 'astou', 'F', '1996-05-10', 'se03', ''),
('emp005', 'diokou', 'aissatou', 'F', '1994-02-08', 'se04', '');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` char(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id_service`, `nom`) VALUES
('se01', 'cardiologie'),
('se02', 'chirurgie'),
('se03', 'Pediatrie'),
('se04', 'dermatologie'),
('se05', 'ophtalmologie');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id_specialite` char(4) NOT NULL,
  `nom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`id_specialite`, `nom`) VALUES
('sp01', 'cardiologie'),
('sp02', 'dermatologie'),
('sp03', 'pediatrie'),
('sp04', 'chirurgie esthétique'),
('sp05', 'chirurgie vasculaire'),
('sp06', 'chirurgie cardiaque'),
('sp07', 'ophtalmologie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `fk_sp` (`specialite`),
  ADD KEY `fk_ser` (`service`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_med` (`medecin`),
  ADD KEY `fk_pat` (`patient`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `fk` (`service`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id_specialite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `fk_ser` FOREIGN KEY (`service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`specialite`) REFERENCES `specialite` (`id_specialite`);

--
-- Contraintes pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD CONSTRAINT `fk` FOREIGN KEY (`service`) REFERENCES `service` (`id_service`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

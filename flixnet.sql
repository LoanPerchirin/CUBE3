-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 fév. 2022 à 15:48
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flixnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `Id_Acteur` int(11) NOT NULL,
  `nomActeur` char(50) NOT NULL,
  `prenomActeur` char(50) NOT NULL,
  `dateNaissanceActeur` date NOT NULL,
  `ageActeur` char(3) NOT NULL,
  `metierActeur` varchar(125) NOT NULL,
  `nationaliteActeur` char(30) NOT NULL,
  `anneeCarriereActeur` char(2) NOT NULL,
  `filmSerieActeur` int(100) NOT NULL,
  `prixActeur` int(3) NOT NULL,
  `biographieActeur` varchar(500) NOT NULL,
  `filmographieActeur` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_Avis` int(11) NOT NULL,
  `dateAvis` char(10) NOT NULL,
  `noteAvis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_Commentaire` int(11) NOT NULL,
  `contenuCommentaire` char(250) NOT NULL,
  `dateCommentaire` char(10) NOT NULL,
  `auteurCommentaire` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `serieFilm` tinyint(1) NOT NULL,
  `awardFilm` varchar(2500) NOT NULL,
  `soundTrack` varchar(2500) NOT NULL,
  `dateFilm` date NOT NULL,
  `tempsFilm` char(15) NOT NULL,
  `newFilm` tinyint(1) NOT NULL,
  `boxOfficeFilm` varchar(2500) NOT NULL,
  `synopsisFilm` mediumtext CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `createurFilm` varchar(1000) NOT NULL,
  `pegiFilm` char(4) NOT NULL,
  `watchlistFilm` tinyint(1) NOT NULL,
  `myFilm` tinyint(1) NOT NULL,
  `titreFilm` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_Utilisateur` int(11) NOT NULL,
  `nomUtilisateur` char(50) NOT NULL,
  `prenomUtilisateur` char(50) NOT NULL,
  `emailUtilisateur` varchar(100) NOT NULL,
  `ageUtilisateur` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`Id_Acteur`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_Avis`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_Commentaire`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_Utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `Id_Acteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_Avis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_Commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

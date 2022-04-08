-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 avr. 2022 à 13:23
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
  `titreFilm` varchar(350) NOT NULL,
  `lienFilm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `serieFilm`, `awardFilm`, `soundTrack`, `dateFilm`, `tempsFilm`, `newFilm`, `boxOfficeFilm`, `synopsisFilm`, `createurFilm`, `pegiFilm`, `watchlistFilm`, `myFilm`, `titreFilm`, `lienFilm`) VALUES
(1, 0, 'Oscar du film le plus nul au monde\r\nOscar des acteurs les plus détestables au monde', 'La Beauté du Monde - Loan Perchirin', '0000-00-00', '2h30', 0, '20 milliards', 'Wayan est un mec gentil mais évidemment ça, ce n\'est qu\'un film', 'Wayan Savary', '18', 0, 0, 'Wayan n\'est pas quelqu\'un de gentil', 'https://www.telerama.fr/sites/tr_master/files/9079626f-f7c9-4a3f-8a7a-2c7e15b4b9e0_2.jpg'),
(2, 0, 'Oscar du film le plus nul au monde\r\nOscar des acteurs les plus détestables au monde', 'Les Brioches Pasquiet, les Pitch là - Loan Perchirin', '0000-00-00', '9h30', 1, '999999999999 milliards (ouais, il a rapporté)', 'Loan est acteur dans ce film, un célèbre développeur qui a fait un Battleroyal', 'Loan Perchirin\r\nIlan Loore\r\nDavid Lansonneur', '12', 0, 0, 'Steve, pas de Minecraft et ni celui d\'Apple non plus', 'https://www.tomsguide.fr/content/uploads/sites/2/2019/10/geant-fer-robot-cinema.jpg'),
(3, 1, 'La série la plus nulle de la terre\r\nOui d\'accord l\'Oscar', 'Mourir fort 4 - La musique', '0000-00-00', '4h00', 0, 'Trop d\'argent', 'Un chauve qui court après sa fille, à un moment, il y a un hélicoptère qui explose mais il survit. Il est fort.', 'Le chauve là', '18', 0, 0, 'Mourir fort 4', 'https://fr.web.img6.acsta.net/medias/nmedia/18/35/46/07/18408708.jpg'),
(4, 1, 'La claque de Will Smith Oscar\r\nBlague sur les chauves Oscar\r\nNetflix supprime tes films Oscar', 'Will of Smith ', '0000-00-00', '2h00', 1, 'argent', 'C\'est Will', 'Will Smith', '18', 1, 0, 'Will Smith', 'https://m.media-amazon.com/images/M/MV5BOGZiY2E3ZGQtNDM3NS00ZGNkLTk1MzctNmZlNjJiM2I1NDQ0XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg'),
(5, 1, 'Oscar d\'un truc\r\n', 'Une soundtrack', '0000-00-00', '3h00', 1, '99 milliards', 'Brutalement mourir 5', 'Le chauve là', '18', 0, 0, 'Brutalement mourir 5', 'https://fr.web.img2.acsta.net/medias/nmedia/18/94/29/36/20417688.jpg'),
(6, 1, 'Oscar de série', 'Soundtrack 03 Hans Zimmer', '0000-00-00', '3h00', 1, '125 millions', 'Synopsis d\'une histoire', 'Kameto\r\nIbai\r\nRubius', '18', 0, 0, 'Les espagnols nuls qui perdent contre les Français', 'https://fr.web.img5.acsta.net/pictures/22/02/16/17/42/3125788.jpg'),
(7, 0, 'Loan nous retient en otage ', 'La prison de Loan (Piano)', '0000-00-00', '3h00', 1, '25 milliards', 'Loan nous force à travailler', 'Loan Perchirin', '12', 0, 0, 'Loan Perchirin', 'https://fr.web.img2.acsta.net/pictures/14/08/21/14/15/233032.jpg'),
(8, 0, 'Oscar d\'un film', 'Piano de la vie - Zimmer Hantz', '0000-00-00', '7h', 1, '299 milliards d\'euros', 'Un film intéressant', 'Créateur de films connus', '16', 1, 0, 'Film très intéressant', 'https://fr.web.img3.acsta.net/medias/nmedia/00/02/54/32/aff2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

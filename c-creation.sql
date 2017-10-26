-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Octobre 2017 à 14:52
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `c-creation`
--

-- --------------------------------------------------------

--
-- Structure de la table `autre_image`
--

CREATE TABLE `autre_image` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `ref` int(11) NOT NULL,
  `produit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `autre_image`
--

INSERT INTO `autre_image` (`id`, `image`, `nom`, `ref`, `produit`) VALUES
(1, 'shapur-or.png', 'doré', 305177, 305077),
(2, 'shapur-cuivre.png\r\n', 'cuivre', 305477, 307077),
(3, 'shapur-argent.png', 'argent', 305777, 305077),
(4, 'quartz-argent.png', 'argent', 226799, 226499);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `coloris` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `dispo` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `categorie` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `ref`, `nom`, `coloris`, `dimension`, `dispo`, `image`, `categorie`) VALUES
(1, 305077, 'shapur', 'Blanc. Existe aussi : Doré, cuivré, argenté', 'Dia: 15cm, Ht : 25-75 cm , 1*E27/60W', 'De suite', 'shapur.png', 'suspension'),
(2, 305771, 'urmia', 'argenté satiné', 'Dia: 30cm, Ht : 37.5-97 cm , 1*E27/60W', 'De suite', 'urmia.png', 'suspension'),
(4, 226499, 'quartz', 'cuivré. Existe aussi: Argenté', 'Dia: 12cm, Ht : 24 cm , 1*E27/60W', 'De suite', 'quartz.png', 'lampe'),
(5, 315901, 'santana', 'noir', 'Dia: 78cm, Ht : 126 cm , 1*E27/60W', 'Semaine 01', 'santana.png', 'lampadaire');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `autre_image`
--
ALTER TABLE `autre_image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `autre_image`
--
ALTER TABLE `autre_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

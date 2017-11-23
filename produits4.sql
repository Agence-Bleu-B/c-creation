-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Novembre 2017 à 11:04
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

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
  `categorie` text NOT NULL,
  `matiere` text NOT NULL,
  `nblumiere` text NOT NULL,
  `ampoule` text NOT NULL,
  `culot` text NOT NULL,
  `puiss` text NOT NULL,
  `tension` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `ref`, `nom`, `coloris`, `dimension`, `dispo`, `image`, `categorie`, `matiere`, `nblumiere`, `ampoule`, `culot`, `puiss`, `tension`) VALUES
(7, 307903, 'Blast', 'Noir existe aussi : cuivre', 'Dia: 32cm, Ht : 15-75 cm , 1*E27/60W', 'Semaine 49', 'blast.png', 'suspension', '', '', '', '', '', ''),
(2, 305771, 'urmia', 'argenté satiné', 'Dia: 30cm, Ht : 37.5-97 cm , 1*E27/60W', 'De suite', 'urmia.png', 'suspension', '', '', '', '', '', ''),
(4, 226499, 'quartz', 'cuivré. Existe aussi: Argenté', 'Dia: 12cm, Ht : 24 cm , 1*E27/60W', 'De suite', 'quartz.png', 'lampe', '', '', '', '', '', ''),
(5, 315901, 'santana', 'noir', 'Dia: 78cm, Ht : 126 cm , 1*E27/60W', 'Semaine 01', 'santana.png', 'lampadaire', '', '', '', '', '', ''),
(8, 309146, 'Nold', 'Rouille Existe aussi : zinc blanc', 'Dia: 30.5cm, Ht : 12-100 cm , 1*E27/60W', 'Semaine 49', 'Nold.png', 'suspension', '', '', '', '', '', ''),
(9, 306478, 'Filiane', 'Noir & cuivre Existe aussi : Cuivré, Argenté', 'Dia: 25.5cm, Ht : 27-87 cm , 1*E27/60W', 'De suite', 'Filiane.png', 'suspension', '', '', '', '', '', ''),
(10, 820655, 'Ambrea XXL', '2700K 350 LM', 'Ht : 178mm , 27/4W', 'semaine 45', 'Ambreaxxl1.png', 'ampoule', '', '', '', '', '', ''),
(11, 304900, 'Belem', 'Noir mat', 'Long: 78cm, Larg: 30 cm, Ht : 27-87 cm , 4*E27/40W', 'semaine 51', 'Belem.png', 'suspension', '', '', '', '', '', ''),
(12, 226460, 'Mist', 'Cuivre', 'Larg:26.5/AJ 15cm, prof:26.5cm, ht:24cm, 1*E14/40W', 'Semaine 01', 'Mist.png', 'lampe', '', '', '', '', '', ''),
(13, 223987, 'Lodi', 'Noir mat-marbre blanc Ou Cuivré-marbre blanc', 'Dia: 19.5cm, Ht : 31.5 cm , 1*E27/60W', 'Semaine 49', 'Lodi.png', 'lampe', '', '', '', '', '', ''),
(14, 309759, 'Told', 'Gris anthracique', 'Dia: 49cm, Ht : 26-86 cm , 1*E27/60W', 'Semaine 49', 'Told.png', 'suspension', '', '', '', '', '', ''),
(15, 308144, 'Danwood', 'Noir mat Ou Gris foncé, blanc mat, Nickel', 'Dia: 20cm, Ht : 18-78 cm , 1*E27/60W', 'semaine 40', 'Danwood.png', 'suspension', '', '', '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 11 sep. 2017 à 12:21
-- Version du serveur :  10.0.30-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`, `date`) VALUES
(18, 'Alan', 'Bonjour !', '2017-09-11 14:12:07'),
(19, 'Mourad', 'Salut !', '2017-09-11 14:12:14'),
(20, 'Mehdi', 'Bonjoir', '2017-09-11 14:12:22'),
(21, 'Fred', 'Bonjourno', '2017-09-11 14:12:28'),
(22, 'Jordan', 'Hellow', '2017-09-11 14:12:34'),
(23, 'Alan', 'Yellow', '2017-09-11 14:12:39'),
(24, 'Admin', 'Fermez la ou je vous vire de mon chat !', '2017-09-11 14:12:57'),
(25, 'Mourad', 'Ok patron !', '2017-09-11 14:13:04'),
(26, 'Mehdi', 'Je porte plainte contre toi si tu fais ça @Admin', '2017-09-11 14:13:20'),
(27, 'Jordan', 'N\'importe quoi', '2017-09-11 14:13:27'),
(28, 'Admin', '@Mehdi J\'ai tout les droits', '2017-09-11 14:13:40'),
(29, 'Alan', 'Ecoutez le chef !', '2017-09-11 14:13:49'),
(30, 'Fred', 'C\'est moi le chef et personne d\'autres', '2017-09-11 14:14:00'),
(31, 'Alan', '!!!!!!!!', '2017-09-11 14:14:08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

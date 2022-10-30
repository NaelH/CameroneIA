-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 30 oct. 2022 à 16:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cameroneia`
--

-- --------------------------------------------------------

--
-- Structure de la table `knows`
--

CREATE TABLE `knows` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `awnser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `knows`
--

INSERT INTO `knows` (`id`, `question`, `awnser`) VALUES
(1, 'Bonjour', 'Bonjour :)'),
(2, 'Hello', 'Hello :)'),
(4, 'Comment tu vas ?', 'Je vais bien :)'),
(7, 'How are you ?', 'I\'m fine :)'),
(8, 'Que fait-tu ?', 'Jeeeee Biiiip Booouuupp bouuuup :)');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `knows`
--
ALTER TABLE `knows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `knows`
--
ALTER TABLE `knows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

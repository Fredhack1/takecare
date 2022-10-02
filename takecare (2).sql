-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 30 sep. 2022 à 18:23
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `takecare`
--

-- --------------------------------------------------------

--
-- Structure de la table `assistance`
--

CREATE TABLE `assistance` (
  `id_assiatance` int(5) NOT NULL,
  `type_assistane` varchar(15) NOT NULL,
  `date_assistance` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `typeutilisateur` varchar(20) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `pseudo`, `email`, `typeutilisateur`, `motdepasse`) VALUES
(3, 'Brandon', 'brandondjiemo@gmail.com', 'technicien', '13085a63a2b3e4beb7ab10ee395aefe4'),
(4, 'admin', 'brandondjiemo@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(15, 'BarnabÃ©', 'brandondjiemo@gmail.com', 'user', '9d6db80a2fa5979e9546396d298d89fc'),
(16, 'Tagne', 'brandondjiemo@gmail.com', 'Client', '5d7b9ebd01b0f88889618ed184497ba9'),
(17, 'bamba', 'brandondjiemo@gmail.com', 'user', 'e332a76c29654fcb7f6e6b31ced090c7'),
(20, 'yvan', 'brandondjiemo@gmail.com', 'technicien', '13085a63a2b3e4beb7ab10ee395aefe4'),
(22, 'bob', 'brandondjiemo@gmail.com', 'user', '0a5b3913cbc9a9092311630e869b4442'),
(23, 'boss', 'brandondjiemo@gmail.com', 'user', '0a5b3913cbc9a9092311630e869b4442'),
(25, 'freddy', 'freddy@gmail.com', 'Technicien', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Blaise', 'blaise@gmail.com', 'Client', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'abada', 'abada@takecare.com', 'Technicien', 'ab4f63f9ac65152575886860dde480a1'),
(28, 'Fredsack', 'Fredjack@gmail.com', 'Technicien', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'Brandon123', 'brandondjiemo@gmail.com', 'Client', '83ea007bfdd589f29b820552b3f94260'),
(30, 'sokÃ©', 'blaise@gmail.com', 'user', 'cdaa6716746fb685734abde87f1b08ad'),
(31, 'toto', 'toto@gmail.com', 'user', 'a384b6463fc216a5f8ecb6670f86456a'),
(32, 'Karelle', 'karelle@gmail.com', 'Technicien', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 'tsanga', 'tsanga@takecare.cm', 'user', 'cdaa6716746fb685734abde87f1b08ad'),
(34, 'TechniTest', 'technitest@takecare.cm', 'Technicien', 'e10adc3949ba59abbe56e057f20f883e'),
(35, 'romual', 'romuald@takecare.com', 'Technicien', 'cdaa6716746fb685734abde87f1b08ad'),
(36, 'romy', 'romy@gmail.cm', 'Technicien', 'cdaa6716746fb685734abde87f1b08ad'),
(37, 'Fredhack', 'mirdo2co@gmail.com', 'Client', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `message`, `id_destinataire`, `date`, `heure`) VALUES
(1, 'Bonjour', 37, '2022-09-30', '08:34'),
(2, 'J\'ai un soucis', 37, '2022-09-30', '08:37'),
(3, 'Bonjour c\'est quoi le soucis?', 28, '2022-09-30', '11:19');

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

CREATE TABLE `panne` (
  `id_panne` int(5) NOT NULL,
  `type_panne` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date_panne` date NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panne`
--

INSERT INTO `panne` (`id_panne`, `type_panne`, `description`, `date_panne`, `id_client`) VALUES
(1, 'Panne materielle', '', '2022-09-29', 33),
(2, 'Panne Logicielle', 'je dÃ©cris ma panne', '2022-09-30', 37);

-- --------------------------------------------------------

--
-- Structure de la table `revision`
--

CREATE TABLE `revision` (
  `id_revision` int(5) NOT NULL,
  `type_revision` varchar(20) CHARACTER SET latin1 NOT NULL,
  `intitule` text CHARACTER SET latin1 NOT NULL,
  `date_revision` date NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `revision`
--

INSERT INTO `revision` (`id_revision`, `type_revision`, `intitule`, `date_revision`, `id_client`) VALUES
(3, 'Revision specifie', '', '2022-09-29', 33),
(6, 'Revision complete', '', '2022-09-30', 37),
(7, 'Revision specifiÃ©', 'Je spÃ©cifie', '2022-09-30', 26);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id_assiatance`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panne`
--
ALTER TABLE `panne`
  ADD PRIMARY KEY (`id_panne`);

--
-- Index pour la table `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`id_revision`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `id_assiatance` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `panne`
--
ALTER TABLE `panne`
  MODIFY `id_panne` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `revision`
--
ALTER TABLE `revision`
  MODIFY `id_revision` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

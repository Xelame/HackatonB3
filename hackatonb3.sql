-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 06 oct. 2023 à 07:31
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hackatonb3`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231005090646', '2023-10-05 09:08:03', 267),
('DoctrineMigrations\\Version20231005125037', '2023-10-05 12:50:44', 182),
('DoctrineMigrations\\Version20231005140745', '2023-10-05 14:07:58', 151),
('DoctrineMigrations\\Version20231005222303', '2023-10-05 22:23:19', 263);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `label`) VALUES
(1, 'Closed'),
(2, 'Key Needed'),
(3, 'Open');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE `horaire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `begin_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `etat_id` int(11) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `etat_id`, `email`, `roles`, `password`) VALUES
(4, NULL, 'admin@test.com', '[\"ROLE_ADMIN\"]', '$2y$13$satyFvaCmBuWvxx9SDZkBeSi/QQ9Mrme0iVc4kBkkDZsw6Z1.Quvm'),
(7, 3, '304@test.com', '[\"ROLE_TABLET\"]', '$2y$13$s9JiNJr4IJrcWVpA.9gtmO6whD5iI936rz1Q.1tcv8WUGTczRSMpy'),
(8, 3, '306@test.com', '[\"ROLE_TABLET\"]', '$2y$13$9EUWvKvzw0yWHfo2wHBfFuGEpFlcoko.HGYPjrCuTtaIrRsg07LGq'),
(9, 3, '308@test.com', '[\"ROLE_TABLET\"]', '$2y$13$DCbUoLd5TdLCGhpA0CJy3.B4vISOIE.k9TvqNvaTTwembBNnY2XSa'),
(10, 3, '206@gmail.com', '[\"ROLE_TABLET\"]', '$2y$13$vhVsjD0LhnYUdA.XFIisgO9BAiVBElKemjeCP.67E6PTb0yV/Efhe'),
(11, 3, '205@gmail.com', '[\"ROLE_TABLET\"]', '$2y$13$.jyGXyPwqzs5bv6h98b07OdF48v5QV7YRfyXiqgDIJ2hRgU5vBb8a'),
(12, 3, '301@test.com', '[\"ROLE_TABLET\"]', '$2y$13$JwpGzO.06Xe79pXZmm/H9e1TLqhQV/YqDV35J3HU5Z7bbHjzSVIV2'),
(13, 3, '302@test.com', '[\"ROLE_TABLET\"]', '$2y$13$c9wSbUWdGTjpyJu4TrKoI.ZoedxrgjmQG7iwLKdWa4rxLeAbcc4dy'),
(14, 3, '303@test.com', '[\"ROLE_TABLET\"]', '$2y$13$WqeVLTOpMpqkyu.1sTSeZOQ3FdGMonaoyGH1BNRSOnTE3/piR1.S6'),
(15, 3, '101@test.com', '[\"ROLE_TABLET\"]', '$2y$13$JAZ8OD7FGmj6rOSnqkzTEOMCXpDCLCm9ZhcUAjOx7rsIw8YXdqLlu'),
(16, 3, '102@test.com', '[\"ROLE_TABLET\"]', '$2y$13$F2oV68J6v59WpzkrM8cOeeMdXp1YSNnYGIsrdB1.pDJI.PYTS9tIe'),
(17, 3, '103@test.com', '[\"ROLE_TABLET\"]', '$2y$13$HAW3fNFwzVfFm57D93dVnuRizxUNUco3JlC/Kkq6umr.i3HX2UQeC'),
(18, 3, '104@test.com', '[\"ROLE_TABLET\"]', '$2y$13$Eu/11Rcx1luJ8QMHDah.wOVtT34btmbS065uwEaHzEI6nU1TR96mG'),
(19, 3, '201@test.com', '[\"ROLE_TABLET\"]', '$2y$13$jjmW0twwcWrOlztlPPLaeuhs2MpmUh/WKYLaDGPYJmca.AIz5HoBG'),
(20, 3, '202@test.com', '[\"ROLE_TABLET\"]', '$2y$13$8G.LzF7dV2gUk5/unyB9gOzgcsrUQ.G9VcLERv80I8pvXHP6b17Ay'),
(21, 3, '203@test.com', '[\"ROLE_TABLET\"]', '$2y$13$/kHTNmE.GHzM6Mw7Qr2TxuwlA/PFtlCEObGd80w7HpVCDSgCrKj5y'),
(22, 3, '204@test.com', '[\"ROLE_TABLET\"]', '$2y$13$/xdZ97rugYMs/GVOm4qcK.c8Q5EjVJzUy0nE51dJLlyUeaL/Qda1q'),
(23, 3, '305@test.com', '[\"ROLE_TABLET\"]', '$2y$13$4OT5Mgf6rpzX8EhzuqjcIufVkGpyY9JkojFTBFwWMXkRTPw3JKHqm'),
(24, 3, '307@test.com', '[\"ROLE_TABLET\"]', '$2y$13$G5YYVVD2Rv7ik2Ic5qdtJ.VD2hjnJpai7Xvg.PhVb90KUZc5pMKW.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BBC83DB6A76ED395` (`user_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D649D5E86FF` (`etat_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `FK_BBC83DB6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

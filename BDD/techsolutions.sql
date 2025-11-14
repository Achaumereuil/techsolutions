-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 14 nov. 2025 à 08:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `techsolutions`
--

-- --------------------------------------------------------

--
-- Structure de la table `components`
--

CREATE TABLE `components` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `components`
--

INSERT INTO `components` (`id`, `name`, `description`) VALUES
(1, 'AMD Ryzen 7 7800X3D (4.2 GHz / 5.0 GHz) ', 'cpu001'),
(2, 'AMD Ryzen 7 9800X3D (4.7 GHz / 5.2 GHz)', 'cpu002'),
(3, 'AMD Ryzen 9 9950X3D (4.3 GHz / 5.7 GHz)', 'cpu003'),
(4, 'AMD Ryzen 7 9700X (3.8 GHz / 5.5 GHz)', 'cpu004'),
(5, 'AMD Ryzen 9 9900X (4.4 GHz / 5.6 GHz)', 'cpu005'),
(6, 'Intel Core i9-14900K (3.2 GHz / 5.8 GHz)', 'cpu006'),
(7, 'Intel Core i5-14600K (3.5 GHz / 5.3 GHz) ', 'cpu007'),
(8, 'Intel Core Ultra 7 265K (3.9 GHz / 5.5 GHz)', 'cpu008'),
(9, 'Intel Core Ultra 9 285K (2.5 GHz / 5.6 GHz)', 'cpu009'),
(10, 'AMD Ryzen Threadripper PRO 9955WX (4.5 GHz / 5.4 GHz)', 'cpu010'),
(11, 'Fractal Design Pop XL Silent Solid (Noir)', 'boitier001'),
(12, 'NZXT H6 Flow Noir', 'boitier002'),
(13, 'Corsair Frame 4000D (Noir)', 'boitier003'),
(14, 'Corsair Frame 5000D RS (Noir)', 'boitier004'),
(15, 'Textorm TB1', 'boitier005'),
(16, 'Fractal Design North Charcoal Black TG Dark', 'boitier006'),
(17, 'be quiet! Pure Base 500 (Noir)', 'boitier007'),
(18, 'Antec P10C', 'boitier008'),
(19, 'NZXT H5 Flow Noir (2024)', 'boitier009'),
(20, 'Fractal Design Meshify C (Noir)', 'boitier010'),
(21, 'MSI PRO B650-S WIFI', 'CM001'),
(22, 'Gigabyte B650 EAGLE AX', 'CM002'),
(23, 'MSI PRO B850-P WIFI', 'CM003'),
(24, 'MSI PRO X870E-P WIFI', 'CM004'),
(25, 'ASUS TUF GAMING Z890-PRO WIFI', 'CM005'),
(26, 'MSI PRO B860-P WIFI', 'CM006'),
(27, 'Gigabyte X870E AORUS PRO', 'CM007'),
(28, 'ASUS PRIME GeForce RTX 5080 16GB GDDR7 OC Edition', 'GPU001'),
(29, 'Gigabyte GeForce RTX 5050 WINDFORCE OC 8G', 'GPU002'),
(30, 'ASUS Dual GeForce RTX 5060 OC Edition 8GB', 'GPU003'),
(31, 'ASRock AMD Radeon RX 7700 XT Challenger 12GB OC', 'GPU004'),
(32, 'Gigabyte Radeon RX 9060 XT GAMING OC 16G', 'GPU005'),
(33, 'ASRock AMD Radeon RX 9070 XT Steel Legend 16GB', 'GPU006'),
(34, 'Sapphire PULSE AMD Radeon RX 7800 XT 16GB', 'GPU007'),
(35, 'ASRock Intel Arc B580 Challenger 12GB OC', 'GPU008'),
(36, 'ASRock Intel Arc A750 Challenger SE 8GB OC', 'GPU009'),
(37, 'ASUS TUF Gaming GeForce RTX 5070 12GB GDDR7 ', 'GPU010'),
(38, 'Kingston FURY Beast 32 Go (2 x 16 Go) DDR5 6000 MHz CL30', 'RAM001'),
(39, 'G.Skill Flare X5 Series Low Profile 32 Go (2x 16 Go) DDR5 6000 MHz CL30', 'RAM002'),
(40, 'Corsair Vengeance DDR5 32 Go (2 x 16 Go) 6000 MHz CL36 - Noir', 'RAM003'),
(41, 'Kingston FURY Beast 16 Go (2 x 8 Go) DDR5 5600 MHz CL36', 'RAM004'),
(42, 'Textorm 32 Go (2x 16 Go) DDR5 6000 MHz CL36', 'RAM005'),
(43, 'Crucial Pro DDR5 Overclocking 32 Go (2 x 16 Go) 6000 MHz CL36', 'RAM006'),
(44, 'Corsair Dominator Platinum DDR5 RGB 32 Go (2 x 16 Go) 6000 MHz CL36', 'RAM007'),
(45, 'G.Skill Trident Z5 Royal Neo 32 Go (2 x 16 Go) DDR5 6000 MHz CL28 - Argent', 'RAM008'),
(46, 'G.Skill Trident Z5 Neo RGB Series 32 Go (2x 16 Go) DDR5 6000 MHz CL30', 'RAM009'),
(47, 'Kingston FURY Beast RGB 32 Go (2 x 16 Go) DDR5 5600 MHz CL36 - Blanc', 'RAM010'),
(48, 'Noctua NH-D15 Chromax Black', 'REF001'),
(49, 'Thermalright Peerless Assassin 120 SE BLACK ARGB', 'REF002'),
(50, 'Corsair Nautilus 360 RS (Noir)', 'REF003'),
(51, 'be quiet! Dark Rock 5', 'REF004'),
(52, 'Noctua NH-U12S', 'REF005'),
(53, 'Thermalright Royal Knight 120', 'REF006'),
(54, 'Noctua NH-U12A Chromax Black', 'REF007'),
(55, 'be quiet! Pure Loop 3 LX 360 mm', 'REF008'),
(56, 'Cooler Master MasterLiquid 240 Atmos II LCD ARGB Noir', 'REF009'),
(57, 'MSI MAG CORELIQUID A13 240 Black', 'REF010'),
(58, 'MSI MAG A650GL', 'ALIM001'),
(59, 'MSI MAG A850GL PCIE5', 'ALIM002'),
(60, 'MSI MAG A1250GL PCIE5', 'ALIM003'),
(61, 'ASUS ROG Strix 1200W Platinum', 'ALIM004'),
(62, 'be quiet! Pure Power 13 M 850W 80PLUS Gold', 'ALIM005'),
(63, 'Corsair RM1000e (2025)', 'ALIM006'),
(64, 'Fox Spirit HG 750 80PLUS Gold', 'ALIM007'),
(65, 'be quiet! Power Zone 2 850W 80PLUS Platinum', 'ALIM008'),
(66, 'be quiet! Pure Power 13 M 1000W 80PLUS Gold', 'ALIM009'),
(67, 'Cooler Master V SFX Gold 850 Full Modular ATX 3.1', 'ALIM010'),
(68, 'name', 'description'),
(69, 'name', 'description');

-- --------------------------------------------------------

--
-- Structure de la table `pcs`
--

CREATE TABLE `pcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pcs`
--

INSERT INTO `pcs` (`id`, `name`, `image_url`, `price`) VALUES
(1, 'TechSolutions Core', 'https://www.grosbill.com/images/pc-gamer-universgamer.png', 549.00),
(2, 'TechSolutions Gamer', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(3, 'TechSolutions Creator', 'https://i.pinimg.com/736x/43/9f/7a/439f7a5e8d4029ee057ce2dd3e17f8f2.jpg', 999.00),
(4, 'PC design UX/UI\r\n', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(5, 'Développeur logiciel\r\n', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(6, 'Gestion Infrastructures, systèmes et réseaux\r\n', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(7, 'Marketing et Vente', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(8, 'Support client', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00),
(9, 'Support client 2', 'https://i.ytimg.com/vi/SSIXFufMaVg/maxresdefault.jpg', 779.00);

-- --------------------------------------------------------

--
-- Structure de la table `pc_components`
--

CREATE TABLE `pc_components` (
  `pc_id` int(10) UNSIGNED NOT NULL,
  `component_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pc_components`
--

INSERT INTO `pc_components` (`pc_id`, `component_id`) VALUES
(4, 1),
(4, 27);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pcs`
--
ALTER TABLE `pcs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pc_components`
--
ALTER TABLE `pc_components`
  ADD PRIMARY KEY (`pc_id`,`component_id`),
  ADD KEY `component_id` (`component_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `pcs`
--
ALTER TABLE `pcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pc_components`
--
ALTER TABLE `pc_components`
  ADD CONSTRAINT `pc_components_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `pcs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_components_ibfk_2` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

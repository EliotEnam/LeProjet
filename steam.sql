-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 14 Janvier 2025 à 15:41
-- Version du serveur :  5.6.20-log
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `steam`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` bigint(20) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbJeux` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `image`, `nom`, `nbJeux`, `created_at`, `updated_at`) VALUES
(1, 'https://gameranx.com/wp-content/uploads/2020/03/CoDModernWarfareWarzone3.jpg', 'Action', 10, NULL, NULL),
(2, 'https://th.bing.com/th/id/R.e72e4fc0d9aec95fdcb6b1251bdaa292?rik=WPh3h7fSXoU%2fAA&pid=ImgRaw&r=0', 'Aventure', 3, NULL, NULL),
(3, 'https://www.gamersdecide.com/sites/default/files/authors/u141518/preview_screenshot2_119802.jpg', 'RPG', 7, NULL, NULL),
(4, 'https://www.videogameschronicle.com/files/2023/07/yx01x30xvvi91.jpg', 'Course', 5, NULL, NULL),
(5, 'https://www.pcgamesn.com/wp-content/uploads/2021/05/best-sports-games-1.jpg', 'Sport', 8, NULL, NULL),
(6, 'https://media.wired.co.uk/photos/606dae60f19707fe1aef38f4/16:9/w_1280,c_limit/CivilizationVI_screenshot_announce1.jpg', 'Stratégie', 4, NULL, NULL),
(7, 'https://res.cloudinary.com/lmn/image/upload/e_sharpen:100/f_auto,fl_lossy,q_auto/v1/gameskinnyc/e/v/i/evil-within-gamescom-screen-9d077.jpg', 'Horreur', 2, NULL, NULL),
(8, 'https://images-na.ssl-images-amazon.com/images/I/91yOcAIm-oL.png', 'Puzzle', 6, NULL, NULL),
(9, 'https://www.kakuchopurei.com/wp-content/uploads/2023/06/Microsoft-Flight-Simulator-2024.jpg', 'Simulation', 9, NULL, NULL),
(10, 'https://th.bing.com/th/id/OIP.HaS_dgBUSZGzog06Iz1gtwHaEK?rs=1&pid=ImgDetMain', 'MMORPG', 12, NULL, NULL),
(11, 'https://images4.alphacoders.com/174/174896.jpg', 'Shooter', 15, NULL, NULL),
(12, 'https://www.gematsu.com/wp-content/uploads/2023/12/Dragon-Ball-Sparking-ZERO_2023_12-07-23_003-1440x810.jpg', 'Combat', 7, NULL, NULL),
(13, 'https://th.bing.com/th/id/R.4fceff8ad70577d21380a8429bfe9c87?rik=7BKryMfRBgFuVw&pid=ImgRaw&r=0', 'Plateforme', 5, NULL, NULL),
(14, 'https://diamondlobby.com/wp-content/uploads/2022/07/Party-Panic.jpg', 'Party Game', 4, NULL, NULL),
(15, 'https://th.bing.com/th/id/R.0a38e437c41498ea74c2193297eee0e4?rik=Nud7Npmqqx6OlQ&riu=http%3a%2f%2fcdn.wccftech.com%2fwp-content%2fuploads%2f2015%2f02%2fGrand-Theft-Auto-V-15.jpg&ehk=sRvZ%2bZBlkpf9t3MCmXjwh9CMTwFURuEO2TbG%2bKWwQ%2fQ%3d&risl=1&pid=ImgRaw&r=0', 'Monde-ouvert', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE IF NOT EXISTS `equipes` (
`id` bigint(20) unsigned NOT NULL,
  `numEquipe` int(11) NOT NULL DEFAULT '2',
  `nbMembres` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `equipes`
--

INSERT INTO `equipes` (`id`, `numEquipe`, `nbMembres`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, NULL),
(2, 1, 9, NULL, NULL),
(3, 5, 1, NULL, NULL),
(4, 1, 0, '2024-12-18 00:32:12', '2024-12-18 00:32:12');

-- --------------------------------------------------------

--
-- Structure de la table `equipe_usager`
--

CREATE TABLE IF NOT EXISTS `equipe_usager` (
`id` bigint(20) unsigned NOT NULL,
  `usager_id` bigint(20) unsigned NOT NULL,
  `equipe_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `equipe_usager`
--

INSERT INTO `equipe_usager` (`id`, `usager_id`, `equipe_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 6, 3, NULL, NULL),
(8, 7, 3, NULL, NULL),
(9, 8, 3, NULL, NULL),
(10, 9, 3, NULL, NULL),
(11, 10, 2, NULL, NULL),
(12, 11, 1, '2024-12-17 23:51:49', '2024-12-17 23:51:49'),
(13, 11, 2, '2024-12-17 23:51:53', '2024-12-17 23:51:53'),
(14, 11, 3, '2024-12-17 23:51:58', '2024-12-17 23:51:58'),
(15, 3, 4, '2024-12-18 00:32:17', '2024-12-18 00:32:17');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
`id` bigint(20) unsigned NOT NULL,
  `nomCours` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbEtud` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nomCours`, `nbEtud`, `created_at`, `updated_at`) VALUES
(1, 'A2024_gr003_dev_web', 30, NULL, NULL),
(2, 'H2024_gr002_dev1', 21, NULL, NULL),
(3, 'H2023_gr001_reseau', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_usager`
--

CREATE TABLE IF NOT EXISTS `groupe_usager` (
`id` bigint(20) unsigned NOT NULL,
  `groupe_id` bigint(20) unsigned NOT NULL,
  `usager_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE IF NOT EXISTS `jeux` (
`id` bigint(20) unsigned NOT NULL,
  `equipe_id` bigint(20) unsigned NOT NULL,
  `categorie_id` bigint(20) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platforms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `cover` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbTelech` int(11) NOT NULL,
  `note` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`id`, `equipe_id`, `categorie_id`, `description`, `titre`, `tags`, `platforms`, `annee`, `cover`, `nbTelech`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 'Grand Theft Auto V vous plonge dans un monde ouvert vaste et dynamique où les joueurs peuvent alterner entre trois personnages principaux : Michael, un ancien braqueur de banque en quête de rédemption, Trevor, un psychopathe impitoyable, et Franklin, un jeune homme ambitieux aspirant à sortir des quartiers difficiles. L''action se déroule dans la ville fictive de Los Santos, une réplique de Los Angeles, et ses environs. Entre courses effrénées, braquages, et missions dangereuses, GTA V offre une expérience immersive où la liberté d''action est totale.', 'GTA V', 'monde-ouvert, action, aventure, course, crime', 'PC, PS3, PS4, PS5, Xbox360, XboxOne, Xbox Series', 2013, 'gta5.jpg', 300000, 3.9, NULL, '2025-01-14 20:32:01'),
(2, 1, 15, 'Grand Theft Auto VI, attendu comme le prochain chef-d''œuvre de Rockstar, nous plonge dans une toute nouvelle aventure où les joueurs pourront explorer la ville de Vice City et ses environs, inspirée de Miami. Le jeu promet un scénario captivant avec une narration dynamique et plusieurs personnages jouables, chacun ayant ses propres motivations. Entre l''action, les poursuites effrénées, et les choix moraux, GTA VI risque de redéfinir le genre des mondes ouverts et des jeux d''action.', 'GTA VI', 'monde-ouvert, action, crime, aventure', 'PS5, Xbox Series', 2025, 'gta6.webp', 30000, 4.95, NULL, '2024-12-18 00:29:04'),
(3, 1, 2, 'Uncharted 4 : A Thief’s End est l''ultime aventure de Nathan Drake, un chasseur de trésors emblématique. Le jeu suit Nathan dans sa quête pour retrouver un trésor mythique, alors qu''il se retrouve confronté à son passé et à des adversaires redoutables. Avec des graphismes impressionnants, un gameplay fluide, et des énigmes complexes, Uncharted 4 offre une aventure cinématographique où chaque mouvement et chaque décision compte, tout en offrant une réflexion profonde sur l''amour, l''amitié et la rédemption.', 'Uncharted 45', 'action, aventure, exploration', 'PC, PS4, PS5', 2016, 'Uncharted_45-6786839c1bae1.jpg', 260, 4.4, NULL, '2025-01-14 20:32:44'),
(4, 1, 7, 'The Last of Us Part II est la suite poignante de l''histoire d''Ellie et de Joel, deux survivants dans un monde dévasté par une pandémie. Le jeu explore des thèmes profonds de vengeance, de rédemption et de la nature humaine dans un contexte apocalyptique. Avec une narration riche et un gameplay qui met en avant la furtivité et l''interaction avec l''environnement, The Last of Us 2 est une expérience émotionnelle qui laisse une impression durable sur le joueur.', 'The Last of Us 2', 'action, drame, survie, narration', 'PS4, PS5', 2020, 'tlou2.avif', 416, 4.9, NULL, NULL),
(5, 1, 11, 'Spec Ops: The Line est un jeu de tir tactique à la troisième personne qui plonge le joueur au cœur de Dubaï, une ville abandonnée après une catastrophe. L''histoire suit un groupe d''élite de soldats qui partent en mission de sauvetage, mais découvrent rapidement que la situation est bien plus complexe et sombre qu''ils ne l''avaient imaginé. Avec des thèmes de guerre psychologique et de dilemmes moraux, Spec Ops offre une perspective unique sur le genre, remettant en question la notion de héros et de victime.', 'Spec Ops: The Line', 'action, stratégie, guerre', 'PC, PS3, Xbox360', 2012, 'specops.jpg', 1500, 4.1, NULL, NULL),
(6, 1, 7, 'Resident Evil 2 remake est une version modernisée de l''un des jeux de survie-horreur les plus emblématiques. Le joueur prend le contrôle de Leon Kennedy ou Claire Redfield, deux survivants du désastre de Raccoon City, où un virus a transformé la population en zombies et autres créatures monstrueuses. Le jeu combine des éléments de survie, de puzzles, et de combats intenses, avec des graphismes réimaginés et une atmosphère terrifiante, offrant une expérience de jeu palpitante et immersive.', 'Resident Evil 2', 'survival, horreur, action', 'PC, PS4, PS5, XboxOne, Xbox Series', 2019, 'resevil2.jpg', 360, 4.45, NULL, '2024-12-17 23:42:19'),
(7, 1, 4, 'Need For Speed: Most Wanted est un jeu de course palpitant où le joueur doit se mesurer à une série de concurrents dans des courses effrénées à travers diverses villes. Avec un accent mis sur la vitesse, les poursuites policières et la personnalisation des véhicules, le jeu combine des éléments de liberté et de stratégie, en permettant aux joueurs de défier les forces de l''ordre et de devenir le conducteur le plus recherché. Une aventure à haute vitesse qui offre un gameplay excitant et sans fin.', 'Need for Speed: Most Wanted', 'course, action, arcade', 'PC, PS2, PS3, GameCube, Xbox, Xbox360', 2005, 'mw5.jpg', 2500, 5, NULL, NULL),
(11, 2, 2, 'jhfwkhdgwqhjsgdsqkjgd', 'test', 'test', 'test', 2025, 'test-6786845927ea9.jpg', 0, 3.75, '2025-01-14 20:35:53', '2025-01-14 20:36:36'),
(9, 1, 11, 'Battlefield 3 est un jeu de tir militaire à la première personne qui plonge les joueurs dans des combats de grande envergure à travers le monde. Le jeu propose des batailles épiques avec une large variété de véhicules et d''armements, allant des tanks aux hélicoptères, dans des environnements destructibles et dynamiques. Avec un mode multijoueur intense et un mode solo captivant, Battlefield 3 se distingue par son gameplay stratégique et sa représentation réaliste des conflits modernes.', 'Battlefield 3', 'action, guerre, tir', 'PC, PS4, PS5, XboxOne, Xbox Series', 2011, 'bf3.jpg', 50, 4.2, NULL, NULL),
(10, 2, 12, 'Sparking Zero est un jeu de combat intense inspiré de l''univers de Dragon Ball. Le joueur prend le contrôle de personnages emblématiques de la série, chacun possédant ses propres capacités et techniques dévastatrices. Dans une série de combats intenses, le jeu propose des graphismes spectaculaires et un système de combat fluide où les joueurs peuvent exploiter des attaques spéciales et des transformations pour vaincre leurs ennemis. Une expérience de jeu épique pour les fans de la franchise Dragon Ball.', 'Sparking Zero', 'action, combat, anime', 'PC, PS5, Xbox Series', 2024, 'sparkingZero.jpg', 100, 4.6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `jeu_usager`
--

CREATE TABLE IF NOT EXISTS `jeu_usager` (
`id` bigint(20) unsigned NOT NULL,
  `usager_id` bigint(20) unsigned NOT NULL,
  `jeu_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
`id` bigint(20) unsigned NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeu_id` bigint(20) unsigned NOT NULL,
  `im1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `im2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `im3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `im4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `cover`, `jeu_id`, `im1`, `im2`, `im3`, `im4`, `video`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, NULL, 'gta52.jpeg', 'gta52.jpeg', NULL, NULL, NULL, NULL),
(2, NULL, 2, NULL, 'gta61jpg.jpg', 'gta62.jpg', NULL, NULL, NULL, NULL),
(3, NULL, 3, NULL, 'uncha1.jpg', 'uncha3.jpg', NULL, NULL, NULL, NULL),
(4, NULL, 4, NULL, 'tlou21.jpg', 'tlou22.jpeg', NULL, NULL, NULL, NULL),
(5, NULL, 5, NULL, 'spo1.jpeg', 'spo2.jpeg', NULL, NULL, NULL, NULL),
(6, NULL, 6, NULL, 're1.jpeg', 're2.webp', NULL, NULL, NULL, NULL),
(7, NULL, 7, NULL, 'mw1.jpg', 'mw2.jpg', NULL, NULL, NULL, NULL),
(11, NULL, 11, NULL, 'test-678684592c95d.jpg', 'test-678684592f01e.jpg', NULL, NULL, '2025-01-14 20:35:53', '2025-01-14 20:35:53'),
(9, NULL, 9, NULL, 'bo31.jpeg', 'bo32.jpeg', NULL, NULL, NULL, NULL),
(10, NULL, 10, NULL, 'sp2.jpg', 'sp1.jpeg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=201 ;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(188, '0001_01_01_000000_create_users_table', 1),
(189, '0001_01_01_000001_create_cache_table', 1),
(190, '0001_01_01_000002_create_jobs_table', 1),
(191, '2024_09_1_1_create_categories_table', 1),
(192, '2024_10_1_1_create_groupes_table', 1),
(193, '2024_10_2_1_create_equipes_table', 1),
(194, '2024_10_2_2_create_usagers_table', 1),
(195, '2024_10_3_3_create_usager_groupe_table', 1),
(196, '2024_10_5_5_create_jeux_table', 1),
(197, '2024_10_6_6_create_usager_equipe_table', 1),
(198, '2024_10_7_7_create_medias_table', 1),
(199, '2024_10_8_8_create_revues_table', 1),
(200, '2024_10_9_9_create_jeu_usager_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `revues`
--

CREATE TABLE IF NOT EXISTS `revues` (
`id` bigint(20) unsigned NOT NULL,
  `jeu_id` bigint(20) unsigned NOT NULL,
  `note` double NOT NULL,
  `avis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `revues`
--

INSERT INTO `revues` (`id`, `jeu_id`, `note`, `avis`, `created_at`, `updated_at`) VALUES
(1, 7, 5, 'Meilleur jeu de tous les temps. Ne pas l''avoir complété serait un crime.', '2024-10-16 18:30:00', NULL),
(2, 7, 3.5, 'meh!!!', '2023-01-17 04:25:00', NULL),
(3, 6, 5, 'Tres bon jeu', '2024-12-17 23:42:19', '2024-12-17 23:42:19'),
(4, 2, 5, 'vrai', '2024-12-18 00:29:04', '2024-12-18 00:29:04'),
(5, 1, 3, 'Frau', '2025-01-14 20:32:01', '2025-01-14 20:32:01'),
(6, 11, 5, 'Le truc', '2025-01-14 20:36:20', '2025-01-14 20:36:20'),
(7, 11, 5, 'Le truc2', '2025-01-14 20:36:36', '2025-01-14 20:36:36');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OLVoGtCun7wABw8sNtzxVUoDXmvTl6aI943msIRP', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 AVG/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZDI5UVpMWkpxMG1pS3FYeUxnUVVXQlM3cDV1ZjdwTTVxcU4yZFRXSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2FnZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7fQ==', 1736869019);

-- --------------------------------------------------------

--
-- Structure de la table `usagers`
--

CREATE TABLE IF NOT EXISTS `usagers` (
`id` bigint(20) unsigned NOT NULL,
  `matricule` int(11) NOT NULL,
  `groupe_id` bigint(20) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbPubli` int(11) NOT NULL,
  `statut` enum('professeur','etudiant','etudiantInfo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'etudiant',
  `courriel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `usagers`
--

INSERT INTO `usagers` (`id`, `matricule`, `groupe_id`, `password`, `nom`, `prenom`, `nbPubli`, `statut`, `courriel`, `created_at`, `updated_at`) VALUES
(1, 458236, 1, '$2y$12$kvv3RkWery5KAD1V8gd/8uBDEuxReHUPc6opIfqKoKZ10Ryl9l9/S', 'José', 'Morino', 0, 'etudiantInfo', '1@gmail.com', NULL, '2024-12-18 00:29:23'),
(3, 457936, 2, '$2y$12$ru/sieGvx7vxs.phMm6OGewbo9NR093E.1Dbi7zbpizDKEXYB8OXa', 'Yamashita', 'Kazuo', 0, 'etudiant', '3@gmail.com', NULL, NULL),
(4, 457836, 2, '$2y$12$ZHQIGs/SI/GQPVjuphgEN.tqkkABzqjdLMICcWKP2tbdtIP.pmOQ2', 'rand', 'rand', 0, 'etudiant', '4@gmail.com', NULL, NULL),
(5, 458246, 3, '$2y$12$61dIVt8alcGhhZ7F/p83g.9nmC9yViLyuI1v8O3yta0Dn2s9LlRJe', 'rand', 'rand', 0, 'etudiant', '5@gmail.com', NULL, NULL),
(6, 458238, 3, '$2y$12$RsP0icaLBUZm8d0OME0TaeRZEXhaplFL0b3usi6WwwQC5ASTlkKOW', 'rand', 'rand', 0, 'etudiant', '6@gmail.com', NULL, NULL),
(7, 458239, 2, '$2y$12$iUFq2s3on8/ULoBkBwnExeVQg0VabQ/VcpMXMKeLYJLcq8cUm30OO', 'rand', 'rand', 0, 'etudiant', '7@gmail.com', NULL, NULL),
(8, 458230, 3, '$2y$12$74Ag8nOW5AgejIQgBGMhBO8jm3bZm2IDmz9AUL9b4pkCWA.w4cEIu', 'rand', 'rand', 0, 'etudiant', '8@gmail.com', NULL, NULL),
(9, 458204, 1, '$2y$12$tkjGIJyO98L46z2.TzUHP.3G8IU8N7KZ2tZa3eAkhT0N.upeDTXcO', 'rand', 'rand', 0, 'etudiant', '9@gmail.com', NULL, NULL),
(11, 786354, 3, '$2y$12$iWbX57gJbTm4krw82xicnO90oY/3iOk6Xxp0pMnltjKpL86R4MhsW', 'Girou', 'Robert', 0, 'professeur', 'leProf@gmail.com', NULL, '2024-12-17 23:51:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
 ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
 ADD PRIMARY KEY (`key`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipe_usager`
--
ALTER TABLE `equipe_usager`
 ADD PRIMARY KEY (`id`), ADD KEY `equipe_usager_usager_id_foreign` (`usager_id`), ADD KEY `equipe_usager_equipe_id_foreign` (`equipe_id`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe_usager`
--
ALTER TABLE `groupe_usager`
 ADD PRIMARY KEY (`id`), ADD KEY `groupe_usager_groupe_id_foreign` (`groupe_id`), ADD KEY `groupe_usager_usager_id_foreign` (`usager_id`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
 ADD PRIMARY KEY (`id`), ADD KEY `jeux_equipe_id_foreign` (`equipe_id`), ADD KEY `jeux_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `jeu_usager`
--
ALTER TABLE `jeu_usager`
 ADD PRIMARY KEY (`id`), ADD KEY `jeu_usager_usager_id_foreign` (`usager_id`), ADD KEY `jeu_usager_jeu_id_foreign` (`jeu_id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
 ADD PRIMARY KEY (`id`), ADD KEY `medias_jeu_id_foreign` (`jeu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
 ADD PRIMARY KEY (`email`);

--
-- Index pour la table `revues`
--
ALTER TABLE `revues`
 ADD PRIMARY KEY (`id`), ADD KEY `revues_jeu_id_foreign` (`jeu_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `sessions_user_id_index` (`user_id`), ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `usagers`
--
ALTER TABLE `usagers`
 ADD PRIMARY KEY (`id`), ADD KEY `usagers_groupe_id_foreign` (`groupe_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `equipe_usager`
--
ALTER TABLE `equipe_usager`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `groupe_usager`
--
ALTER TABLE `groupe_usager`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `jeu_usager`
--
ALTER TABLE `jeu_usager`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT pour la table `revues`
--
ALTER TABLE `revues`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `usagers`
--
ALTER TABLE `usagers`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 27, 2023 at 06:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-gmao-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_activite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `duree` double NOT NULL,
  `tache_id` bigint(20) UNSIGNED NOT NULL,
  `technicien_id` bigint(20) UNSIGNED NOT NULL,
  `etat_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id`, `description_activite`, `date`, `duree`, `tache_id`, `technicien_id`, `etat_id`, `created_at`, `updated_at`) VALUES
(11, 'Activite2', '2023-02-21', 60, 7, 15, 5, NULL, NULL),
(21, 'Activite 3', '2023-02-08', 20, 1, 12, 1, NULL, NULL),
(26, 'optimize your routing code(2/3)', '2023-02-17', 18, 4, 14, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categorie`, `created_at`, `updated_at`) VALUES
(1, 'Electronique', NULL, NULL),
(2, 'Mechanique', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipements`
--

CREATE TABLE `equipements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `date_debut` date NOT NULL,
  `prix` double NOT NULL,
  `marque` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piece_de_rechange` tinyint(1) NOT NULL,
  `document` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipements`
--

INSERT INTO `equipements` (`id`, `designation`, `description`, `categorie_id`, `date_debut`, `prix`, `marque`, `reference`, `piece_de_rechange`, `document`, `service_id`, `created_at`, `updated_at`, `image`) VALUES
(1, '350 LBS', 'Note: In order for the above classes to work, Bootstrap border classes should also be mentioned along with the above classes. The below examples use the Bootstrap “border” class.\n\nExample 2: The following example demonstrates classes “border-primary”, “border-secondary”, “border-success”,”border-danger”,”border-warning” with blue,gray,green,red and yellow colors respecively.', 1, '2023-02-15', 1750, 'EPSON', 'LBG3500-1', 0, '', 5, '2023-02-27 10:59:34', '2023-02-27 10:59:34', '1677499174.png');

-- --------------------------------------------------------

--
-- Table structure for table `etablissements`
--

CREATE TABLE `etablissements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `raison_social` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etablissements`
--

INSERT INTO `etablissements` (`id`, `raison_social`, `adresse`, `telephone`, `responsable`, `created_at`, `updated_at`) VALUES
(2, 'CHU Fés', 'Rue Hassan II, 212', '056889690', 'Mr; pfff', NULL, NULL),
(3, 'IFMOTICA', 'Wiesbaden,3307', '08080808', 'xxxx', NULL, NULL),
(5, 'Clinique atlass', 'rue sefrou', '057698698', '068709797', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etats`
--

CREATE TABLE `etats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tach_id` bigint(20) UNSIGNED NOT NULL,
  `etat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteur` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etats`
--

INSERT INTO `etats` (`id`, `tach_id`, `etat`, `conteur`, `created_at`, `updated_at`) VALUES
(1, 4, 'pas encore', 0, NULL, NULL),
(5, 4, 'en cours', 50, NULL, NULL),
(6, 1, 'fini', 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_13_202252_create_etablissements_table', 1),
(6, '2023_01_13_203621_create_services_table', 1),
(7, '2023_01_13_204808_create_categories_table', 1),
(8, '2023_01_13_204915_create_equipements_table', 1),
(9, '2023_01_13_205840_create_specialites_table', 1),
(10, '2023_01_13_205937_create_taches_table', 1),
(11, '2023_01_13_210159_create_etat_table', 1),
(12, '2023_01_13_210943_create_techniciens_table', 1),
(13, '2023_01_13_211314_create_activites_table', 1),
(14, '2023_01_13_211923_create_piece_activites_table', 1),
(15, '2023_01_16_201433_add_status_field_to_users', 1),
(16, '2023_01_19_165029_add_image_field_to_equipements', 1),
(17, '2023_01_20_081446_add_image_field_to_users', 1),
(18, '2023_01_22_001657_add_image_field_to_techniciens', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piece_activites`
--

CREATE TABLE `piece_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qte` double NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `equipement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_service` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etablissement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nom_service`, `etablissement_id`, `created_at`, `updated_at`) VALUES
(5, 'santé', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialites`
--

CREATE TABLE `specialites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialites`
--

INSERT INTO `specialites` (`id`, `specialite`, `created_at`, `updated_at`) VALUES
(1, 'FullStack', NULL, NULL),
(2, 'Networking', NULL, NULL),
(3, 'Marketing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `duree` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taches`
--

INSERT INTO `taches` (`id`, `description`, `date`, `duree`, `created_at`, `updated_at`) VALUES
(1, 'optimize your routing code(2/3)', '2023-01-11', 1, NULL, NULL),
(3, 'eat then sleep', '2023-01-20', 1, NULL, NULL),
(4, 'boost the CMMS App', '2023-01-21', 2, NULL, NULL),
(5, 'test2', '2023-02-07', 3, NULL, NULL),
(6, 'Test2', '2023-01-31', 2, NULL, NULL),
(7, 'eliteBook', '2023-02-27', 1, NULL, NULL),
(8, 'Test2', '2023-02-16', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `techniciens`
--

CREATE TABLE `techniciens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techniciens`
--

INSERT INTO `techniciens` (`id`, `telephone`, `specialite_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, '0666768798', 2, 11, NULL, NULL),
(13, '0709435546', 2, 9, NULL, NULL),
(14, '0682914128', 1, 26, NULL, NULL),
(15, '0611661166', 3, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(5, 'Rogers Marquardt', 0, 'timothy.dare@example.net', '2023-01-23 15:10:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zjPThZ3WXl', '2023-01-23 15:10:46', '2023-01-23 15:10:46', 'default.png'),
(6, 'Hollis Rau', 0, 'mann.ewald@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gtol8fxfau', '2023-01-23 15:10:46', '2023-01-23 15:10:46', 'default.png'),
(7, 'Dr. Amos Jast MD', 0, 'leuschke.juliana@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MPWaFloU2r', '2023-01-23 15:10:46', '2023-01-23 15:10:46', 'default.png'),
(8, 'Domenica Carroll', 0, 'jabari.damore@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Blsd32tWFh', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(9, 'Beau Hackett', 0, 'erika74@example.net', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AkiQFQeieP', '2023-01-23 15:10:46', '2023-01-23 15:10:46', 'default.png'),
(10, 'Kaya Feil DDS', 0, 'kathryn.shanahan@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ojD0teQprJ', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(11, 'Melody Hayes II', 0, 'thomas59@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T1erPvhQ76', '2023-01-23 15:10:46', '2023-01-23 15:10:46', 'default.png'),
(12, 'Audrey Mayer', 0, 'alindgren@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5DD1GCY4ua', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(13, 'Eveline Langworth', 0, 'elouise11@example.net', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N6TC8EuCwn', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(14, 'Gregory Rippin', 0, 'schimmel.margaret@example.net', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l5D2pMNWmR', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(15, 'Dr. Roxanne Zulauf DVM', 0, 'lea.marquardt@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xATYnQRQM6', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(16, 'Mr. Kurt Hahn', 0, 'ccarter@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PMrkKeMEv5', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(17, 'Dr. Jamaal Steuber', 0, 'isidro.connelly@example.net', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cMMuJLSfj6', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(18, 'Audrey Gutkowski', 0, 'hildegard46@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ipua28OO6F', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(19, 'Dr. Hipolito Wisozk', 0, 'cremin.mckenzie@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZVSJJ77WTJ', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(20, 'Dr. Raleigh Cartwright Jr.', 0, 'rpouros@example.net', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YwXBnUkFil', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(21, 'Miss Stephanie Gottlieb PhD', 0, 'may39@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AzLg4NWz5N', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(22, 'Prof. Kira Considine', 0, 'hhudson@example.com', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XYSwK8AXI0', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(23, 'Mrs. Rosalee Buckridge V', 0, 'parisian.theron@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IJYebzJktt', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(24, 'Raegan Boyle IV', 0, 'narciso.leuschke@example.org', '2023-01-23 15:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hbrbRnNT6E', '2023-01-23 15:10:46', '2023-01-23 15:10:46', NULL),
(25, 'Oussama Belhadi', 1, 'oussamabelhadi5@gmail.com', NULL, '$2y$10$ZYBrW1cur2xXHgrPdYpOh.SL2IwH56NCaEu5ziGMUA36qAZyjpjR2', NULL, '2023-02-26 20:23:02', '2023-02-26 20:23:02', '1674207356.png'),
(26, 'emale karolin', 0, 'emalekarolin@gmail.com', NULL, '$2y$10$BH1stz/RlV5EtikzJkqo.ONPTsfQrXlTdun1WZm7Z6fbyE.YHY0K6', NULL, '2023-02-26 21:02:14', '2023-02-26 21:02:14', '1677465499.png'),
(27, 'Gojo Sturo', 0, 'gojosturo@gmail.com', NULL, '$2y$10$aGtghBTayFZ12qDLVgVJAeVGohziChlCRK7wJVaVKNqrxYpjuw5C.', NULL, '2023-02-27 01:44:27', '2023-02-27 01:44:27', '1677467095.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activites_etat_id_foreign` (`etat_id`),
  ADD KEY `activites_tache_id_foreign` (`tache_id`),
  ADD KEY `technicien_id` (`technicien_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipements_categorie_id_foreign` (`categorie_id`),
  ADD KEY `equipements_service_id_foreign` (`service_id`);

--
-- Indexes for table `etablissements`
--
ALTER TABLE `etablissements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etats`
--
ALTER TABLE `etats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etats_tach_id_foreign` (`tach_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `piece_activites`
--
ALTER TABLE `piece_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `piece_activites_activite_id_foreign` (`activite_id`),
  ADD KEY `piece_activites_equipement_id_foreign` (`equipement_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_etablissement_id_foreign` (`etablissement_id`);

--
-- Indexes for table `specialites`
--
ALTER TABLE `specialites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techniciens`
--
ALTER TABLE `techniciens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `techniciens_specialite_id_foreign` (`specialite_id`),
  ADD KEY `techniciens_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `etablissements`
--
ALTER TABLE `etablissements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `etats`
--
ALTER TABLE `etats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `piece_activites`
--
ALTER TABLE `piece_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specialites`
--
ALTER TABLE `specialites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `techniciens`
--
ALTER TABLE `techniciens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_etat_id_foreign` FOREIGN KEY (`etat_id`) REFERENCES `etats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activites_tache_id_foreign` FOREIGN KEY (`tache_id`) REFERENCES `taches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activites_technicien_id_foreign` FOREIGN KEY (`technicien_id`) REFERENCES `techniciens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `technicien_id` FOREIGN KEY (`technicien_id`) REFERENCES `techniciens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `equipements_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `equipements_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `etats`
--
ALTER TABLE `etats`
  ADD CONSTRAINT `etats_tach_id_foreign` FOREIGN KEY (`tach_id`) REFERENCES `taches` (`id`);

--
-- Constraints for table `piece_activites`
--
ALTER TABLE `piece_activites`
  ADD CONSTRAINT `piece_activites_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `piece_activites_equipement_id_foreign` FOREIGN KEY (`equipement_id`) REFERENCES `equipements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_etablissement_id_foreign` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `techniciens`
--
ALTER TABLE `techniciens`
  ADD CONSTRAINT `techniciens_specialite_id_foreign` FOREIGN KEY (`specialite_id`) REFERENCES `specialites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `techniciens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

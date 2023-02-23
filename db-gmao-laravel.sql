-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 23, 2023 at 04:23 PM
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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `duree` double NOT NULL,
  `tache_id` bigint(20) UNSIGNED NOT NULL,
  `technicien_id` bigint(20) UNSIGNED NOT NULL,
  `etat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'xxxx', '6 x 2 RAM 128 GB ROM OctaxCore 2.32GHz', 1, '2023-01-20', 4200, 'HP', 'xxxxx', 0, '1674252072.txt', 5, '2023-01-20 21:01:12', '2023-01-20 21:01:12', '1674252072.png');

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
(1, 'Unité de formation', 'Rue Nawal', '06979078097', 'Mr. Ahmed', NULL, NULL),
(2, 'CHU Fés', 'Rue Hassan II, 212', '056889690', 'Mr; pfff', NULL, NULL),
(3, 'IFMOTICA', 'Wiesbaden,3307', '08080808', 'xxxx', NULL, NULL),
(5, 'Clinique atlass', 'rue sefrou', '057698698', '068709797', NULL, NULL),
(6, 'test111', 'Wiesbaden,33072', '0000000', 'xxxxXXX', NULL, NULL),
(7, 'test', 'Wiesbaden,3307', 'xxxx', 'xxxxXXX', NULL, NULL);

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
(17, '2023_01_20_081446_add_image_field_to_users', 2),
(18, '2023_01_22_001657_add_image_field_to_techniciens', 3);

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
(5, 'santé', 2, NULL, NULL),
(6, 'Formation', 1, NULL, NULL);

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
(2, 'Networking', NULL, NULL);

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
(4, 'boost the CMMS App', '2023-01-21', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `techniciens`
--

CREATE TABLE `techniciens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techniciens`
--

INSERT INTO `techniciens` (`id`, `nom`, `prenom`, `telephone`, `email`, `specialite_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Emillya', 'Karolin', '0000000', 'emalekarolin@gmail.com', 1, NULL, NULL, '1674484765.jpg'),
(2, 'Thomas', 'Yare', '0000000', 'Thomas@gmail.com', 2, NULL, NULL, 'default.png');

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
(1, 'emale karolin', 0, 'emalekarolin@gmail.com', NULL, '$2y$10$zoOeoVk7izhoowCPKSpSmeh7Vcn/bi2EDtL.gNZ83gnKRy5Vrtevy', NULL, '2023-01-19 23:32:38', '2023-01-19 23:32:38', NULL),
(2, 'Oussama Belhadi', 1, 'oussamabelhadi5@gmail.com', NULL, '$2y$10$zoOeoVk7izhoowCPKSpSmeh7Vcn/bi2EDtL.gNZ83gnKRy5Vrtevy', NULL, '2023-01-19 23:33:02', '2023-01-20 08:38:17', '1674207356.png'),
(5, 'Rogers Marquardt', 0, 'timothy.dare@example.net', '2023-01-23 16:10:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zjPThZ3WXl', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(6, 'Hollis Rau', 0, 'mann.ewald@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gtol8fxfau', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(7, 'Dr. Amos Jast MD', 0, 'leuschke.juliana@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MPWaFloU2r', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(8, 'Domenica Carroll', 0, 'jabari.damore@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Blsd32tWFh', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(9, 'Beau Hackett', 0, 'erika74@example.net', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AkiQFQeieP', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(10, 'Kaya Feil DDS', 0, 'kathryn.shanahan@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ojD0teQprJ', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(11, 'Melody Hayes II', 0, 'thomas59@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T1erPvhQ76', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(12, 'Audrey Mayer', 0, 'alindgren@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5DD1GCY4ua', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(13, 'Eveline Langworth', 0, 'elouise11@example.net', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N6TC8EuCwn', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(14, 'Gregory Rippin', 0, 'schimmel.margaret@example.net', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l5D2pMNWmR', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(15, 'Dr. Roxanne Zulauf DVM', 0, 'lea.marquardt@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xATYnQRQM6', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(16, 'Mr. Kurt Hahn', 0, 'ccarter@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PMrkKeMEv5', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(17, 'Dr. Jamaal Steuber', 0, 'isidro.connelly@example.net', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cMMuJLSfj6', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(18, 'Audrey Gutkowski', 0, 'hildegard46@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ipua28OO6F', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(19, 'Dr. Hipolito Wisozk', 0, 'cremin.mckenzie@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZVSJJ77WTJ', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(20, 'Dr. Raleigh Cartwright Jr.', 0, 'rpouros@example.net', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YwXBnUkFil', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(21, 'Miss Stephanie Gottlieb PhD', 0, 'may39@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AzLg4NWz5N', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(22, 'Prof. Kira Considine', 0, 'hhudson@example.com', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XYSwK8AXI0', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(23, 'Mrs. Rosalee Buckridge V', 0, 'parisian.theron@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IJYebzJktt', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL),
(24, 'Raegan Boyle IV', 0, 'narciso.leuschke@example.org', '2023-01-23 16:10:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hbrbRnNT6E', '2023-01-23 16:10:46', '2023-01-23 16:10:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activites_tache_id_foreign` (`tache_id`),
  ADD KEY `activites_technicien_id_foreign` (`technicien_id`),
  ADD KEY `activites_etat_id_foreign` (`etat_id`);

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
  ADD KEY `techniciens_specialite_id_foreign` (`specialite_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etablissements`
--
ALTER TABLE `etablissements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `etats`
--
ALTER TABLE `etats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techniciens`
--
ALTER TABLE `techniciens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_etat_id_foreign` FOREIGN KEY (`etat_id`) REFERENCES `etats` (`id`),
  ADD CONSTRAINT `activites_tache_id_foreign` FOREIGN KEY (`tache_id`) REFERENCES `taches` (`id`),
  ADD CONSTRAINT `activites_technicien_id_foreign` FOREIGN KEY (`technicien_id`) REFERENCES `techniciens` (`id`);

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
  ADD CONSTRAINT `piece_activites_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`),
  ADD CONSTRAINT `piece_activites_equipement_id_foreign` FOREIGN KEY (`equipement_id`) REFERENCES `equipements` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_etablissement_id_foreign` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`);

--
-- Constraints for table `techniciens`
--
ALTER TABLE `techniciens`
  ADD CONSTRAINT `techniciens_specialite_id_foreign` FOREIGN KEY (`specialite_id`) REFERENCES `specialites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 fév. 2024 à 16:48
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
-- Base de données : `project_maryem`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `key_note_speakers`
--

CREATE TABLE `key_note_speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `website` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `key_note_speakers`
--

INSERT INTO `key_note_speakers` (`id`, `firstname`, `lastname`, `description`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Emmanuel', 'Beahan', 'Et totam quibusdam vel et perferendis eos blanditiis. Corrupti odio officiis reprehenderit provident occaecati corrupti doloribus. A doloremque cupiditate natus et. Inventore voluptatem placeat numquam ut iure ea dolorem.', 'https://kilback.com/omnis-non-autem-iure-doloribus-similique-adipisci.html', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(2, 'Lucie', 'Farrell', 'Mollitia sequi quibusdam excepturi ut. Id et odit alias natus perferendis assumenda et. Cumque accusamus odit magnam reiciendis. Ut id ut quia recusandae magnam commodi.', 'http://von.com/velit-iste-magni-modi-sint-voluptas-accusamus', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(3, 'Coty', 'VonRueden', 'Voluptatem quae commodi hic et odio voluptatem blanditiis. Optio est aliquam porro earum in harum et. Eum impedit vero est laudantium beatae. Voluptates minima nemo error illo iste exercitationem.', 'http://www.bednar.com/enim-aut-omnis-in-ut.html', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(4, 'Adelle', 'Littel', 'Similique deleniti dolores nemo ullam eligendi consequatur quae. Nesciunt esse asperiores illum sunt sit sed. Aut ut ducimus consequatur porro omnis aliquam magni. Velit saepe ut eveniet repudiandae.', 'http://www.green.biz/', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(5, 'Phyllis', 'Skiles', 'Autem quis at qui doloremque ratione neque. Accusamus quos totam voluptatibus nisi ea debitis dolores. Rerum quia accusamus quibusdam qui voluptas maxime voluptatum occaecati.', 'https://www.jacobs.com/libero-nobis-vel-doloremque-maxime-voluptas-earum', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(6, 'mariem', 'abid', 'According to the official Laravel documentation of installation Laravel Breeze here, after you have executed composer require laravel/breeze --dev and php artisan breeze:install vue (if you are using vue or can specify other desired stack), you need to execute these commands as well', 'https://github.com/Maaryemm/project-mariem-laravel', '2024-01-18 09:00:58', '2024-01-18 09:00:58');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id`, `name`, `href`, `created_at`, `updated_at`) VALUES
(1, 'Miss Queen King DVM', 'https://kerluke.net/saepe-suscipit-quia-consequatur-laborum-in-rerum-hic.html', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(2, 'Theresa Stiedemann DVM', 'http://howe.com/ipsam-enim-dolorum-temporibus-distinctio-nulla-quis-expedita', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(3, 'Rebeka Corwin', 'http://www.fahey.org/nesciunt-asperiores-magnam-ut-dolores-sapiente-qui-est', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(4, 'Prof. Ole Larkin', 'http://www.howell.com/enim-suscipit-quod-recusandae-explicabo-voluptatibus-similique-consectetur.html', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(5, 'Colleen Abernathy', 'http://www.jerde.com/tempora-consequuntur-beatae-fugiat-nesciunt-inventore-eveniet', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(7, 'fdf', 'dfdf', '2024-01-14 16:40:46', '2024-01-14 16:40:46'),
(8, 'sahriya mch normal', 'htttp/dssdjsjds/dsds.dd', '2024-01-14 16:41:59', '2024-01-14 16:41:59'),
(9, 'panda party', 'http:panda party', '2024-01-15 12:35:48', '2024-01-15 12:35:48'),
(10, 'party party', 'https://chat.openai.com/c/196aa1ce-9deb-43b4-8631-5f57f0906ed5', '2024-01-19 08:14:49', '2024-01-19 08:14:49');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(95, '2014_10_12_000000_create_users_table', 1),
(96, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(97, '2019_08_19_000000_create_failed_jobs_table', 1),
(98, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(99, '2024_01_09_143740_create_links', 1),
(100, '2024_01_09_154824_create_key_note_speakers', 1),
(101, '2024_01_11_120611_create_super_admin', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `category`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Bernadette Anderson', 'bconn', 'cmcclure@example.net', 'NS_No_IEEE', '2024-01-14 14:45:06', '$2y$12$yhzUmeo4m7JbjApQrJO5beP/OhL/5rlpQfGy.esb9UhWNh.AoLro2', 'PCj8hq0b1X', '2024-01-14 14:45:06', '2024-01-14 14:45:06'),
(2, 'Ms. Fleta Skiles', 'ekilback', 'demetris.schamberger@example.net', 'NS_IEEE', '2024-01-14 14:45:06', '$2y$12$yhzUmeo4m7JbjApQrJO5beP/OhL/5rlpQfGy.esb9UhWNh.AoLro2', 'EW55JF2Mys', '2024-01-14 14:45:07', '2024-01-14 14:45:07'),
(3, 'Mr. Houston Stoltenberg', 'jeramie91', 'jon.von@example.org', 'NS_IEEE', '2024-01-14 14:45:06', '$2y$12$yhzUmeo4m7JbjApQrJO5beP/OhL/5rlpQfGy.esb9UhWNh.AoLro2', 'itCJlO8rY0', '2024-01-14 14:45:07', '2024-01-14 14:45:07'),
(4, 'Bernhard Kuphal', 'bernhard.lucienne', 'abdullah.reilly@example.net', 'NS_No_IEEE', '2024-01-14 14:45:06', '$2y$12$yhzUmeo4m7JbjApQrJO5beP/OhL/5rlpQfGy.esb9UhWNh.AoLro2', 'UyLKnC1ini', '2024-01-14 14:45:07', '2024-01-14 14:45:07'),
(5, 'Mr. Zane Stracke', 'wiegand.elmer', 'katheryn90@example.net', 'S_No_IEEE', '2024-01-14 14:45:06', '$2y$12$yhzUmeo4m7JbjApQrJO5beP/OhL/5rlpQfGy.esb9UhWNh.AoLro2', 'ULjAiNKsh7', '2024-01-14 14:45:07', '2024-01-14 14:45:07'),
(6, 'admin', 'admin', 'admin@gmail.com', 'NS_No_IEEE', NULL, '$2y$12$54AXt6rOcRAjSKOsFgvYuu5CRal.UcDSKe9.z2j6hMfBl9LHZJ0xi', NULL, '2024-01-14 14:46:46', '2024-01-14 14:46:46'),
(9, 'mariem', 'mariem', 'mariem@gmail.com', 'S_IEEE', NULL, '$2y$12$3lHOkBp7aiXgWdTvA4zLBeZAaiwg8MTjGVCPg9gLCnbpmPz618cfS', NULL, '2024-01-16 15:18:50', '2024-01-16 15:18:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `key_note_speakers`
--
ALTER TABLE `key_note_speakers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `super_admin_email_unique` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `key_note_speakers`
--
ALTER TABLE `key_note_speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

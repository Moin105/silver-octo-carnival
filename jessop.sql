-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2023 at 05:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jessop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Category 1', '2023-03-09 01:37:34', '2023-03-09 01:37:34'),
(8, 'Category 2', '2023-03-15 09:05:48', '2023-03-15 09:05:48'),
(9, 'Category 3', '2023-03-16 07:21:05', '2023-03-16 07:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_03_06_133124_create_products_table', 1),
(11, '2023_03_06_143037_create_categories_table', 1),
(12, '2023_03_07_053133_create_s_o_p_s_table', 1),
(13, '2023_03_07_054222_create_types_table', 1),
(14, '2023_03_07_054250_create_sop_steps_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('dff2745af431a9783bad0985b10d82091da368d4d08dea08c9bf0b38cdef5f17418c4b028c978c60', 4, 1, 'MyApp', '[]', 0, '2023-03-13 01:53:03', '2023-03-13 01:53:03', '2024-03-13 06:53:03'),
('6e9869bc9ee43e96b06cdfb98262a360c35148b21a0802c0d2e1a75930bd0b631b911ca5575b3bea', 5, 1, 'MyApp', '[]', 0, '2023-03-13 01:55:08', '2023-03-13 01:55:08', '2024-03-13 06:55:08'),
('92d964201e088647b2c2e26796ef12d7775d0e5dc382f737139f24f52f9f283eed60dd69230dbbd4', 5, 1, 'MyApp', '[]', 0, '2023-03-13 01:56:00', '2023-03-13 01:56:00', '2024-03-13 06:56:00'),
('f2bb65e63f4f607886d2a055f323744cccd392cdd6bb73bbb814ad1a0e8767b75cf213cfb68f1937', 5, 1, 'MyApp', '[]', 0, '2023-03-13 01:56:26', '2023-03-13 01:56:26', '2024-03-13 06:56:26'),
('e3d091afb7e18b6c9f975439625c9dcf9d6ff90f1adcdfa0998e98b61f8559f0ffe5028fcf9e4b0d', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:23:33', '2023-03-13 02:23:33', '2024-03-13 07:23:33'),
('6b3d65c15266904d8c602d0e503bc4e12736b0eb38b76d0161c7858626fc915e2b6204e6d36029f4', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:24:33', '2023-03-13 02:24:33', '2024-03-13 07:24:33'),
('6902a628395c37ab607a6b8a14c61cf5063a248e2b2f18f919cf86988b660e8bd1a6d00e68dfe3dd', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:24:49', '2023-03-13 02:24:49', '2024-03-13 07:24:49'),
('a4faa04ad1403ed333172bf0807ebf86e0c3022ed16a782b6aefbc440102d3ae4a88df7d11ff2713', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:25:05', '2023-03-13 02:25:05', '2024-03-13 07:25:05'),
('163623cb5851610b6f24fdc6f7508e6167df4077fd802b6d6b99273bfbb4ba52008751367ecd2de9', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:25:46', '2023-03-13 02:25:46', '2024-03-13 07:25:46'),
('6a724e3cf994b9bae2016e3067d76e9d1d363ab4d260543118ed88f67ac33a2c5a2286982aadefae', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:25:54', '2023-03-13 02:25:54', '2024-03-13 07:25:54'),
('b2d4087ec102f1de844891dc86a53f36f719faed04d1088b24ef34a50f8f863f54336efc90e54e7d', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:26:01', '2023-03-13 02:26:01', '2024-03-13 07:26:01'),
('991af7e73528ff572627a996f24570f52a8abc239232038bc263168a4189ecdb15ac023577249cac', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:26:26', '2023-03-13 02:26:26', '2024-03-13 07:26:26'),
('a5f08c044595d5b38c3a6bad6454d73668bea9ef0590c46ced737e4af0b287d27071356905ad19f8', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:26:37', '2023-03-13 02:26:37', '2024-03-13 07:26:37'),
('63b177f303d9d79a35e624b9b54fe7d2e35b94658a8d1fffa7abcf6620a03c37772989322deda464', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:26:59', '2023-03-13 02:26:59', '2024-03-13 07:26:59'),
('70bcdaa3ffdd695b5b06695acafb63d71324de7b672a79189532167178976d57e4645392533975a2', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:27:46', '2023-03-13 02:27:46', '2024-03-13 07:27:46'),
('1670c627a71a737c16b29bb39e04cf57039c37b46410f54d2b2d38aafa5614fde89aca9d791613e5', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:28:29', '2023-03-13 02:28:29', '2024-03-13 07:28:29'),
('668597359af9a6eb8efa827af1d7b43f0a4626d53f36321dd6a1fc8d545e7290edc3d7efd3830eaa', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:28:51', '2023-03-13 02:28:51', '2024-03-13 07:28:51'),
('6b45d90ea1607f91429afa3a1acd76a5648c94ce673df98c367458fb2cd48fb01d39688f53cac6c1', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:29:13', '2023-03-13 02:29:13', '2024-03-13 07:29:13'),
('6fbdd87ecf3a8a76aa48fdfafd9b03744eacfc0350e524e8dc2a0d88762eceea5482f31db200e8c0', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:29:33', '2023-03-13 02:29:33', '2024-03-13 07:29:33'),
('e41564b531ede2bbdabc879ba081db68f4b76aae77167bdc2c75a66bace7a5dd08284a128632dbd3', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:29:44', '2023-03-13 02:29:44', '2024-03-13 07:29:44'),
('e80fa242a7ffc9bc9097283efe74ff59a215d7fda858ace7e6629e1cb450a147577f9b53339ff4a1', 5, 1, 'MyApp', '[]', 0, '2023-03-13 02:30:26', '2023-03-13 02:30:26', '2024-03-13 07:30:26'),
('de71fe9b5e5ccd5e2e4e4171a9d8967b782858c8a4ee7f7e37e7679d490b01b8607c5545492c74be', 5, 1, 'MyApp', '[]', 0, '2023-03-13 04:48:14', '2023-03-13 04:48:14', '2024-03-13 09:48:14'),
('3bfae2240d9ac590d3700630e602ea346199d300fffab9c709d63af191f6ef2e85eb1cd051072f0b', 5, 1, 'MyApp', '[]', 0, '2023-03-13 05:05:40', '2023-03-13 05:05:40', '2024-03-13 10:05:40'),
('4aa32a3108128716e00d2c3388208585d7dffd78dda1b082e958de0dfb31121f8dea885390fdca73', 5, 1, 'MyApp', '[]', 0, '2023-03-13 05:11:10', '2023-03-13 05:11:10', '2024-03-13 10:11:10'),
('3754d6f0adbad4031d620b36c23091e20589c68868d8c42434f6b9ccf905c0c0906f530ceacdc8a7', 1, 1, 'MyApp', '[]', 0, '2023-03-13 07:17:27', '2023-03-13 07:17:27', '2024-03-13 12:17:27'),
('771b844657a38ce70a0cee538b59921bd89f56cbf70b71bad6ce4f365069ab67402dec2307ec702a', 1, 1, 'MyApp', '[]', 0, '2023-03-15 06:52:26', '2023-03-15 06:52:26', '2024-03-15 11:52:26'),
('6b6e65dda3e7d5f2b5170e283082e5230de1a0e89cddf601e414fb0b59e57276b82e43183bb9c758', 1, 1, 'MyApp', '[]', 0, '2023-03-15 07:41:42', '2023-03-15 07:41:42', '2024-03-15 12:41:42'),
('9562501e81111b839024ff5151420ca23e87f42fecc11d64c26917d7f8a2336a4cc00528c4249fb5', 1, 1, 'MyApp', '[]', 0, '2023-03-15 07:44:34', '2023-03-15 07:44:34', '2024-03-15 12:44:34'),
('f8ee87f71f6bf06bd3a96a7bd7e9236af0c6c96012f097047de4e75893c99f2ed03d326de658b907', 7, 1, 'MyApp', '[]', 0, '2023-03-15 07:45:39', '2023-03-15 07:45:39', '2024-03-15 12:45:39'),
('bd4ecf82b5924b3cbf811514f8c9e7c14e0453f8115a19a1651764833e6202b097b2722bfdcaa3de', 7, 1, 'MyApp', '[]', 0, '2023-03-15 07:45:46', '2023-03-15 07:45:46', '2024-03-15 12:45:46'),
('81e682a2be1ce3782f3e4cf273f646b0d227ec37b5f81aae0d675dbf72e99896ee6b58eae03aebca', 8, 1, 'MyApp', '[]', 0, '2023-03-15 07:48:04', '2023-03-15 07:48:04', '2024-03-15 12:48:04'),
('7e00b7a5b493b7890a9532812506dc9329714c90bd6a323c145e503bd4ac2747d5c1f415c5d4e87b', 8, 1, 'MyApp', '[]', 0, '2023-03-15 11:16:18', '2023-03-15 11:16:18', '2024-03-15 16:16:18'),
('21afb66e7df2d4a00f036c28f7aa4a05e5af75eb63b9974d3735a286df0c692c95813088dcfd1772', 8, 1, 'MyApp', '[]', 0, '2023-03-15 11:21:12', '2023-03-15 11:21:12', '2024-03-15 16:21:12'),
('393cca2ff0c890556a0c3c80396d7b9253753d670c7f4b8a9e99ae6e72dff5f1b40f4a6d13abdb82', 8, 1, 'MyApp', '[]', 0, '2023-03-16 05:17:16', '2023-03-16 05:17:16', '2024-03-16 10:17:16'),
('4f9ec380d46bb444d041cc989570cb491752cd7007bba20ad8a96299394f6d929b2cfad1f7bcc8c8', 8, 1, 'MyApp', '[]', 0, '2023-03-16 05:17:28', '2023-03-16 05:17:28', '2024-03-16 10:17:28'),
('0b8f8e6e39b265483ac0ac1e36cb637eb8dacbf6d54b6d69f856a109c7e302d9e20a1675ab1d3a4f', 8, 1, 'MyApp', '[]', 0, '2023-03-16 05:20:00', '2023-03-16 05:20:00', '2024-03-16 10:20:00'),
('9257398e6e7ac2ae58a2d92197f2800042319053e2042c4365bde01d89945f05a7832e9d42a8edc2', 7, 1, 'MyApp', '[]', 0, '2023-03-16 05:21:35', '2023-03-16 05:21:35', '2024-03-16 10:21:35'),
('2ad393a5ca399f1e9bda1896019bbc25bd7cc90565866a420787306e54845cbb9bc0ab15f00839e9', 8, 1, 'MyApp', '[]', 0, '2023-03-16 05:31:35', '2023-03-16 05:31:35', '2024-03-16 10:31:35'),
('79135ff2a59f763dc80c0c385897e13845a2f96b4c82c4861ecdb2deaa05b67c81a1bf53d2ece60e', 1, 1, 'MyApp', '[]', 0, '2023-03-16 05:44:51', '2023-03-16 05:44:51', '2024-03-16 10:44:51'),
('811cec42f0f6871cb302fc904975f6509ff591714aefd5705d8a50a19dc9a0e031269eea28de9ddb', 10, 1, 'MyApp', '[]', 0, '2023-03-16 07:52:58', '2023-03-16 07:52:58', '2024-03-16 12:52:58'),
('6a0f9d4308cf835eea74ddc45d7bba8d30362feaa1abbf074368c70157a57399491f94491f4801c6', 7, 1, 'MyApp', '[]', 0, '2023-03-16 07:54:37', '2023-03-16 07:54:37', '2024-03-16 12:54:37'),
('73d4c27cb0293a615df36eb3eb9d84b5401d2ca28dc95e45785eef638d4c1f4f590a67f0458386c1', 9, 1, 'MyApp', '[]', 0, '2023-03-16 08:52:13', '2023-03-16 08:52:13', '2024-03-16 13:52:13'),
('2ac07c8357849b6ebef8219d9d272cc9938a1a890e1b42b020747799b68fe68c3aa7c2e3ce0948b3', 7, 1, 'MyApp', '[]', 0, '2023-03-16 08:52:23', '2023-03-16 08:52:23', '2024-03-16 13:52:23'),
('6980ef64deaea7b052bf4487d218097574cf2cc00a075d7caccb4a0e0dad1e259419aae677296328', 8, 1, 'MyApp', '[]', 0, '2023-03-17 05:24:53', '2023-03-17 05:24:53', '2024-03-17 10:24:53'),
('8de7d2b5fca01ca2b9c5e66e1a721edd21afdfef640aec1f4d9b2a660e4234520715785b193a943f', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:04', '2023-03-17 07:18:04', '2024-03-17 12:18:04'),
('69bf83d969fa1c2486b872b1e260f9b68a7819a4ab65ae2d5143486a531e989ba8bc6a14adb6f225', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:06', '2023-03-17 07:18:06', '2024-03-17 12:18:06'),
('f390783c0850c9814378d4234311fccfa989b863378b8a5f373553b8088fc83fbb8025a5cf80e7e9', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:07', '2023-03-17 07:18:07', '2024-03-17 12:18:07'),
('dc7fdb9b8925b8788bb2d897228802023d7ad7e62a2c2999bb0a4b8af3194734db3ff0abf2000ea1', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:11', '2023-03-17 07:18:11', '2024-03-17 12:18:11'),
('84142e001a5ed9b2a32b26df7bd1ab18d3251068ee731e8eb4b284fb9c8f3d18dbfe5a158e1eb10b', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:13', '2023-03-17 07:18:13', '2024-03-17 12:18:13'),
('36883f35a53fdc5fc6991a6b870e2d2af800039d52ca196d3de66a0dba5b96ebe515f5caf91d883c', 8, 1, 'MyApp', '[]', 0, '2023-03-17 07:18:27', '2023-03-17 07:18:27', '2024-03-17 12:18:27'),
('996d4f8924f9662c7c5dc7b2b249ab90621992c1ad3070173fbcb70494c919afdac2b0cd9721c946', 8, 1, 'MyApp', '[]', 0, '2023-03-18 10:50:32', '2023-03-18 10:50:32', '2024-03-18 15:50:32'),
('a823e2820ee579f1ad4faff2d55e70c2f6ad919510a7f4087c53e38dccfe64491cb3a77496342071', 8, 1, 'MyApp', '[]', 0, '2023-03-18 11:35:37', '2023-03-18 11:35:37', '2024-03-18 16:35:37'),
('91b793b54dcad6b371793172cbe0e8e3c1cf7b4aec543618a7562751592807542432288df326e80b', 8, 1, 'MyApp', '[]', 0, '2023-03-18 11:39:21', '2023-03-18 11:39:21', '2024-03-18 16:39:21'),
('1299816131aab95cb1b0c4bf30f264e7c87bb192f996caf6da3b2bd0dc5540a11c211c7f40f02980', 8, 1, 'MyApp', '[]', 0, '2023-03-18 11:51:13', '2023-03-18 11:51:13', '2024-03-18 16:51:13'),
('78aa36e68bdc6e7035e70f92b5d9209a627848f0710d017e1ff9da4fa99661c39ff04d1a6b80524a', 8, 1, 'MyApp', '[]', 0, '2023-03-18 11:54:42', '2023-03-18 11:54:42', '2024-03-18 16:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '8a1Tz4uYbIq5fbZMmPyPw4W8lCl0pkKkeNYLHQTb', NULL, 'http://localhost', 1, 0, 0, '2023-03-13 01:52:52', '2023-03-13 01:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-03-13 01:52:52', '2023-03-13 01:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `detail` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sop_steps`
--

CREATE TABLE `sop_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `text` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `list` varchar(191) DEFAULT NULL,
  `priority` varchar(191) NOT NULL,
  `sop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sop_steps`
--

INSERT INTO `sop_steps` (`id`, `title`, `text`, `image`, `youtube`, `list`, `priority`, `sop_id`, `created_at`, `updated_at`) VALUES
(87, 'Now Third Step', 'Third STep PARA', '6415e9ffba762.jpg', 'https://www.youtube.com/watch?v=wOvhcnzMKBY', '[{\"text\":\"First list step of step 3\",\"checked\":false}]', '3', 197, '2023-03-18 11:42:39', '2023-03-18 11:42:39'),
(85, 'Example step one Edited Now', 'Example paragraph one for milling grain process Edited Now', '6415e9ffb8b5f.jpg', 'https://www.youtube.com/watch?v=wOvhcnzMKBY', '[{\"text\":\"First step of the checklist EDITED\",\"checked\":false},{\"text\":\"Second step of the check list\",\"checked\":false}]', '1', 197, '2023-03-18 11:42:39', '2023-03-18 11:42:39'),
(86, 'Example Second step', 'Example paragraph for second step of milling grain process', '6415e9ffba319.jpg', 'https://www.youtube.com/watch?v=wOvhcnzMKBY', '[{\"text\":\"Example list step 1 for second step\",\"checked\":false}]', '2', 197, '2023-03-18 11:42:39', '2023-03-18 11:42:39'),
(89, 'Assad', 'sdsd', NULL, NULL, '[]', '1', 199, '2023-03-18 11:47:41', '2023-03-18 11:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `s_o_p_s`
--

CREATE TABLE `s_o_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_o_p_s`
--

INSERT INTO `s_o_p_s` (`id`, `user_id`, `title`, `type_id`, `category_id`, `description`, `created_at`, `updated_at`) VALUES
(199, 8, 'Checklist SOP', 5, 8, 'DESCRIPTIONsss', '2023-03-18 11:47:41', '2023-03-19 12:28:59'),
(197, 8, 'Milling Grain', 4, 9, 'The description for example process of milling grain', '2023-03-18 11:42:39', '2023-03-18 11:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `detail` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(5, 'Checklist', 'This SOP is for checklists.', '2023-03-14 08:44:42', '2023-03-16 05:11:42'),
(4, 'Process', 'This SOP is for process purposes.', '2023-03-14 08:43:55', '2023-03-14 08:43:55'),
(6, 'Document', 'This SOP is for Documents.', '2023-03-14 08:45:15', '2023-03-14 08:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `sur_name` varchar(191) NOT NULL,
  `email` varchar(128) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `company` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `sur_name`, `email`, `email_verified_at`, `company`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tabi', 'abbasi', 'admin@admin.com', NULL, 'OBS', '$2y$10$fujqm6T8CrCfKkNZGRNYGO7LHo7eLUoL8AnXzXWqGGnaIscQLWHB.', NULL, '2023-03-07 05:38:44', '2023-03-07 05:38:44'),
(2, 'tabi', 'abbasi', 'tabi@gmail.com', NULL, 'obs', '$2y$10$fujqm6T8CrCfKkNZGRNYGO7LHo7eLUoL8AnXzXWqGGnaIscQLWHB.', NULL, '2023-03-13 01:46:12', '2023-03-13 01:46:12'),
(3, 'tabi', 'abbasi', 'sdds@gmail.com', NULL, 'obs', '$2y$10$1nZGmUVmpxTbTgs.J6aPMe6XB7e.fcgplKPLGTHV1L5SvUqwpZJVy', NULL, '2023-03-13 01:46:33', '2023-03-13 01:46:33'),
(8, 'test by', 'junaid', 'test@test.com', NULL, 'the Abc Sharaab Companay', '$2y$10$YZuzjVpS153REnsjVnhA/.GxKdy.Q5mcYSTeVfssiiCjoa.Na5RwG', '3juObh3lu8MCHwwD9cQu4PvHOwqIrhR6Go29fYM8IghyIBnAg0kkYDv98VpX', '2023-03-15 07:47:05', '2023-03-15 07:47:05'),
(7, 'test1', 'test1', 'test@email.com', NULL, 'OBS', '$2y$10$D4Cv3RGxLbnXZk3J.535Yeb8ljDLN4oecg7/dSVEaPa/jwCDmRQHu', NULL, '2023-03-15 07:45:25', '2023-03-15 07:45:25'),
(9, 'test2', 'test2', 'test2@email.com', NULL, 'OBS', '$2y$10$yX5w4uPxAyot6SqWVQHRgeOFe9WUOsgq8yDWYZwvsbMy/1JzTEw7O', NULL, '2023-03-15 08:27:21', '2023-03-15 08:27:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop_steps`
--
ALTER TABLE `sop_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_o_p_s`
--
ALTER TABLE `s_o_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sop_steps`
--
ALTER TABLE `sop_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `s_o_p_s`
--
ALTER TABLE `s_o_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

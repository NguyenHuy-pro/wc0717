-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2016 at 08:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wc0717`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_09_162202_create_wc_fruit_knowledges_table', 1),
('2016_05_09_164142_create_wc_fruit_types_table', 2),
('2016_05_09_164804_create_wc_fruit_fruits_table', 3),
('2016_05_10_120749_create_wc_residents_table', 4),
('2016_05_10_121930_create_wc_countries_table', 5),
('2016_05_10_122513_create_wc_province_types_table', 6),
('2016_05_10_123129_create_wc_provinces_table', 7),
('2016_05_10_124832_create_wc_districts_table', 8),
('2016_05_10_125652_create_wc_fruit_districts_table', 9),
('2016_05_10_130708_create_wc_fruit_imgs_table', 10),
('2016_05_10_132120_create_wc_fruit_articles_table', 11),
('2016_05_10_133852_create_wc_fruit_knowledge_articles_table', 12),
('2016_05_10_141617_create_wc_fruit_article_assesses_table', 13),
('2016_05_10_142001_create_wc_fruit_article_likes_table', 14),
('2016_05_10_142407_create_wc_fruit_article_visits_table', 15),
('2016_05_10_142737_create_wc_fruit_article_comments_table', 16),
('2016_05_10_143057_create_wc_fruit_article_comment_likes_table', 17),
('2016_05_10_144958_create_wc_fruit_asks_table', 18),
('2016_05_10_145803_create_wc_fruit_article_answers_table', 19),
('2016_05_10_150412_create_wc_fruit_answer_likes_table', 20),
('2016_05_10_151038_create_wc_fruit_answer_assesses_table', 21),
('2016_05_10_164702_create_wc_fruit_suppliers_table', 22),
('2016_05_10_165638_create_wc_fruit_supplier_imgs_table', 23),
('2016_05_10_170452_create_wc_fruit_supplier_visits_table', 24),
('2016_05_10_170759_create_wc_fruit_supplier_likes_table', 25),
('2016_05_10_171010_create_wc_fruit_supplier_comments_table', 26),
('2016_05_10_171514_create_wc_fruit_supplier_comment_likes_table', 27),
('2016_05_10_175300_create_wc_relations_table', 28),
('2016_05_10_175440_create_wc_fruit_posts_table', 29),
('2016_05_10_180110_create_wc_fruit_post_imgs_table', 30),
('2016_05_10_145803_create_wc_fruit_answers_table', 31),
('2016_05_12_134222_create_wc_fruit_post_likes_table', 32),
('2016_05_12_134616_create_wc_fruit_post_comments_table', 33),
('2016_05_12_135415_create_wc_fruit_post_comment_likes_table', 34),
('2016_05_14_122805_create_wc_badinfos_table', 35),
('2016_05_14_123531_create_wc_fruit_post_reports_table', 36),
('2016_05_14_125531_create_wc_fruit_post_notifies_table', 37),
('2016_05_14_130117_create_wc_fruit_article_reports_table', 38),
('2016_05_14_130117_create_wc_fruit_article_notifies_table', 39),
('2016_05_16_145733_create_wc_fruit_type_articles_table', 40),
('2016_08_14_050005_create_wc_fruit_supplier_notifies_table', 41),
('2016_08_14_051832_create_wc_fruit_supplier_notifies_table', 42),
('2016_08_14_173530_create_wc_departments_table', 43),
('2016_08_14_175946_create_wc_staffs_table', 44),
('2016_08_14_181353_create_wc_staff_accesses_table', 45);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_bad_infos`
--

CREATE TABLE `wc_bad_infos` (
  `badInfo_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_countries`
--

CREATE TABLE `wc_countries` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `nameCode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `flagImage` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `moneyUnit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wc_countries`
--

INSERT INTO `wc_countries` (`country_id`, `nameCode`, `name`, `flagImage`, `moneyUnit`, `status`, `action`, `dateAdded`) VALUES
(1, 'VN', 'Viêt Nam', 'viet-nam.png', 'VND', 1, 1, '2016-08-24 16:24:29'),
(2, 'US', 'United States', 'united-states.png', 'USD', 1, 1, '2016-08-27 17:27:07'),
(3, 'UK', 'UNITED KINGDOM', 'UNITED KINGDOM12160084228.png', 'GBP', 0, 0, '2016-08-28 11:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `wc_departments`
--

CREATE TABLE `wc_departments` (
  `department_id` int(10) UNSIGNED NOT NULL,
  `nameCode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wc_departments`
--

INSERT INTO `wc_departments` (`department_id`, `nameCode`, `name`, `status`) VALUES
(1, 'WCSYS', 'System', 1),
(2, 'WCBUS', 'Business', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wc_districts`
--

CREATE TABLE `wc_districts` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `defaultCenter` tinyint(4) NOT NULL DEFAULT '0',
  `buildWc` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `province_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wc_districts`
--

INSERT INTO `wc_districts` (`district_id`, `name`, `defaultCenter`, `buildWc`, `status`, `action`, `province_id`, `dateAdded`) VALUES
(1, 'Vũng Liêm', 0, 0, 1, 1, 1, '2016-09-10 18:10:00'),
(2, 'Bình Minh', 0, 0, 1, 1, 1, '2016-09-10 18:10:11'),
(3, 'Mang Thít', 0, 0, 1, 1, 1, '2016-09-10 18:10:27'),
(4, 'Long Hồ', 0, 0, 1, 1, 1, '2016-09-10 18:10:39'),
(5, 'Châu Thành', 0, 0, 1, 1, 5, '2016-09-10 18:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_answers`
--

CREATE TABLE `wc_fruit_answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `ask_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_answer_assesses`
--

CREATE TABLE `wc_fruit_answer_assesses` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `point` tinyint(4) NOT NULL DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_answer_likes`
--

CREATE TABLE `wc_fruit_answer_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_articles`
--

CREATE TABLE `wc_fruit_articles` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `codeName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sourceArticle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  `confirm` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_assesses`
--

CREATE TABLE `wc_fruit_article_assesses` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `point` tinyint(4) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_comments`
--

CREATE TABLE `wc_fruit_article_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED DEFAULT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_comment_likes`
--

CREATE TABLE `wc_fruit_article_comment_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `comment_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_likes`
--

CREATE TABLE `wc_fruit_article_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `article_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_notifies`
--

CREATE TABLE `wc_fruit_article_notifies` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_article_visits`
--

CREATE TABLE `wc_fruit_article_visits` (
  `visit_id` int(10) UNSIGNED NOT NULL,
  `accessIP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `resident_id` int(10) UNSIGNED DEFAULT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_asks`
--

CREATE TABLE `wc_fruit_asks` (
  `ask_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_districts`
--

CREATE TABLE `wc_fruit_districts` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `fruit_id` int(10) UNSIGNED NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_fruits`
--

CREATE TABLE `wc_fruit_fruits` (
  `fruit_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `type_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_imgs`
--

CREATE TABLE `wc_fruit_imgs` (
  `img_id` int(10) UNSIGNED NOT NULL,
  `smallImage` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fullImage` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `fruit_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_knowledges`
--

CREATE TABLE `wc_fruit_knowledges` (
  `knowledge_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_knowledge_articles`
--

CREATE TABLE `wc_fruit_knowledge_articles` (
  `knowledge_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_posts`
--

CREATE TABLE `wc_fruit_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `relation_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_comments`
--

CREATE TABLE `wc_fruit_post_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_comment_likes`
--

CREATE TABLE `wc_fruit_post_comment_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `comment_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_imgs`
--

CREATE TABLE `wc_fruit_post_imgs` (
  `img_id` int(10) UNSIGNED NOT NULL,
  `smallImage` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fullImage` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_likes`
--

CREATE TABLE `wc_fruit_post_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_notifies`
--

CREATE TABLE `wc_fruit_post_notifies` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_post_reports`
--

CREATE TABLE `wc_fruit_post_reports` (
  `report_id` int(10) UNSIGNED NOT NULL,
  `accuracy` tinyint(4) NOT NULL DEFAULT '0',
  `confirm` tinyint(4) NOT NULL DEFAULT '0',
  `action` tinyint(4) NOT NULL DEFAULT '0',
  `post_id` int(10) UNSIGNED NOT NULL,
  `badInfo_id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED NOT NULL,
  `dateConfirm` datetime NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_suppliers`
--

CREATE TABLE `wc_fruit_suppliers` (
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `nameCode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_comments`
--

CREATE TABLE `wc_fruit_supplier_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `resident_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_comment_likes`
--

CREATE TABLE `wc_fruit_supplier_comment_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `comment_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_imgs`
--

CREATE TABLE `wc_fruit_supplier_imgs` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `smallImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_likes`
--

CREATE TABLE `wc_fruit_supplier_likes` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_notifies`
--

CREATE TABLE `wc_fruit_supplier_notifies` (
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_supplier_visits`
--

CREATE TABLE `wc_fruit_supplier_visits` (
  `visit_id` int(10) UNSIGNED NOT NULL,
  `accessIP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `resident_id` int(10) UNSIGNED DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `dateVisit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_types`
--

CREATE TABLE `wc_fruit_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_fruit_type_articles`
--

CREATE TABLE `wc_fruit_type_articles` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_provinces`
--

CREATE TABLE `wc_provinces` (
  `province_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `defaultCenter` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `country_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wc_provinces`
--

INSERT INTO `wc_provinces` (`province_id`, `name`, `avatar`, `defaultCenter`, `status`, `action`, `country_id`, `type_id`, `dateAdded`) VALUES
(1, 'Vĩnh Long', '', 0, 0, 1, 1, 2, '2016-09-08 15:08:43'),
(2, 'Hồ Chí Minh', '', 0, 1, 1, 1, 1, '2016-09-08 15:08:09'),
(3, 'Cần thơ', '', 0, 1, 1, 1, 1, '2016-09-08 15:08:50'),
(4, 'Bến Tre', 'ben-tre17160090410.png', 0, 1, 1, 1, 2, '2016-09-08 15:08:55'),
(5, 'Tiền Giang', '', 0, 1, 1, 1, 2, '2016-09-08 15:08:00'),
(6, 'Cà Mau', '', 0, 1, 1, 1, 2, '2016-09-10 17:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `wc_province_types`
--

CREATE TABLE `wc_province_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wc_province_types`
--

INSERT INTO `wc_province_types` (`type_id`, `name`, `status`) VALUES
(1, 'City', 1),
(2, 'Province', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wc_relations`
--

CREATE TABLE `wc_relations` (
  `relation_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_residents`
--

CREATE TABLE `wc_residents` (
  `resident_id` int(10) UNSIGNED NOT NULL,
  `nameCode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `confirm` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_staffs`
--

CREATE TABLE `wc_staffs` (
  `staff_id` int(10) UNSIGNED NOT NULL,
  `nameCode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '2',
  `newInfo` tinyint(4) NOT NULL DEFAULT '1',
  `confirm` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL,
  `staffAdd_id` int(10) UNSIGNED DEFAULT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wc_staff_accesses`
--

CREATE TABLE `wc_staff_accesses` (
  `access_id` int(10) UNSIGNED NOT NULL,
  `accessIP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `accessStatus` tinyint(4) NOT NULL DEFAULT '1',
  `dateAdded` datetime NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '1',
  `staff_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wc_bad_infos`
--
ALTER TABLE `wc_bad_infos`
  ADD PRIMARY KEY (`badInfo_id`);

--
-- Indexes for table `wc_countries`
--
ALTER TABLE `wc_countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `wc_countries_codename_unique` (`nameCode`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `wc_departments`
--
ALTER TABLE `wc_departments`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `wc_departments_namecode_unique` (`nameCode`),
  ADD UNIQUE KEY `wc_departments_name_unique` (`name`);

--
-- Indexes for table `wc_districts`
--
ALTER TABLE `wc_districts`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `wc_districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `wc_fruit_answers`
--
ALTER TABLE `wc_fruit_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `wc_fruit_article_answers_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_answers_ask_id_foreign` (`ask_id`);

--
-- Indexes for table `wc_fruit_answer_assesses`
--
ALTER TABLE `wc_fruit_answer_assesses`
  ADD KEY `wc_fruit_answer_assesses_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_answer_assesses_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `wc_fruit_answer_likes`
--
ALTER TABLE `wc_fruit_answer_likes`
  ADD KEY `wc_fruit_answer_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_answer_likes_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `wc_fruit_articles`
--
ALTER TABLE `wc_fruit_articles`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `wc_fruit_articles_codename_unique` (`codeName`),
  ADD KEY `wc_fruit_articles_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_article_assesses`
--
ALTER TABLE `wc_fruit_article_assesses`
  ADD KEY `wc_fruit_article_assesses_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_assesses_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_fruit_article_comments`
--
ALTER TABLE `wc_fruit_article_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `wc_fruit_article_comments_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_fruit_article_comment_likes`
--
ALTER TABLE `wc_fruit_article_comment_likes`
  ADD KEY `wc_fruit_article_comment_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_comment_likes_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `wc_fruit_article_likes`
--
ALTER TABLE `wc_fruit_article_likes`
  ADD KEY `wc_fruit_article_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_likes_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_fruit_article_notifies`
--
ALTER TABLE `wc_fruit_article_notifies`
  ADD KEY `wc_fruit_article_notifies_article_id_foreign` (`article_id`),
  ADD KEY `wc_fruit_article_notifies_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_article_visits`
--
ALTER TABLE `wc_fruit_article_visits`
  ADD PRIMARY KEY (`visit_id`),
  ADD KEY `wc_fruit_article_visits_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_article_visits_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_fruit_asks`
--
ALTER TABLE `wc_fruit_asks`
  ADD PRIMARY KEY (`ask_id`),
  ADD KEY `wc_fruit_asks_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_asks_type_id_foreign` (`type_id`);

--
-- Indexes for table `wc_fruit_districts`
--
ALTER TABLE `wc_fruit_districts`
  ADD KEY `wc_fruit_districts_district_id_foreign` (`district_id`),
  ADD KEY `wc_fruit_districts_fruit_id_foreign` (`fruit_id`);

--
-- Indexes for table `wc_fruit_fruits`
--
ALTER TABLE `wc_fruit_fruits`
  ADD PRIMARY KEY (`fruit_id`),
  ADD UNIQUE KEY `wc_fruit_fruits_name_unique` (`name`),
  ADD KEY `wc_fruit_fruits_type_id_foreign` (`type_id`);

--
-- Indexes for table `wc_fruit_imgs`
--
ALTER TABLE `wc_fruit_imgs`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `wc_fruit_imgs_fruit_id_foreign` (`fruit_id`);

--
-- Indexes for table `wc_fruit_knowledges`
--
ALTER TABLE `wc_fruit_knowledges`
  ADD PRIMARY KEY (`knowledge_id`),
  ADD UNIQUE KEY `wc_fruit_knowledges_name_unique` (`name`);

--
-- Indexes for table `wc_fruit_knowledge_articles`
--
ALTER TABLE `wc_fruit_knowledge_articles`
  ADD KEY `wc_fruit_knowledge_articles_knowledge_id_foreign` (`knowledge_id`),
  ADD KEY `wc_fruit_knowledge_articles_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_fruit_posts`
--
ALTER TABLE `wc_fruit_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `wc_fruit_posts_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_posts_relation_id_foreign` (`relation_id`);

--
-- Indexes for table `wc_fruit_post_comments`
--
ALTER TABLE `wc_fruit_post_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `wc_fruit_post_comments_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_post_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `wc_fruit_post_comment_likes`
--
ALTER TABLE `wc_fruit_post_comment_likes`
  ADD KEY `wc_fruit_post_comment_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_post_comment_likes_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `wc_fruit_post_imgs`
--
ALTER TABLE `wc_fruit_post_imgs`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `wc_fruit_post_imgs_post_id_foreign` (`post_id`);

--
-- Indexes for table `wc_fruit_post_likes`
--
ALTER TABLE `wc_fruit_post_likes`
  ADD KEY `wc_fruit_post_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_post_likes_post_id_foreign` (`post_id`);

--
-- Indexes for table `wc_fruit_post_notifies`
--
ALTER TABLE `wc_fruit_post_notifies`
  ADD KEY `wc_fruit_post_notifies_post_id_foreign` (`post_id`),
  ADD KEY `wc_fruit_post_notifies_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_post_reports`
--
ALTER TABLE `wc_fruit_post_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `wc_fruit_post_reports_post_id_foreign` (`post_id`),
  ADD KEY `wc_fruit_post_reports_badinfo_id_foreign` (`badInfo_id`),
  ADD KEY `wc_fruit_post_reports_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_suppliers`
--
ALTER TABLE `wc_fruit_suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `wc_fruit_suppliers_codename_unique` (`nameCode`),
  ADD KEY `wc_fruit_suppliers_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_supplier_comments`
--
ALTER TABLE `wc_fruit_supplier_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `wc_fruit_supplier_comments_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_supplier_comments_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `wc_fruit_supplier_comment_likes`
--
ALTER TABLE `wc_fruit_supplier_comment_likes`
  ADD KEY `wc_fruit_supplier_comment_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_supplier_comment_likes_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `wc_fruit_supplier_imgs`
--
ALTER TABLE `wc_fruit_supplier_imgs`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `wc_fruit_supplier_imgs_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `wc_fruit_supplier_likes`
--
ALTER TABLE `wc_fruit_supplier_likes`
  ADD KEY `wc_fruit_supplier_likes_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_supplier_likes_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `wc_fruit_supplier_notifies`
--
ALTER TABLE `wc_fruit_supplier_notifies`
  ADD KEY `wc_fruit_supplier_notifies_supplier_id_foreign` (`supplier_id`),
  ADD KEY `wc_fruit_supplier_notifies_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `wc_fruit_supplier_visits`
--
ALTER TABLE `wc_fruit_supplier_visits`
  ADD PRIMARY KEY (`visit_id`),
  ADD KEY `wc_fruit_supplier_visits_resident_id_foreign` (`resident_id`),
  ADD KEY `wc_fruit_supplier_visits_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `wc_fruit_types`
--
ALTER TABLE `wc_fruit_types`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `wc_fruit_types_name_unique` (`name`);

--
-- Indexes for table `wc_fruit_type_articles`
--
ALTER TABLE `wc_fruit_type_articles`
  ADD KEY `wc_fruit_type_articles_type_id_foreign` (`type_id`),
  ADD KEY `wc_fruit_type_articles_article_id_foreign` (`article_id`);

--
-- Indexes for table `wc_provinces`
--
ALTER TABLE `wc_provinces`
  ADD PRIMARY KEY (`province_id`),
  ADD KEY `wc_provinces_country_id_foreign` (`country_id`),
  ADD KEY `wc_provinces_type_id_foreign` (`type_id`);

--
-- Indexes for table `wc_province_types`
--
ALTER TABLE `wc_province_types`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `wc_province_types_name_unique` (`name`);

--
-- Indexes for table `wc_relations`
--
ALTER TABLE `wc_relations`
  ADD PRIMARY KEY (`relation_id`);

--
-- Indexes for table `wc_residents`
--
ALTER TABLE `wc_residents`
  ADD PRIMARY KEY (`resident_id`),
  ADD UNIQUE KEY `wc_residents_codename_unique` (`nameCode`),
  ADD UNIQUE KEY `wc_residents_account_unique` (`account`);

--
-- Indexes for table `wc_staffs`
--
ALTER TABLE `wc_staffs`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `wc_staffs_namecode_unique` (`nameCode`),
  ADD UNIQUE KEY `wc_staffs_alias_unique` (`alias`),
  ADD UNIQUE KEY `wc_staffs_account_unique` (`account`),
  ADD KEY `wc_staffs_staffadd_id_foreign` (`staffAdd_id`),
  ADD KEY `wc_staffs_department_id_foreign` (`department_id`),
  ADD KEY `wc_staffs_district_id_foreign` (`district_id`);

--
-- Indexes for table `wc_staff_accesses`
--
ALTER TABLE `wc_staff_accesses`
  ADD PRIMARY KEY (`access_id`),
  ADD KEY `wc_staff_accesses_staff_id_foreign` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_bad_infos`
--
ALTER TABLE `wc_bad_infos`
  MODIFY `badInfo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_countries`
--
ALTER TABLE `wc_countries`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wc_departments`
--
ALTER TABLE `wc_departments`
  MODIFY `department_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wc_districts`
--
ALTER TABLE `wc_districts`
  MODIFY `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wc_fruit_answers`
--
ALTER TABLE `wc_fruit_answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_articles`
--
ALTER TABLE `wc_fruit_articles`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_article_comments`
--
ALTER TABLE `wc_fruit_article_comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_article_visits`
--
ALTER TABLE `wc_fruit_article_visits`
  MODIFY `visit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_asks`
--
ALTER TABLE `wc_fruit_asks`
  MODIFY `ask_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_fruits`
--
ALTER TABLE `wc_fruit_fruits`
  MODIFY `fruit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_imgs`
--
ALTER TABLE `wc_fruit_imgs`
  MODIFY `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_knowledges`
--
ALTER TABLE `wc_fruit_knowledges`
  MODIFY `knowledge_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_posts`
--
ALTER TABLE `wc_fruit_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_post_comments`
--
ALTER TABLE `wc_fruit_post_comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_post_imgs`
--
ALTER TABLE `wc_fruit_post_imgs`
  MODIFY `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_post_reports`
--
ALTER TABLE `wc_fruit_post_reports`
  MODIFY `report_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_suppliers`
--
ALTER TABLE `wc_fruit_suppliers`
  MODIFY `supplier_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_supplier_comments`
--
ALTER TABLE `wc_fruit_supplier_comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_supplier_imgs`
--
ALTER TABLE `wc_fruit_supplier_imgs`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_supplier_visits`
--
ALTER TABLE `wc_fruit_supplier_visits`
  MODIFY `visit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_fruit_types`
--
ALTER TABLE `wc_fruit_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_provinces`
--
ALTER TABLE `wc_provinces`
  MODIFY `province_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wc_province_types`
--
ALTER TABLE `wc_province_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wc_relations`
--
ALTER TABLE `wc_relations`
  MODIFY `relation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_residents`
--
ALTER TABLE `wc_residents`
  MODIFY `resident_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_staffs`
--
ALTER TABLE `wc_staffs`
  MODIFY `staff_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wc_staff_accesses`
--
ALTER TABLE `wc_staff_accesses`
  MODIFY `access_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `wc_districts`
--
ALTER TABLE `wc_districts`
  ADD CONSTRAINT `wc_districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `wc_provinces` (`province_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_answers`
--
ALTER TABLE `wc_fruit_answers`
  ADD CONSTRAINT `wc_fruit_article_answers_ask_id_foreign` FOREIGN KEY (`ask_id`) REFERENCES `wc_fruit_asks` (`ask_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_answers_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_answer_assesses`
--
ALTER TABLE `wc_fruit_answer_assesses`
  ADD CONSTRAINT `wc_fruit_answer_assesses_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `wc_fruit_answers` (`answer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_answer_assesses_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_answer_likes`
--
ALTER TABLE `wc_fruit_answer_likes`
  ADD CONSTRAINT `wc_fruit_answer_likes_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `wc_fruit_answers` (`answer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_answer_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_articles`
--
ALTER TABLE `wc_fruit_articles`
  ADD CONSTRAINT `wc_fruit_articles_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_assesses`
--
ALTER TABLE `wc_fruit_article_assesses`
  ADD CONSTRAINT `wc_fruit_article_assesses_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_assesses_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_comments`
--
ALTER TABLE `wc_fruit_article_comments`
  ADD CONSTRAINT `wc_fruit_article_comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_comments_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_comment_likes`
--
ALTER TABLE `wc_fruit_article_comment_likes`
  ADD CONSTRAINT `wc_fruit_article_comment_likes_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `wc_fruit_article_comments` (`comment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_comment_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_likes`
--
ALTER TABLE `wc_fruit_article_likes`
  ADD CONSTRAINT `wc_fruit_article_likes_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_notifies`
--
ALTER TABLE `wc_fruit_article_notifies`
  ADD CONSTRAINT `wc_fruit_article_notifies_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_notifies_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_article_visits`
--
ALTER TABLE `wc_fruit_article_visits`
  ADD CONSTRAINT `wc_fruit_article_visits_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_article_visits_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_asks`
--
ALTER TABLE `wc_fruit_asks`
  ADD CONSTRAINT `wc_fruit_asks_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_asks_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `wc_fruit_types` (`type_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_districts`
--
ALTER TABLE `wc_fruit_districts`
  ADD CONSTRAINT `wc_fruit_districts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `wc_districts` (`district_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_districts_fruit_id_foreign` FOREIGN KEY (`fruit_id`) REFERENCES `wc_fruit_fruits` (`fruit_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_fruits`
--
ALTER TABLE `wc_fruit_fruits`
  ADD CONSTRAINT `wc_fruit_fruits_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `wc_fruit_types` (`type_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_imgs`
--
ALTER TABLE `wc_fruit_imgs`
  ADD CONSTRAINT `wc_fruit_imgs_fruit_id_foreign` FOREIGN KEY (`fruit_id`) REFERENCES `wc_fruit_fruits` (`fruit_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_knowledge_articles`
--
ALTER TABLE `wc_fruit_knowledge_articles`
  ADD CONSTRAINT `wc_fruit_knowledge_articles_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_knowledge_articles_knowledge_id_foreign` FOREIGN KEY (`knowledge_id`) REFERENCES `wc_fruit_knowledges` (`knowledge_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_posts`
--
ALTER TABLE `wc_fruit_posts`
  ADD CONSTRAINT `wc_fruit_posts_relation_id_foreign` FOREIGN KEY (`relation_id`) REFERENCES `wc_relations` (`relation_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_posts_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_comments`
--
ALTER TABLE `wc_fruit_post_comments`
  ADD CONSTRAINT `wc_fruit_post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `wc_fruit_posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_comments_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_comment_likes`
--
ALTER TABLE `wc_fruit_post_comment_likes`
  ADD CONSTRAINT `wc_fruit_post_comment_likes_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `wc_fruit_post_comments` (`comment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_comment_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_imgs`
--
ALTER TABLE `wc_fruit_post_imgs`
  ADD CONSTRAINT `wc_fruit_post_imgs_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `wc_fruit_posts` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_likes`
--
ALTER TABLE `wc_fruit_post_likes`
  ADD CONSTRAINT `wc_fruit_post_likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `wc_fruit_posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_notifies`
--
ALTER TABLE `wc_fruit_post_notifies`
  ADD CONSTRAINT `wc_fruit_post_notifies_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `wc_fruit_posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_notifies_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_post_reports`
--
ALTER TABLE `wc_fruit_post_reports`
  ADD CONSTRAINT `wc_fruit_post_reports_badinfo_id_foreign` FOREIGN KEY (`badinfo_id`) REFERENCES `wc_bad_infos` (`badinfo_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_reports_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `wc_fruit_posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_post_reports_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_suppliers`
--
ALTER TABLE `wc_fruit_suppliers`
  ADD CONSTRAINT `wc_fruit_suppliers_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_comments`
--
ALTER TABLE `wc_fruit_supplier_comments`
  ADD CONSTRAINT `wc_fruit_supplier_comments_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_supplier_comments_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `wc_fruit_suppliers` (`supplier_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_comment_likes`
--
ALTER TABLE `wc_fruit_supplier_comment_likes`
  ADD CONSTRAINT `wc_fruit_supplier_comment_likes_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `wc_fruit_supplier_comments` (`comment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_supplier_comment_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_imgs`
--
ALTER TABLE `wc_fruit_supplier_imgs`
  ADD CONSTRAINT `wc_fruit_supplier_imgs_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `wc_fruit_suppliers` (`supplier_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_likes`
--
ALTER TABLE `wc_fruit_supplier_likes`
  ADD CONSTRAINT `wc_fruit_supplier_likes_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_supplier_likes_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `wc_fruit_suppliers` (`supplier_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_notifies`
--
ALTER TABLE `wc_fruit_supplier_notifies`
  ADD CONSTRAINT `wc_fruit_supplier_notifies_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_supplier_notifies_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `wc_fruit_suppliers` (`supplier_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_supplier_visits`
--
ALTER TABLE `wc_fruit_supplier_visits`
  ADD CONSTRAINT `wc_fruit_supplier_visits_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `wc_residents` (`resident_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_supplier_visits_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `wc_fruit_suppliers` (`supplier_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_fruit_type_articles`
--
ALTER TABLE `wc_fruit_type_articles`
  ADD CONSTRAINT `wc_fruit_type_articles_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `wc_fruit_articles` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_fruit_type_articles_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `wc_fruit_types` (`type_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_provinces`
--
ALTER TABLE `wc_provinces`
  ADD CONSTRAINT `wc_provinces_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `wc_countries` (`country_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_provinces_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `wc_province_types` (`type_id`) ON DELETE CASCADE;

--
-- Constraints for table `wc_staffs`
--
ALTER TABLE `wc_staffs`
  ADD CONSTRAINT `wc_staffs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `wc_departments` (`department_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_staffs_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `wc_districts` (`district_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wc_staffs_staffadd_id_foreign` FOREIGN KEY (`staffAdd_id`) REFERENCES `wc_staffs` (`staff_id`);

--
-- Constraints for table `wc_staff_accesses`
--
ALTER TABLE `wc_staff_accesses`
  ADD CONSTRAINT `wc_staff_accesses_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `wc_staffs` (`staff_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

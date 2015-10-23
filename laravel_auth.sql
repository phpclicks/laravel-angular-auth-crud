-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2015 at 03:31 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_auth`
--
CREATE DATABASE IF NOT EXISTS `laravel_auth` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel_auth`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `description`, `status`, `updated_at`, `created_at`) VALUES
(1, 'sad edit', '22.00000', 22, 'asdsd sd asd', 1, '2015-10-23 10:21:13', '2015-10-09 09:04:11'),
(2, 'sad', '22.00000', 22, 'dsfsdf', 0, '2015-10-09 09:27:54', '2015-10-09 09:27:54'),
(3, 'sad', '22.00000', 22, 'asdasd', 0, '2015-10-09 09:29:29', '2015-10-09 09:29:29'),
(4, 'sad edit', '23.00000', 11, 'wzczxzxzx', 1, '2015-10-22 07:53:44', '2015-10-09 09:33:48'),
(5, 'Yashi_From_S3', '22.00000', 22, 'sadasad asdsad', 1, '2015-10-23 07:45:31', '2015-10-23 07:45:31'),
(6, 'sad', '22.00000', 22, 'sfsdfds', 1, '2015-10-23 09:51:18', '2015-10-23 09:51:18'),
(7, 'Fiaz', '22.00000', 51, 'sadasd a asd ad asd', 1, '2015-10-23 10:07:43', '2015-10-23 10:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `country`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Fiaz Ahmad', '0', 'pk', 'admin@gmail.com', '$2y$10$QGspdrz6CVHml1qsiRv4T.F9aSAkBpePBhUA/aDRySYEYJguG1FT6', 'MyghBUxNkr8YtG6JCjAhpmZCASjaw5slZYqHwqxQurjQhSlNmX2Lyg7vlDwn', '2015-09-23 05:56:03', '2015-10-09 07:06:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

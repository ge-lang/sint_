-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Gegenereerd op: 13 aug 2020 om 01:17
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sint`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `brands`
--

INSERT INTO `brands` (`id`, `title`) VALUES
(1, 'Samsung_'),
(4, 'Hawaii');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `title`, `sort_order`, `status`) VALUES
(1, 'Bentley_', 0, 0),
(2, 'Lamborghini', 0, 0),
(3, 'Bugatti', 0, 0),
(4, 'Maserati', 0, 0),
(5, 'Ferrarri', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comment`
--

INSERT INTO `comment` (`id`, `product_id`, `author`, `body`) VALUES
(2, 1, 'ja', 'tessssttttttttttttttttttt'),
(3, 1, 'on', 'ooooooonnnnnnnnnnnnn'),
(4, 3, 'Barsic', 'barsik love this'),
(9, 4, 'Iana', 'mmmm'),
(10, 4, 'Iana', 'mmmm'),
(12, 3, 'ik', 'kkk'),
(13, 3, 'lll', 'mmm');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `categorie_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `availability` int(11) NOT NULL,
  `brand_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_recommended` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prijs` decimal(8,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie_id`),
  KEY `code` (`code`),
  KEY `brand` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `code`, `categorie_id`, `title`, `availability`, `brand_id`, `is_new`, `is_recommended`, `description`, `prijs`, `foto`, `type`, `size`) VALUES
(1, '11', '1', 'Lamborghini Aventador', 0, '', 0, 0, '', '666666', 'lamborghini-aventador-xs.jpg', '', 0),
(2, '22', '1', 'Lamborghini Diablo', 0, '', 0, 0, '<p>&nbsp;Italiaanse sportautofabrikant Lamborghini</p>', '5000000', 'lamborghini-diablo-xs.jpg', '', 0),
(3, '33', '1', 'Lamborghini Gallardo', 0, '', 0, 0, 'De luxe Italiaanse autofabrikant Lamborghini ', '5000000', 'lamborghini-gallardo-xs.jpg', '', 0),
(4, '44', '1', 'Lamborghini Huracan', 0, '', 0, 0, 'moooooooooooooooooo', '5000000', 'lamborghini-huracan-xs.jpg', '', 0),
(5, '55', '1', 'Lamborghini Reventon', 0, '', 0, 0, '', '5000000', 'lamborghini-reventon-xs.jpg', '', 0),
(6, '66', '1', 'Lamborghini Countach', 0, '', 0, 0, '', '5000000', 'lamborghini-countach-xs.jpg', '', 0),
(7, '77', '2', 'Bentley Bentayga', 0, '', 0, 0, '', '5000000', 'bentley-bentayga.jpg', '', 0),
(8, '88', '2', 'Bentley Continental', 0, '', 0, 0, '', '5000000', 'bentley-continental.jpg', '', 0),
(9, '99', '2', 'Bentley Continental GT', 0, '', 0, 0, '', '5000000', 'bentley-continental-gt.jpg', '', 0),
(10, '100', '2', 'Bentley Flying-spur', 0, '', 0, 0, 'wwwwwww', '5000000', 'bentley-flying-spur.jpg', '', 0),
(37, '', '', 'fff', 0, '', 0, 0, '', '0', 'client-5.png', 'image/png', 31740),
(38, '', '', 'jlm', 0, '', 0, 0, '', '0', 'action-img.jpg', 'image/jpeg', 224179),
(39, '55555', '', 'jkkkk', 0, '', 0, 0, 'looooo', '90', '11.jpg', 'image/jpeg', 60145),
(41, '66666666', '', '66666666666666666', 0, '6666666666666', 0, 0, '', '99999999', 'banner1.jpg', 'image/jpeg', 294482),
(43, '80', 'Bentley', '', 0, '', 0, 0, 'qqqqqqqqqqqq', '0', 'apple131_600x403_dbf.png', 'image/png', 151455),
(44, '', '', '', 0, '', 0, 0, '', '0', 'Renewable-Solar-Energy.jpg', 'image/jpeg', 310931),
(45, '', '', '', 0, '', 0, 0, '', '0', 'solar.png', 'image/png', 95250),
(46, '', '', '', 0, '', 0, 0, '<p>description</p>', '0', '10.jpeg', 'image/jpeg', 55289),
(47, '10000', '', 'a', 0, '555', 0, 0, '<p>jkkiu</p>', '8', '2.jpeg', 'image/jpeg', 34416);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_order`
--

DROP TABLE IF EXISTS `product_order`;
CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(1, 'admin', '2222', 'Evgeniia', 'Proskuriakova', '3.jpg'),
(3, 'luna', '2222', 'Valerie', 'Luna', 'planet1.png'),
(11, 'evva', '1111', 'Evgeniia', 'Proskuriakova', 'logo_evva.png'),
(12, 'Leo', '1111', 'Leopold', 'I', 'cool-wallpaper-3.jpg'),
(13, 'iana', '1111', '', '', '_1035-9216.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

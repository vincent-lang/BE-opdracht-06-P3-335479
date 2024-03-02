-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 02 mrt 2024 om 21:07
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MVCS2J2Opdracht6`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `allergeens`
--

DROP TABLE IF EXISTS `allergeens`;
CREATE TABLE IF NOT EXISTS `allergeens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `omschrijving` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `allergeens`
--

INSERT INTO `allergeens` (`id`, `naam`, `omschrijving`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 'Gluten', 'Dit product bevat gluten', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 'Gelatine', 'Dit product bevat gelatine', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 'AZO-Kleurstof', 'Dit product bevat AZO-kleurstoffen', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 'Lactose', 'Dit product bevat lactose', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 'Soja', 'Dit product bevat soja', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leveranciers`
--

DROP TABLE IF EXISTS `leveranciers`;
CREATE TABLE IF NOT EXISTS `leveranciers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contactPersoon` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `leverancierNummer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobiel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `leveranciers`
--

INSERT INTO `leveranciers` (`id`, `naam`, `contactPersoon`, `leverancierNummer`, `mobiel`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 'Venco', 'Bert van Linge', 'L1029384719', '06-28493827', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 'Astra Sweets', 'Jasper Del Monte', 'L1029284315', '06-39398734', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 'Haribo', 'Sven Stalman', 'L1029324748', '06-24383291', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 'Basset', 'Joyce Stelterberg', 'L1023845773', '06-48293823', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 'De Bron', 'Remco Veenstra', 'L1023857736', '06-34291234', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `magazijns`
--

DROP TABLE IF EXISTS `magazijns`;
CREATE TABLE IF NOT EXISTS `magazijns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `verpakkingsEenheid` int(11) NOT NULL,
  `aantalAanwezig` int(11) DEFAULT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `magazijns_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `magazijns`
--

INSERT INTO `magazijns` (`id`, `product_id`, `verpakkingsEenheid`, `aantalAanwezig`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 453, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 2, 3, 400, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 3, 5, 1, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 4, 1, 800, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 5, 3, 234, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(6, 6, 2, 345, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(7, 7, 1, 795, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(8, 8, 10, 233, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(9, 9, 3, 123, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(10, 10, 3, NULL, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(11, 11, 2, 367, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(12, 12, 1, 467, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(13, 13, 5, 20, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_naam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `product_naam`, `barcode`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 'Mintnopjes', '8719587231278', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 'Schoolkrijt', '8719587326713', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 'Honingdrop', '8719587327836', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 'Zure Beren', '8719587321441', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 'Cola Flesjes', '8719587321237', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(6, 'Turtles', '8719587322245', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(7, 'Witte Muizen', '8719587328256', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(8, 'Reuzen Slangen', '8719587325641', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(9, 'Zoute Rijen', '8719587322739', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(10, 'Winegums', '8719587327527', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(11, 'Drop Munten', '8719587322345', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(12, 'Kruis Drop', '8719587322265', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(13, 'Zoute Ruitjes', '8719587323256', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_allergeens`
--

DROP TABLE IF EXISTS `product_per_allergeens`;
CREATE TABLE IF NOT EXISTS `product_per_allergeens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `allergeen_id` bigint(20) UNSIGNED NOT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_allergeens_product_id_foreign` (`product_id`),
  KEY `product_per_allergeens_allergeen_id_foreign` (`allergeen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_allergeens`
--

INSERT INTO `product_per_allergeens` (`id`, `product_id`, `allergeen_id`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 1, 1, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 1, 3, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 3, 4, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 6, 5, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(6, 9, 2, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(7, 9, 5, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(8, 10, 2, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(9, 12, 4, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(10, 13, 1, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(11, 13, 4, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(12, 13, 5, 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_leveranciers`
--

DROP TABLE IF EXISTS `product_per_leveranciers`;
CREATE TABLE IF NOT EXISTS `product_per_leveranciers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `leverancier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `datumLevering` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aantal` int(11) NOT NULL,
  `datumEerstVolgendeLevering` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IsActief` tinyint(1) NOT NULL,
  `Opmerking` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_leveranciers_leverancier_id_foreign` (`leverancier_id`),
  KEY `product_per_leveranciers_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_leveranciers`
--

INSERT INTO `product_per_leveranciers` (`id`, `leverancier_id`, `product_id`, `datumLevering`, `aantal`, `datumEerstVolgendeLevering`, `IsActief`, `Opmerking`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-04-09', 23, '2023-04-16', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(2, 1, 1, '2023-04-18', 21, '2023-04-25', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(3, 1, 2, '2023-04-09', 12, '2023-04-16', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(4, 1, 3, '2023-04-10', 11, '2023-04-17', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(5, 2, 4, '2023-04-14', 16, '2023-04-21', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(6, 2, 4, '2023-04-21', 23, '2023-04-28', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(7, 2, 5, '2023-04-14', 45, '2023-04-21', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(8, 2, 6, '2023-04-14', 30, '2023-04-21', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(9, 3, 7, '2023-04-12', 12, '2023-04-19', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(10, 3, 7, '2023-04-19', 23, '2023-04-26', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(11, 3, 8, '2023-04-10', 12, '2023-04-17', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(12, 3, 9, '2023-04-11', 1, '2023-04-18', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(13, 4, 10, '2023-04-16', 24, '2023-04-30', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(14, 5, 11, '2023-04-10', 47, '2023-04-17', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(15, 5, 11, '2023-04-19', 60, '2023-04-26', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(16, 5, 12, '2023-04-11', 45, '', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04'),
(17, 5, 13, '2023-04-12', 23, '', 1, NULL, '2024-03-02 21:07:04', '2024-03-02 21:07:04');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `magazijns`
--
ALTER TABLE `magazijns`
  ADD CONSTRAINT `magazijns_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Beperkingen voor tabel `product_per_allergeens`
--
ALTER TABLE `product_per_allergeens`
  ADD CONSTRAINT `product_per_allergeens_allergeen_id_foreign` FOREIGN KEY (`allergeen_id`) REFERENCES `allergeens` (`id`),
  ADD CONSTRAINT `product_per_allergeens_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Beperkingen voor tabel `product_per_leveranciers`
--
ALTER TABLE `product_per_leveranciers`
  ADD CONSTRAINT `product_per_leveranciers_leverancier_id_foreign` FOREIGN KEY (`leverancier_id`) REFERENCES `leveranciers` (`id`),
  ADD CONSTRAINT `product_per_leveranciers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

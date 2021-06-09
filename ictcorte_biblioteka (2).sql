-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 12:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictcorte_biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ImePrezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biografija` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`id`, `ImePrezime`, `Biografija`, `created_at`, `updated_at`) VALUES
(1, 'Vilijam Šekspir', 'Vilijam Šekspir bio je jedan od najvećih pisaca i ..', '2021-05-28 13:37:24', '2021-05-28 13:37:24'),
(2, 'Dante Aligijeri', 'Dante je veliki italijanski pesnik, zalagao se za ...', '2021-05-28 13:37:56', '2021-05-28 13:37:56'),
(3, 'Fjodor Dostojevski', 'Dostojevski važi za jednog od najuticajnijih pisac...', '2021-05-28 13:38:19', '2021-05-28 13:38:19'),
(4, 'Lav Tolstoj', 'Sama ?injenica da je Tolstoj proglašen za najbolje...', '2021-05-28 13:38:41', '2021-05-28 13:38:41'),
(5, 'Džejms Džojs', 'Džejms Džojs je eksperimentisanjem u narativnoj te...', '2021-05-28 13:39:03', '2021-05-28 13:39:03'),
(6, 'Vilijam Fokner', 'Vilijam Fokner je jedan od najve?ih ameri?kih roma...', '2021-05-28 13:39:26', '2021-05-28 13:39:26'),
(8, 'Carls Dikens', 'Osnivac socijalnog realizma i najveci pisac viktor...', '2021-05-28 13:40:33', '2021-05-28 13:40:33'),
(10, 'Ivo Andric', 'Ivo Andric je nesumnjivo jedan od najboljih pisac ...', '2021-05-28 13:47:03', '2021-05-28 13:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `autor_knjiga`
--

CREATE TABLE `autor_knjiga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `knjiga_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autor_knjiga`
--

INSERT INTO `autor_knjiga` (`id`, `autor_id`, `knjiga_id`, `created_at`, `updated_at`) VALUES
(7, 10, 1, NULL, NULL),
(17, 3, 3, NULL, NULL),
(18, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formats`
--

CREATE TABLE `formats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formats`
--

INSERT INTO `formats` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'A0', '2021-05-28 12:58:53', '2021-05-28 12:58:53'),
(2, 'A1', '2021-05-28 12:59:02', '2021-05-28 12:59:02'),
(3, 'A2', '2021-05-28 12:59:15', '2021-05-28 12:59:15'),
(4, 'A3', '2021-05-28 12:59:23', '2021-05-28 12:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `galerijas`
--

CREATE TABLE `galerijas` (
  `id` int(11) NOT NULL,
  `knjiga_id` int(11) DEFAULT NULL,
  `foto` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `naslovna` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `galerijas`
--

INSERT INTO `galerijas` (`id`, `knjiga_id`, `foto`, `naslovna`) VALUES
(1, 3, '1623233497.jpg', b'1'),
(2, 3, '1623234065.png', b'1'),
(3, 1, '1623234569.jpg', b'1'),
(4, 2, '1623234604.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `izdavacs`
--

CREATE TABLE `izdavacs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavacs`
--

INSERT INTO `izdavacs` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Adižes', '2021-05-28 13:18:17', '2021-05-28 13:18:17'),
(2, 'Admiral Books', '2021-05-28 13:18:34', '2021-05-28 13:18:34'),
(3, 'Aed studio', '2021-05-28 13:18:47', '2021-05-28 13:18:47'),
(4, 'Aerie books ltd', '2021-05-28 13:19:05', '2021-05-28 13:19:05'),
(5, 'Obodsko slovo', '2021-06-07 16:40:36', '2021-06-07 16:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `izdavanjes`
--

CREATE TABLE `izdavanjes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `knjiga_id` bigint(20) UNSIGNED NOT NULL,
  `izdaokorisnik_id` bigint(20) UNSIGNED NOT NULL,
  `pozajmiokorisnik_id` bigint(20) UNSIGNED NOT NULL,
  `datumizdavanja` date NOT NULL,
  `datumvracanja` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavanjes`
--

INSERT INTO `izdavanjes` (`id`, `knjiga_id`, `izdaokorisnik_id`, `pozajmiokorisnik_id`, `datumizdavanja`, `datumvracanja`, `created_at`, `updated_at`) VALUES
(60, 1, 10, 7, '2021-06-02', '2021-06-08', '2021-06-08 09:19:25', '2021-06-08 09:34:37'),
(61, 2, 10, 7, '2021-04-07', '2021-06-08', '2021-06-08 09:30:18', '2021-06-08 09:34:52'),
(62, 1, 10, 7, '2021-06-08', '2021-06-08', '2021-06-08 09:43:41', '2021-06-08 09:57:48'),
(63, 1, 12, 7, '2021-06-08', '2021-07-08', '2021-06-09 08:31:54', '2021-06-09 08:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `izdavanjestatusknjiges`
--

CREATE TABLE `izdavanjestatusknjiges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `izdavanje_id` bigint(20) UNSIGNED NOT NULL,
  `statusknjige_id` bigint(20) UNSIGNED NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavanjestatusknjiges`
--

INSERT INTO `izdavanjestatusknjiges` (`id`, `izdavanje_id`, `statusknjige_id`, `datum`, `created_at`, `updated_at`) VALUES
(60, 60, 3, '2021-06-08 13:19:25', NULL, '2021-06-08 09:34:37'),
(61, 61, 4, '2021-06-08 13:30:19', NULL, '2021-06-08 09:34:52'),
(62, 62, 3, '2021-06-08 13:43:41', NULL, '2021-06-08 09:57:48'),
(63, 63, 2, '2021-06-09 12:31:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jeziks`
--

CREATE TABLE `jeziks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jeziks`
--

INSERT INTO `jeziks` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Kineski', NULL, NULL),
(2, 'Mandarinski', NULL, NULL),
(3, 'Crnogorski', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategorijas`
--

CREATE TABLE `kategorijas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ikonica` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Opis` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorijas`
--

INSERT INTO `kategorijas` (`id`, `Naziv`, `Ikonica`, `Opis`, `created_at`, `updated_at`) VALUES
(1, 'Umjetnost i fotografija', NULL, 'Opis kategorije', '2021-05-28 13:33:14', '2021-05-28 13:33:14'),
(2, 'Biografije i memoari', NULL, 'Opis kategorije biografije i memoari', '2021-05-28 13:33:41', '2021-05-28 13:33:41'),
(3, 'Posao i ulaganje', NULL, 'OPis kategorije posao i ulaganje', '2021-05-28 13:34:05', '2021-05-28 13:34:05'),
(4, 'Knjige za djecu', NULL, 'Opis kategorije knjige za djecu', '2021-05-28 13:34:35', '2021-05-28 13:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija_knjiga`
--

CREATE TABLE `kategorija_knjiga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategorija_id` bigint(20) UNSIGNED NOT NULL,
  `knjiga_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorija_knjiga`
--

INSERT INTO `kategorija_knjiga` (`id`, `kategorija_id`, `knjiga_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(9, 1, 3, NULL, NULL),
(10, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knjigas`
--

CREATE TABLE `knjigas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naslov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrojStrana` int(11) NOT NULL,
  `pismo_id` bigint(20) UNSIGNED NOT NULL,
  `jezik_id` bigint(20) UNSIGNED NOT NULL,
  `povez_id` bigint(20) UNSIGNED NOT NULL,
  `format_id` bigint(20) UNSIGNED NOT NULL,
  `izdavac_id` bigint(20) UNSIGNED NOT NULL,
  `DatumIzdavanja` year(4) NOT NULL,
  `ISBN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UkupnoPrimjeraka` int(11) NOT NULL,
  `IzdatoPrimjeraka` int(11) NOT NULL,
  `RezervisanoPrimjeraka` int(11) NOT NULL,
  `Sadrzaj` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knjigas`
--

INSERT INTO `knjigas` (`id`, `Naslov`, `BrojStrana`, `pismo_id`, `jezik_id`, `povez_id`, `format_id`, `izdavac_id`, `DatumIzdavanja`, `ISBN`, `UkupnoPrimjeraka`, `IzdatoPrimjeraka`, `RezervisanoPrimjeraka`, `Sadrzaj`, `created_at`, `updated_at`) VALUES
(1, 'Na Drini cuprija', 350, 1, 3, 4, 4, 3, 2050, '12764532671234567890', 48, 1, 0, '<p>Sadrzaj knjige &quot;Na Drini cuprija&quot;</p>', '2021-05-29 07:11:02', '2021-06-09 08:31:54'),
(2, 'Mali Princ', 150, 1, 3, 2, 3, 2, 2050, '12345678901234567890', 100, 0, 0, '<p>sadrzaj malog princa</p>', '2021-06-06 10:10:30', '2021-06-08 09:34:52'),
(3, 'Ana Karenjina', 560, 1, 3, 4, 3, 2, 1965, '12764532671234567890', 12, 0, 0, '<p>nesto</p>', '2021-06-06 11:30:39', '2021-06-08 07:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `knjiga_zanr`
--

CREATE TABLE `knjiga_zanr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `knjiga_id` bigint(20) UNSIGNED NOT NULL,
  `zanr_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knjiga_zanr`
--

INSERT INTO `knjiga_zanr` (`id`, `knjiga_id`, `zanr_id`, `created_at`, `updated_at`) VALUES
(7, 1, 3, NULL, NULL),
(11, 3, 2, NULL, NULL),
(12, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `korisniklogins`
--

CREATE TABLE `korisniklogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vrijeme` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korisniks`
--

CREATE TABLE `korisniks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipkorisnika_id` bigint(20) UNSIGNED NOT NULL,
  `ImePrezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JMBG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sifra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2009_05_09_192644_create_zanrs_table', 1),
(2, '2010_05_08_195002_create_kategorijas_table', 1),
(3, '2010_05_11_162309_create_pismos_table', 1),
(4, '2010_05_14_162056_create_povezs_table', 1),
(5, '2010_05_14_162239_create_formats_table', 1),
(6, '2011_05_10_131639_create_tipkorisnikas_table', 1),
(7, '2012_05_11_161034_create_jeziks_table', 1),
(8, '2013_05_10_132006_create_korisniks_table', 1),
(9, '2018_05_09_132624_create_autors_table', 1),
(10, '2019_05_08_164810_create_izdavacs_table', 1),
(11, '2020_05_12_154331_create_knjigas_table', 1),
(12, '2021_05_20_173059_create_users_table', 1),
(13, '2021_05_20_222017_creates_autor_knjiga_pivot_table', 1),
(14, '2021_05_20_222054_creates_kategorija_knjiga_pivot_table', 1),
(15, '2021_05_20_222127_creates_knjiga_zanr_pivot_table', 1),
(16, '2021_05_21_150222_create_statusknjiges_table', 1),
(17, '2021_05_21_155037_create_statusrezervacijes_table', 1),
(18, '2021_05_21_165239_create_izdavanjes_table', 1),
(19, '2021_05_21_170147_create_izdavanjestatusknjiges_table', 1),
(20, '2021_05_21_171547_create_rzrezervacijes_table', 1),
(21, '2021_05_21_172722_create_rezervacijas_table', 1),
(22, '2021_05_21_174436_create_rezervacijastatus_table', 1),
(23, '2021_05_22_100000_create_korisniklogins_table', 1),
(24, '2021_05_31_195204_create_polisas_table', 2);

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
-- Table structure for table `pismos`
--

CREATE TABLE `pismos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pismos`
--

INSERT INTO `pismos` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Fenicki alfabet', '2021-05-28 12:02:09', '2021-05-28 12:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `polisas`
--

CREATE TABLE `polisas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `varijabla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vrijednost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polisas`
--

INSERT INTO `polisas` (`id`, `varijabla`, `vrijednost`, `created_at`, `updated_at`) VALUES
(1, 'rok_rezervacije', 5, '2021-05-31 18:42:24', '2021-05-31 18:42:24'),
(2, 'rok_vracanja', 30, '2021-05-31 18:42:24', '2021-05-31 18:42:24'),
(3, 'rok_konflikta', 75, '2021-05-31 18:42:24', '2021-05-31 18:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `povezs`
--

CREATE TABLE `povezs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `povezs`
--

INSERT INTO `povezs` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Zicana spirala', '2021-05-28 13:10:46', '2021-05-28 13:10:46'),
(2, 'Plasticna spirala', '2021-05-28 13:11:02', '2021-05-28 13:11:02'),
(3, 'Meki povez', '2021-05-28 13:11:11', '2021-05-28 13:11:11'),
(4, 'Tvrdi povez', '2021-05-28 13:11:23', '2021-05-28 13:11:23'),
(6, 'Heftanje', '2021-05-28 13:16:18', '2021-05-28 13:16:18'),
(7, 'Klamovanje', '2021-05-28 13:16:29', '2021-05-28 13:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacijas`
--

CREATE TABLE `rezervacijas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `knjiga_id` bigint(20) UNSIGNED NOT NULL,
  `zakorisnik_id` bigint(20) UNSIGNED NOT NULL,
  `rezervisaokorisnik_id` bigint(20) UNSIGNED NOT NULL,
  `razlogzatvaranja_id` bigint(20) UNSIGNED NOT NULL,
  `datumpodnosenja` date NOT NULL,
  `datumrezervacije` date NOT NULL,
  `datumzatvaranja` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezervacijas`
--

INSERT INTO `rezervacijas` (`id`, `knjiga_id`, `zakorisnik_id`, `rezervisaokorisnik_id`, `razlogzatvaranja_id`, `datumpodnosenja`, `datumrezervacije`, `datumzatvaranja`, `created_at`, `updated_at`) VALUES
(31, 1, 7, 10, 4, '2021-06-08', '2021-06-08', NULL, '2021-06-08 09:43:15', '2021-06-08 09:43:41'),
(32, 1, 7, 12, 4, '2021-06-17', '2021-06-17', NULL, '2021-06-09 08:31:00', '2021-06-09 08:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacijastatus`
--

CREATE TABLE `rezervacijastatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rezervacija_id` bigint(20) UNSIGNED NOT NULL,
  `statusrezervacije_id` bigint(20) UNSIGNED NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezervacijastatus`
--

INSERT INTO `rezervacijastatus` (`id`, `rezervacija_id`, `statusrezervacije_id`, `datum`, `created_at`, `updated_at`) VALUES
(44, 31, 4, '2021-06-08 13:43:41', NULL, NULL),
(46, 32, 4, '2021-06-09 12:31:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rzrezervacijes`
--

CREATE TABLE `rzrezervacijes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rzrezervacijes`
--

INSERT INTO `rzrezervacijes` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Rezervacija istekla', NULL, NULL),
(2, 'Rezervacija odbijena', NULL, NULL),
(3, 'Rezervacija otkazana', NULL, NULL),
(4, 'Knjiga izdata', NULL, NULL),
(5, 'Otvorena', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statusknjiges`
--

CREATE TABLE `statusknjiges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statusknjiges`
--

INSERT INTO `statusknjiges` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Rezervisana', NULL, NULL),
(2, 'Izdata', NULL, NULL),
(3, 'Vracena', NULL, NULL),
(4, 'Vracena sa prekoracenjem', NULL, NULL),
(5, 'Otpisana', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statusrezervacijes`
--

CREATE TABLE `statusrezervacijes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statusrezervacijes`
--

INSERT INTO `statusrezervacijes` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Rezervisana', NULL, NULL),
(2, 'Na cekanju', NULL, NULL),
(3, 'Odbijena', NULL, NULL),
(4, 'Zatvorena', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipkorisnikas`
--

CREATE TABLE `tipkorisnikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipkorisnikas`
--

INSERT INTO `tipkorisnikas` (`id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Bibliotekar', NULL, NULL),
(2, 'Ucenik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipkorisnika_id` bigint(20) UNSIGNED NOT NULL,
  `ImePrezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JMBG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tipkorisnika_id`, `ImePrezime`, `email`, `email_verified_at`, `password`, `remember_token`, `JMBG`, `KorisnickoIme`, `Foto`, `created_at`, `updated_at`) VALUES
(7, 2, 'Ucenik 1', 'drugi@drugi.com', NULL, '$2y$10$vd0rLtuLGNale3h6bZv2UuNtueUpJKb5ZTFoHJQ4xscRcm2PLY6d6', NULL, '1234567134567', 'ucenik1', NULL, '2021-06-02 14:37:22', '2021-06-02 14:37:22'),
(10, 1, 'Bibliotekar Bibliotekaric', 'vlado@gmail.com', NULL, '$2y$10$XscDrhUR8wefkm2rwU10TO6xjkCHh7QKJMXxkm7iiTZHhKM18noMW', NULL, NULL, 'Bibliotekar 1', NULL, '2021-06-03 19:10:26', '2021-06-03 19:10:26'),
(11, 2, 'Ucenik 2', 'drugi@drugi.com', NULL, '$2y$10$zFC5l8DwdwVWKQHo4Gt6L.hj1kLCze34ANDg.jFXC3bGJIbNt8Rua', NULL, '1234567134567', 'ime2', NULL, '2021-06-07 13:25:11', '2021-06-07 13:25:11'),
(12, 1, 'Zoran Mastilovic', 'mastiloviczoran@gmail.com', NULL, '$2y$10$nyv87S5ASamtyyIHHMSPHO38DGWnM8VceaaSoxO5mbUjtG3LtFNjq', NULL, NULL, 'zoran.mastilovic', NULL, '2021-06-09 07:12:49', '2021-06-09 07:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `zanrs`
--

CREATE TABLE `zanrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ikonica` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Opis` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zanrs`
--

INSERT INTO `zanrs` (`id`, `Naziv`, `Ikonica`, `Opis`, `created_at`, `updated_at`) VALUES
(1, 'Ljubavni romani', NULL, NULL, '2021-05-28 13:21:46', '2021-05-28 13:21:46'),
(2, 'Dijete i zdrav zivot', NULL, NULL, '2021-05-28 13:27:10', '2021-05-28 13:27:10'),
(3, 'Domaca knjizevnost', NULL, NULL, '2021-05-28 13:27:23', '2021-05-28 13:27:23'),
(4, 'Djecija knjizevnost', NULL, NULL, '2021-05-28 13:27:44', '2021-05-28 13:27:44'),
(5, 'Fantastika', NULL, NULL, '2021-05-28 13:27:55', '2021-05-28 13:27:55'),
(6, 'Horor', NULL, NULL, '2021-05-28 13:28:03', '2021-05-28 13:28:03'),
(7, 'Istorijski roman', NULL, NULL, '2021-05-28 13:28:18', '2021-05-28 13:28:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autor_knjiga`
--
ALTER TABLE `autor_knjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor_knjiga_autor_id_foreign` (`autor_id`),
  ADD KEY `autor_knjiga_knjiga_id_foreign` (`knjiga_id`);

--
-- Indexes for table `formats`
--
ALTER TABLE `formats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerijas`
--
ALTER TABLE `galerijas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izdavacs`
--
ALTER TABLE `izdavacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izdavanjes`
--
ALTER TABLE `izdavanjes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izdavanjes_knjiga_id_foreign` (`knjiga_id`),
  ADD KEY `izdavanjes_izdaokorisnik_id_foreign` (`izdaokorisnik_id`),
  ADD KEY `izdavanjes_pozajmiokorisnik_id_foreign` (`pozajmiokorisnik_id`);

--
-- Indexes for table `izdavanjestatusknjiges`
--
ALTER TABLE `izdavanjestatusknjiges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izdavanjestatusknjiges_izdavanje_id_foreign` (`izdavanje_id`),
  ADD KEY `izdavanjestatusknjiges_statusknjige_id_foreign` (`statusknjige_id`);

--
-- Indexes for table `jeziks`
--
ALTER TABLE `jeziks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorijas`
--
ALTER TABLE `kategorijas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorija_knjiga`
--
ALTER TABLE `kategorija_knjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategorija_knjiga_kategorija_id_foreign` (`kategorija_id`),
  ADD KEY `kategorija_knjiga_knjiga_id_foreign` (`knjiga_id`);

--
-- Indexes for table `knjigas`
--
ALTER TABLE `knjigas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `knjigas_pismo_id_index` (`pismo_id`),
  ADD KEY `knjigas_jezik_id_index` (`jezik_id`),
  ADD KEY `knjigas_povez_id_index` (`povez_id`),
  ADD KEY `knjigas_format_id_index` (`format_id`),
  ADD KEY `knjigas_izdavac_id_index` (`izdavac_id`);

--
-- Indexes for table `knjiga_zanr`
--
ALTER TABLE `knjiga_zanr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `knjiga_zanr_knjiga_id_foreign` (`knjiga_id`),
  ADD KEY `knjiga_zanr_zanr_id_foreign` (`zanr_id`);

--
-- Indexes for table `korisniklogins`
--
ALTER TABLE `korisniklogins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisniklogins_user_id_foreign` (`user_id`);

--
-- Indexes for table `korisniks`
--
ALTER TABLE `korisniks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisniks_tipkorisnika_id_index` (`tipkorisnika_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pismos`
--
ALTER TABLE `pismos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polisas`
--
ALTER TABLE `polisas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `povezs`
--
ALTER TABLE `povezs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacijas`
--
ALTER TABLE `rezervacijas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rezervacijas_knjiga_id_foreign` (`knjiga_id`),
  ADD KEY `rezervacijas_zakorisnik_id_foreign` (`zakorisnik_id`),
  ADD KEY `rezervacijas_rezervisaokorisnik_id_foreign` (`rezervisaokorisnik_id`),
  ADD KEY `rezervacijas_razlogzatvaranja_id_foreign` (`razlogzatvaranja_id`);

--
-- Indexes for table `rezervacijastatus`
--
ALTER TABLE `rezervacijastatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rezervacijastatus_rezervacija_id_foreign` (`rezervacija_id`),
  ADD KEY `rezervacijastatus_statusrezervacije_id_foreign` (`statusrezervacije_id`);

--
-- Indexes for table `rzrezervacijes`
--
ALTER TABLE `rzrezervacijes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusknjiges`
--
ALTER TABLE `statusknjiges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusrezervacijes`
--
ALTER TABLE `statusrezervacijes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipkorisnikas`
--
ALTER TABLE `tipkorisnikas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_tipkorisnika_id_index` (`tipkorisnika_id`);

--
-- Indexes for table `zanrs`
--
ALTER TABLE `zanrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `autor_knjiga`
--
ALTER TABLE `autor_knjiga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `formats`
--
ALTER TABLE `formats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galerijas`
--
ALTER TABLE `galerijas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `izdavacs`
--
ALTER TABLE `izdavacs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `izdavanjes`
--
ALTER TABLE `izdavanjes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `izdavanjestatusknjiges`
--
ALTER TABLE `izdavanjestatusknjiges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `jeziks`
--
ALTER TABLE `jeziks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorijas`
--
ALTER TABLE `kategorijas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorija_knjiga`
--
ALTER TABLE `kategorija_knjiga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `knjigas`
--
ALTER TABLE `knjigas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `knjiga_zanr`
--
ALTER TABLE `knjiga_zanr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `korisniklogins`
--
ALTER TABLE `korisniklogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korisniks`
--
ALTER TABLE `korisniks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pismos`
--
ALTER TABLE `pismos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `polisas`
--
ALTER TABLE `polisas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `povezs`
--
ALTER TABLE `povezs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rezervacijas`
--
ALTER TABLE `rezervacijas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rezervacijastatus`
--
ALTER TABLE `rezervacijastatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `rzrezervacijes`
--
ALTER TABLE `rzrezervacijes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statusknjiges`
--
ALTER TABLE `statusknjiges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statusrezervacijes`
--
ALTER TABLE `statusrezervacijes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipkorisnikas`
--
ALTER TABLE `tipkorisnikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zanrs`
--
ALTER TABLE `zanrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autor_knjiga`
--
ALTER TABLE `autor_knjiga`
  ADD CONSTRAINT `autor_knjiga_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `autors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `autor_knjiga_knjiga_id_foreign` FOREIGN KEY (`knjiga_id`) REFERENCES `knjigas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `izdavanjes`
--
ALTER TABLE `izdavanjes`
  ADD CONSTRAINT `izdavanjes_izdaokorisnik_id_foreign` FOREIGN KEY (`izdaokorisnik_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `izdavanjes_knjiga_id_foreign` FOREIGN KEY (`knjiga_id`) REFERENCES `knjigas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `izdavanjes_pozajmiokorisnik_id_foreign` FOREIGN KEY (`pozajmiokorisnik_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `izdavanjestatusknjiges`
--
ALTER TABLE `izdavanjestatusknjiges`
  ADD CONSTRAINT `izdavanjestatusknjiges_izdavanje_id_foreign` FOREIGN KEY (`izdavanje_id`) REFERENCES `izdavanjes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `izdavanjestatusknjiges_statusknjige_id_foreign` FOREIGN KEY (`statusknjige_id`) REFERENCES `statusknjiges` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kategorija_knjiga`
--
ALTER TABLE `kategorija_knjiga`
  ADD CONSTRAINT `kategorija_knjiga_kategorija_id_foreign` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorijas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategorija_knjiga_knjiga_id_foreign` FOREIGN KEY (`knjiga_id`) REFERENCES `knjigas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `knjigas`
--
ALTER TABLE `knjigas`
  ADD CONSTRAINT `knjigas_format_id_foreign` FOREIGN KEY (`format_id`) REFERENCES `formats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjigas_izdavac_id_foreign` FOREIGN KEY (`izdavac_id`) REFERENCES `izdavacs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjigas_jezik_id_foreign` FOREIGN KEY (`jezik_id`) REFERENCES `jeziks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjigas_pismo_id_foreign` FOREIGN KEY (`pismo_id`) REFERENCES `pismos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjigas_povez_id_foreign` FOREIGN KEY (`povez_id`) REFERENCES `povezs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `knjiga_zanr`
--
ALTER TABLE `knjiga_zanr`
  ADD CONSTRAINT `knjiga_zanr_knjiga_id_foreign` FOREIGN KEY (`knjiga_id`) REFERENCES `knjigas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjiga_zanr_zanr_id_foreign` FOREIGN KEY (`zanr_id`) REFERENCES `zanrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `korisniklogins`
--
ALTER TABLE `korisniklogins`
  ADD CONSTRAINT `korisniklogins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rezervacijas`
--
ALTER TABLE `rezervacijas`
  ADD CONSTRAINT `rezervacijas_knjiga_id_foreign` FOREIGN KEY (`knjiga_id`) REFERENCES `knjigas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezervacijas_razlogzatvaranja_id_foreign` FOREIGN KEY (`razlogzatvaranja_id`) REFERENCES `rzrezervacijes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezervacijas_rezervisaokorisnik_id_foreign` FOREIGN KEY (`rezervisaokorisnik_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezervacijas_zakorisnik_id_foreign` FOREIGN KEY (`zakorisnik_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rezervacijastatus`
--
ALTER TABLE `rezervacijastatus`
  ADD CONSTRAINT `rezervacijastatus_rezervacija_id_foreign` FOREIGN KEY (`rezervacija_id`) REFERENCES `rezervacijas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezervacijastatus_statusrezervacije_id_foreign` FOREIGN KEY (`statusrezervacije_id`) REFERENCES `statusrezervacijes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tipkorisnika_id_foreign` FOREIGN KEY (`tipkorisnika_id`) REFERENCES `tipkorisnikas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2019 at 05:36 AM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickedoffvet`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bookingId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `petId` bigint(20) UNSIGNED DEFAULT NULL,
  `staffId` bigint(20) UNSIGNED DEFAULT NULL,
  `bookingDateTime` datetime DEFAULT NULL,
  `symptoms` longtext COLLATE utf8mb4_unicode_ci,
  `treatments` longtext COLLATE utf8mb4_unicode_ci,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bookingId`),
  KEY `bookings_petid_foreign` (`petId`),
  KEY `bookings_staffid_foreign` (`staffId`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingId`, `petId`, `staffId`, `bookingDateTime`, `symptoms`, `treatments`, `notes`, `created_at`, `updated_at`) VALUES
(1, 84, 5, '2012-09-29 13:30:00', 'hair loss', 'give a \"good boy\"', '', NULL, NULL),
(2, 84, 2, '2011-03-26 15:45:00', 'excessive tiredness', 'meditation', 'See again in 2 months', NULL, NULL),
(3, 97, 5, '2011-04-03 12:30:00', '', 'Routine vaccination', '', NULL, NULL),
(4, 34, 5, '2011-05-09 12:00:00', 'fleas', 'drugs', 'See again in 6 months', NULL, NULL),
(5, 49, 5, '2012-10-11 15:00:00', 'excessive thirstiness', 'hydrotherapy', 'See again in 2 weeks', NULL, NULL),
(6, 80, 2, '2011-04-22 14:45:00', 'uncontrollable peeing', 'hydrotherapy', 'See again in 6 months', NULL, NULL),
(7, 61, 3, '2012-05-10 12:15:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(8, 75, 2, '2012-07-03 10:15:00', 'limping', 'meditation', 'See again in 4 weeks', NULL, NULL),
(9, 88, 2, '2012-05-13 16:00:00', 'diarrhoea', 'give a \"good boy\"', 'See again in 2 weeks', NULL, NULL),
(10, 21, 3, '2011-04-21 09:15:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(11, 54, 3, '2011-11-28 13:30:00', 'vomiting', 'acupuncture', 'See again in 2 months', NULL, NULL),
(12, 89, 3, '2011-12-16 11:45:00', '', 'Routine vaccination', '', NULL, NULL),
(13, 82, 2, '2011-06-05 12:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(14, 48, 3, '2012-10-24 09:30:00', 'poor eyesight, inappropriate defecation', 'bandage application', '', NULL, NULL),
(15, 81, 3, '2012-02-03 12:30:00', 'deafness', 'hypnotherapy', 'See again in 4 weeks', NULL, NULL),
(16, 51, 5, '2012-08-26 13:00:00', 'poor eyesight', 'medicinal bath', 'See again in 3 months', NULL, NULL),
(17, 95, 3, '2011-05-09 12:15:00', 'limping', 'tooth clean', 'See again in 12 months', NULL, NULL),
(18, 56, 5, '2012-03-14 09:15:00', 'excessive tiredness', 'electric shock therapy', 'See again in 1 month', NULL, NULL),
(19, 85, 3, '2012-03-18 16:00:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(20, 57, 3, '2012-07-14 13:00:00', 'anxiety', 'non-invasive surgery', 'See again in 1 month', NULL, NULL),
(21, 25, 2, '2011-01-13 11:15:00', '', 'Routine vaccination', 'See again in 12 months', NULL, NULL),
(22, 85, 5, '2012-05-15 15:45:00', 'constipation, deafness', 'tooth clean', 'See again in 4 weeks', NULL, NULL),
(23, 72, 3, '2011-10-15 11:30:00', '', 'Routine vaccination', 'See again in 12 months', NULL, NULL),
(24, 95, 5, '2012-04-21 16:30:00', 'bottom scraping, deafness', 'massage', 'See again in 12 months', NULL, NULL),
(25, 28, 5, '2012-05-13 13:00:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(26, 49, 2, '2011-08-18 09:30:00', 'hair loss', 'a good corking', '', NULL, NULL),
(27, 102, 5, '2012-04-30 17:00:00', 'other parasites', 'suture', 'See again in 3 months', NULL, NULL),
(28, 110, 2, '2012-12-11 14:00:00', 'other parasites', 'electric shock therapy', 'See again in 12 months', NULL, NULL),
(29, 9, 3, '2011-06-15 12:30:00', 'wheezing', 'stitches', '', NULL, NULL),
(30, 70, 3, '2012-06-17 12:45:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(31, 98, 5, '2012-10-29 09:00:00', '', 'Routine vaccination', '', NULL, NULL),
(32, 58, 5, '2011-11-27 09:30:00', '', 'Routine vaccination', 'See again in 2 months', NULL, NULL),
(33, 92, 5, '2011-02-18 12:00:00', 'obesity', 'hydrotherapy', '', NULL, NULL),
(34, 26, 3, '2012-05-02 13:30:00', 'poor eyesight, joint stiffness', 'wallet massage', 'See again in 1 month', NULL, NULL),
(35, 86, 2, '2011-12-24 09:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(36, 92, 5, '2012-12-26 14:45:00', 'sneezing', 'tooth clean', '', NULL, NULL),
(37, 73, 3, '2012-04-19 09:30:00', '', 'Routine vaccination', '', NULL, NULL),
(38, 85, 5, '2011-12-08 14:30:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(39, 106, 5, '2011-03-27 17:00:00', '', 'Routine vaccination', '', NULL, NULL),
(40, 107, 5, '2012-10-23 10:15:00', '', 'Routine vaccination', '', NULL, NULL),
(41, 88, 3, '2013-01-21 14:00:00', '', 'Routine vaccination', '', NULL, NULL),
(42, 77, 2, '2012-04-23 10:15:00', '', 'Routine vaccination', '', NULL, NULL),
(43, 105, 5, '2012-08-11 09:00:00', 'sneezing', 'meditation', 'See again in 3 months', NULL, NULL),
(44, 98, 3, '2011-06-19 11:15:00', 'vomiting', 'give a \"good boy\"', 'See again in 12 months', NULL, NULL),
(45, 106, 5, '2012-07-23 13:30:00', '', 'Routine vaccination', '', NULL, NULL),
(46, 51, 3, '2011-06-07 11:15:00', 'poor eyesight', 'hypnotherapy', '', NULL, NULL),
(47, 106, 3, '2011-11-06 10:00:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(48, 52, 3, '2011-12-24 14:00:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(49, 101, 2, '2011-09-21 15:45:00', 'poor eyesight, other parasites', 'invasive surgery', 'See again in 1 month', NULL, NULL),
(50, 41, 2, '2012-07-01 13:00:00', 'obesity, constipation, fleas', 'medicinal bath', 'See again in 12 months', NULL, NULL),
(51, 60, 2, '2012-09-03 16:00:00', '', 'Routine vaccination', '', NULL, NULL),
(52, 88, 3, '2011-06-30 09:15:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(53, 14, 3, '2012-08-25 12:45:00', 'limping, inappropriate defecation', 'invasive surgery', '', NULL, NULL),
(54, 15, 5, '2011-11-25 14:30:00', 'vomiting, crying', 'invasive surgery', 'See again in 4 weeks', NULL, NULL),
(55, 86, 5, '2012-08-01 12:30:00', '', 'Routine vaccination', '', NULL, NULL),
(56, 19, 5, '2012-01-12 10:30:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(57, 2, 2, '2011-04-02 14:15:00', 'sore paw', 'give a \"good boy\"', '', NULL, NULL),
(58, 69, 2, '2011-12-18 14:45:00', 'diarrhoea', 'emetic procedure', 'See again in 1 month', NULL, NULL),
(59, 77, 2, '2011-02-18 16:30:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(60, 23, 2, '2012-04-05 13:00:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(61, 53, 3, '2011-01-06 14:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(62, 77, 3, '2012-05-12 11:30:00', 'anxiety', 'tooth extraction', 'See again in 4 weeks', NULL, NULL),
(63, 58, 5, '2012-02-20 09:30:00', 'excessive thirstiness, constipation', 'suture', '', NULL, NULL),
(64, 3, 3, '2012-12-30 10:45:00', 'flatulence', 'electric shock therapy', 'See again in 4 weeks', NULL, NULL),
(65, 32, 2, '2012-04-09 17:00:00', 'obesity', 'cuddles', 'See again in 3 months', NULL, NULL),
(66, 43, 2, '2012-11-30 13:15:00', '', 'Routine vaccination', '', NULL, NULL),
(67, 16, 2, '2011-09-03 12:00:00', 'limping', 'cuddles', 'See again in 3 months', NULL, NULL),
(68, 73, 5, '2011-04-25 13:00:00', '', 'Routine vaccination', '', NULL, NULL),
(69, 104, 3, '2012-10-30 10:30:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(70, 72, 5, '2012-11-16 13:00:00', 'crying', 'meditation', 'See again in 6 months', NULL, NULL),
(71, 81, 5, '2012-06-26 13:00:00', '', 'Routine vaccination', '', NULL, NULL),
(72, 7, 2, '2012-06-26 13:00:00', '', 'Routine vaccination', '', NULL, NULL),
(73, 75, 5, '2012-11-29 10:15:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(74, 68, 2, '2011-05-28 12:45:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(75, 78, 3, '2012-03-03 11:45:00', 'joint stiffness', 'cuddles', 'See again in 12 months', NULL, NULL),
(76, 1, 5, '2012-10-01 11:30:00', 'crying', 'a good corking', 'See again in 1 month', NULL, NULL),
(77, 7, 5, '2011-06-09 13:30:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(78, 13, 2, '2011-09-02 14:15:00', 'diarrhoea, anxiety', 'give a \"good boy\"', 'See again in 2 months', NULL, NULL),
(79, 110, 5, '2011-08-28 16:15:00', 'limping', 'psychotherapy', 'See again in 12 months', NULL, NULL),
(80, 60, 5, '2012-08-19 10:00:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(81, 2, 3, '2012-05-28 09:30:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(82, 105, 3, '2011-08-25 15:15:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(83, 38, 2, '2011-01-28 14:30:00', 'sore paw', 'saw pore', '', NULL, NULL),
(84, 58, 2, '2012-01-28 14:45:00', '', 'Routine vaccination', '', NULL, NULL),
(85, 104, 3, '2012-09-11 12:45:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(86, 49, 3, '2012-03-08 16:45:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(87, 41, 2, '2012-07-23 14:30:00', 'obesity, inappropriate defecation', 'suture', '', NULL, NULL),
(88, 107, 3, '2012-01-30 14:30:00', 'sneezing', 'massage', 'See again in 6 months', NULL, NULL),
(89, 52, 5, '2012-02-01 09:45:00', 'hair loss, ticks', 'emetic procedure', '', NULL, NULL),
(90, 24, 2, '2011-06-25 11:30:00', '', 'Routine vaccination', '', NULL, NULL),
(91, 78, 3, '2012-05-30 15:45:00', 'other parasites', 'electric shock therapy', '', NULL, NULL),
(92, 33, 3, '2012-05-27 11:45:00', 'sore paw, crying', 'acupuncture', '', NULL, NULL),
(93, 55, 3, '2011-10-21 16:30:00', 'obesity', 'massage', '', NULL, NULL),
(94, 97, 3, '2012-09-29 12:45:00', 'anxiety', 'tooth extraction', 'See again in 1 month', NULL, NULL),
(95, 17, 2, '2012-09-09 16:00:00', 'constipation, flatulence', 'tooth extraction', 'See again in 4 weeks', NULL, NULL),
(96, 14, 5, '2011-11-22 12:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(97, 87, 2, '2011-12-20 17:00:00', 'limping', 'suture', '', NULL, NULL),
(98, 107, 3, '2011-03-15 12:00:00', 'deafness', 'tooth extraction', 'See again in 12 months', NULL, NULL),
(99, 83, 5, '2011-04-30 12:00:00', '', 'Routine vaccination', '', NULL, NULL),
(100, 21, 3, '2012-05-16 14:15:00', '', 'Routine vaccination', '', NULL, NULL),
(101, 98, 5, '2012-03-03 11:30:00', '', 'Routine vaccination', '', NULL, NULL),
(102, 52, 5, '2011-07-04 17:00:00', 'crying', 'non-invasive surgery', '', NULL, NULL),
(103, 26, 5, '2012-05-24 16:45:00', '', 'Routine vaccination', '', NULL, NULL),
(104, 89, 3, '2013-01-16 16:00:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(105, 60, 2, '2011-11-29 12:45:00', 'fleas', 'suture', '', NULL, NULL),
(106, 91, 2, '2011-08-21 10:15:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(107, 39, 2, '2012-10-05 12:45:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(108, 26, 5, '2011-04-08 12:45:00', 'vomiting, other parasites', 'bandage application', 'See again in 6 months', NULL, NULL),
(109, 73, 3, '2011-01-16 15:15:00', 'other parasites', 'psychotherapy', 'See again in 4 weeks', NULL, NULL),
(110, 30, 2, '2012-08-09 09:30:00', '', 'Routine vaccination', '', NULL, NULL),
(111, 108, 3, '2011-09-18 17:00:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(112, 105, 2, '2011-05-22 09:30:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(113, 13, 3, '2012-12-10 16:00:00', '', 'Routine vaccination', 'See again in 2 months', NULL, NULL),
(114, 29, 5, '2011-07-28 11:15:00', '', 'Routine vaccination', '', NULL, NULL),
(115, 17, 5, '2011-06-13 09:00:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(116, 23, 2, '2012-01-29 11:00:00', 'anxiety', 'invasive surgery', 'See again in 4 weeks', NULL, NULL),
(117, 91, 5, '2012-06-25 13:30:00', 'joint stiffness', 'tooth clean', '', NULL, NULL),
(118, 110, 2, '2012-02-11 13:00:00', 'constipation', 'stitches', 'See again in 12 months', NULL, NULL),
(119, 48, 2, '2012-04-14 10:45:00', 'hair loss', 'tooth clean', '', NULL, NULL),
(120, 28, 3, '2011-02-12 12:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(121, 56, 2, '2011-11-12 15:00:00', '', 'Routine vaccination', '', NULL, NULL),
(122, 65, 3, '2012-08-30 15:30:00', '', 'Routine vaccination', 'See again in 12 months', NULL, NULL),
(123, 103, 2, '2011-09-01 11:30:00', '', 'Routine vaccination', '', NULL, NULL),
(124, 65, 5, '2011-04-10 09:45:00', '', 'Routine vaccination', '', NULL, NULL),
(125, 61, 5, '2012-07-03 15:30:00', '', 'Routine vaccination', '', NULL, NULL),
(126, 62, 3, '2011-07-18 10:15:00', 'excessive thirstiness', 'stitches', '', NULL, NULL),
(127, 36, 2, '2011-02-22 14:00:00', 'sore paw, sneezing', 'invasive surgery', 'See again in 12 months', NULL, NULL),
(128, 41, 2, '2012-03-03 15:45:00', 'constipation', 'electric shock therapy', '', NULL, NULL),
(129, 9, 3, '2013-01-24 11:15:00', 'fleas', 'psychotherapy', 'See again in 2 weeks', NULL, NULL),
(130, 107, 2, '2011-02-20 11:00:00', '', 'Routine vaccination', 'See again in 3 months', NULL, NULL),
(131, 8, 2, '2011-08-04 16:45:00', 'joint stiffness', 'non-invasive surgery', 'See again in 1 month', NULL, NULL),
(132, 3, 3, '2011-12-23 10:30:00', '', 'Routine vaccination', '', NULL, NULL),
(133, 69, 3, '2012-04-14 12:30:00', '', 'Routine vaccination', 'See again in 2 months', NULL, NULL),
(134, 94, 3, '2012-10-12 13:45:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(135, 26, 3, '2011-10-24 09:15:00', '', 'Routine vaccination', '', NULL, NULL),
(136, 19, 2, '2012-08-29 11:30:00', 'joint stiffness', 'give a \"good boy\"', 'See again in 2 weeks', NULL, NULL),
(137, 39, 3, '2012-08-14 09:45:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(138, 86, 5, '2012-04-27 14:45:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(139, 53, 3, '2011-08-28 12:30:00', '', 'Routine vaccination', '', NULL, NULL),
(140, 47, 3, '2012-10-20 16:15:00', 'excessive thirstiness', 'acupuncture', 'See again in 3 months', NULL, NULL),
(141, 47, 2, '2012-08-31 12:45:00', '', 'Routine vaccination', '', NULL, NULL),
(142, 67, 5, '2011-10-21 14:45:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(143, 61, 5, '2012-02-29 12:45:00', 'inappropriate defecation', 'a good corking', '', NULL, NULL),
(144, 28, 2, '2012-03-29 11:15:00', 'fleas', 'acupuncture', 'See again in 1 month', NULL, NULL),
(145, 2, 3, '2012-04-19 15:00:00', 'excessive tiredness', 'hydrotherapy', '', NULL, NULL),
(146, 81, 2, '2011-08-31 16:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(147, 26, 5, '2013-01-16 11:45:00', '', 'Routine vaccination', '', NULL, NULL),
(148, 58, 2, '2012-05-04 09:00:00', '', 'Routine vaccination', '', NULL, NULL),
(149, 69, 5, '2011-05-27 12:00:00', '', 'Routine vaccination', '', NULL, NULL),
(150, 25, 3, '2012-01-31 14:15:00', 'anxiety, sneezing', 'wallet massage', 'See again in 2 weeks', NULL, NULL),
(151, 35, 3, '2012-05-17 09:15:00', 'other parasites', 'hydrotherapy', '', NULL, NULL),
(152, 67, 5, '2011-03-31 14:15:00', 'wheezing, fleas', 'hydrotherapy', '', NULL, NULL),
(153, 94, 3, '2012-11-18 16:30:00', 'deafness', 'a good corking', '', NULL, NULL),
(154, 10, 3, '2012-06-07 15:00:00', 'excessive thirstiness, fleas', 'non-invasive surgery', '', NULL, NULL),
(155, 41, 5, '2013-01-29 13:15:00', 'sneezing', 'bandage application', 'See again in 12 months', NULL, NULL),
(156, 67, 2, '2011-12-14 14:15:00', 'bottom scraping', 'medicinal bath', 'See again in 3 months', NULL, NULL),
(157, 6, 2, '2011-10-28 10:00:00', '', 'Routine vaccination', 'See again in 1 month', NULL, NULL),
(158, 53, 5, '2012-11-17 09:15:00', '', 'Routine vaccination', '', NULL, NULL),
(159, 16, 2, '2012-05-18 13:45:00', 'anxiety', 'enema', '', NULL, NULL),
(160, 58, 3, '2013-01-08 09:30:00', 'bottom scraping', 'meditation', '', NULL, NULL),
(161, 15, 5, '2012-11-30 13:00:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(162, 70, 3, '2012-04-08 15:15:00', '', 'Routine vaccination', '', NULL, NULL),
(163, 89, 5, '2012-04-26 15:30:00', '', 'Routine vaccination', '', NULL, NULL),
(164, 12, 3, '2012-12-28 13:45:00', 'sneezing', 'cuddles', '', NULL, NULL),
(165, 10, 2, '2012-05-23 11:45:00', '', 'Routine vaccination', 'See again in 6 months', NULL, NULL),
(166, 110, 3, '2011-09-08 13:00:00', 'diarrhoea', 'non-invasive surgery', 'See again in 3 months', NULL, NULL),
(167, 85, 2, '2012-05-06 09:15:00', 'poor eyesight', 'hypnotherapy', 'See again in 4 weeks', NULL, NULL),
(168, 70, 2, '2012-07-23 16:45:00', '', 'Routine vaccination', 'See again in 12 months', NULL, NULL),
(169, 83, 2, '2012-05-30 16:45:00', '', 'Routine vaccination', 'See again in 2 weeks', NULL, NULL),
(170, 41, 2, '2012-10-11 09:00:00', 'sneezing', 'hydrotherapy', 'See again in 2 months', NULL, NULL),
(171, 41, 2, '2012-08-26 15:15:00', 'diarrhoea, joint stiffness', 'electric shock therapy', 'See again in 3 months', NULL, NULL),
(172, 30, 5, '2011-03-27 15:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(173, 91, 3, '2012-05-26 09:15:00', '', 'Routine vaccination', 'See again in 12 months', NULL, NULL),
(174, 66, 5, '2011-08-18 09:00:00', 'excessive thirstiness, uncontrollable peeing, flatulence', 'massage', '', NULL, NULL),
(175, 27, 5, '2011-08-05 11:15:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(176, 96, 3, '2011-09-08 12:00:00', '', 'Routine vaccination', 'See again in 2 months', NULL, NULL),
(177, 107, 2, '2012-05-12 13:15:00', 'deafness', 'stitches', '', NULL, NULL),
(178, 27, 2, '2011-09-25 11:30:00', 'joint stiffness', 'stitches', 'See again in 3 months', NULL, NULL),
(179, 36, 3, '2012-05-22 10:00:00', 'limping', 'hydrotherapy', 'See again in 4 weeks', NULL, NULL),
(180, 9, 2, '2013-01-23 14:00:00', '', 'Routine vaccination', '', NULL, NULL),
(181, 94, 3, '2011-09-12 16:30:00', '', 'Routine vaccination', 'See again in 2 months', NULL, NULL),
(182, 67, 3, '2011-06-06 14:30:00', 'deafness', 'hydrotherapy', 'See again in 1 month', NULL, NULL),
(183, 91, 5, '2011-01-19 13:00:00', 'uncontrollable peeing', 'cuddles', '', NULL, NULL),
(184, 9, 2, '2012-01-25 13:30:00', '', 'Routine vaccination', '', NULL, NULL),
(185, 3, 3, '2011-03-24 12:30:00', '', 'Routine vaccination', '', NULL, NULL),
(186, 31, 5, '2012-04-23 10:30:00', '', 'Routine vaccination', '', NULL, NULL),
(187, 97, 5, '2011-05-24 13:00:00', '', 'Routine vaccination', '', NULL, NULL),
(188, 98, 2, '2011-02-21 12:45:00', '', 'Routine vaccination', '', NULL, NULL),
(189, 95, 5, '2012-11-11 09:00:00', '', 'Routine vaccination', '', NULL, NULL),
(190, 71, 5, '2012-10-15 11:30:00', '', 'Routine vaccination', '', NULL, NULL),
(191, 74, 2, '2012-02-28 12:45:00', 'vomiting', 'drugs', '', NULL, NULL),
(192, 16, 5, '2011-01-30 13:00:00', 'flatulence', 'cuddles', 'See again in 2 months', NULL, NULL),
(193, 88, 5, '2012-08-01 14:00:00', '', 'Routine vaccination', 'See again in 4 weeks', NULL, NULL),
(194, 86, 5, '2011-06-18 12:15:00', '', 'Routine vaccination', '', NULL, NULL),
(195, 22, 3, '2011-05-18 14:00:00', '', 'Routine vaccination', '', NULL, NULL),
(196, 20, 3, '2011-11-07 10:30:00', '', 'Routine vaccination', '', NULL, NULL),
(197, 78, 2, '2011-10-18 10:15:00', '', 'Routine vaccination', '', NULL, NULL),
(198, 10, 2, '2012-10-09 13:15:00', '', 'Routine vaccination', '', NULL, NULL),
(199, 89, 3, '2012-07-04 16:00:00', 'hair loss', 'invasive surgery', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customerId`),
  KEY `customers_state_foreign` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `title`, `firstName`, `lastName`, `gender`, `DOB`, `email`, `phone1`, `phone2`, `street1`, `street2`, `suburb`, `state`, `postcode`, `created_at`, `updated_at`) VALUES
(1, 'Ms', 'Cara', 'Rojas', 'F', '1977-08-26', 'crojas375@tpg.com.au', '(02) 4778 5452', '0424 677 626', '', '181 ONEY CIRCLE ', 'YELLOW ROCK', 'NSW', '2527', NULL, NULL),
(2, 'Sir', 'Isiah', 'Duke', 'M', '1954-06-27', 'isiah.duke@optusnet.com.au', '(02) 4239 9759', '0416 858 673', '', '118 CAMEO COURT ', 'DONALD CREEK', 'NSW', '2350', NULL, NULL),
(3, 'Miss', 'Queen', 'Howe', 'F', '1985-03-18', 'queen.howe@tpg.com.au', '(02) 4779 1377', '0432 168 361', '', '25 MULDROW STREET ', 'MILVALE', 'NSW', '2594', NULL, NULL),
(4, 'Ms', 'Gale', 'Newman', 'F', '1965-09-12', 'gale.newman@gmail.com', '(02) 4545 2446', '0427 624 396', '', '51 PLATINUM CIRCLE ', 'DULGUIGAN', 'NSW', '2484', NULL, NULL),
(5, 'Mrs', 'Martha', 'Woodard', 'F', '1953-03-20', 'martha.woodard@iinet.com.au', '(02) 4285 2551', '0421 784 818', '', '174 TIMBERWOLF CIRCLE ', 'ENFIELD SOUTH', 'NSW', '2133', NULL, NULL),
(6, 'Mr', 'Rick', 'Prince', 'M', '1990-07-11', 'r.prince@hotmail.com', '(02) 4582 6459', '0434 525 675', '', '26/198 GOLDEN HILLS LANE ', 'PAMBULA BEACH', 'NSW', '2549', NULL, NULL),
(7, 'Mr', 'Mack', 'Carson', 'M', '1967-09-26', 'mack@yahoo.com.au', '(02) 4382 2455', '0418 296 447', '', '141 ALDREN CIRCLE ', 'BROULEE', 'NSW', '2537', NULL, NULL),
(8, 'Mr', 'Willie', 'Burnett', 'M', '1941-07-07', 'pryo_tick_killer@gmail.com', '(02) 4379 3727', '0415 157 696', '', '122 MARINO DRIVE ', 'BLAIR ATHOL', 'NSW', '2560', NULL, NULL),
(9, 'Mr', 'Isidro', 'Williams', 'M', '1987-11-03', 'iwilliams72@hotmail.com', '(02) 4345 9845', '0403 675 211', '', '60 KRONOS DRIVE ', 'DRAKE VILLAGE', 'NSW', '2469', NULL, NULL),
(10, 'Mr', 'Leonard', 'Bernard', 'M', '1935-06-28', 'l.bernard@gmail.com', '(02) 4253 4363', '0427 436 435', '', '124 CARAVELLE DRIVE ', 'EAST GRESFORD', 'NSW', '2311', NULL, NULL),
(11, 'Miss', 'Marianne', 'Cannon', 'F', '1987-02-09', 'm.cannon@bigpond.com', '(02) 4727 2575', '0414 762 792', '', '14 LIMESTONE CIRCLE ', 'ERINA', 'NSW', '2250', NULL, NULL),
(12, 'Mr', 'Cory', 'Horn', 'M', '1957-11-10', 'c.horn@bigpond.com', '(02) 4962 5235', '0425 211 128', '', '9/142 HELEN DRIVE ', 'MOGENDOURA', 'NSW', '2537', NULL, NULL),
(13, 'Miss', 'Maricela', 'Floyd', 'F', '1937-12-08', 'maricela@bigpond.com', '(02) 4284 9532', '0416 435 744', 'Unit 8 Level 1', '125 OLD BIRCHWOOD LOOP ROAD ', 'KOOTINGAL', 'NSW', '2352', NULL, NULL),
(14, 'Dr', 'Josue', 'Potter', 'M', '1945-01-20', 'jpotter151@mirkwoodproductions.com.au', '(02) 4348 6658', '0423 623 244', 'Unit 8 Level 3', '14 PARKSIDE DRIVE ', 'GUNDAROO', 'NSW', '2620', NULL, NULL),
(15, 'Ms', 'Ellen', 'Grant', 'F', '1974-04-06', 'egrant146@hotmail.com', '(02) 4614 3278', '0425 632 382', '', '12/191 REVILLA CIRCLE ', 'VALLA BEACH', 'NSW', '2448', NULL, NULL),
(16, 'Mr', 'Salvatore', 'Pitts', 'M', '1960-07-25', 's.pitts@bigpond.net.au', '(02) 4174 4745', '0428 464 261', 'Unit 16 Level 1', '157 AVION STREET ', 'ILARWILL', 'NSW', '2463', NULL, NULL),
(17, 'Ms', 'Carmella', 'Brady', 'F', '1946-07-04', 'carmella@hotmail.com', '(02) 4677 1948', '0412 246 842', '', '28/176 WHISPERING SPRUCE CIRCLE ', 'MUNDONGO', 'NSW', '2720', NULL, NULL),
(18, 'Mr', 'Hiram', 'Tanner', 'M', '1982-03-30', 'hiram.tanner@iinet.com.au', '(02) 4676 2444', '0418 127 993', '', '24 MEYER STREET ', 'BODALLA', 'NSW', '2545', NULL, NULL),
(19, 'Mr', 'Marco', 'Burke', 'M', '1950-02-26', 'marco.burke@iinet.com.au', '(02) 4558 5587', '0417 227 826', '', '128 BIRCHWOOD SPUR ROAD ', 'TYALGUM', 'NSW', '2484', NULL, NULL),
(20, 'Mr', 'Adolfo', 'Gonzales', 'M', '1967-11-12', 'adolfo.gonzales@hotmail.com', '(02) 4617 2812', '0403 682 237', '', '10 HIGHLAND STREET ', 'ETTRICK', 'NSW', '2474', NULL, NULL),
(21, 'Mrs', 'Vanessa', 'Jacobs', 'F', '1941-12-04', 'vanessa.jacobs@hotmail.com', '(02) 4388 8786', '0428 377 178', '', '170 KAHILTNA DRIVE ', 'LONG POINT', 'NSW', '2564', NULL, NULL),
(22, 'Ms', 'Henrietta', 'Brown', 'F', '1958-01-22', 'hbrown192@tpg.com.au', '(02) 4313 5228', '0434 684 748', '', '89 ROSALIND LOOP ', 'BLACKTOWN WESTPOINT', 'NSW', '2148', NULL, NULL),
(23, 'Mr', 'Johnathan', 'Ballard', 'M', '1971-05-21', 'johnathan.ballard@gmail.com', '(02) 4968 1825', '0418 926 372', 'Unit 3 Level 3', '148 HIALEAH DRIVE ', 'EASTWOOD', 'NSW', '2122', NULL, NULL),
(24, 'Ms', 'Dollie', 'Austin', 'F', '1956-10-02', 'daustin471@optusnet.com.au', '(02) 4817 6738', '0428 898 385', '', '101 TOPHAND TRAILER COURT ', 'GWYNNEVILLE', 'NSW', '2500', NULL, NULL),
(25, 'Dr', 'Roger', 'Mercer', 'M', '1980-09-27', 'roger@gmail.com', '(02) 4419 7515', '0422 727 842', '', '117 BYERS LANE ', 'ISABELLA PLAINS', 'NSW', '2905', NULL, NULL),
(26, 'Mr', 'Antwan', 'Griffith', 'M', '1977-07-20', 'antwan.griffith@iinet.com.au', '(02) 4768 8366', '0431 857 258', '', '24 MOUNTAIN ROAD ', 'TARALGA', 'NSW', '2580', NULL, NULL),
(27, 'Ms', 'Susanne', 'Banks', 'F', '1970-12-07', 's.banks@hotmail.com', '(02) 4212 7193', '0414 371 863', '', '103 WATERFRONT LANE ', 'LINDENDALE', 'NSW', '2480', NULL, NULL),
(28, 'Mr', 'Alvaro', 'Gilbert', 'M', '1974-11-27', 'a.gilbert@bigpond.com', '(02) 4753 7226', '0416 459 566', '', '173 NEW LONDON COURT ', 'BOWEN MOUNTAIN', 'NSW', '2753', NULL, NULL),
(29, 'Ms', 'Georgette', 'Mcdaniel', 'F', '1950-04-04', 'gmcdaniel97@bigpond.com', '(02) 4573 9265', '0402 723 437', '', '146 SAINT JAMES STREET ', 'PEMULWUY', 'NSW', '2145', NULL, NULL),
(30, 'Ms', 'Alyson', 'Mcfadden', 'F', '1992-03-14', 'alyson.mcfadden@gmail.com', '(02) 4688 2332', '0428 752 252', '', '90 MYRTLE DRIVE ', 'QUANDIALLA', 'NSW', '2721', NULL, NULL),
(31, 'Mr', 'Devin', 'Reese', 'M', '1992-06-14', 'devin.reese@gmail.com', '(02) 4457 3637', '0405 132 526', '', '99 SHIVALIK DRIVE ', 'COURABYRA', 'NSW', '2653', NULL, NULL),
(32, 'Mr', 'Phil', 'Guerra', 'M', '1960-12-08', 'p.guerra@bigpond.net.au', '(02) 4557 3267', '0415 897 433', '', '80 BLUEGRASS CIRCLE ', 'DUNMORE', 'NSW', '2529', NULL, NULL),
(33, 'Mr', 'Angelo', 'Kelly', 'M', '1982-05-13', 'a.kelly@gmail.com', '(02) 4253 4263', '0427 436 435', '', '164 BLACK BEAR CIRCLE ', 'ROYAL EXCHANGE', 'NSW', '1225', NULL, NULL),
(34, 'Ms', 'Lola', 'Trevino', 'F', '1972-01-10', 'lola@bigpond.net.au', '(02) 4383 8368', '0426 587 382', '', '12/182 ESSEX PARK DRIVE ', 'CAMBEWARRA', 'NSW', '2540', NULL, NULL),
(35, 'Mr', 'Travis', 'Mcgee', 'M', '1952-09-03', 'travis@bigpond.net.au', '(02) 4474 9381', '0415 498 889', '', '184 SHELTIE AVENUE ', 'SCHEYVILLE', 'NSW', '2756', NULL, NULL),
(36, 'Mrs', 'Abigail', 'Lowery', 'F', '1971-03-27', 'alowery499@gmail.com', '(02) 4184 8532', '0433 293 422', '', '33 EGLOFF DRIVE ', 'OATLANDS', 'NSW', '2117', NULL, NULL),
(37, 'Miss', 'Goldie', 'Flores', 'F', '1962-11-19', 'goldie.flores@bigpond.com', '(02) 4178 4218', '0413 625 668', '', '83 MILE HI WAY ', 'MASCOT', 'NSW', '1460', NULL, NULL),
(38, 'Miss', 'Erin', 'Beasley', 'F', '1957-11-02', 'erin@bigpond.com', '(02) 4714 7217', '0416 666 434', '', '10/134 SOUTH AIRPARK DRIVE ', 'BURRA', 'NSW', '2620', NULL, NULL),
(39, 'Ms', 'Natalie', 'Fields', 'F', '1963-05-21', 'n.fields@gmail.com', '(02) 4932 7558', '0415 794 642', '', '31 BRUDNE ROAD ', 'ALLAWAH', 'NSW', '2218', NULL, NULL),
(40, 'Ms', 'Peggy', 'Bennett', 'F', '1956-10-07', 'p.bennett@hotmail.com', '(02) 4484 6587', '0416 298 257', '', '103 ANTLER LANE ', 'ROYAL EXCHANGE', 'NSW', '1225', NULL, NULL),
(41, 'Mr', 'Alphonse', 'Griffin', 'M', '1960-09-26', 'a.griffin@tyasa.com.au', '(02) 4945 6492', '0412 378 957', '', '6/5 LAKE GEORGE DRIVE ', 'MONA VALE', 'NSW', '1660', NULL, NULL),
(42, 'Miss', 'Phyllis', 'Spencer', 'F', '1981-08-05', 'phyllis.spencer@hotmail.com', '(02) 4641 2512', '0413 937 734', '', '88 DONALD PLACE ', 'BELIMBLA PARK', 'NSW', '2570', NULL, NULL),
(43, 'Miss', 'Beth', 'Keith', 'F', '1983-12-28', 'b.keith@yahoo.com.au', '(02) 4932 5253', '0415 571 455', '', '192 DANE COURT ', 'WOOLI', 'NSW', '2462', NULL, NULL),
(44, 'Mrs', 'Traci', 'Haynes', 'F', '1941-04-25', 'traci.haynes@hotmail.com', '(02) 4129 6555', '0423 458 446', '', '16 PATRICIA LANE ', 'BANKSTOWN SQUARE', 'NSW', '2200', NULL, NULL),
(45, 'Mr', 'Darrin', 'Cannon', 'M', '1942-02-19', 'dcannon307@optusnet.com.au', '(02) 4476 4785', '0423 389 372', '', '189 BARROW STREET ', 'INGLEBURN', 'NSW', '2565', NULL, NULL),
(46, 'Ms', 'Melinda', 'Snow', 'F', '1945-06-12', 'melinda@hotmail.com', '(02) 4447 5677', '0433 377 849', '', '111 WHITEHALL ROAD ', 'TWEED HEADS WEST', 'NSW', '2485', NULL, NULL),
(47, 'Mrs', 'Ophelia', 'Wilkins', 'F', '1957-06-11', 'owilkins269@iinet.com.au', '(02) 4554 5323', '0424 144 547', '', '54 SPECKING AVENUE ', 'GROGAN', 'NSW', '2666', NULL, NULL),
(48, 'Mr', 'Willie', 'Nukeit', 'M', '1959-09-06', '15_seconds_on_high@gmail.com', '(02) 4468 5531', '0429 352 523', '', '13/42 SKY CIRCLE ', 'RAYMOND TERRACE EAST', 'NSW', '2324', NULL, NULL),
(49, 'Mrs', 'Dorthy', 'Harrington', 'F', '1972-08-31', 'd.harrington@bigpond.net.au', '(02) 4734 3568', '0413 566 257', '', '107 STANLEY DRIVE ', 'CROWTHER', 'NSW', '2803', NULL, NULL),
(50, 'Mr', 'Dewayne', 'Mccormick', 'M', '1979-10-14', 'dewayne@bigpond.com', '(02) 4128 6846', '0429 128 465', '', '88 CAMPBELL AIRSTRIP ROAD ', 'WEST CHATSWOOD', 'NSW', '1515', NULL, NULL),
(51, 'Mr', 'Ronny', 'Lancaster', 'M', '1974-09-28', 'r.lancaster@bigpond.com', '(02) 4482 8625', '0424 931 262', '', '172 CALAMITY COURT ', 'MONGARLOWE', 'NSW', '2622', NULL, NULL),
(52, 'Mr', 'Glen', 'Cameron', 'M', '1963-10-31', 'gcameron341@hotmail.com', '(02) 4682 5867', '0412 774 781', '', '191 SPRUCE RUN CIRCLE ', 'WALLABI POINT', 'NSW', '2430', NULL, NULL),
(53, 'Ms', 'Cristina', 'Vance', 'F', '1956-07-20', 'cristina@gmail.com', '(02) 4349 3356', '0425 932 855', '', '199 KATRINA CIRCLE ', 'MIRRABOOKA', 'NSW', '2264', NULL, NULL),
(54, 'Miss', 'Tasha', 'Hancock', 'F', '1944-08-21', 'thancock215@hotmail.com', '(02) 4492 4838', '0416 278 728', '', '103 PORTAGE DRIVE ', 'PALMDALE', 'NSW', '2258', NULL, NULL),
(55, 'Mr', 'Willie', 'Baggitt', 'M', '1978-08-22', 'listen_for_the_pop@gmail.com', '(02) 4234 8734', '0432 564 188', '', '104 KITZBUHEL ROAD ', 'RAPPVILLE', 'NSW', '2469', NULL, NULL),
(56, 'Mrs', 'Patricia', 'Bean', 'F', '1942-09-29', 'patricia.bean@mirkwoodproductions.com.au', '(02) 4728 9738', '0414 183 182', '', '176 CAMELOT DRIVE ', 'SMITHS CREEK', 'NSW', '2474', NULL, NULL),
(57, 'Mr', 'Normand', 'Mcmahon', 'M', '1948-11-10', 'normand.mcmahon@hotmail.com', '(02) 4847 4724', '0402 943 746', 'Unit 12 Level 1', '143 GREATLAND DRIVE ', 'CENTRAL MANGROVE', 'NSW', '2250', NULL, NULL),
(58, 'Ms', 'Clarice', 'Riddle', 'F', '1982-09-25', 'clarice.riddle@gmail.com', '(02) 4838 5745', '0432 854 445', '', '4 WOODSTOCK CIRCLE ', 'SPLITTERS CREEK', 'NSW', '2640', NULL, NULL),
(59, 'Mr', 'Scott', 'Watkins', 'M', '1948-01-26', 's.watkins@yahoo.com.au', '(02) 4675 1628', '0425 976 817', '', '163 GALLOWAY LOOP ', 'SOUTHGATE', 'NSW', '2460', NULL, NULL),
(60, 'Prof', 'Sonja', 'Carr', 'F', '1949-11-23', 'sonja.carr@hotmail.com', '(02) 4464 5976', '0428 837 333', '', '10 TIDEVIEW DRIVE ', 'OLD GUILDFORD', 'NSW', '2161', NULL, NULL),
(61, 'Mr', 'Rolando', 'Gamble', 'M', '1981-11-29', 'rolando.gamble@gmail.com', '(02) 4247 2542', '0429 991 767', '', '18/172 ED STREET ', 'CARINGBAH', 'NSW', '1495', NULL, NULL),
(62, 'Mr', 'Rocky', 'Petersen', 'M', '1940-03-20', 'rocky@optusnet.com.au', '(02) 4687 5225', '0402 461 317', '', '115 CAPE NOBLE CIRCLE ', 'KIAMA DOWNS', 'NSW', '2533', NULL, NULL),
(63, 'Mr', 'Hiram', 'Middleton', 'M', '1979-02-07', 'hmiddleton22@tpg.com.au', '(02) 4513 2558', '0417 657 247', '', '90 DEWEY CIRCLE ', 'BEROWRA WATERS', 'NSW', '2082', NULL, NULL),
(64, 'Miss', 'Valarie', 'Elliott', 'F', '1989-04-12', 'v.elliott@gmail.com', '(02) 4779 7455', '0426 234 822', '', '2 BOYSEN BERRY PLACE ', 'POINT PIPER', 'NSW', '2027', NULL, NULL),
(65, 'Mr', 'Toby', 'Booth', 'M', '1968-05-09', 'toby@mirkwoodproductions.com.au', '(02) 4672 6719', '0428 448 138', '', '182 HASTINGS LANE ', 'WILLIAMSDALE', 'NSW', '2620', NULL, NULL),
(66, 'Prof', 'Hunter', 'Obrien', 'M', '1956-04-12', 'hobrien364@gmail.com', '(02) 4273 8232', '0416 922 476', '', '186 GARNET STREET ', 'WEETANGERA', 'NSW', '2614', NULL, NULL),
(67, 'Mr', 'Kurt', 'Compton', 'M', '1993-07-02', 'k.compton@hotmail.com', '(02) 4988 8967', '0404 883 918', '', '166 GOLD CIRCLE ', 'WHITE CLIFFS', 'NSW', '2836', NULL, NULL),
(68, 'Mr', 'Luciano', 'Hodge', 'M', '1965-06-01', 'luciano@mirkwoodproductions.com.au', '(02) 4934 2288', '0415 736 372', '', '22 MISTY SPRINGS COURT ', 'BLAIRMOUNT', 'NSW', '2559', NULL, NULL),
(69, 'Mr', 'Randy', 'Gonzalez', 'M', '1938-01-12', 'randy.gonzalez@tpg.com.au', '(02) 4456 6722', '0426 738 474', 'Unit 3 Level 2', '48 PASO PLACE ', 'BUNGAWALBIN', 'NSW', '2469', NULL, NULL),
(70, 'Mr', 'Monroe', 'Wilson', 'M', '1945-02-24', 'monroe.wilson@mirkwoodproductions.com.au', '(02) 4664 3495', '0415 665 952', '', '118 MOUNTAINMAN LOOP ', 'WEST WYALONG', 'NSW', '2671', NULL, NULL),
(71, 'Miss', 'Simone', 'Collier', 'F', '1940-02-09', 'simone.collier@hotmail.com', '(02) 4966 4262', '0416 364 486', '', '5/144 ROSEMONT DRIVE ', 'NORTH BALGOWLAH', 'NSW', '2093', NULL, NULL),
(72, 'Ms', 'Alisha', 'Vaughan', 'F', '1945-08-27', 'alisha@gmail.com', '(02) 4324 5722', '0415 514 624', '', '87 GLENN NB OFF S BIRCHWOOD LOOP RAMP ', 'PACIFIC PALMS', 'NSW', '2428', NULL, NULL),
(73, 'Mr', 'Willie', 'Tweezeit', 'M', '1984-07-15', 'grab_life_by_the_head@gmail.com', '(02) 4772 2315', '0426 412 512', '', '80 HOSKEN STREET ', 'MACQUARIE PARK', 'NSW', '2113', NULL, NULL),
(74, 'Mr', 'Louie', 'Lindsay', 'M', '1980-07-26', 'l.lindsay@gmail.com', '(02) 4663 8289', '0419 324 483', '', '185 HILLCREST DRIVE ', 'LISMORE', 'NSW', '2480', NULL, NULL),
(75, 'Miss', 'Bettie', 'Mathis', 'F', '1951-03-14', 'bettie.mathis@mirkwoodproductions.com.au', '(02) 4794 3885', '0431 296 777', '', '69 CHAPEL DRIVE ', 'HUMULA', 'NSW', '2652', NULL, NULL),
(76, 'Dr', 'Kay', 'Blake', 'F', '1961-06-19', 'k.blake@hotmail.com', '(02) 4677 6243', '0436 616 698', '', '24 BRIDGER PLACE ', 'WARIALDA RAIL', 'NSW', '2402', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
CREATE TABLE IF NOT EXISTS `inventories` (
  `itemId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemDescription` mediumtext COLLATE utf8mb4_unicode_ci,
  `numberOnHand` int(10) UNSIGNED DEFAULT NULL,
  `numberOnOrder` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`itemId`, `itemName`, `itemDescription`, `numberOnHand`, `numberOnOrder`, `created_at`, `updated_at`) VALUES
(1, 'Bandage scissors', 'Universal Scissors are multi-purpose scissors, good for bandaging. Stainless steel, 14cm in length.', 4, 0, NULL, NULL),
(2, 'Coflex bandage', 'CoFlex ?is a cohesive flexible bandage manufactured for bovine hoof trimmers that can also be used as a lightweight wound dressing. CoFlex does not stick to skin or hair, and provides consistent compression without the danger of constriction.', 17, 20, NULL, NULL),
(3, 'Cotton wool roll', 'Smith and Nephew Cotton Wool Roll is a cellulose fibre/cotton blend dressing of surgical absorbent quality for wound management, bandaging and first aid.', 13, 50, NULL, NULL),
(4, 'Elastoplast roll', 'Value pack of 12 - Super adhesive bandages. Veterinary Elastoplast is an elastic adhesive bandage.', 5, 25, NULL, NULL),
(5, 'Jelonet', 'Jelonet* is a paraffin gauze dressing 36 pieces of 10x10cm Features Soft paraffin base Sterile leno weave.', 29, 0, NULL, NULL),
(6, 'Pill popper tablet applicator', 'Holds the tablet for you, making it easier to give your dog or cat tablets. You depress the plunger to administer the dose.', 38, 25, NULL, NULL),
(7, 'Rip-Rap heavy bandage', 'Heavy duty self-adhesive bandage - the \"King Gee\" of cohesive bandages. Ideal for use on large animals.4.5m long, 5cm wide.', 3, 20, NULL, NULL),
(8, 'Sharps container', '1.4L sharps disposable container. Please refer to local legislation regarding disposal of used containers.', 0, 0, NULL, NULL),
(9, 'Stethoscope', 'Basic dual headed stethoscope', 4, 0, NULL, NULL),
(10, 'Swabs guaze', 'Guaze for wounds. 5cm wide.', 102, 0, NULL, NULL),
(11, 'Syringe (10ml)', '10ml Centre Fit Luer Slip steril syringe.', 15, 10, NULL, NULL),
(12, 'Epsom salt', 'Also known as magnesium sulphate. Feed grade', 10, 0, NULL, NULL),
(13, 'Veterinary Gamgee', 'Highly-absorant hospital-grade cotton wool encased in a low-adherent, tubular non-woven cover.', 5, 0, NULL, NULL),
(14, 'Tick-approved microwave bags', 'Zip-lock bags that are designed specifically for tick destruction.', 318, 100, NULL, NULL),
(15, 'Wrap it bandage', 'Cohesive non-woven bandage. 1.8m unstretched and 4.5m stretched.', 24, 0, NULL, NULL),
(16, 'Bunny bubble bath', 'Gently cleans and conditions coats of rabbits and guinea pigs. Tearless formulation suitable for every day use.', 20, 0, NULL, NULL),
(17, 'Cylap RCD - Rabbit Vaccine', 'Control of rabbit calicivirus disease. Vaccinate at 10 - 12 weeks then yearly. Give 1ml subcutaneously.', 8, 0, NULL, NULL),
(18, 'Fidos bubble bath', '\"Fido\"s Bunny Bath Shampoo and Cond in 1 is a mild soap free formulation especially suitable for the delicate skins of rabbits, guinea pigs and other furry pets. Your pet\'s coat is left clean and lustrous with a long lasting baby powder scent.', 3, 0, NULL, NULL),
(19, 'Biolac animal rearing teats - T1', 'Fake teats for assisting with the rearing of animals. Teatlicious.', 4, 2, NULL, NULL),
(20, 'Biolac animal rearing teats - T2', 'Fake teats for assisting with the rearing of animals. Teatlicious.', 3, 2, NULL, NULL),
(21, 'Biolac animal rearing teats - T3', 'Fake teats for assisting with the rearing of animals. Teatlicious.', 12, 0, NULL, NULL),
(22, 'Biolac animal rearing teats - T4', 'Fake teats for assisting with the rearing of animals. Teatlicious.', 6, 0, NULL, NULL),
(23, 'Pet nursing bottle', 'A bottle?', 0, 0, NULL, NULL),
(24, 'Dentipet finger toothbrush', 'For the cleaning of animals\' teeth using one\'s finger.', 2, 24, NULL, NULL),
(25, 'PetLife QuickFit Muzzle', 'The PetLife Quick Fit Muzzle is a fantastic standard dog muzzle. It even has a brilliant adjustable velcro strap, so you know it\'ll fit properly. There\'s a mesh part under the chin too for better ventilation and comfort.', 2, 0, NULL, NULL),
(26, 'Beta-Cel', 'Electrolyte mixture for replacement therapy for racing greyhounds.', 0, 10, NULL, NULL),
(27, 'Equivit Enduramex', 'Endura-Max Plus Electrolyte Paste is a buffered oral electrolyte supplement designed specifically for endurance horses.', 0, 2, NULL, NULL),
(28, 'Thundershirt for cats', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 12, 0, NULL, NULL),
(29, 'Thundershirt for dogs', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 3, 10, NULL, NULL),
(30, 'Thundershirt for ferrets', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 8, 10, NULL, NULL),
(31, 'Thundershirt for fish', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 1, 10, NULL, NULL),
(32, 'Thundershirt for goats', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 0, 10, NULL, NULL),
(33, 'Thundershirt for slugs', 'A shirt that provids general well-balanced pressure resulting in a calm animal.', 0, 100, NULL, NULL),
(34, 'Permoxin', 'Antiparasitic wash', 123, 50, NULL, NULL),
(35, 'Advantage for dogs', 'Advantage flea and tick solution.', 184, 0, NULL, NULL),
(36, 'Advantage for cats', 'Advantage flea and tick solution.', 172, 0, NULL, NULL),
(37, 'Advantage for fish', 'Advantage flea and tick solution.', 12, 0, NULL, NULL),
(38, 'Advantage for ferrets', 'Advantage flea and tick solution.', 62, 0, NULL, NULL),
(39, 'Advantage for goats', 'Advantage flea and tick solution.', 21, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_19_111756_create_states_table', 1),
(4, '2019_05_20_085035_create_customers_table', 1),
(5, '2019_05_21_111349_create_staff_table', 1),
(6, '2019_05_22_095455_create_pets_table', 1),
(7, '2019_05_23_111931_create_inventories_table', 1),
(8, '2019_05_24_112550_create_bookings_table', 1),
(9, '2019_05_25_013003_create_stays_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `petId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `petName` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `species` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double(8,2) DEFAULT NULL,
  `customerId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`petId`),
  KEY `pets_customerid_foreign` (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petId`, `petName`, `species`, `breed`, `DOB`, `gender`, `weight`, `customerId`, `created_at`, `updated_at`) VALUES
(1, 'Nkala', 'Cat', 'DLH', '2011-04-13', 'F', 3.60, 53, NULL, NULL),
(2, 'Charlie', 'Cat', 'Burmese', '2002-03-16', 'M', 4.30, 33, NULL, NULL),
(3, 'Darky', 'Cat', 'DSH', '2010-12-20', 'M', 6.80, 18, NULL, NULL),
(4, 'Kitty', 'Cat', 'DSH', '2008-01-22', 'M', 7.50, 63, NULL, NULL),
(5, 'Stripey', 'Cat', 'DSH', '1999-04-14', 'M', 6.90, 33, NULL, NULL),
(6, 'Happy', 'Cat', 'Persian', '2012-04-12', 'M', 8.10, 19, NULL, NULL),
(7, 'Bichel', 'Cat', 'DSH', '2004-12-29', 'M', 3.00, 13, NULL, NULL),
(8, 'Trouble', 'Cat', 'DLH', '1998-12-12', 'M', 6.70, 67, NULL, NULL),
(9, 'Rupert', 'Cat', 'DSH', '2002-08-10', 'M', 5.40, 66, NULL, NULL),
(10, 'Lucky', 'Cat', 'Siamese', '2005-05-03', 'M', 7.40, 36, NULL, NULL),
(11, 'Jemima', 'Cat', 'DSH', '2006-07-18', 'F', 7.20, 69, NULL, NULL),
(12, 'Nathan', 'Cat', 'DSH', '2005-08-05', 'M', 6.10, 7, NULL, NULL),
(13, 'Harold', 'Cat', 'DSH', '2012-06-12', 'M', 5.80, 7, NULL, NULL),
(14, 'Tabitha', 'Cat', 'Persian', '2006-08-29', 'F', 4.30, 37, NULL, NULL),
(15, 'Diggeden', 'Cat', 'DSH', '2003-04-20', 'M', 6.80, 54, NULL, NULL),
(16, 'Tigger', 'Cat', 'Burmese', '2008-11-06', 'M', 5.70, 7, NULL, NULL),
(17, 'Sadza', 'Cat', 'DSH', '2011-10-01', 'M', 5.90, 31, NULL, NULL),
(18, 'Gravy', 'Cat', 'DSH', '2001-06-10', 'M', 3.90, 18, NULL, NULL),
(19, 'Phoebe', 'Cat', 'Persian', '2007-06-24', 'F', 7.20, 73, NULL, NULL),
(20, 'Meow-Meow', 'Cat', 'DSH', '2004-12-09', 'F', 4.40, 60, NULL, NULL),
(21, 'Puffles', 'Cat', 'Siamese', '2008-05-31', 'F', 3.90, 70, NULL, NULL),
(22, 'Splat', 'Cat', 'Persian', '2006-06-09', 'F', 7.80, 34, NULL, NULL),
(23, 'Paw Thing', 'Cat', 'DSH', '2009-05-24', 'F', 3.40, 30, NULL, NULL),
(24, 'Verushka', 'Cat', 'Russian Blue', '1998-11-28', 'F', 5.10, 68, NULL, NULL),
(25, 'Gobbles', 'Cat', 'DSH', '2006-03-24', 'M', 3.60, 39, NULL, NULL),
(26, 'Fat Fred', 'Cat', 'DSH', '2006-08-02', 'M', 5.50, 58, NULL, NULL),
(27, 'Blimpie', 'Cat', 'Burmese', '2000-03-22', 'M', 7.50, 16, NULL, NULL),
(28, 'Fred', 'Cat', 'Siamese', '2001-03-03', 'M', 4.20, 27, NULL, NULL),
(29, 'Frankie', 'Cat', 'DSH', '2009-05-19', 'M', 7.10, 55, NULL, NULL),
(30, 'Sooty', 'Cat', 'DLH', '2004-10-02', 'M', 7.00, 67, NULL, NULL),
(31, 'Geeves', 'Cat', 'DLH', '2006-12-06', 'M', 6.90, 70, NULL, NULL),
(32, 'Miranda', 'Cat', 'DSH', '2005-05-20', 'F', 7.80, 25, NULL, NULL),
(33, 'Cazza', 'Cat', 'DLH', '2011-04-15', 'F', 6.20, 36, NULL, NULL),
(34, 'Abby', 'Cat', 'Munchkin', '1999-02-10', 'F', 7.40, 40, NULL, NULL),
(35, 'Whiskers', 'Cat', 'DSH', '2000-04-05', 'M', 3.10, 37, NULL, NULL),
(36, 'Boopie', 'Cat', 'Ragdoll', '2010-03-26', 'M', 8.10, 42, NULL, NULL),
(37, 'Cleo', 'Cat', 'Birman', '2000-02-17', 'M', 8.80, 59, NULL, NULL),
(38, 'Nick', 'Cat', 'Birman', '2009-12-10', 'M', 7.70, 1, NULL, NULL),
(39, 'Ziggy', 'Dog', 'Kelpie', '2012-05-08', 'M', 4.30, 31, NULL, NULL),
(40, 'Bazza', 'Dog', 'Kelpie', '2006-10-23', 'M', 11.60, 3, NULL, NULL),
(41, 'Bindi', 'Dog', 'Australian Terrier', '2007-02-10', 'M', 12.90, 23, NULL, NULL),
(42, 'Butch', 'Dog', 'Boxer', '2001-01-18', 'M', 10.50, 46, NULL, NULL),
(43, 'Mitzi', 'Dog', 'Maltese Terrier', '2006-02-28', 'F', 18.60, 65, NULL, NULL),
(44, 'Rusty', 'Dog', 'Red Setter', '2009-04-01', 'M', 11.40, 51, NULL, NULL),
(45, 'Pippa', 'Dog', 'Whippet', '2008-04-16', 'F', 7.90, 75, NULL, NULL),
(46, 'Top', 'Dog', 'Labrador', '2011-05-20', 'F', 4.00, 50, NULL, NULL),
(47, 'Red', 'Dog', 'King Charles spaniel', '2012-09-27', 'M', 10.10, 16, NULL, NULL),
(48, 'Blue', 'Dog', 'Maltese Poodle', '2001-05-19', 'M', 8.90, 2, NULL, NULL),
(49, 'Jarrad', 'Dog', 'Jack Russell', '2007-05-23', 'M', 17.90, 20, NULL, NULL),
(50, 'Amigo', 'Dog', 'Maltese Poodle', '2000-04-25', 'M', 15.90, 42, NULL, NULL),
(51, 'Bonkers', 'Dog', 'Dachshund', '2012-01-26', 'M', 4.00, 68, NULL, NULL),
(52, 'Bongo', 'Dog', 'Labrador', '2001-11-02', 'M', 11.50, 30, NULL, NULL),
(53, 'Crazy Horse', 'Dog', 'Maltese Poodle', '2001-03-26', 'M', 17.80, 60, NULL, NULL),
(54, 'Wooffles', 'Dog', 'King Charles spaniel', '2006-03-21', 'F', 3.20, 36, NULL, NULL),
(55, 'Darling', 'Dog', 'Afghan Hound', '2001-09-27', 'F', 9.60, 29, NULL, NULL),
(56, 'Precious', 'Dog', 'Pekinese', '2006-05-02', 'F', 19.10, 21, NULL, NULL),
(57, 'Zog', 'Dog', 'Border Collie', '2012-10-21', 'F', 15.50, 22, NULL, NULL),
(58, 'Max', 'Dog', 'Labrador', '2009-11-03', 'M', 11.40, 3, NULL, NULL),
(59, 'Dingo', 'Dog', 'Poodle', '2000-06-28', 'M', 14.30, 54, NULL, NULL),
(60, 'Wolf', 'Dog', 'Labrador', '2006-10-21', 'M', 16.60, 42, NULL, NULL),
(61, 'Slobberchops', 'Dog', 'Boxer', '2009-12-28', 'M', 3.40, 36, NULL, NULL),
(62, 'Thief', 'Dog', 'Border Collie', '2008-10-27', 'M', 7.60, 2, NULL, NULL),
(63, 'Buttsniffer', 'Dog', 'Labradoodle', '2006-06-04', 'M', 11.80, 68, NULL, NULL),
(64, 'Ferdy', 'Dog', 'Maltese Poodle', '1998-07-25', 'M', 9.00, 16, NULL, NULL),
(65, 'Ursula', 'Dog', 'Labrador', '2000-06-13', 'F', 6.30, 7, NULL, NULL),
(66, 'Bella', 'Dog', 'Pomeranian', '2005-08-29', 'F', 10.30, 64, NULL, NULL),
(67, 'Gerda', 'Dog', 'Labrador', '2007-07-23', 'F', 16.00, 11, NULL, NULL),
(68, 'Sammy', 'Dog', 'Border Collie', '2003-08-14', 'M', 16.80, 44, NULL, NULL),
(69, 'Chuck', 'Dog', 'King Charles spaniel', '2002-12-14', 'M', 13.50, 2, NULL, NULL),
(70, 'Burglar', 'Ferret', '', '2004-09-30', 'F', 11.40, 70, NULL, NULL),
(71, 'Mike', 'Ferret', 'Cinammon Ferret', '2012-10-13', 'M', 7.80, 12, NULL, NULL),
(72, 'Nerdwood', 'Ferret', 'Cinammon Ferret', '2005-02-09', 'M', 18.70, 73, NULL, NULL),
(73, 'Frederico', 'Ferret', '', '1998-07-13', 'M', 4.50, 70, NULL, NULL),
(74, 'Felix', 'Ferret', '', '2011-11-08', 'M', 18.30, 23, NULL, NULL),
(75, 'Trapper', 'Ferret', '', '2011-06-18', 'F', 11.20, 71, NULL, NULL),
(76, 'Sneaky Whiskers', 'Ferret', 'Butterscotch Ferret', '2008-08-20', 'F', 4.40, 15, NULL, NULL),
(77, 'Greg', 'Snake', 'Eel Snake', '2009-10-06', 'M', 6.60, 75, NULL, NULL),
(78, 'Woodie', 'Snake', 'Python', '2010-01-30', 'M', 11.90, 36, NULL, NULL),
(79, 'Jools', 'Snake', 'Brown Snake', '2007-09-10', 'F', 16.30, 57, NULL, NULL),
(80, 'Suzie', 'Snake', 'Black Snake', '2011-06-14', 'F', 15.70, 44, NULL, NULL),
(81, 'Stretch', 'Snake', 'Python', '2010-05-20', 'F', 8.90, 6, NULL, NULL),
(82, 'Thermal', 'Koala', '', '2009-09-06', 'M', 18.20, 32, NULL, NULL),
(83, 'Matt', 'Goat', '', '2012-03-01', 'M', 16.50, 62, NULL, NULL),
(84, 'Moose', 'Goat', '', '2011-08-25', 'F', 13.50, 75, NULL, NULL),
(85, 'Garry', 'Goat', '', '2011-01-19', 'M', 11.80, 36, NULL, NULL),
(86, 'Peter', 'Rabbit ', '', '2008-08-20', 'M', 9.10, 39, NULL, NULL),
(87, 'Hopper', 'Rabbit ', '', '2012-07-16', 'F', 7.80, 50, NULL, NULL),
(88, 'Thunder', 'Rabbit ', 'Angora', '2011-01-29', 'F', 7.10, 14, NULL, NULL),
(89, 'Breedz', 'Rabbit ', '', '2012-09-18', 'M', 5.80, 47, NULL, NULL),
(90, 'Sunflower', 'Rabbit ', '', '2007-04-10', 'F', 3.30, 51, NULL, NULL),
(91, 'Mug', 'Rabbit ', '', '2010-12-26', 'F', 6.60, 65, NULL, NULL),
(92, 'Midnight', 'Mouse', '', '2008-05-21', 'M', 0.00, 10, NULL, NULL),
(93, 'Hashimoto', 'Mouse', '', '2008-07-27', 'M', 0.00, 66, NULL, NULL),
(94, 'Claudette', 'Mouse', '', '2008-05-31', 'F', 0.00, 14, NULL, NULL),
(95, 'Toffee', 'Guinea Pig', '', '2010-05-25', 'F', 0.00, 18, NULL, NULL),
(96, 'Fudge', 'Guinea Pig', '', '2012-01-06', 'F', 0.00, 29, NULL, NULL),
(97, 'Caramel', 'Guinea Pig', '', '2012-01-31', 'F', 0.00, 58, NULL, NULL),
(98, 'Dollar', 'Guinea Pig', '', '2010-03-16', 'F', 0.00, 3, NULL, NULL),
(99, 'Patches', 'Guinea Pig', '', '2011-09-08', 'M', 0.00, 12, NULL, NULL),
(100, 'Splodge', 'Guinea Pig', '', '2010-07-09', 'M', 0.00, 1, NULL, NULL),
(101, 'Nibbles', 'Rat', '', '2008-06-01', 'M', 0.00, 35, NULL, NULL),
(102, 'Twitch', 'Rat', '', '2007-11-22', 'F', 0.00, 73, NULL, NULL),
(103, 'Chomper', 'Rat', '', '2008-03-24', 'F', 0.00, 75, NULL, NULL),
(104, 'Buck', 'Rat', '', '2012-11-13', 'M', 0.00, 54, NULL, NULL),
(105, 'Seal', 'Guinea Pig', '', '2011-07-16', 'M', 0.00, 67, NULL, NULL),
(106, 'Lisa', 'Guinea Pig', '', '2007-04-25', 'F', 0.00, 46, NULL, NULL),
(107, 'Percy', 'Rat', '', '2010-06-14', 'M', 0.00, 53, NULL, NULL),
(108, 'Hannah', 'Rat', '', '2007-09-04', 'F', 0.00, 67, NULL, NULL),
(109, 'Lurch', 'Rat', '', '2010-03-09', 'F', 0.00, 46, NULL, NULL),
(110, 'Teacher', 'Tortoise', '', '2011-03-31', 'M', 11.00, 58, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`staffId`),
  KEY `staff_state_foreign` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `title`, `firstName`, `lastName`, `gender`, `DOB`, `email`, `phone1`, `phone2`, `street1`, `street2`, `suburb`, `state`, `postcode`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Keith', 'Cabrade', 'M', '1973-02-13', 'keith@tickedoff.com.au', '(02) 9912 8192', '0401 982 389', '', '10 Cracked Rd', 'Avalon', 'NSW', '2107', 'Manager', NULL, NULL),
(2, 'Ms', 'Savannah', 'Chartreux', 'F', '1966-07-01', 'savannah@tickedoff.com.au', '(02) 8863 4123', '0411 786 344', 'Unit 1', '19 Serval St', 'Mona Vale', 'NSW', '2103', 'Vet', NULL, NULL),
(3, 'Dr', 'Peter', 'Pug', 'M', '1965-11-13', 'peter@tickedoff.com.au', '', '0401 298 128', '', '80 Panther Pl', 'Morisset', 'NSW', '2264', 'Vet', NULL, NULL),
(4, 'Mrs', 'Gail', 'Cavia', 'F', '1972-12-12', 'gail@tickedoff.com.au', '(02) 9317 1278', '0401 829 998', '', '123 Porcellus Rd', 'Newport', 'NSW', '2106', 'Office Assistant', NULL, NULL),
(5, 'Mrs', 'Greta', 'Mustela', 'F', '1970-03-12', 'greta@tickedoff.com.au', '', '0411 238 812', '', '10 Polecat St', 'Turramurra', 'NSW', '2074', 'Vet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `state` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state`, `created_at`, `updated_at`) VALUES
('ACT', NULL, NULL),
('NSW', NULL, NULL),
('NT', NULL, NULL),
('QLD', NULL, NULL),
('SA', NULL, NULL),
('TAS', NULL, NULL),
('VIC', NULL, NULL),
('WA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stays`
--

DROP TABLE IF EXISTS `stays`;
CREATE TABLE IF NOT EXISTS `stays` (
  `stayId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stayStartDate` date DEFAULT NULL,
  `stayEndDate` date DEFAULT NULL,
  `petId` bigint(20) UNSIGNED DEFAULT NULL,
  `stayCost` decimal(19,4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`stayId`),
  KEY `stays_petid_foreign` (`petId`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stays`
--

INSERT INTO `stays` (`stayId`, `stayStartDate`, `stayEndDate`, `petId`, `stayCost`, `created_at`, `updated_at`) VALUES
(1, '2013-01-01', '2013-01-03', 56, '682.5000', NULL, NULL),
(2, '2013-01-01', '2013-01-05', 97, '121.5000', NULL, NULL),
(3, '2013-01-01', '2013-01-08', 12, '222.0000', NULL, NULL),
(4, '2013-01-02', '2013-01-04', 84, '126.0000', NULL, NULL),
(5, '2013-01-02', '2013-01-05', 56, '655.5000', NULL, NULL),
(6, '2013-01-02', '2013-01-05', 24, '729.0000', NULL, NULL),
(7, '2013-01-02', '2013-01-06', 103, '327.0000', NULL, NULL),
(8, '2013-01-02', '2013-01-11', 36, '274.5000', NULL, NULL),
(9, '2013-01-03', '2013-01-04', 18, '658.5000', NULL, NULL),
(10, '2013-01-03', '2013-01-05', 8, '292.5000', NULL, NULL),
(11, '2013-01-03', '2013-01-05', 70, '640.5000', NULL, NULL),
(12, '2013-01-03', '2013-01-06', 45, '684.0000', NULL, NULL),
(13, '2013-01-03', '2013-01-06', 66, '553.5000', NULL, NULL),
(14, '2013-01-03', '2013-01-06', 33, '253.5000', NULL, NULL),
(15, '2013-01-03', '2013-01-07', 64, '252.0000', NULL, NULL),
(16, '2013-01-03', '2013-01-09', 21, '87.0000', NULL, NULL),
(17, '2013-01-03', '2013-01-14', 62, '522.0000', NULL, NULL),
(18, '2013-01-04', '2013-01-06', 41, '666.0000', NULL, NULL),
(19, '2013-01-04', '2013-01-07', 41, '324.0000', NULL, NULL),
(20, '2013-01-04', '2013-01-08', 7, '579.0000', NULL, NULL),
(21, '2013-01-04', '2013-01-14', 86, '612.0000', NULL, NULL),
(22, '2013-01-04', '2013-01-15', 24, '676.5000', NULL, NULL),
(23, '2013-01-05', '2013-01-06', 105, '84.0000', NULL, NULL),
(24, '2013-01-05', '2013-01-06', 97, '183.0000', NULL, NULL),
(25, '2013-01-05', '2013-01-07', 48, '166.5000', NULL, NULL),
(26, '2013-01-05', '2013-01-07', 45, '123.0000', NULL, NULL),
(27, '2013-01-05', '2013-01-08', 29, '571.5000', NULL, NULL),
(28, '2013-01-05', '2013-01-09', 46, '156.0000', NULL, NULL),
(29, '2013-01-05', '2013-01-12', 77, '666.0000', NULL, NULL),
(30, '2013-01-05', '2013-01-17', 50, '103.5000', NULL, NULL),
(31, '2013-01-06', '2013-01-07', 71, '630.0000', NULL, NULL),
(32, '2013-01-06', '2013-01-08', 102, '630.0000', NULL, NULL),
(33, '2013-01-06', '2013-01-10', 19, '535.5000', NULL, NULL),
(34, '2013-01-06', '2013-01-10', 106, '556.5000', NULL, NULL),
(35, '2013-01-06', '2013-01-10', 8, '703.5000', NULL, NULL),
(36, '2013-01-07', '2013-01-08', 8, '417.0000', NULL, NULL),
(37, '2013-01-07', '2013-01-08', 85, '555.0000', NULL, NULL),
(38, '2013-01-07', '2013-01-09', 92, '388.5000', NULL, NULL),
(39, '2013-01-07', '2013-01-11', 61, '36.0000', NULL, NULL),
(40, '2013-01-07', '2013-01-12', 9, '327.0000', NULL, NULL),
(41, '2013-01-07', '2013-01-15', 41, '681.0000', NULL, NULL),
(42, '2013-01-08', '2013-01-10', 38, '424.5000', NULL, NULL),
(43, '2013-01-08', '2013-01-11', 110, '228.0000', NULL, NULL),
(44, '2013-01-08', '2013-01-12', 105, '658.5000', NULL, NULL),
(45, '2013-01-08', '2013-01-16', 61, '262.5000', NULL, NULL),
(46, '2013-01-09', '2013-01-10', 58, '304.5000', NULL, NULL),
(47, '2013-01-09', '2013-01-10', 88, '43.5000', NULL, NULL),
(48, '2013-01-09', '2013-01-10', 55, '373.5000', NULL, NULL),
(49, '2013-01-09', '2013-01-10', 106, '103.5000', NULL, NULL),
(50, '2013-01-09', '2013-01-11', 76, '573.0000', NULL, NULL),
(51, '2013-01-09', '2013-01-11', 48, '592.5000', NULL, NULL),
(52, '2013-01-09', '2013-01-13', 92, '319.5000', NULL, NULL),
(53, '2013-01-10', '2013-01-12', 109, '634.5000', NULL, NULL),
(54, '2013-01-10', '2013-01-12', 22, '213.0000', NULL, NULL),
(55, '2013-01-10', '2013-01-13', 69, '373.5000', NULL, NULL),
(56, '2013-01-10', '2013-01-13', 12, '96.0000', NULL, NULL),
(57, '2013-01-10', '2013-01-14', 53, '373.5000', NULL, NULL),
(58, '2013-01-10', '2013-01-16', 51, '666.0000', NULL, NULL),
(59, '2013-01-10', '2013-01-21', 110, '550.5000', NULL, NULL),
(60, '2013-01-11', '2013-01-13', 86, '108.0000', NULL, NULL),
(61, '2013-01-11', '2013-01-14', 14, '484.5000', NULL, NULL),
(62, '2013-01-11', '2013-01-14', 85, '295.5000', NULL, NULL),
(63, '2013-01-11', '2013-01-17', 84, '636.0000', NULL, NULL),
(64, '2013-01-11', '2013-01-21', 33, '138.0000', NULL, NULL),
(65, '2013-01-11', '2013-01-23', 93, '297.0000', NULL, NULL),
(66, '2013-01-11', '2013-01-24', 99, '177.0000', NULL, NULL),
(67, '2013-01-12', '2013-01-13', 86, '201.0000', NULL, NULL),
(68, '2013-01-12', '2013-01-13', 12, '657.0000', NULL, NULL),
(69, '2013-01-12', '2013-01-13', 81, '678.0000', NULL, NULL),
(70, '2013-01-12', '2013-01-14', 91, '270.0000', NULL, NULL),
(71, '2013-01-12', '2013-01-15', 52, '307.5000', NULL, NULL),
(72, '2013-01-12', '2013-01-18', 17, '621.0000', NULL, NULL),
(73, '2013-01-13', '2013-01-14', 67, '694.5000', NULL, NULL),
(74, '2013-01-13', '2013-01-15', 62, '571.5000', NULL, NULL),
(75, '2013-01-13', '2013-01-15', 67, '537.0000', NULL, NULL),
(76, '2013-01-13', '2013-01-15', 59, '292.5000', NULL, NULL),
(77, '2013-01-13', '2013-01-17', 47, '214.5000', NULL, NULL),
(78, '2013-01-13', '2013-01-17', 45, '444.0000', NULL, NULL),
(79, '2013-01-13', '2013-01-17', 72, '442.5000', NULL, NULL),
(80, '2013-01-13', '2013-01-25', 17, '535.5000', NULL, NULL),
(81, '2013-01-14', '2013-01-17', 75, '445.5000', NULL, NULL),
(82, '2013-01-14', '2013-01-17', 108, '535.5000', NULL, NULL),
(83, '2013-01-14', '2013-01-18', 93, '559.5000', NULL, NULL),
(84, '2013-01-14', '2013-01-24', 82, '160.5000', NULL, NULL),
(85, '2013-01-14', '2013-01-27', 98, '456.0000', NULL, NULL),
(86, '2013-01-15', '2013-01-18', 66, '633.0000', NULL, NULL),
(87, '2013-01-15', '2013-01-18', 15, '409.5000', NULL, NULL),
(88, '2013-01-15', '2013-01-18', 63, '604.5000', NULL, NULL),
(89, '2013-01-15', '2013-01-19', 7, '568.5000', NULL, NULL),
(90, '2013-01-16', '2013-01-17', 66, '193.5000', NULL, NULL),
(91, '2013-01-16', '2013-01-17', 100, '204.0000', NULL, NULL),
(92, '2013-01-16', '2013-01-17', 76, '631.5000', NULL, NULL),
(93, '2013-01-16', '2013-01-17', 45, '304.5000', NULL, NULL),
(94, '2013-01-16', '2013-01-17', 92, '247.5000', NULL, NULL),
(95, '2013-01-16', '2013-01-18', 98, '660.0000', NULL, NULL),
(96, '2013-01-16', '2013-01-18', 20, '283.5000', NULL, NULL),
(97, '2013-01-16', '2013-01-19', 43, '619.5000', NULL, NULL),
(98, '2013-01-16', '2013-01-19', 90, '226.5000', NULL, NULL),
(99, '2013-01-16', '2013-01-20', 91, '667.5000', NULL, NULL),
(100, '2013-01-16', '2013-01-29', 94, '678.0000', NULL, NULL),
(101, '2013-01-17', '2013-01-19', 105, '708.0000', NULL, NULL),
(102, '2013-01-17', '2013-01-19', 57, '735.0000', NULL, NULL),
(103, '2013-01-17', '2013-01-21', 55, '600.0000', NULL, NULL),
(104, '2013-01-17', '2013-01-30', 103, '190.5000', NULL, NULL),
(105, '2013-01-18', '2013-01-19', 10, '61.5000', NULL, NULL),
(106, '2013-01-18', '2013-01-19', 72, '369.0000', NULL, NULL),
(107, '2013-01-18', '2013-01-20', 67, '693.0000', NULL, NULL),
(108, '2013-01-18', '2013-01-21', 84, '693.0000', NULL, NULL),
(109, '2013-01-18', '2013-01-22', 78, '198.0000', NULL, NULL),
(110, '2013-01-18', '2013-01-22', 42, '61.5000', NULL, NULL),
(111, '2013-01-18', '2013-01-22', 66, '724.5000', NULL, NULL),
(112, '2013-01-18', '2013-01-22', 26, '517.5000', NULL, NULL),
(113, '2013-01-18', '2013-01-25', 43, '606.0000', NULL, NULL),
(114, '2013-01-19', '2013-01-20', 109, '736.5000', NULL, NULL),
(115, '2013-01-19', '2013-01-22', 7, '453.0000', NULL, NULL),
(116, '2013-01-19', '2013-01-23', 50, '699.0000', NULL, NULL),
(117, '2013-01-19', '2013-01-30', 64, '627.0000', NULL, NULL),
(118, '2013-01-20', '2013-01-21', 76, '487.5000', NULL, NULL),
(119, '2013-01-20', '2013-01-21', 42, '45.0000', NULL, NULL),
(120, '2013-01-20', '2013-01-23', 6, '163.5000', NULL, NULL),
(121, '2013-01-20', '2013-01-23', 63, '726.0000', NULL, NULL),
(122, '2013-01-20', '2013-01-26', 68, '705.0000', NULL, NULL),
(123, '2013-01-20', '2013-01-28', 40, '175.5000', NULL, NULL),
(124, '2013-01-20', '2013-01-29', 108, '34.5000', NULL, NULL),
(125, '2013-01-20', '2013-02-01', 15, '274.5000', NULL, NULL),
(126, '2013-01-21', '2013-01-23', 11, '126.0000', NULL, NULL),
(127, '2013-01-21', '2013-01-25', 39, '450.0000', NULL, NULL),
(128, '2013-01-21', '2013-01-25', 33, '390.0000', NULL, NULL),
(129, '2013-01-21', '2013-01-25', 49, '735.0000', NULL, NULL),
(130, '2013-01-21', '2013-01-25', 78, '238.5000', NULL, NULL),
(131, '2013-01-21', '2013-01-25', 46, '631.5000', NULL, NULL),
(132, '2013-01-21', '2013-01-29', 98, '151.5000', NULL, NULL),
(133, '2013-01-21', '2013-02-04', 30, '135.0000', NULL, NULL),
(134, '2013-01-22', '2013-01-23', 49, '505.5000', NULL, NULL),
(135, '2013-01-22', '2013-01-25', 102, '114.0000', NULL, NULL),
(136, '2013-01-22', '2013-01-25', 30, '175.5000', NULL, NULL),
(137, '2013-01-22', '2013-02-01', 36, '573.0000', NULL, NULL),
(138, '2013-01-22', '2013-02-01', 29, '424.5000', NULL, NULL),
(139, '2013-01-22', '2013-02-02', 23, '628.5000', NULL, NULL),
(140, '2013-01-22', '2013-02-04', 25, '582.0000', NULL, NULL),
(141, '2013-01-23', '2013-01-24', 29, '475.5000', NULL, NULL),
(142, '2013-01-23', '2013-01-25', 8, '571.5000', NULL, NULL),
(143, '2013-01-23', '2013-01-25', 39, '253.5000', NULL, NULL),
(144, '2013-01-23', '2013-01-27', 102, '204.0000', NULL, NULL),
(145, '2013-01-24', '2013-01-25', 84, '547.5000', NULL, NULL),
(146, '2013-01-24', '2013-01-26', 83, '727.5000', NULL, NULL),
(147, '2013-01-24', '2013-01-27', 75, '540.0000', NULL, NULL),
(148, '2013-01-24', '2013-01-27', 23, '604.5000', NULL, NULL),
(149, '2013-01-24', '2013-01-28', 19, '507.0000', NULL, NULL),
(150, '2013-01-24', '2013-01-28', 3, '166.5000', NULL, NULL),
(151, '2013-01-24', '2013-01-30', 2, '442.5000', NULL, NULL),
(152, '2013-01-25', '2013-01-26', 61, '130.5000', NULL, NULL),
(153, '2013-01-25', '2013-01-26', 88, '255.0000', NULL, NULL),
(154, '2013-01-25', '2013-01-28', 109, '748.5000', NULL, NULL),
(155, '2013-01-25', '2013-01-28', 104, '66.0000', NULL, NULL),
(156, '2013-01-26', '2013-01-27', 54, '496.5000', NULL, NULL),
(157, '2013-01-26', '2013-01-27', 24, '655.5000', NULL, NULL),
(158, '2013-01-26', '2013-01-27', 37, '366.0000', NULL, NULL),
(159, '2013-01-26', '2013-01-27', 91, '198.0000', NULL, NULL),
(160, '2013-01-26', '2013-01-28', 23, '411.0000', NULL, NULL),
(161, '2013-01-26', '2013-01-28', 50, '660.0000', NULL, NULL),
(162, '2013-01-26', '2013-01-28', 110, '426.0000', NULL, NULL),
(163, '2013-01-26', '2013-01-29', 28, '91.5000', NULL, NULL),
(164, '2013-01-26', '2013-01-29', 82, '531.0000', NULL, NULL),
(165, '2013-01-26', '2013-01-29', 63, '640.5000', NULL, NULL),
(166, '2013-01-26', '2013-01-30', 21, '223.5000', NULL, NULL),
(167, '2013-01-26', '2013-01-31', 56, '534.0000', NULL, NULL),
(168, '2013-01-26', '2013-02-01', 75, '369.0000', NULL, NULL),
(169, '2013-01-26', '2013-02-06', 14, '643.5000', NULL, NULL),
(170, '2013-01-27', '2013-01-29', 55, '238.5000', NULL, NULL),
(171, '2013-01-27', '2013-01-30', 69, '195.0000', NULL, NULL),
(172, '2013-01-27', '2013-01-31', 2, '361.5000', NULL, NULL),
(173, '2013-01-27', '2013-01-31', 54, '211.5000', NULL, NULL),
(174, '2013-01-28', '2013-01-29', 90, '298.5000', NULL, NULL),
(175, '2013-01-28', '2013-01-30', 39, '111.0000', NULL, NULL),
(176, '2013-01-28', '2013-01-31', 15, '604.5000', NULL, NULL),
(177, '2013-01-28', '2013-02-02', 43, '739.5000', NULL, NULL),
(178, '2013-01-28', '2013-02-10', 47, '138.0000', NULL, NULL),
(179, '2013-01-28', '2013-02-11', 29, '414.0000', NULL, NULL),
(180, '2013-01-29', '2013-01-30', 62, '82.5000', NULL, NULL),
(181, '2013-01-29', '2013-01-30', 63, '174.0000', NULL, NULL),
(182, '2013-01-29', '2013-01-31', 4, '712.5000', NULL, NULL),
(183, '2013-01-29', '2013-02-01', 19, '435.0000', NULL, NULL),
(184, '2013-01-29', '2013-02-01', 87, '630.0000', NULL, NULL),
(185, '2013-01-29', '2013-02-02', 27, '486.0000', NULL, NULL),
(186, '2013-01-29', '2013-02-06', 45, '265.5000', NULL, NULL),
(187, '2013-01-29', '2013-02-09', 29, '169.5000', NULL, NULL),
(188, '2013-01-30', '2013-01-31', 30, '355.5000', NULL, NULL),
(189, '2013-01-30', '2013-02-01', 106, '397.5000', NULL, NULL),
(190, '2013-01-30', '2013-02-02', 44, '618.0000', NULL, NULL),
(191, '2013-01-30', '2013-02-03', 22, '327.0000', NULL, NULL),
(192, '2013-01-30', '2013-02-03', 75, '261.0000', NULL, NULL),
(193, '2013-01-30', '2013-02-03', 27, '484.5000', NULL, NULL),
(194, '2013-01-30', '2013-02-03', 10, '391.5000', NULL, NULL),
(195, '2013-01-30', '2013-02-06', 105, '157.5000', NULL, NULL),
(196, '2013-01-30', '2013-02-06', 80, '456.0000', NULL, NULL),
(197, '2013-01-31', '2013-02-01', 76, '661.5000', NULL, NULL),
(198, '2013-01-31', '2013-02-01', 31, '549.0000', NULL, NULL),
(199, '2013-01-31', '2013-02-04', 44, '657.0000', NULL, NULL),
(200, '2013-01-31', '2013-02-07', 68, '85.5000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_petid_foreign` FOREIGN KEY (`petId`) REFERENCES `pets` (`petId`),
  ADD CONSTRAINT `bookings_staffid_foreign` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_state_foreign` FOREIGN KEY (`state`) REFERENCES `states` (`state`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_state_foreign` FOREIGN KEY (`state`) REFERENCES `states` (`state`);

--
-- Constraints for table `stays`
--
ALTER TABLE `stays`
  ADD CONSTRAINT `stays_petid_foreign` FOREIGN KEY (`petId`) REFERENCES `pets` (`petId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

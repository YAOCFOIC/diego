-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-10-2019 a las 12:09:03
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camact_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider`, `provider_id`, `phone`, `city`, `occupation`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Alejandro Osorio', 'lawiert02@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'programador', NULL, '$2y$12$A5MIwkIw1SOp82Q4QmfEkeK8/XeOlHm8X8xBEGfquSCEgkbW.1Yxm', NULL, NULL, NULL),
(5, 'Alejandro Osorio', 'lawiert@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'programador', NULL, '$2y$12$Oa.ncfuyujmvHS3v1YF5NuGJiZR9U8ZxwuYa4jhO.sTYDap8ZDvEW', NULL, NULL, NULL),
(6, 'Alejandro Osorio', 'lawier@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'programador', NULL, '$2y$12$pEpA67Gf3f75JDmdLN89MeE17kQ4otIRrOddnYEEwEo8lppGmAKZ2', NULL, NULL, NULL),
(7, 'Alejandro Osorio', 'lawiedsr@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'pas', NULL, '$2y$12$.n85S0QYif.7NTGlNuQIpepQwjLDWKH5fTm2IztfOK.2T.k3tS3ka', NULL, NULL, NULL),
(10, 'Alejandro Osorio', 'lawiert02ds@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'programador', NULL, '$2y$12$N1hJg0Np0/qf00sSgQQsG.D2BKoSOrHWBXAGWhkWJM7b1DBc7b5B6', NULL, NULL, NULL),
(13, 'Alejandro Osorio', 'yesitalejandroosorio@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'programador', NULL, '$2y$12$6JHT9tuD5fxwY/H3IPraSeHCw1gOCkyVno6xQrt5bxMfbNIC.7OF6', NULL, NULL, NULL),
(14, '', '', NULL, NULL, '', '', '', NULL, '$2y$12$6nfatzkv5dNt/Ov8R75nL.p7IRtuJR82skFPAdJcLpFvEqc6D15rq', NULL, NULL, NULL),
(15, '', 'sa@d', NULL, NULL, '', 'sa', 'SA', NULL, '$2y$12$kwu7/Ifp4YvKjgXQb/xfluS0vo/CPyzuZZ41CByiYHD5oDfG2BLvK', NULL, NULL, NULL),
(16, 'alejo', 'a@gmail.com', NULL, NULL, '3207238365', 'Medellin', 'a@gmail.com', NULL, '$2y$12$h65culQe5O0.kKNFtexCT.uu/OafI5.I2FhFc7NU/iPSv4C/ymFcK', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

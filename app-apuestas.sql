-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para app-apuestas
CREATE DATABASE IF NOT EXISTS `app-apuestas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `app-apuestas`;

-- Volcando estructura para tabla app-apuestas.attention_channel
CREATE TABLE IF NOT EXISTS `attention_channel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.attention_channel: ~2 rows (aproximadamente)
INSERT INTO `attention_channel` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'WhatsApp', NULL, NULL),
	(2, 'TeleGram', NULL, NULL),
	(3, 'FB Messenger', NULL, NULL);

-- Volcando estructura para tabla app-apuestas.banks
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.banks: ~4 rows (aproximadamente)
INSERT INTO `banks` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'BCP', '2024-04-07 17:17:41', '2024-04-07 17:17:44'),
	(2, 'BBVA', '2024-04-07 17:17:58', NULL),
	(3, 'INTERBANK', '2024-04-07 17:18:12', NULL),
	(4, 'SCOTIABANK', '2024-04-07 17:18:30', NULL);

-- Volcando estructura para tabla app-apuestas.players
CREATE TABLE IF NOT EXISTS `players` (
  `id` int NOT NULL AUTO_INCREMENT,
  `PlayerID` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.players: ~9 rows (aproximadamente)
INSERT INTO `players` (`id`, `PlayerID`, `dni`, `name`, `lastname`, `email`, `phone`, `address`, `birthdate`, `created_at`, `updated_at`) VALUES
	(1, '2023A23B2133', '76217854', 'Juan Oscar', 'Velasquez Ror', 'juan@gmail.com', NULL, NULL, NULL, '2023-04-08 00:39:23', '2024-04-08 00:39:28'),
	(2, '2018A32H2156', '54796214', 'Pedro', 'Valdez Mitma', 'pedro@gmail.com', '956847987', 'villa maria', '1990-04-07', '2018-04-08 00:44:38', NULL),
	(3, '2021T32V2126', '78624187', 'Maria Juana', 'Alcantara Reyes', 'maria@gmail.com', NULL, 'rimac', NULL, '2021-04-08 00:44:37', NULL),
	(4, '2121T23G2986', '78625489', 'Clara Estefani', 'Vicente Perez', 'clara@gmail.com', NULL, NULL, NULL, '2024-04-08 01:34:18', NULL),
	(5, '2017H12H2367', '45873295', 'Nelson Domingo', 'Arias Layme', 'nelson@gmail.com', '958741236', 'pachacamac', NULL, '2024-04-08 01:35:06', NULL),
	(6, '2018A32H2153', '54789652', 'Gonzalo', 'Perez Rio', 'gonzalo@gmail.com', NULL, NULL, NULL, NULL, NULL),
	(7, '2018A23H2777', '76895241', 'Jose Luis', 'Huarhua Criss', 'joseluis@gmail.com', NULL, NULL, NULL, NULL, NULL),
	(8, '2019A32P2256', '48953265', 'Terry', 'Valdez Correa', 'terry@gmail.com', '458796325', NULL, NULL, NULL, NULL),
	(9, '2015A32H2656', '45895214', 'Rodrigo', 'Calle Verde', 'rodrigo@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- Volcando estructura para tabla app-apuestas.refills
CREATE TABLE IF NOT EXISTS `refills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `player_id` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `num_op` varchar(12) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `id_attention_channel` bigint NOT NULL,
  `id_bank` bigint NOT NULL,
  `amount` double(20,2) NOT NULL,
  `date_refills` date NOT NULL,
  `hour_refills` time NOT NULL,
  `image_refills` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.refills: ~6 rows (aproximadamente)
INSERT INTO `refills` (`id`, `player_id`, `num_op`, `id_attention_channel`, `id_bank`, `amount`, `date_refills`, `hour_refills`, `image_refills`, `created_at`, `updated_at`) VALUES
	(28, '2023A23B2133', '122222222222', 1, 2, 212121212.00, '2024-04-08', '13:30:00', '1712600891.jpeg', '2024-04-08 23:28:11', '2024-04-08 23:28:11'),
	(29, '2023A23B2133', '122222222221', 2, 2, 212121.00, '2024-04-08', '13:33:00', '1712601043.jpeg', '2024-04-08 23:30:43', '2024-04-08 23:30:43'),
	(30, '2023A23B2133', '222222222222', 2, 4, 30.50, '2024-04-08', '01:33:00', '1712601082.jpeg', '2024-04-08 23:31:22', '2024-04-08 23:31:22'),
	(31, '2023A23B2133', '123456789123', 1, 2, 155.55, '2024-04-08', '14:39:00', '1712601546.jpeg', '2024-04-08 23:39:06', '2024-04-08 23:39:06'),
	(32, '2018A32H2156', '121221212211', 1, 2, 165.32, '2024-04-08', '16:54:00', '1712606071.jpg', '2024-04-09 00:54:31', '2024-04-09 00:54:31'),
	(33, '2018A32H2156', '123451234321', 1, 1, 123.32, '2024-04-10', '02:57:00', '1712606113.jpg', '2024-04-09 00:55:13', '2024-04-09 00:55:13');

-- Volcando estructura para tabla app-apuestas.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Asesor', '2024-04-07 18:44:13', NULL),
	(2, 'Administrador', '2024-04-07 18:44:54', NULL),
	(3, 'Superadminitrador', '2024-04-07 18:44:54', NULL);

-- Volcando estructura para tabla app-apuestas.state
CREATE TABLE IF NOT EXISTS `state` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.state: ~2 rows (aproximadamente)
INSERT INTO `state` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Activo', NULL, NULL),
	(2, 'Inactivo', NULL, NULL);

-- Volcando estructura para tabla app-apuestas.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_state` int NOT NULL,
  `id_rol` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla app-apuestas.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`id`, `id_state`, `id_rol`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 2, 2, 'gonzalo@gmail.com', '$2y$10$ko1ACnqOVtglMyAljx2c8OjGxL5Nh5/aSMXcK96Yku838hwAMq8bG', '2024-04-07 18:33:23', NULL),
	(2, 1, 1, 'miguel@gmail.com', '$2y$10$ko1ACnqOVtglMyAljx2c8OjGxL5Nh5/aSMXcK96Yku838hwAMq8bG', '2024-04-07 18:34:40', NULL);

-- Volcando estructura para tabla app-apuestas.user_information
CREATE TABLE IF NOT EXISTS `user_information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` bigint DEFAULT NULL,
  `profile_picture` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla app-apuestas.user_information: ~0 rows (aproximadamente)
INSERT INTO `user_information` (`id`, `id_user`, `name`, `lastname`, `phone`, `profile_picture`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Gonzalo Miguel', 'Mochcco Crisostomo', 999999999, NULL, '2024-04-07 19:27:30', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

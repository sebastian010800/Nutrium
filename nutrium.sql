-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2023 a las 21:18:04
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutrium`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adt`
--

CREATE TABLE `adt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fecha_accidente` date NOT NULL,
  `Hora_accidente` time NOT NULL,
  `Descripcion_accidente` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Calificacion_accidente` int(11) DEFAULT NULL,
  `id_localidad` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `adt`
--

INSERT INTO `adt` (`id`, `Fecha_accidente`, `Hora_accidente`, `Descripcion_accidente`, `Calificacion_accidente`, `id_localidad`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '2023-10-14', '06:13:20', 'El trabajador iba caminando y se cayo ', 3, 1, '1007232461', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id`, `nombre_ips`, `telefono_ips`, `direccion_ips`, `correo_electronico_ips`, `created_at`, `updated_at`) VALUES
(1, 'sura', '12345678', 'cra 12 # 45 A 56', 'sura@suraips.com', '2023-10-06 06:27:09', '2023-10-06 06:27:09'),
(2, 'Hospital de Caldas', '876543210', 'cra 65 z 43 # 21', 'hdc@caldas.com', '2023-10-12 00:30:32', '2023-10-12 00:30:32'),
(3, 'Mebicol', '87654321', 'cra 98 # 76 Z 54', 'mebicol@gmail.com', '2023-10-16 00:13:01', '2023-10-16 00:13:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` bigint(20) UNSIGNED NOT NULL,
  `nombre_localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_localidad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `nombre_localidad`, `descripcion_localidad`, `created_at`, `updated_at`) VALUES
(1, 'Ciudad A', 'Descripción de Ciudad A', NULL, NULL),
(2, 'Ciudad B', 'Descripción de Ciudad B', NULL, NULL),
(3, 'Ciudad C', 'Descripción de Ciudad C', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_10_06_002832_i_p_s', 2),
(5, '2023_10_15_164434_localidad', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `cedula_user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sebastian Cardona Rios', '1007232461', 'sebscard20@gmail.com', NULL, '$2y$10$V4q6RkjjM0qSysJtl17rou23KygksKITt.sCYsDipHSec1guPWum2', 'orD3WvjvPdzeaRecPehDaFU7UCV4I0gVCY9ED4CYMmS42Ast5F80M2hGTtCI', '2023-09-11 04:10:34', '2023-09-11 04:10:34'),
(5, 'Laura Valentina Romero Ramirez', '12345678', 'Lvromerora@gmail.com', NULL, '$2y$10$KaoxdoIqsYxp6O.embVNm.aigJurpHbl4OLQtzgRMIEtPyzGAQi8m', NULL, '2023-10-15 21:33:56', '2023-10-15 21:33:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adt`
--
ALTER TABLE `adt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_localidad` (`id_localidad`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ips_correo_electronico_ips_unique` (`correo_electronico_ips`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `Cedula_user` (`cedula_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adt`
--
ALTER TABLE `adt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ips`
--
ALTER TABLE `ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adt`
--
ALTER TABLE `adt`
  ADD CONSTRAINT `adt_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`),
  ADD CONSTRAINT `adt_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`Cedula_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

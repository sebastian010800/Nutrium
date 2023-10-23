-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2023 a las 06:04:49
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
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adt`
--

CREATE TABLE `adt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_accidente` date NOT NULL,
  `hora_accidente` time NOT NULL,
  `descripcion_accidente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `calificacion_accidente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad_accidente` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `adt`
--

INSERT INTO `adt` (`id`, `fecha_accidente`, `hora_accidente`, `descripcion_accidente`, `calificacion_accidente`, `localidad_accidente`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2023-01-01', '00:00:00', 'AAAAAA', 'Leve', 1, 1, '2023-10-23 06:03:01', '2023-10-23 06:03:01'),
(2, '2022-12-31', '02:00:00', 'addad', 'Grave', 1, 1, '2023-10-23 07:12:13', '2023-10-23 07:12:13'),
(3, '2022-12-31', '02:00:00', 'addad', 'Grave', 1, 1, '2023-10-23 07:24:36', '2023-10-23 07:24:36'),
(4, '2000-08-01', '16:00:00', 'Fue el dia que naci', 'Mortal', 1, 1, '2023-10-23 07:25:14', '2023-10-23 07:25:14');

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
-- Estructura de tabla para la tabla `investigacion_accidente`
--

CREATE TABLE `investigacion_accidente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_investigador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_investigador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_licencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aplica_cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `investigacion_accidente`
--

INSERT INTO `investigacion_accidente` (`id`, `nombre_investigador`, `tipo_investigador`, `numero_licencia`, `aplica_cargo`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo Bermon Angarita', 'profesional_sst', '987456321', '1', '2023-10-23 03:53:18', '2023-10-23 03:53:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_ips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id`, `nombre_ips`, `correo_ips`, `direccion_ips`, `telefono_ips`, `created_at`, `updated_at`) VALUES
(1, 'Mebicol', 'Mebicol@mebicol.com', 'cra 12 # 45 A 56', '3012456789', '2023-10-23 01:41:03', '2023-10-23 01:41:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre_localidad`, `descripcion_localidad`, `created_at`, `updated_at`) VALUES
(1, 'Locacion A', 'Descripcion de la Locacion A', '2023-10-23 02:28:49', '2023-10-23 02:28:49');

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
(4, '2023_10_22_183012_ips', 2),
(5, '2023_10_22_210125_localidad', 3),
(8, '2023_10_22_214347_investigadores', 4),
(11, '2023_10_22_230359_adt', 5),
(20, '2023_10_23_010338_valoracion', 6),
(21, '2023_10_23_025911_traslado', 7);

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
-- Estructura de tabla para la tabla `traslado`
--

CREATE TABLE `traslado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora_traslado` time NOT NULL,
  `fecha_traslado` date NOT NULL,
  `placa_ambulancia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_paramedicos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ips_id` bigint(20) UNSIGNED NOT NULL,
  `adt_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `traslado`
--

INSERT INTO `traslado` (`id`, `hora_traslado`, `fecha_traslado`, `placa_ambulancia`, `nombre_paramedicos`, `ips_id`, `adt_id`, `created_at`, `updated_at`) VALUES
(1, '12:59:00', '2023-12-31', 'abc123', 'Juan Roman Riquelme', 1, 2, '2023-10-23 08:35:15', '2023-10-23 08:35:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cedula`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sebastian Cardona Rios', 'secardonar@unal.edu.co', '1007232461', NULL, '$2y$10$FJcvSWr9ZyRInP1DduxuF.4iz/cbpfsuBXKNXjJVk01RR7zJqmtBW', 'l1XLjQol6kwv7vMhY6oW33TRIenoGUeNWL3SkGgFxqMuQUctPSYNAbhLBiKU', '2023-10-22 23:25:14', '2023-10-22 23:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valoracion_primaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion_secundaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigador_id` bigint(20) UNSIGNED DEFAULT NULL,
  `adt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `valoracion_primaria`, `valoracion_secundaria`, `investigador_id`, `adt_id`, `created_at`, `updated_at`) VALUES
(4, 'aaaaaa', 'bbbbbb', 1, 3, '2023-10-23 07:49:58', '2023-10-23 07:49:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adt`
--
ALTER TABLE `adt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adt_localidad_accidente_foreign` (`localidad_accidente`),
  ADD KEY `adt_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `investigacion_accidente`
--
ALTER TABLE `investigacion_accidente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `investigacion_accidente_numero_licencia_unique` (`numero_licencia`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traslado_ips_id_foreign` (`ips_id`),
  ADD KEY `traslado_adt_id_foreign` (`adt_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_cedula_unique` (`cedula`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valoracion_investigador_id_foreign` (`investigador_id`),
  ADD KEY `valoracion_adt_id_foreign` (`adt_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adt`
--
ALTER TABLE `adt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `investigacion_accidente`
--
ALTER TABLE `investigacion_accidente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ips`
--
ALTER TABLE `ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `traslado`
--
ALTER TABLE `traslado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adt`
--
ALTER TABLE `adt`
  ADD CONSTRAINT `adt_localidad_accidente_foreign` FOREIGN KEY (`localidad_accidente`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `adt_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD CONSTRAINT `traslado_adt_id_foreign` FOREIGN KEY (`adt_id`) REFERENCES `adt` (`id`),
  ADD CONSTRAINT `traslado_ips_id_foreign` FOREIGN KEY (`ips_id`) REFERENCES `ips` (`id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_adt_id_foreign` FOREIGN KEY (`adt_id`) REFERENCES `adt` (`id`),
  ADD CONSTRAINT `valoracion_investigador_id_foreign` FOREIGN KEY (`investigador_id`) REFERENCES `investigacion_accidente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

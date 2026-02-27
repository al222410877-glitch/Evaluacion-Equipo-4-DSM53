-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2026 a las 18:27:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria_utvt_equipo4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_equipo4`
--

CREATE TABLE `comida_equipo4` (
  `id_comida_equipo4` bigint(20) UNSIGNED NOT NULL,
  `nombre_comida` varchar(100) NOT NULL,
  `costo_comida` decimal(8,2) NOT NULL,
  `detalle_comida` text NOT NULL,
  `id_tipo_comida_equipo4` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comida_equipo4`
--

INSERT INTO `comida_equipo4` (`id_comida_equipo4`, `nombre_comida`, `costo_comida`, `detalle_comida`, `id_tipo_comida_equipo4`, `created_at`, `updated_at`) VALUES
(2, 'Quesadillas', 52.00, 'Et accusantium iusto dolore repellendus.', 2, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(3, 'Tamales', 16.00, 'Ut sunt asperiores corrupti nesciunt unde.', 5, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(4, 'Hamburguesa', 112.00, 'Et in voluptate commodi esse velit nihil accusantium.', 4, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(5, 'Flan', 31.00, 'Blanditiis fuga ad nihil illum assumenda tenetur error.', 3, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(6, 'Caldo de pollo', 96.00, 'Aliquam perspiciatis incidunt expedita exercitationem iusto.', 5, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(7, 'Pozole', 74.00, 'Et harum molestiae totam.', 2, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(8, 'Pozole', 14.00, 'Dolor porro numquam ratione et consectetur unde non.', 3, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(9, 'Quesadillas', 111.00, 'Cupiditate ea sapiente odit amet.', 4, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(10, 'Tostadas', 69.00, 'Autem odit harum unde odit impedit hic error.', 3, '2026-02-27 23:17:30', '2026-02-27 23:17:30'),
(11, 'Arroz', 40.00, 'Arroz rojo por que los demás no me gustan', 4, '2026-02-27 23:21:01', '2026-02-27 23:21:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_02_26_164000_create_tipo_comida_equipo4_table', 1),
(2, '2026_02_26_164455_create_comida_equipo4_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comida_equipo4`
--

CREATE TABLE `tipo_comida_equipo4` (
  `id_tipo_comida_equipo4` bigint(20) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_comida_equipo4`
--

INSERT INTO `tipo_comida_equipo4` (`id_tipo_comida_equipo4`, `nombre_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', NULL, NULL),
(2, 'Postres', NULL, NULL),
(3, 'Platillos Fuertes', NULL, NULL),
(4, 'Entradas', NULL, NULL),
(5, 'Sopas', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida_equipo4`
--
ALTER TABLE `comida_equipo4`
  ADD PRIMARY KEY (`id_comida_equipo4`),
  ADD KEY `comida_equipo4_id_tipo_comida_equipo4_foreign` (`id_tipo_comida_equipo4`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_comida_equipo4`
--
ALTER TABLE `tipo_comida_equipo4`
  ADD PRIMARY KEY (`id_tipo_comida_equipo4`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida_equipo4`
--
ALTER TABLE `comida_equipo4`
  MODIFY `id_comida_equipo4` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_comida_equipo4`
--
ALTER TABLE `tipo_comida_equipo4`
  MODIFY `id_tipo_comida_equipo4` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comida_equipo4`
--
ALTER TABLE `comida_equipo4`
  ADD CONSTRAINT `comida_equipo4_id_tipo_comida_equipo4_foreign` FOREIGN KEY (`id_tipo_comida_equipo4`) REFERENCES `tipo_comida_equipo4` (`id_tipo_comida_equipo4`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

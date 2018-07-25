-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2018 a las 01:52:36
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`id_empleado`, `nombre`, `apellido`, `correo`, `telefono`, `id_supervisor`, `estado`) VALUES
(1, 'Camila', 'Maldonado', 'camila@gmail.com', '7489-9587', 6, 1),
(2, 'Pilar', 'Mandrile', 'pilar@gmail.com', '7485-9875', 5, 1),
(3, 'Carlos', 'Benavidez', 'carlos@gmail.com', '7559-1231', 5, 1),
(4, 'Emilio', 'Pucheta', 'emilio@gmail.com', '7412-0021', 3, 1),
(5, 'Lionel', 'Reyes', 'lionel@gmail.com', '7481-1020', 6, 1),
(6, 'Alejandra', 'Pereyra', 'alejandra@gmail.com', '7245-1412', 1, 1),
(7, 'Cristina', 'Barrionuevo', 'cristina@gmail.com', '7412-5820', 1, 1),
(8, 'Karina', 'Chavez', 'karina@gmail.com', '7485-7895', 2, 1),
(9, 'Julio', 'Duro', 'julio@gmail.com', '7589-5412', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `supervisor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_supervisor`
--

INSERT INTO `tbl_supervisor` (`id_supervisor`, `supervisor`, `estado`) VALUES
(1, 'Steve Jobs', 1),
(2, 'Bill Gates', 1),
(3, 'Pablo Moyano', 1),
(4, 'Ale Martinez', 1),
(5, 'Nestor Quintana', 1),
(6, 'Mario Castro', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`id_supervisor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

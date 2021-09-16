-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 07:25:16
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input`
--

CREATE TABLE `input` (
  `IdEntrada` int(10) NOT NULL,
  `nameOwner` varchar(150) NOT NULL,
  `emailOwner` varchar(100) NOT NULL,
  `namePet` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `vacunas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `input`
--

INSERT INTO `input` (`IdEntrada`, `nameOwner`, `emailOwner`, `namePet`, `type`, `age`, `vacunas`) VALUES
(16, 'Eleazar Amaya', 'bruh@user.com', 'McDonald', 'Gato [Hembra]', '12', 'Ninguna'),
(18, 'Eleazar Amaya', 'bruh@user.com', 'Bartolo', 'Perro [Macho]', '22', 'Contra Parpovirus, Contra Boedetollis, Contra Parainfluenza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `output`
--

CREATE TABLE `output` (
  `idSalida` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`IdEntrada`);

--
-- Indices de la tabla `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`idSalida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `input`
--
ALTER TABLE `input`
  MODIFY `IdEntrada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `output`
--
ALTER TABLE `output`
  MODIFY `idSalida` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

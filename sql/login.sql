-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2021 a las 16:04:26
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioslogin`
--

CREATE TABLE `usuarioslogin` (
  `id` int(11) NOT NULL,
  `name` varchar(123) NOT NULL,
  `lastNames` varchar(123) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pw` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `bD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioslogin`
--

INSERT INTO `usuarioslogin` (`id`, `name`, `lastNames`, `gender`, `email`, `pw`, `tel`, `bD`) VALUES
(1, 'Daniel', 'Vásquez', 'M', 'd.vasquezv503@gmail.com', 'fcc1d0e9ca0212dce405edf38efecdfc1a8ad44848bfc86f30609ead70bc0e7ff071c0df93a980acdc5900e51a87c577aefe3d4cd80994861d629ae0b7f20318', '7022-2222', '2005-07-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarioslogin`
--
ALTER TABLE `usuarioslogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarioslogin`
--
ALTER TABLE `usuarioslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

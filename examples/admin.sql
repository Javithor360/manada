-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 08:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `input`
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
-- Dumping data for table `input`
--

INSERT INTO `input` (`IdEntrada`, `nameOwner`, `emailOwner`, `namePet`, `type`, `age`, `vacunas`) VALUES
(16, 'Eleazar Amaya', 'bruh@user.com', 'McDonald', 'Gato [Hembra]', '12', 'Ninguna'),
(18, 'Eleazar Amaya', 'bruh@user.com', 'Bartolo', 'Perro [Macho]', '22', 'Contra Parpovirus, Contra Boedetollis, Contra Parainfluenza'),
(19, 'Javier Enrique Mejía Flores', 'floresmejia004@gmail.com', 'elpepe', 'Gato [Hembra]', '2', ' Contra Distemper, Contra Herpesvirus, Contra Calicivirus, Contra Leucemia, Peritonitis infecciosa, Contra Felis, Contra Rabia');

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `idSalida` int(5) NOT NULL,
  `originalOwner` varchar(100) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `newOwner` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `emailNewOwner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`idSalida`, `originalOwner`, `petName`, `newOwner`, `reason`, `emailNewOwner`) VALUES
(2, 'Diego Vladimir García Fuentes', 'Princesa', 'Javier Enrique Mejía Flores', 'Hola, yo quiero cuidar a Princesa.', 'floresmejia004@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`IdEntrada`);

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`idSalida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `IdEntrada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `idSalida` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

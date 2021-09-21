-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 08:46 AM
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
-- Database: `mascotas`
--

-- --------------------------------------------------------

--
-- Table structure for table `gatos`
--

CREATE TABLE `gatos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `imagenedit` varchar(200) NOT NULL,
  `paginaindividual` varchar(200) NOT NULL,
  `generoicon` varchar(200) NOT NULL,
  `dueño` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gatos`
--

INSERT INTO `gatos` (`id`, `nombre`, `edad`, `genero`, `descripcion`, `imagen`, `imagenedit`, `paginaindividual`, `generoicon`, `dueño`) VALUES
(1, 'Emma', 1, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Emma.jpg', '../../src/pets/cat/Emma.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(2, 'Valentín', 1, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Valentin.jpg', '../../src/pets/cat/Valentin.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(3, 'Linda', 3, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Linda.jpg', '../../src/pets/cat/Linda.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(4, 'Camila', 3, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Camila.png', '../../src/pets/cat/Camila.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(5, 'Steicy', 4, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Steicy.jpg', '../../src/pets/cat/Steicy.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(6, 'Luca', 1, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Luca.jpg', '../../src/pets/cat/Luca.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(7, 'Darwin', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Darwin.jpg', '../../src/pets/cat/Darwin.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(8, 'Wallase', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Wallase.jpg', '../../src/pets/cat/wallase.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg', 'Eleazar Hazael Amaya Sánchez'),
(9, 'Richard', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Richard.jpg', '../../src/pets/cat/Richard.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg', 'Eleazar Hazael Amaya Sánchez');

-- --------------------------------------------------------

--
-- Table structure for table `perros`
--

CREATE TABLE `perros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `imagenedit` varchar(200) NOT NULL,
  `paginaindividual` varchar(300) NOT NULL,
  `generoicon` varchar(200) NOT NULL,
  `dueño` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perros`
--

INSERT INTO `perros` (`id`, `nombre`, `edad`, `genero`, `descripcion`, `imagen`, `imagenedit`, `paginaindividual`, `generoicon`, `dueño`) VALUES
(1, 'Kiara', 5, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Kiara.jpg', '../../src/pets/dog/kiara.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes'),
(2, 'Bruno', 2, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Bruno.jpg', '../../src/pets/dog/Bruno.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg', 'Diego Vladimir García Fuentes'),
(3, 'Liliana', 4, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Liliana.png', '../../src/pets/dog/Liliana.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes'),
(4, 'Carlita', 1, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Carlita.png', '../../src/pets/dog/Carlita.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes'),
(5, 'Princesa', 2, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Princesa.jpg', '../../src/pets/dog/Princesa.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes'),
(6, 'Darla', 6, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Darla.png', '../../src/pets/dog/Darla.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes'),
(7, 'Taco', 3, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Taco.png', '../../src/pets/dog/Taco.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg', 'Diego Vladimir García Fuentes'),
(8, 'Roco', 2, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.\n', './src/pets/dog/_Roco.png', '../../src/pets/dog/Roco.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg', 'Diego Vladimir García Fuentes'),
(9, 'Maggie', 1, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.\n', './src/pets/dog/_Maggie.png', '../../src/pets/dog/Maggie.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg', 'Diego Vladimir García Fuentes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `perros`
--
ALTER TABLE `perros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 09:48:18
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
-- Base de datos: `mascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gatos`
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
  `generoicon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gatos`
--

INSERT INTO `gatos` (`id`, `nombre`, `edad`, `genero`, `descripcion`, `imagen`, `imagenedit`, `paginaindividual`, `generoicon`) VALUES
(1, 'Emma', 1, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Emma.jpg', '../../src/pets/cat/Emma.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg'),
(2, 'Valentín', 1, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Valentin.jpg', '../../src/pets/cat/Valentin.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg'),
(3, 'Linda', 3, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Linda.jpg', '../../src/pets/cat/Linda.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg'),
(4, 'Camila', 3, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Camila.png', '../../src/pets/cat/Camila.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg'),
(5, 'Steicy', 4, 'Hembra', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Steicy.jpg', '../../src/pets/cat/Steicy.png', './pets/cat/pet_cat.php', './src/icons/female_pet.svg'),
(6, 'Luca', 1, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Luca.jpg', '../../src/pets/cat/Luca.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg'),
(7, 'Darwin', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Darwin.jpg', '../../src/pets/cat/Darwin.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg'),
(8, 'Wallase', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n\n', './src/pets/cat/_Wallase.jpg', '../../src/pets/cat/wallase.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg'),
(9, 'Richard', 5, 'Macho', 'Este gatito fue entregado a nuestro refugio ya que su dueñ@ no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, le gusta tomar siestas, normalmente pasa en su cama pero si tu lo alimentas con su comida favorita el atún obedecerá casi todo lo que le digas.\n', './src/pets/cat/_Richard.jpg', '../../src/pets/cat/Richard.png', './pets/cat/pet_cat.php', './src/icons/male_pet.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
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
  `generoicon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id`, `nombre`, `edad`, `genero`, `descripcion`, `imagen`, `imagenedit`, `paginaindividual`, `generoicon`) VALUES
(1, 'Kiara', 5, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Kiara.jpg', '../../src/pets/dog/kiara.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg'),
(2, 'Bruno', 2, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Bruno.jpg', '../../src/pets/dog/Bruno.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg'),
(3, 'Liliana', 4, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Liliana.png', '../../src/pets/dog/Liliana.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg'),
(4, 'Carlita', 1, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Carlita.png', '../../src/pets/dog/Carlita.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg'),
(5, 'Princesa', 2, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Princesa.jpg', '../../src/pets/dog/Princesa.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg'),
(6, 'Darla', 6, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Darla.png', '../../src/pets/dog/Darla.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg'),
(7, 'Taco', 3, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.', './src/pets/dog/_Taco.png', '../../src/pets/dog/Taco.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg'),
(8, 'Roco', 2, 'Macho', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.\n', './src/pets/dog/_Roco.png', '../../src/pets/dog/Roco.png', './pets/dog/pet_dog.php', './src/icons/male_pet.svg'),
(9, 'Maggie', 1, 'Hembra', 'Este perrito fue entregada a nuestro refugio ya que su dueña no podía cuidarlo por más tiempo, pero espera que seas tu quien lo adopte, no pierdas la oportunidad, es un perrito muy cariñoso y muy leal, le gusta que lo acaricien y lo lleven de paseo a lugares con abundante pasto, le gusta jugar frisbee y comer croquetas sabor pollo, es un poco dormilón pero cuando despierta es muy juguetón.\n', './src/pets/dog/_Maggie.png', '../../src/pets/dog/Maggie.png', './pets/dog/pet_dog.php', './src/icons/female_pet.svg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

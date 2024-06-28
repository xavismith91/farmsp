-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2024 a las 01:38:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pharmacy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userspharmacy`
--

CREATE TABLE `userspharmacy` (
  `nombrec` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(35) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `cp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `userspharmacy`
--

INSERT INTO `userspharmacy` (`nombrec`, `apellidos`, `usuario`, `contrasena`, `telefono`, `direccion`, `ciudad`, `municipio`, `cp`) VALUES
('francisco xavier', 'silva solano', 'sistemas@ce2000.mx', 'a81c.321s', '5539402958', 'benito júarez 43', 'San Martín', 'Satelite', '54963'),
('brenda ', 'ramirez jimenez', 'bramirezj@gmail.com', 'es1buenacontrasena', '5536180446', 'Aldama 45 ', 'La Romana', 'Satelite', '54000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

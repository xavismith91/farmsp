-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2024 a las 21:37:44
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
  `id_user` int(8) NOT NULL,
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

INSERT INTO `userspharmacy` (`id_user`, `nombrec`, `apellidos`, `usuario`, `contrasena`, `telefono`, `direccion`, `ciudad`, `municipio`, `cp`) VALUES
(1, 'Xavier ', 'Solano', 'xaviersolano91@gmail.com', 'a881c.321s', '5586274936', 'Benito Júarez 65 Entre 5 de mayo y tamaulipas', 'Tultepec', 'San Martín', '54963'),
(2, 'Brenda ', 'Ramirez Jimenez', 'brjimenez@gmail.com', 'es1buenaconstrasena', '5530160548', 'Aldama 47 entre av. teotihuacan y porfirio díaz', 'Tlalnepantla', 'San Javier', '54000'),
(6, 'Carlos ', 'Castillo ', 'carlos.c@gruposicma.com.mx', 'carloscastillo', 'desconocido', 'Jacarandas 14 entre bosques de lago y bolognia', 'privada', 'atizapán de zaragoza', '78945'),
(7, 'Oscar ', 'Castillo Dominguez', 'odominguez@gmail.com', 'gruposicma', 'desconocido', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Municipio Desconocido', '78945'),
(8, 'Samara ', 'Castillo Cantón', 'samcastillo@gmaill.com', 'samcastillo', '12345678', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Municipio Desconocido', '45678'),
(9, 'Maria de Los Angeles', 'Castillo Dominguez', 'angeles@ce2000.mx', 'angelescastillo', '7984652135', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Municipio Desconocido', '46798'),
(10, 'Adrian ', 'Castillo Dominguez', 'acastillo@ce2000.mx', 'adriandominguez', 'desconocido', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Municipio Desconocido', '46851'),
(11, 'Karla ', 'Cantón', 'kcanton@solcommx.mx', 'solcommx', '5579862463', 'Jacarandas 14 entre bosques de lago y bolognia', 'Madero', 'San Martín', '46798'),
(12, 'Miguel ', 'Castillo Dominguez', 'mcastillo@ce2000.mx', 'castillodomingues', '5546798653', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Municipio Desconocido', '56798'),
(13, 'Alejandro ', 'Castillo Dominguez', 'acastillo@ce2000.mx', 'castilloalejandro', '45678935', 'Jacarandas 14 entre bosques de lago y bolognia', 'Ciudad Desconocida', 'Concepcios', '45678'),
(15, 'Estela', 'Reyes', 'ereyes@ce2000.mx', 'esteliux', '5579846835', 'Jacarandas 14 entre bosques de lago y bolognia', 'Cuautitlán Izcalli', 'Bosques del Lago', '54600'),
(17, 'Emmanel ', 'Castillo ', 'compras2@hotmail.com', '9\"+=dvP]*568L?&', 'desconocido', 'Jacarandas 14 entre bosques de lago y bolognia', 'Estado de México', 'Cuautitlan izcalli', '54600'),
(18, 'Jessica ', 'Sanchez', 'jsanches@ce2000.mx', 'adminCe2000', 'desconocido', 'Jacarandas 14 entre bosques de lago y bolognia', 'Cuautitlán Izcalli', 'Bosques del Lago', '54600');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `userspharmacy`
--
ALTER TABLE `userspharmacy`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `userspharmacy`
--
ALTER TABLE `userspharmacy`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

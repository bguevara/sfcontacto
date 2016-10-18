-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2016 a las 23:35:07
-- Versión del servidor: 5.5.47-0+deb8u1
-- Versión de PHP: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsisbase001`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `name`, `e_mail`, `website`, `mensaje`) VALUES
(18, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'esto es una pueba'),
(19, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'esto es una prueba'),
(20, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'dsdsdsdsdsdsdsdssdsdsdsdsdA'),
(21, 'boris', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(22, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(23, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(24, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(25, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(26, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(27, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(28, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(29, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(30, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(31, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ASD DFSDS'),
(32, 'boris Guevara', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'asasas'),
(33, 'LIZET VARGAS', 'boris.guevara@gmail.com', 'www.upel.edu.ve', '33333 3333'),
(34, 'dsss', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'hhhhhhhhhhhhh'),
(35, 'a', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'rrrr rrrr'),
(36, 'boris Guevara', 'boris.guevaragmail.com', 'www.upel.edu.ve', 'ggggg'),
(37, 'a', 'boris.guevaragmail.com', 'www.upel.edu.ve', 'nnnnn'),
(38, 'a', 'boris.guevara@gmail.com', 'www.upel.edu.ve', 'ffff'),
(39, 'a', 'boris.guevaragmail.com', 'www.upel.edu.ve', 'ASD DFSDS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

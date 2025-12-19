-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2025 a las 03:30:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre`, `lugar`, `fecha`, `estado`) VALUES
(2, 'Gladys Salmeron', 'Danli', '2025-12-23', 'Pendiente'),
(4, 'Venta de vehiculos', 'Tegucigalpa', '2025-12-30', 'En curso'),
(5, 'Venta de Carteras Originales', 'Comayagua', '2025-12-31', 'En curso'),
(6, 'Feria de Emprendimiento', 'UNAH', '2025-01-10', 'Pendiente'),
(7, 'Taller de PHP', 'Aula 12', '2025-01-15', 'En curso'),
(8, 'Conferencia de IA', 'Auditorio', '2025-01-20', 'Pendiente'),
(9, 'Festival Cultural', 'Centro', '2025-02-01', 'Finalizado'),
(10, 'Hackathon Universitario', 'Laboratorio', '2025-02-05', 'Pendiente'),
(11, 'Charla de Seguridad', 'Aula 8', '2025-02-09', 'Cancelado'),
(12, 'Reunión de Proyecto', 'Sala 3', '2025-02-12', 'En curso'),
(13, 'Expo Tecnología', 'UNAH', '2025-02-20', 'Pendiente'),
(14, 'Torneo de Ajedrez', 'Gimnasio', '2025-03-01', 'Pendiente'),
(15, 'Taller de MySQL', 'Lab 2', '2025-03-05', 'Finalizado'),
(16, 'Seminario de Redes', 'Aula 5', '2025-03-10', 'Pendiente'),
(17, 'Foro Estudiantil', 'Auditorio', '2025-03-15', 'Cancelado'),
(18, 'Jornada Ambiental', 'Parque', '2025-03-18', 'Pendiente'),
(19, 'Capacitación CV', 'Aula 10', '2025-03-22', 'En curso'),
(20, 'Taller de Git', 'Lab 1', '2025-03-25', 'Pendiente'),
(21, 'Concurso de Programación', 'Laboratorio', '2025-04-02', 'Pendiente'),
(22, 'Networking Profesional', 'Hotel', '2025-04-05', 'Finalizado'),
(23, 'Tarde Deportiva', 'Cancha', '2025-04-10', 'Pendiente'),
(24, 'Reunión de Club', 'Sala 1', '2025-04-12', 'En curso'),
(25, 'Cierre de Semestre', 'Auditorio', '2025-04-20', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

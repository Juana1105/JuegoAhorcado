-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-06-2022 a las 22:15:04
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ahorcado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras`
--

DROP TABLE IF EXISTS `palabras`;
CREATE TABLE IF NOT EXISTS `palabras` (
  `COD_PALABRA` int(10) NOT NULL AUTO_INCREMENT,
  `PALABRA` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `VECES_JUGADA` int(11) NOT NULL DEFAULT '0',
  `VECES_ACERTADA` int(11) NOT NULL DEFAULT '0',
  `VECES_FALLADA` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`COD_PALABRA`)
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `palabras`
--

INSERT INTO `palabras` (`COD_PALABRA`, `PALABRA`, `VECES_JUGADA`, `VECES_ACERTADA`, `VECES_FALLADA`) VALUES
(1, 'MURCIELAGO', 2, 0, 2),
(2, 'CASA', 2, 0, 2),
(3, 'PERRO', 2, 0, 2),
(4, 'JARDIN', 3, 2, 1),
(5, 'VIDEOJUEGO', 0, 0, 0),
(6, 'MUSEO', 5, 0, 5),
(7, 'CONSOLA', 5, 2, 3),
(8, 'RATON', 3, 1, 2),
(9, 'CORTINA', 5, 1, 4),
(10, 'VENTANA', 2, 0, 2),
(11, 'adder', 0, 0, 0),
(12, 'anteater', 0, 0, 0),
(13, 'antelope', 0, 0, 0),
(14, 'beetle', 0, 0, 0),
(15, 'bear', 0, 0, 0),
(16, 'bull', 0, 0, 0),
(17, 'buffalo', 0, 0, 0),
(18, 'dolphin', 0, 0, 0),
(19, 'donkey', 0, 0, 0),
(20, 'dragonfly', 0, 0, 0),
(21, 'elephant', 0, 0, 0),
(22, 'giraffe', 0, 0, 0),
(23, 'frog', 0, 0, 0),
(24, 'goldfish', 1, 0, 1),
(25, 'hippopotamus', 0, 0, 0),
(26, 'jaguar', 0, 0, 0),
(27, 'mammoth', 0, 0, 0),
(28, 'mouse', 0, 0, 0),
(29, 'penguin', 0, 0, 0),
(30, 'pelican', 1, 0, 1),
(31, 'rabbit', 0, 0, 0),
(32, 'squirrel', 0, 0, 0),
(33, 'worm', 0, 0, 0),
(34, 'vulture', 0, 0, 0),
(35, 'brother', 0, 0, 0),
(36, 'godfather', 0, 0, 0),
(37, 'nephew', 0, 0, 0),
(38, 'parents', 0, 0, 0),
(39, 'stepson', 0, 0, 0),
(40, 'firstborn', 0, 0, 0),
(41, 'ancestors', 0, 0, 0),
(42, 'generation', 0, 0, 0),
(43, 'acquaintance', 0, 0, 0),
(44, 'descendants', 0, 0, 0),
(45, 'twins', 0, 0, 0),
(46, 'today', 0, 0, 0),
(47, 'tonight', 0, 0, 0),
(48, 'tomorrow', 0, 0, 0),
(49, 'early', 0, 0, 0),
(50, 'suddenly', 0, 0, 0),
(51, 'accelerator', 0, 0, 0),
(52, 'battery', 0, 0, 0),
(53, 'brake', 0, 0, 0),
(54, 'door', 0, 0, 0),
(55, 'dashboard', 0, 0, 0),
(56, 'heater', 0, 0, 0),
(57, 'headlight', 0, 0, 0),
(58, 'handbrake', 0, 0, 0),
(59, 'mirror', 0, 0, 0),
(60, 'tachometer', 0, 0, 0),
(61, 'tyre', 0, 0, 0),
(62, 'room', 0, 0, 0),
(63, 'balcony', 0, 0, 0),
(64, 'attic', 0, 0, 0),
(65, 'chimney', 0, 0, 0),
(66, 'apartment', 0, 0, 0),
(67, 'window', 0, 0, 0),
(68, 'doorbell', 0, 0, 0),
(69, 'fireplace', 1, 0, 1),
(70, 'radiator', 0, 0, 0),
(71, 'lamp', 0, 0, 0),
(72, 'decoder', 0, 0, 0),
(73, 'airline', 0, 0, 0),
(74, 'airport', 0, 0, 0),
(75, 'arrivals', 0, 0, 0),
(76, 'briefcase', 0, 0, 0),
(77, 'cabin', 0, 0, 0),
(78, 'copilot', 0, 0, 0),
(79, 'customs', 0, 0, 0),
(80, 'delayed', 0, 0, 0),
(81, 'immigration', 0, 0, 0),
(82, 'gate', 0, 0, 0),
(83, 'landing', 0, 0, 0),
(84, 'plane', 0, 0, 0),
(85, 'pilot', 0, 0, 0),
(86, 'suitcase', 0, 0, 0),
(87, 'terminal', 0, 0, 0),
(88, 'turbulence', 0, 0, 0),
(89, 'trolley', 0, 0, 0),
(90, 'pub', 0, 0, 0),
(91, 'meal', 0, 0, 0),
(92, 'food', 0, 0, 0),
(93, 'snack', 1, 0, 1),
(94, 'beverage', 0, 0, 0),
(95, 'glass', 0, 0, 0),
(96, 'lunch', 0, 0, 0),
(97, 'knife', 0, 0, 0),
(98, 'spoon', 0, 0, 0),
(99, 'table', 0, 0, 0),
(100, 'tank', 1, 0, 1),
(101, 'servilleta', 0, 0, 0),
(102, 'jarro', 0, 0, 0),
(103, 'almuerzo', 0, 0, 0),
(104, 'tenedor', 0, 0, 0),
(105, 'taza', 0, 0, 0),
(106, 'cocinero', 0, 0, 0),
(107, 'bebida', 0, 0, 0),
(108, 'postre', 0, 0, 0),
(109, 'mantel', 1, 0, 1),
(110, 'tobillo', 0, 0, 0),
(111, 'rodilla', 0, 0, 0),
(112, 'metatarso', 1, 0, 1),
(113, 'muslo', 0, 0, 0),
(114, 'tibia', 0, 0, 0),
(115, 'codo', 0, 0, 0),
(116, 'dedo', 0, 0, 0),
(117, 'radio', 0, 0, 0),
(118, 'hombro', 0, 0, 0),
(119, 'muñeca', 0, 0, 0),
(120, 'cerebro', 0, 0, 0),
(121, 'barba', 0, 0, 0),
(122, 'pestaña', 0, 0, 0),
(123, 'cabello', 0, 0, 0),
(124, 'cuello', 0, 0, 0),
(125, 'garganta', 0, 0, 0),
(126, 'estómago', 0, 0, 0),
(127, 'clavícula', 1, 0, 1),
(128, 'costilla', 0, 0, 0),
(129, 'columna', 0, 0, 0),
(130, 'antílope', 0, 0, 0),
(131, 'bisonte', 0, 0, 0),
(132, 'jabalí', 0, 0, 0),
(133, 'camello', 0, 0, 0),
(134, 'canario', 0, 0, 0),
(135, 'guepardo', 0, 0, 0),
(136, 'puma', 0, 0, 0),
(137, 'coyote', 0, 0, 0),
(138, 'halcón', 0, 0, 0),
(139, 'cabra', 0, 0, 0),
(140, 'gorila', 0, 0, 0),
(141, 'hamster', 0, 0, 0),
(142, 'cordero', 0, 0, 0),
(143, 'langosta', 0, 0, 0),
(144, 'avestruz', 0, 0, 0),
(145, 'nutria', 0, 0, 0),
(146, 'lechuza', 0, 0, 0),
(147, 'periquito', 0, 0, 0),
(148, 'paloma', 0, 0, 0),
(149, 'salamandra', 0, 0, 0),
(150, 'serpiente', 0, 0, 0),
(151, 'morsa', 0, 0, 0),
(152, 'ballena', 0, 0, 0),
(153, 'javascript', 0, 0, 0),
(154, 'python', 0, 0, 0),
(155, 'java', 0, 0, 0),
(156, 'wordpress', 0, 0, 0),
(157, 'nike', 0, 0, 0),
(158, 'rebook', 0, 0, 0),
(159, 'valladolid', 0, 0, 0),
(160, 'ciudad', 0, 0, 0),
(161, 'salamanca', 0, 0, 0),
(162, 'madrid', 0, 0, 0),
(163, 'barcelona', 0, 0, 0),
(164, 'valencia', 0, 0, 0),
(165, 'angel', 0, 0, 0),
(166, 'demonio', 0, 0, 0),
(167, 'futbol', 0, 0, 0),
(168, 'baloncesto', 0, 0, 0),
(169, 'motor', 0, 0, 0),
(170, 'waterpolo', 0, 0, 0),
(171, 'water', 0, 0, 0),
(172, 'sand', 0, 0, 0),
(173, 'arena', 0, 0, 0),
(174, 'montaña', 0, 0, 0),
(175, 'nieve', 0, 0, 0),
(176, 'snowboard', 0, 0, 0),
(177, 'chaqueta', 0, 0, 0),
(178, 'pantalon', 0, 0, 0),
(179, 'casco', 0, 0, 0),
(180, 'bufanda', 0, 0, 0),
(181, 'unicornio', 0, 0, 0),
(182, 'varita', 0, 0, 0),
(183, 'manos', 0, 0, 0),
(184, 'brazos', 0, 0, 0),
(185, 'sandalia', 0, 0, 0),
(186, 'sandia', 0, 0, 0),
(187, 'manzana', 1, 0, 1),
(188, 'apple', 0, 0, 0),
(189, 'naranja', 0, 0, 0),
(190, 'orange', 0, 0, 0),
(191, 'yellow', 0, 0, 0),
(192, 'mansion', 1, 0, 1),
(193, 'blanco', 0, 0, 0),
(194, 'white', 0, 0, 0),
(195, 'negro', 0, 0, 0),
(196, 'black', 0, 0, 0),
(197, 'pesadilla', 0, 0, 0),
(198, 'armario', 0, 0, 0),
(199, 'dinero', 0, 0, 0),
(200, 'money', 0, 0, 0),
(201, 'bailarin', 0, 0, 0),
(202, 'dance', 0, 0, 0),
(203, 'song', 0, 0, 0),
(204, 'cancion', 0, 0, 0),
(205, 'pintura', 0, 0, 0),
(206, 'paint', 0, 0, 0),
(207, 'terminator', 0, 0, 0),
(208, 'caja', 0, 0, 0),
(209, 'box', 0, 0, 0),
(210, 'boxer', 0, 0, 0),
(211, 'martillo', 0, 0, 0),
(212, 'palanca', 0, 0, 0),
(213, 'ordenador', 0, 0, 0),
(214, 'teclado', 0, 0, 0),
(215, 'web', 0, 0, 0),
(216, 'spider', 0, 0, 0),
(217, 'telaraña', 0, 0, 0),
(218, 'ingles', 0, 0, 0),
(219, 'español', 0, 0, 0),
(220, 'spanish', 0, 0, 0),
(221, 'frances', 0, 0, 0),
(222, 'japon', 0, 0, 0),
(223, 'ducha', 0, 0, 0),
(224, 'ahorcado', 0, 0, 0),
(225, 'hangman', 0, 0, 0),
(226, 'disease', 0, 0, 0),
(227, 'test', 0, 0, 0),
(228, 'vaccine', 0, 0, 0),
(229, 'alcohol', 0, 0, 0),
(230, 'pandemia', 0, 0, 0),
(231, 'cerveza', 0, 0, 0),
(232, 'restaurante', 0, 0, 0),
(233, 'panaderia', 0, 0, 0),
(234, 'fruteria', 0, 0, 0),
(235, 'fruta', 0, 0, 0),
(236, 'fruit', 0, 0, 0),
(237, 'restaurant', 1, 0, 1),
(238, 'coliflor', 0, 0, 0),
(239, 'suelo', 0, 0, 0),
(240, 'tejado', 0, 0, 0),
(241, 'house', 0, 0, 0),
(242, 'last', 1, 0, 1),
(243, 'ultimo', 0, 0, 0),
(244, 'primero', 0, 0, 0),
(245, 'first', 0, 0, 0),
(246, 'driver', 0, 0, 0),
(247, 'controlador', 0, 0, 0),
(248, 'modelo', 0, 0, 0),
(249, 'model', 0, 0, 0),
(250, 'carruaje', 0, 0, 0),
(251, 'car', 0, 0, 0),
(252, 'jefe', 0, 0, 0),
(253, 'polvoron', 0, 0, 0),
(254, 'polvorin', 0, 0, 0),
(255, 'peine', 0, 0, 0),
(256, 'torre', 0, 0, 0),
(257, 'tower', 0, 0, 0),
(258, 'pergamino', 0, 0, 0),
(259, 'game', 0, 0, 0),
(260, 'juego', 0, 0, 0),
(261, 'flauta', 0, 0, 0),
(262, 'guitarra', 0, 0, 0),
(263, 'guitar', 0, 0, 0),
(264, 'piano', 0, 0, 0),
(265, 'single', 0, 0, 0),
(266, 'robot', 0, 0, 0),
(267, 'academia', 0, 0, 0),
(268, 'tatuaje', 0, 0, 0),
(269, 'tattoo', 0, 0, 0),
(270, 'drake', 0, 0, 0),
(271, 'dragon', 0, 0, 0),
(272, 'puente', 0, 0, 0),
(273, 'trampolin', 0, 0, 0),
(274, 'rana', 0, 0, 0),
(275, 'pueblo', 0, 0, 0),
(276, 'españa', 0, 0, 0),
(277, 'magia', 0, 0, 0),
(278, 'paraiso', 0, 0, 0),
(279, 'columpio', 0, 0, 0),
(280, 'fresa', 2, 0, 2),
(281, 'mensaje', 0, 0, 0),
(282, 'luna', 0, 0, 0),
(283, 'venus', 0, 0, 0),
(284, 'marte', 0, 0, 0),
(285, 'tierra', 0, 0, 0),
(286, 'saturno', 0, 0, 0),
(287, 'sol', 0, 0, 0),
(288, 'melon', 0, 0, 0),
(289, 'escritura', 0, 0, 0),
(290, 'hermita', 0, 0, 0),
(291, 'calle', 0, 0, 0),
(292, 'edifcio', 0, 0, 0),
(293, 'plaza', 0, 0, 0),
(294, 'autobus', 0, 0, 0),
(295, 'metro', 0, 0, 0),
(296, 'moto', 0, 0, 0),
(297, 'figura', 0, 0, 0),
(298, 'manta', 0, 0, 0),
(299, 'mandarina', 0, 0, 0),
(300, 'platano', 0, 0, 0),
(301, 'pelota', 0, 0, 0),
(302, 'barco', 0, 0, 0),
(303, 'boat', 0, 0, 0),
(304, 'tiburon', 0, 0, 0),
(305, 'carcel', 0, 0, 0),
(306, 'trampa', 0, 0, 0),
(307, 'fear', 0, 0, 0),
(308, 'himno', 0, 0, 0),
(309, 'barra', 0, 0, 0),
(310, 'cafe', 0, 0, 0),
(311, 'piscina', 0, 0, 0),
(312, 'playa', 0, 0, 0),
(313, 'verano', 0, 0, 0),
(314, 'primavera', 0, 0, 0),
(315, 'otoño', 0, 0, 0),
(316, 'winter', 0, 0, 0),
(317, 'summer', 0, 0, 0),
(318, 'spring', 1, 0, 1),
(319, 'estrella', 0, 0, 0),
(320, 'star', 0, 0, 0),
(321, 'bombon', 0, 0, 0),
(322, 'caramelo', 0, 0, 0),
(323, 'sugar', 0, 0, 0),
(324, 'rio', 0, 0, 0),
(325, 'river', 0, 0, 0),
(326, 'fallo', 0, 0, 0),
(327, 'acierto', 0, 0, 0),
(328, 'error', 0, 0, 0),
(329, 'nariz', 0, 0, 0),
(330, 'ojo', 0, 0, 0),
(331, 'eye', 0, 0, 0),
(332, 'noise', 0, 0, 0),
(333, 'ruido', 0, 0, 0),
(334, 'musica', 0, 0, 0),
(335, 'music', 1, 0, 1),
(336, 'cine', 1, 0, 1),
(337, 'cinema', 0, 0, 0),
(338, 'pelicula', 1, 0, 1),
(339, 'film', 0, 0, 0),
(340, 'word', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE IF NOT EXISTS `partidas` (
  `ID_PARTIDA` int(11) NOT NULL AUTO_INCREMENT,
  `COD_JUGADOR` int(11) NOT NULL,
  `COD_PALABRA` int(11) NOT NULL,
  `PUNTUACION` int(11) NOT NULL,
  `RESULTADO` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_PARTIDA`),
  KEY `COD_JUGADOR` (`COD_JUGADOR`),
  KEY `COD_PALABRA` (`COD_PALABRA`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`ID_PARTIDA`, `COD_JUGADOR`, `COD_PALABRA`, `PUNTUACION`, `RESULTADO`) VALUES
(1, 1, 7, 400, 'ganada'),
(2, 1, 9, 600, 'perdida'),
(3, 1, 7, 50, 'perdida'),
(4, 2, 6, -450, 'perdida'),
(5, 2, 2, 900, 'ganada'),
(6, 2, 10, -450, 'perdida'),
(7, 2, 4, 1100, 'ganada'),
(8, 2, 9, 1200, 'ganada'),
(9, 2, 3, -450, 'perdida'),
(10, 2, 8, 950, 'ganada'),
(11, 2, 4, -150, 'perdida'),
(12, 2, 4, 950, 'ganada'),
(13, 2, 9, -250, 'perdida'),
(14, 2, 6, -450, 'perdida'),
(15, 2, 1, -250, 'perdida'),
(16, 2, 1, -250, 'perdida'),
(17, 2, 2, -450, 'perdida'),
(18, 2, 6, -350, 'perdida'),
(19, 2, 3, -450, 'perdida'),
(20, 2, 6, -350, 'perdida'),
(21, 2, 6, -350, 'perdida'),
(22, 2, 7, -150, 'perdida'),
(23, 2, 6, -300, 'perdida'),
(24, 2, 9, -200, 'perdida'),
(25, 2, 7, -300, 'perdida'),
(26, 2, 2, -500, 'perdida'),
(27, 2, 8, -400, 'perdida'),
(28, 2, 10, -400, 'perdida'),
(29, 2, 8, -400, 'perdida'),
(30, 2, 338, -500, 'perdida'),
(31, 2, 93, -500, 'perdida'),
(32, 2, 109, -500, 'perdida'),
(33, 2, 280, -500, 'perdida'),
(34, 2, 318, -500, 'perdida'),
(35, 2, 69, -500, 'perdida'),
(36, 2, 280, -500, 'perdida'),
(37, 2, 10, -400, 'perdida'),
(38, 2, 336, -500, 'perdida'),
(39, 2, 24, -500, 'perdida'),
(40, 2, 335, -500, 'perdida'),
(41, 2, 30, -500, 'perdida'),
(42, 2, 127, -500, 'perdida'),
(43, 2, 100, -500, 'perdida'),
(44, 2, 187, -500, 'perdida'),
(45, 2, 112, -500, 'perdida'),
(46, 2, 242, -500, 'perdida'),
(47, 2, 192, -100, 'perdida'),
(48, 2, 237, -100, 'perdida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `USUARIO` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PERFIL` varchar(25) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Player',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USUARIO` (`USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `NOMBRE`, `APELLIDOS`, `USUARIO`, `PASSWORD`, `EMAIL`, `PERFIL`) VALUES
(1, 'Sergio', 'Bóveda Monjas', 'Bóveda Monjas', '$2y$10$z/15bM97gwPlgw1F3GTq6uCsYqH5bLV705UoDFJsK/MzE0x5Lok6W', 'email@email.com', 'Player'),
(2, 'Sergio', 'Boveda', 'xeky', '$2y$10$VYWgIC9fUFastzlkOSx0oe4Y7h2MCDA5EjIjQeUJIv6RpqfG/xcYq', 'email@email.com', 'Player'),
(3, 'Sergio', 'sdhfkj', 'Xekys', '$2y$10$EsGDGZY4XNHUkI4c62lfu.klYKmA/tDs95wrobZ94zoo84VgstdH2', 'sdhfkjshf@fdhsjk', 'Player'),
(4, '', '', '', '$2y$10$9xUD5ZXdhqGUm/GjUvG6qeoGbCNxnEHVC8ZvTLDHMMX2uT7KWCsPO', '', 'Player'),
(5, 'ssf', 'dsfsf', 'sdfdsf', '$2y$10$9QS4Lx5W7EI/EhwGsbHXGuj7.2C/eqNWgb8YUQgEd5unZMyRVm7p.', 'fsdfsf@hotrm', 'Player'),
(6, 'Xeky2', '12345', 'Xeky2', '$2y$10$TV.fFNxHUhY7KfAJOsEQ4uG5LKUj/oZp2JQOS69V4Qngd76GQSLvO', 'ddfsdfs@sdfs', 'Player'),
(7, 'Pepito', 'Los palotes', 'Pepi', '$2y$10$5b6w3ZP9ZGB4ZPDKEkNVPelMULrbAm7k/vkKTIb1ZSFB.Af8nfSLy', 'adsa@gma.es', 'Player');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `partidas_ibfk_1` FOREIGN KEY (`COD_JUGADOR`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partidas_ibfk_2` FOREIGN KEY (`COD_PALABRA`) REFERENCES `palabras` (`COD_PALABRA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
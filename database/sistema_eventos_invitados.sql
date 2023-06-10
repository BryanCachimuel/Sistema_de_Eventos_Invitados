-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2023 a las 02:39:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_eventos_invitados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `evento_nombre` varchar(70) NOT NULL,
  `hora_inicio` datetime NOT NULL,
  `hora_fin` datetime NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `id_usuario`, `evento_nombre`, `hora_inicio`, `hora_fin`, `fecha`) VALUES
(1, 1, 'Evento 1', '2023-04-11 10:00:00', '2023-04-11 12:00:00', '2023-04-11'),
(2, 1, 'Evento 2', '2023-04-12 14:00:00', '2023-04-12 16:00:00', '2023-04-12'),
(3, 1, 'Evento 3', '2023-04-13 09:00:00', '2023-04-13 11:00:00', '2023-04-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `id_invitado` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nombre_invitado` varchar(75) NOT NULL,
  `email_invitado` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(75) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_invitados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_invitados` (
`idInvitado` int(11)
,`nombreEvento` varchar(70)
,`emailInvitado` varchar(75)
,`idEvento` int(11)
,`nombreInvitado` varchar(75)
,`fechaEvento` date
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_invitados`
--
DROP TABLE IF EXISTS `v_invitados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_invitados`  AS SELECT `inv`.`id_invitado` AS `idInvitado`, `evt`.`evento_nombre` AS `nombreEvento`, `inv`.`email_invitado` AS `emailInvitado`, `inv`.`id_evento` AS `idEvento`, `inv`.`nombre_invitado` AS `nombreInvitado`, `evt`.`fecha` AS `fechaEvento` FROM (`invitados` `inv` join `eventos` `evt` on(`inv`.`id_evento` = `evt`.`id_evento`))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_relacion` (`id_usuario`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id_invitado`),
  ADD KEY `fk_relacion_eventos` (`id_evento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id_invitado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_relacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD CONSTRAINT `fk_relacion_eventos` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/* script de la Vista */
CREATE VIEW v_invitados AS
SELECT 
	inv.id_invitado as idInvitado,
    evt.id_usuario as id_usuario,
    evt.evento_nombre as nombreEvento,
    inv.email_invitado as emailInvitado,
    inv.id_evento as idEvento,
    inv.nombre_invitado as nombreInvitado,
    DATE_FORMAT(evt.fecha, '%d-%m-%Y') AS fechaEvento 
FROM 
invitados as inv 
INNER JOIN eventos as evt ON inv.id_evento = evt.id_evento;

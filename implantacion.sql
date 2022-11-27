-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 00:58:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `implantacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_usuario`
--

CREATE TABLE `perfiles_usuario` (
  `Id_perfil` int(11) NOT NULL,
  `Nombre_perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles_usuario`
--

INSERT INTO `perfiles_usuario` (`Id_perfil`, `Nombre_perfil`) VALUES
(1, 'administrador'),
(2, 'cliente'),
(3, 'vendedor'),
(4, 'inventario'),
(5, 'contador'),
(6, 'almacenista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_b`
--

CREATE TABLE `status_b` (
  `Id_status_B` int(11) NOT NULL,
  `Nombre_status_B` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status_b`
--

INSERT INTO `status_b` (`Id_status_B`, `Nombre_status_B`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_usuario`
--

CREATE TABLE `status_usuario` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `Id_perfil` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `PrimerNombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `SegundoNombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `PrimerApellido` varchar(70) CHARACTER SET utf8 NOT NULL,
  `SegundoApellido` varchar(70) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `Tipo_c` enum('V,E') NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `genero` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `telefono` int(11) NOT NULL,
  `Id_status_B` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `usuario`, `password`, `Tipo_c`, `cedula`, `genero`, `email`, `telefono`, `Id_status_B`, `fecha`) VALUES
(0, 'victor', 'manuel', 'camacaro', 'alvarez', 'victor', '123456', '', '123457', 'm', '@', 1234567, 1, '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles_usuario`
--
ALTER TABLE `perfiles_usuario`
  ADD PRIMARY KEY (`Id_perfil`);

--
-- Indices de la tabla `status_b`
--
ALTER TABLE `status_b`
  ADD PRIMARY KEY (`Id_status_B`);

--
-- Indices de la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_perfil` (`Id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_status_b` (`Id_status_B`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles_usuario`
--
ALTER TABLE `perfiles_usuario`
  MODIFY `Id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `status_b`
--
ALTER TABLE `status_b`
  MODIFY `Id_status_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  ADD CONSTRAINT `id_perfil` FOREIGN KEY (`Id_perfil`) REFERENCES `perfiles_usuario` (`Id_perfil`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_status_b` FOREIGN KEY (`Id_status_B`) REFERENCES `status_b` (`Id_status_B`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

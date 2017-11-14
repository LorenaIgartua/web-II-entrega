-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 21:14:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_risotto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `opinion` varchar(255) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_plato`, `id_usuario`, `opinion`, `puntaje`) VALUES
(141, 32, 0, 'riquisimo~~~~!!!!!', 5),
(142, 33, 0, 'lorena', 4),
(143, 33, 0, 'chan', 3),
(146, 33, 0, 'lorena', 5),
(147, 33, 0, 'chan', 2),
(156, 13, 42, 'rico rico', 3),
(162, 33, 42, 'holaaa', 1),
(163, 33, 42, 'holaaa', 2),
(171, 33, 1, 'chan', 1),
(172, 33, 42, 'chN', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_plato`, `url`) VALUES
(9, 32, 'images/5a08c7859057b.jpg'),
(12, 33, 'images/platos/5a08d7ebb02b3.jpg'),
(14, 33, 'images/platos/5a08d80b602e6.jpg'),
(15, 33, 'images/platos/5a08d80b6073a.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `id_plato` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`id_plato`, `id_menu`, `nombre`, `descripcion`, `valor`) VALUES
(5, 2, 'Risotto de Pollo', 'RISOTTO con pollo panceta, espárragos y queso parmeggiano', '100'),
(6, 2, 'Risotto de mar', 'RISOTTO con mejillones, calamares, gambas y queso parmeggiano.', '250'),
(8, 2, 'Risotto de Setas', 'RISOTTO con champiñones, setas, panceta, y queso parmeggiano.', '250'),
(9, 2, 'Risotto de Verduras', 'RISOTTO con mix de verduras frescas y queso parmeggiano.', '250'),
(10, 2, 'Risotto 4 Quesos', 'RISOTTO con queso parmeggiano, gorgonzola, fontina y taleggio.', '250'),
(11, 2, 'Risotto de Langostinos', 'RISOTTO con langostinos, jugo de limón y vino blanco.PASTA CON MARISCOS', '250'),
(13, 3, 'BRACIOLE DE TERNERA', 'Carne de ternera, tocino, zanahorias, limón, acompañado de pure de papas.', '250'),
(14, 3, 'CORDERO AL VINO CON GUISANTES', 'Cordero, vino tinto, romero, aceite de oliva extra virgen, guisantes.', '250'),
(15, 3, 'FILETE A LA PARMESANA', 'Filete de ternera, tomates maduros , aceite de oliva virgen extra, vino blanco, queso parmesano, acompañado con papas fritas.', '250'),
(16, 3, 'ESTOFADO AL VINO TINTO', 'carne de res, cebolla, zanahoria, perejil, especias varias, vino tinto, manteca y aceite de oliva virgen extra, se acompaña con papas rusticas.', '250'),
(17, 4, 'Tiramisu', 'Crema de Mascarpone con Cafe', '120'),
(18, 4, 'Cheesecake de frutos rojos', 'Crema de Queso Mascapone con mermelada de Frutos Rojos', '120'),
(19, 4, 'Brownies con helado', 'Pastel de Chocolate con Helado de Americana', '120'),
(20, 4, 'Strudel de manzana', 'Milhoja con Compota de Manzana', '120'),
(21, 4, 'Crepes suzette', 'Crepes Dulce con Salsa de Naranja acompañada con Helado de Americana', '120'),
(30, 2, 'arrictio', 'jsdjkjdsjk ramon lore feliz', '123'),
(32, 3, 'milanesa con papas fritas', 'de todo', '123'),
(33, 1, 'ensalda', 'tomate y lechuga', '23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_menu`
--

CREATE TABLE `tipo_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_menu`
--

INSERT INTO `tipo_menu` (`id_menu`, `nombre`) VALUES
(1, 'Entrada'),
(2, 'Risotto'),
(3, 'Otros Platos'),
(4, 'Postres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `mail`, `password`, `perfil`) VALUES
(1, 'admin', '$2y$10$0MmIgPNOur/aFOEsSz9dAud98qiy.z9GOjMYu1nzdtYzwKhfRQlTO', 1),
(42, 'lorena@gmail.com', '$2y$10$gJQlOFHs/.EfIfnVGW/hpeTb8pOzvUkzfdc0p3ikSi66wku6g2i12', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_plato` (`id_plato`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_plato` (`id_plato`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`id_plato`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `tipo_menu`
--
ALTER TABLE `tipo_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `tipo_menu`
--
ALTER TABLE `tipo_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id_plato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id_plato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `plato_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tipo_menu` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

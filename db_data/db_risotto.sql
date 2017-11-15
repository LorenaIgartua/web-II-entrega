-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 00:43:46
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
  `puntaje` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_plato`, `id_usuario`, `opinion`, `puntaje`, `fecha`) VALUES
(302, 18, 42, 'riquisimo!!', 5, '0000-00-00 00:00:00'),
(304, 46, 1, 'super recomencable ..... crocantes y sabrosas', 5, '0000-00-00 00:00:00'),
(309, 46, 1, 'riquisimas!', 3, '0000-00-00 00:00:00'),
(313, 47, 44, 'super!!! volvere pronto!', 5, '0000-00-00 00:00:00'),
(314, 48, 44, 'impecables! .... los recomiendo!', 3, '0000-00-00 00:00:00'),
(315, 16, 44, 'vuelvo en breve', 4, '0000-00-00 00:00:00'),
(324, 46, 1, 'esto es fantastico', 3, '2017-11-15 21:31:54'),
(334, 9, 1, 'cuando me lo sirvieron (despues de esperar bastante), estaba FRIO!', 1, '2017-11-15 23:59:54'),
(335, 8, 43, 'para repetir y repetir .... riquisimo!', 5, '2017-11-16 00:00:46'),
(336, 6, 43, 'muy muy bueno', 3, '2017-11-16 00:01:25'),
(337, 20, 43, 'las fotos nada que ver ', 3, '2017-11-16 00:01:48'),
(338, 19, 43, 'la porcion, gigante! .... muy bueno', 5, '2017-11-16 00:02:27'),
(339, 9, 44, 'me encanto! plato rico y abundante', 4, '2017-11-16 00:03:34'),
(340, 18, 44, 'muuuuuuuchos frutos rojos .... riquisimo!', 5, '2017-11-16 00:04:13'),
(341, 46, 44, 'genial, fantastico, maravilloso jajja', 1, '2017-11-16 00:42:12');

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
(74, 47, 'images/platos/5a0ca6b54ecd6.jpg'),
(75, 47, 'images/platos/5a0ca6b54f23a.jpg'),
(76, 47, 'images/platos/5a0ca6b54f670.jpg'),
(77, 48, 'images/platos/5a0ca6e3cc0db.jpg'),
(78, 48, 'images/platos/5a0ca6e3cc708.jpg'),
(79, 48, 'images/platos/5a0ca6e3ccba9.jpg'),
(81, 46, 'images/platos/5a0cc5b349437.jpg'),
(82, 46, 'images/platos/5a0cc5b34967e.jpg'),
(83, 46, 'images/platos/5a0cc5b34985b.jpg'),
(84, 16, 'images/platos/5a0cc5ed38864.jpg'),
(85, 16, 'images/platos/5a0cc5ed38ab3.jpg'),
(86, 16, 'images/platos/5a0cc5ed38c87.jpg'),
(87, 45, 'images/platos/5a0cc601ba7b6.jpg'),
(88, 45, 'images/platos/5a0cc601bab55.jpg'),
(89, 45, 'images/platos/5a0cc601bace5.jpg'),
(90, 18, 'images/platos/5a0cc61ca5ce5.jpg'),
(91, 18, 'images/platos/5a0cc61ca5f75.jpg'),
(92, 18, 'images/platos/5a0cc61ca6155.jpg'),
(93, 19, 'images/platos/5a0cc63e34c98.jpg'),
(95, 19, 'images/platos/5a0cc63e35161.jpg'),
(96, 19, 'images/platos/5a0cc63e352c5.jpg'),
(97, 20, 'images/platos/5a0cc6615afd9.jpg'),
(98, 20, 'images/platos/5a0cc6615b27b.jpg'),
(99, 20, 'images/platos/5a0cc6615b456.jpg'),
(100, 6, 'images/platos/5a0cc6819a250.jpg'),
(101, 6, 'images/platos/5a0cc6819a4ed.jpg'),
(102, 6, 'images/platos/5a0cc6819a73d.jpg'),
(103, 8, 'images/platos/5a0cc699dfb19.jpg'),
(104, 8, 'images/platos/5a0cc699dfd61.jpg'),
(105, 8, 'images/platos/5a0cc699e001d.jpg'),
(106, 9, 'images/platos/5a0cc6be94f25.jpg'),
(107, 9, 'images/platos/5a0cc6be95174.jpg'),
(108, 9, 'images/platos/5a0cc6be95332.jpg');

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
(6, 2, 'Risotto de mar', 'RISOTTO con mejillones, calamares, gambas y queso parmeggiano.', '250'),
(8, 2, 'Risotto de Setas', 'RISOTTO con champiñones, setas, panceta, y queso parmeggiano.', '250'),
(9, 2, 'Risotto de Verduras', 'RISOTTO con mix de verduras frescas y queso parmeggiano.', '250'),
(16, 3, 'ESTOFADO AL VINO TINTO', 'carne de res, cebolla, zanahoria, perejil, especias varias, vino tinto, manteca y aceite de oliva virgen extra, se acompaña con papas rusticas.', '250'),
(18, 4, 'Cheesecake de frutos rojos', 'Crema de Queso Mascapone con mermelada de Frutos Rojos', '120'),
(19, 4, 'Brownies con helado', 'Pastel de Chocolate con Helado de Americana', '120'),
(20, 4, 'Strudel de manzana', 'Milhoja con Compota de Manzana', '120'),
(45, 3, 'milanesa con papas fritas', 'Carne de ternera, tocino, zanahorias, limón, acompañado de pure de papas.', '200'),
(46, 9, 'rabas', 'calamares empanados, con limon', '180'),
(47, 9, 'provoleta con hojas verdes', 'provoleta asada, con ensalada de hojas verdes', '180'),
(48, 9, 'bastoncitos de queso', 'queso muzzarella, empanado, frito', '180');

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
(2, 'Risotto'),
(3, 'Otros Platos'),
(4, 'Postres'),
(9, 'entradas');

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
(42, 'lorena@gmail.com', '$2y$10$gJQlOFHs/.EfIfnVGW/hpeTb8pOzvUkzfdc0p3ikSi66wku6g2i12', 0),
(43, 'martin@gmail.com', '$2y$10$iixr9jQ2XAYe4flkAVGcs.1CXdm6HXB6653mcQN0cYS31vAdPCxnu', 0),
(44, 'carolina@yahoo.com', '$2y$10$gCSOUkgt44sFKQC5JRjuJOuq/jA2FcwkE3Y4M1kzQ3A2KrLAbO1ei', 0);

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `tipo_menu`
--
ALTER TABLE `tipo_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
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

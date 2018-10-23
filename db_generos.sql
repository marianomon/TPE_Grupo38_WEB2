-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2018 a las 01:32:16
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_generos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'Accion'),
(5, 'Drama'),
(6, 'Terror'),
(7, 'Comedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(225) NOT NULL,
  `id_genero` int(110) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `sinopsis` varchar(1200) NOT NULL,
  `actores` varchar(300) NOT NULL,
  `iFrame` varchar(12000) NOT NULL,
  `estreno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `id_genero`, `nombre`, `sinopsis`, `actores`, `iFrame`, `estreno`) VALUES
(2, 1, 'Avengers: Infinity War', 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.', 'Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Benedict Cumberbatch, Don Cheadle, Tom Holland, Chadwick Boseman, Paul Bettany, Elizabeth Olsen, Anthony Mackie, Sebastian Stan, Danai Gurira, Letitia Wright, Dave Bautista, Zoe Saldana, Josh Brolin, Chris Pratt.', '<iframe width=\"760\" height=\"515\" src=\"https://www.youtube.com/embed/6ZfuNTqbHE8?rel=0&showinfo=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(6, 7, 'Charlie y la Fabrica de Chocolate', 'Charlie Bucket (Freddie Highmore), un niño muy bueno de una familia muy pobre, gana un concurso para disfrutar de una visita de un día a la gigantesca fábrica de chocolate del excéntrico Willy Wonka (Johnny Depp) y su equipo de Oompa-Loompas. Cuatro niños más de diferentes partes del mundo lo acompañan a través de un mundo fantástico y mágico lleno de diferentes sabores. ', 'Johnny Depp, Freddie Highmore, David Kelly, Helena Bonham Carter, Noah Taylor, Missi Pyle.\r\nJames Fox\r\nDeep Roy\r\nChristopher Lee', '<iframe width=\"760\" height=\"515\" src=\"https://www.youtube.com/embed/BGem82vCZNM?rel=0&showinfo=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 0),
(9, 1, 'Ant-Man', 'Scott Lang vuelve a enfundarse el traje de Ant-Man para pelear codo con codo junto a la Avispa. La misión revelará a los dos superhéroes un secreto terrible y los enfrentará a su enemigo más poderoso.', 'juan', '<iframe width=\"760\" height=\"515\" src=\"https://www.youtube.com/embed/1xdCWAagZfw?rel=0&amp;showinfo=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1),
(64, 5, 'Sierra Burgess is a Loser', 'A Sierra le da igual no ser conocida en el instituto, pero cuando empieza a hablar a través de mensajes de texto con el chico que le gusta, decide pedir ayuda a la chica más popular con la esperanza de mantener la atención de su amor tanto como sea posible. Por un error de identidad, esta joven popular tendrá que trabajar en equipo con Sierra para conseguir lo que quiere. Y poco a poco surge un bonito romance al estilo de Cyrano de Bergerac.', 'Shannon Purser Kristine Froseth RJ Cyler Noah Centineo Loretta Devine Lea Thompson Alan Ruck', '<iframe width=\"760\" height=\"515\" src=\"https://www.youtube.com/embed/q9Pk_Eq4BUc?rel=0&showinfo=0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 0),
(66, 6, 'Slender Man', 'El hombre más pálido. El traje más oscuro. Más grande que el gigante más alto. Ten miedo de este hombre: Slender Man ya que puede hacer lo que nadie puede”. Estas son algunas de las características que usuarios del internet dieron al personaje ficticio de terror Slender Man (el hombre delgado). Ahora la criatura llega a la gran pantalla con este film de terror, que nace de una de las leyendas urbanas de la web más populares, en base de una recopilación de imágenes en el foro Something Awful y, hoy en día, pertenece a la cultura “creepypasta\".', 'Joey King, Julia Goldani Telles, Jaz Sinclair, Annalise Basso, Javier Botet.', '<iframe width=\"760\" height=\"515\" src=\"https://www.youtube.com/embed/RhgeNY24wZY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `pass`) VALUES
(1, 'Mariano', '$2y$10$nzSgG.TLMdeuLYnY1LDK0.vKl1PxYJlEXO45UMU1CH88AG8DGKgnG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

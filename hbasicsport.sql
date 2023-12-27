-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 15-11-2023 a las 15:15:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hbasicsport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `nlinea` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUnico` varchar(20) NOT NULL,
  `dniCliente` varchar(9) DEFAULT NULL,
  `idProducto` int(4) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `coste` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dniCliente` varchar(9) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(75) NOT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `administrador` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedidos`
--

CREATE TABLE `lineaspedidos` (
  `idPedido` int(4) NOT NULL,
  `nlinea` int(2) NOT NULL,
  `idProducto` int(6) DEFAULT NULL,
  `cantidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lineaspedidos`
--

INSERT INTO `lineaspedidos` (`idPedido`, `nlinea`, `idProducto`, `cantidad`) VALUES
(4, 1, 5, 1),
(4, 2, 7, 1),
(5, 1, 5, 1),
(5, 2, 7, 1),
(6, 1, 3, 1),
(6, 2, 5, 1),
(6, 3, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `dirEntrega` varchar(50) NOT NULL,
  `nTarjeta` varchar(50) DEFAULT NULL,
  `dniCliente` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `unidades` int(5) NOT NULL,
  `precio` int(4) DEFAULT NULL,
  `descripcion` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `foto`, `marca`, `categoria`, `unidades`, `precio`, `descripcion`) VALUES
(1, 'Camiseta mujer azul', 'camisetamujerazul.jpg', 'HBASICSPORT', 'hombre', 100, 20, NULL),
(2, 'Camiseta hombre negra', 'camisetanegrahombre.jpg', 'HBASICSPORT', 'hombre', 100, 20, NULL),
(3, 'Camiseta hombre nike azul', 'camisetanikeazul.jpg', 'NIKE', 'hombre', 100, 30, NULL),
(4, 'Cinta para cabeza', 'cintacabeza.jpg', 'NIKE', 'accesorios', 100, 25, NULL),
(5, 'Conjunto mujer azul', 'conjuntomujerazul.jpg', 'HBASICSPORT', 'mujer', 100, 25, NULL),
(6, 'Cojunto mujer blanco', 'conjuntomujerblanco.jpg', 'HBASICSPORT', 'mujer', 100, 25, NULL),
(7, 'Conjunto mujer rojo', 'conjuntomujerrojo.jpg', 'HBASICSPORT', 'mujer', 100, 25, NULL),
(8, 'Conjunto mujer rosa', 'conjuntomujerrosa.jpg', 'HBASICSPORT', 'mujer', 100, 25, NULL),
(9, 'Mancuerna 25 kg', 'mancuerna.webp', 'HBASICSPORT', 'accesorios', 100, 15, NULL),
(10, 'Mochila larga de hbasicsport', 'mochilalarga.jpg', 'HBASICSPORT', 'accesorios', 100, 40, NULL),
(11, 'Pantalon adidas negro de hombre masculino', 'pantalonabidashombre.jpg', 'ADIDAS', 'hombre', 100, 30, NULL),
(12, 'Pantalon nike blanco de hombre masculino', 'pantalonblancohombrenike.jpg', 'NIKE', 'hombre', 100, 32, NULL),
(13, 'Pack de pantalones cortos mujer', 'pantalonesdecolores.jpg', 'HBASICSPORT', 'mujer', 100, 81, NULL),
(14, 'Straps', 'straps.jpg', 'HBASICSPORT', 'accesorios', 100, 20, NULL),
(15, 'Camiseta termica hombre de color blanco', 'termicablancahombre.jpg', 'HBASICSPORT', 'hombre', 100, 25, NULL),
(16, 'Camiseta termica hombre de color negro', 'termicanegrahombre.jpg', 'HBASICSPORT', 'hombre', 100, 25, NULL),
(17, 'Top para mujer de color negro', 'topmujernegro.jpg', 'HBASICSPORT', 'mujer', 100, 18, NULL),
(18, 'Pack de agarres para poleas', 'packdeagarres.jpg', 'HBASICSPORT', 'accesorios', 100, 65, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`nlinea`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dniCliente`);

--
-- Indices de la tabla `lineaspedidos`
--
ALTER TABLE `lineaspedidos`
  ADD PRIMARY KEY (`idPedido`,`nlinea`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

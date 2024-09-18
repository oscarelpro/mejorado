-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2024 a las 05:54:43
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
-- Base de datos: `bd_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id_cliente`, `Nombre`, `Apellido`, `cedula`, `telefono`) VALUES
(1, 'oscar', 'lopez', '25213710', '04242585491');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_conteo`
--

CREATE TABLE `tbl_conteo` (
  `id_conteo` int(11) NOT NULL,
  `id_repartidor` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `id_producto` int(11) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `stock_minimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`id_producto`, `sku`, `producto`, `precio`, `cantidad`, `stock_minimo`) VALUES
(1, '0123456', 'lapiz', 12, 20, 10),
(2, '1234', 'perro', 25, 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto_ubicacion`
--

CREATE TABLE `tbl_producto_ubicacion` (
  `id_producto` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_producto_ubicacion`
--

INSERT INTO `tbl_producto_ubicacion` (`id_producto`, `id_ubicacion`, `cantidad`) VALUES
(1, 1, 100),
(1, 2, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_repartidor`
--

CREATE TABLE `tbl_repartidor` (
  `id_repartidor` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roll`
--

CREATE TABLE `tbl_roll` (
  `id_roll` int(11) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_venta`
--

CREATE TABLE `tbl_tipo_venta` (
  `id_venta` int(11) NOT NULL,
  `Tipo_venta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_transac`
--

CREATE TABLE `tbl_transac` (
  `id_transac` int(11) NOT NULL,
  `operacion` varchar(20) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ubicacion`
--

CREATE TABLE `tbl_ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_ubicacion`
--

INSERT INTO `tbl_ubicacion` (`id_ubicacion`, `nombre`) VALUES
(1, 'tienda'),
(2, 'almacen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `tipo_user`, `pass`) VALUES
(1, 'oscarlopez', 1, '1234'),
(2, 'juan', 2, '12345'),
(3, 'pedro', 3, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_venta`
--

CREATE TABLE `tbl_venta` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `tipo_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tbl_conteo`
--
ALTER TABLE `tbl_conteo`
  ADD PRIMARY KEY (`id_conteo`);

--
-- Indices de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tbl_producto_ubicacion`
--
ALTER TABLE `tbl_producto_ubicacion`
  ADD PRIMARY KEY (`id_producto`,`id_ubicacion`);

--
-- Indices de la tabla `tbl_repartidor`
--
ALTER TABLE `tbl_repartidor`
  ADD PRIMARY KEY (`id_repartidor`);

--
-- Indices de la tabla `tbl_roll`
--
ALTER TABLE `tbl_roll`
  ADD PRIMARY KEY (`id_roll`),
  ADD UNIQUE KEY `fk_id_user` (`fk_id_user`);

--
-- Indices de la tabla `tbl_tipo_venta`
--
ALTER TABLE `tbl_tipo_venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `tbl_transac`
--
ALTER TABLE `tbl_transac`
  ADD PRIMARY KEY (`id_transac`);

--
-- Indices de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `tbl_venta`
--
ALTER TABLE `tbl_venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_conteo`
--
ALTER TABLE `tbl_conteo`
  MODIFY `id_conteo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_repartidor`
--
ALTER TABLE `tbl_repartidor`
  MODIFY `id_repartidor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_roll`
--
ALTER TABLE `tbl_roll`
  MODIFY `id_roll` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_venta`
--
ALTER TABLE `tbl_tipo_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_transac`
--
ALTER TABLE `tbl_transac`
  MODIFY `id_transac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_venta`
--
ALTER TABLE `tbl_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_roll`
--
ALTER TABLE `tbl_roll`
  ADD CONSTRAINT `tbl_roll_ibfk_1` FOREIGN KEY (`fk_id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

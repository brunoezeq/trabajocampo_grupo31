-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2026 a las 14:06:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_grupo31`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion_categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `detalle_cantidad` int(11) NOT NULL,
  `detalle_precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id_domicilio` int(11) NOT NULL,
  `calle` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `departamento` varchar(10) DEFAULT NULL,
  `codigo_postal` varchar(15) DEFAULT NULL,
  `localidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL,
  `nombre_localidad` varchar(100) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_pago`
--

CREATE TABLE `medio_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `descripcion_perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(150) NOT NULL,
  `descripcion_producto` varchar(200) NOT NULL,
  `imagen_producto` varchar(100) NOT NULL,
  `categoria_producto` int(11) NOT NULL,
  `precio_producto` float NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `estado_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL,
  `nombre_provincia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `domicilio_id` int(11) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña_usuario` varchar(300) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `estado_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `medio_pago_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `fk_domicilio_localidad` (`localidad_id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`),
  ADD KEY `fk_localidad_provincia` (`provincia_id`);

--
-- Indices de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria_producto` (`categoria_producto`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`),
  ADD KEY `fk_usuario_domicilio` (`domicilio_id`);

  -- Restricciones UNIQUE para la tabla usuario
ALTER TABLE `usuario` 
ADD CONSTRAINT `UQ_dni` UNIQUE (`dni`);

ALTER TABLE `usuario` 
ADD CONSTRAINT `UQ_celular` UNIQUE (`celular`);

ALTER TABLE `usuario` 
ADD CONSTRAINT `UQ_usuario` UNIQUE (`usuario`);


--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `medio_pago_id` (`medio_pago_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `fk_domicilio_localidad` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id_localidad`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `fk_localidad_provincia` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id_provincia`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_producto`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_domicilio` FOREIGN KEY (`domicilio_id`) REFERENCES `domicilio` (`id_domicilio`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id_perfil`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`medio_pago_id`) REFERENCES `medio_pago` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- LOTE DE DATOS

-- Categoria
INSERT INTO `categoria` (`descripcion_categoria`) VALUES
('Café en Grano'),
('Café Molido'),
('Cafeteras'),
('Accesorios'),
('Kits de Regalo');

-- Perfil
INSERT INTO `perfil` (`descripcion_perfil`) VALUES
('Administrador'),
('Cliente');

-- Producto
INSERT INTO `producto` (`nombre_producto`, `descripcion_producto`, `precio_producto`, `stock_producto`, `categoria_producto`,`estado_producto`) VALUES
('Brasil Mogiana 250g', 'Notas de chocolate y nueces, baja acidez.', 9500.00, 30, 1, 1),
('Colombia Huila 250g', 'Notas cítricas y dulces, cuerpo medio.', 11500.00, 25, 1,1),
('Molido Espresso 500g', 'Molienda fina para máquinas de café hogareñas.', 14000.00, 15, 2, 1),
('Prensa Francesa 350ml', 'Vidrio templado y acero inoxidable.', 18500.00, 10, 3, 1),
('Cafetera Italiana 6 tazas', 'Aluminio reforzado, mango ergonómico.', 22000.00, 8, 3, 1),
('Espumador de Leche', 'Batidor a pilas para leche caliente o fría.', 7500.00, 20, 4, 1),
('Filtros V60-02', 'Pack de 100 unidades de papel blanco.', 8200.00, 50, 4, 1),
('Kit Barista Principiante', 'Incluye Prensa Francesa + 250g de café Brasil.', 26000.00, 5, 5, 1);

-- Provincia
INSERT INTO `provincia` (`id_provincia`, `nombre_provincia`) VALUES
(1, 'Chaco'),
(2, 'Corrientes');

-- Localidad
INSERT INTO `localidad` (`id_localidad`, `nombre_localidad`, `provincia_id`) VALUES
(18007010, 'Bella Vista', 2),
(18014010, 'Berón de Astrada', 2),
(18014020, 'Yahapé', 2),
(18021020, 'Corrientes', 2),
(18021040, 'Riachuelo', 2),
(18021050, 'San Cayetano', 2),
(18028010, 'Concepción', 2),
(18028020, 'Santa Rosa', 2),
(18028030, 'Tabay', 2),
(18028040, 'Tatacua', 2),
(18035010, 'Cazadores Correntinos', 2),
(18035020, 'Curuzú Cuatiá', 2),
(18035030, 'Perugorría', 2),
(18042010, 'El Sombrero', 2),
(18042020, 'Empedrado', 2),
(18049010, 'Esquina', 2),
(18049020, 'Pueblo Libertador', 2),
(18056010, 'Alvear', 2),
(18056020, 'Estación Torrent', 2),
(18063010, 'Itá Ibaté', 2),
(18063020, 'Lomas de Vallejos', 2),
(18063030, 'Nuestra Señora del Rosario de Caá Catí', 2),
(18063040, 'Palmar Grande', 2),
(18070010, 'Carolina', 2),
(18070020, 'Goya', 2),
(18077010, 'Itatí', 2),
(18077020, 'Ramada Paso', 2),
(18084010, 'Colonia Liebig\'s', 2),
(18084020, 'Ituzaingó', 2),
(18084030, 'San Antonio', 2),
(18084040, 'San Carlos', 2),
(18084050, 'Villa Olivari', 2),
(18091010, 'Cruz de los Milagros', 2),
(18091020, 'Gobernador Juan E. Martínez', 2),
(18091030, 'Lavalle', 2),
(18091040, 'Santa Lucía', 2),
(18091050, 'Villa Córdoba', 2),
(18091060, 'Yatayti Calle', 2),
(18098010, 'Mburucuyá', 2),
(18105010, 'Felipe Yofré', 2),
(18105020, 'Mariano I. Loza', 2),
(18105030, 'Mercedes', 2),
(18112010, 'Colonia Libertad', 2),
(18112020, 'Estación Libertad', 2),
(18112030, 'Juan Pujol', 2),
(18112040, 'Mocoretá', 2),
(18112050, 'Monte Caseros', 2),
(18112060, 'Parada Acuña', 2),
(18112070, 'Parada Labougle', 2),
(18119010, 'Bonpland', 2),
(18119020, 'Parada Pucheta', 2),
(18119030, 'Paso de los Libres', 2),
(18119040, 'Tapebicuá', 2),
(18126010, 'Saladas', 2),
(18126020, 'San Lorenzo', 2),
(18133010, 'Ingenio Primer Correntino', 2),
(18133020, 'Paso de la Patria', 2),
(18133030, 'San Cosme', 2),
(18133040, 'Santa Ana', 2),
(18140010, 'San Luis del Palmar', 2),
(18147010, 'Colonia Carlos Pellegrini', 2),
(18147020, 'Guaviraví', 2),
(18147030, 'La Cruz', 2),
(18147040, 'Yapeyú', 2),
(18154010, 'Loreto', 2),
(18154020, 'San Miguel', 2),
(18161010, 'Chavarría', 2),
(18161020, 'Colonia Pando', 2),
(18161030, '9 de Julio', 2),
(18161040, 'Pedro R. Fernández', 2),
(18161050, 'San Roque', 2),
(18168010, 'José Rafael Gómez', 2),
(18168020, 'Garruchos', 2),
(18168030, 'Gobernador Igr. Valentín Virasoro', 2),
(18168040, 'Santo Tomé', 2),
(18175010, 'Sauce', 2),
(22007010, 'Concepción del Bermejo', 1),
(22007020, 'Los Frentones', 1),
(22007030, 'Pampa del Infierno', 1),
(22007040, 'Río Muerto', 1),
(22007050, 'Taco Pozo', 1),
(22014010, 'General Vedia', 1),
(22014020, 'Isla del Cerrito', 1),
(22014030, 'La Leonesa', 1),
(22014040, 'Las Palmas', 1),
(22014050, 'Puerto Bermejo Nuevo', 1),
(22014060, 'Puerto Bermejo Viejo', 1),
(22014070, 'Puerto Eva Perón', 1),
(22021010, 'Presidencia Roque Sáenz Peña', 1),
(22028010, 'Charata', 1),
(22036010, 'Gancedo', 1),
(22036020, 'General Capdevila', 1),
(22036030, 'General Pinedo', 1),
(22036040, 'Mesón de Fierro', 1),
(22036050, 'Pampa Landriel', 1),
(22039010, 'Hermoso Campo', 1),
(22039020, 'Itín', 1),
(22043010, 'Chorotis', 1),
(22043020, 'Santa Sylvina', 1),
(22043030, 'Venados Grandes', 1),
(22049010, 'Corzuela', 1),
(22056010, 'La Escondida', 1),
(22056020, 'La Verde', 1),
(22056030, 'Lapachito', 1),
(22056040, 'Makallé', 1),
(22063010, 'El Espinillo', 1),
(22063020, 'El Sauzal', 1),
(22063030, 'El Sauzalito', 1),
(22063040, 'Fortín Lavalle', 1),
(22063050, 'Fuerte Esperanza', 1),
(22063060, 'Juan José Castelli', 1),
(22063070, 'Miraflores', 1),
(22063080, 'Nueva Pompeya', 1),
(22063100, 'Villa Río Bermejito', 1),
(22063110, 'Wichi', 1),
(22063120, 'Zaparinqui', 1),
(22070010, 'Avia Terai', 1),
(22070020, 'Campo Largo', 1),
(22070030, 'Fortín Las Chuñas', 1),
(22070040, 'Napenay', 1),
(22077010, 'Colonia Popular', 1),
(22077020, 'Estación General Obligado', 1),
(22077030, 'Laguna Blanca', 1),
(22077040, 'Puerto Tirol', 1),
(22084010, 'Ciervo Petiso', 1),
(22084020, 'General José de San Martín', 1),
(22084030, 'La Eduvigis', 1),
(22084040, 'Laguna Limpia', 1),
(22084050, 'Pampa Almirón', 1),
(22084060, 'Pampa del Indio', 1),
(22084070, 'Presidencia Roca', 1),
(22084080, 'Selvas del Río de Oro', 1),
(22091010, 'Tres Isletas', 1),
(22098010, 'Coronel Du Graty', 1),
(22098020, 'Enrique Urien', 1),
(22098030, 'Villa Angela', 1),
(22105010, 'Las Breñas', 1),
(22112010, 'La Clotilde', 1),
(22112020, 'La Tigra', 1),
(22112030, 'San Bernardo', 1),
(22119010, 'Presidencia de la Plaza', 1),
(22126010, 'Barrio de los Pescadores', 1),
(22126020, 'Colonia Benítez', 1),
(22126030, 'Margarita Belén', 1),
(22133010, 'Quitilipi', 1),
(22133020, 'Villa El Palmar', 1),
(22140010, 'Barranqueras', 1),
(22140020, 'Basail', 1),
(22140030, 'Colonia Baranda', 1),
(22140040, 'Fontana', 1),
(22140050, 'Puerto Vilelas', 1),
(22140060, 'Resistencia', 1),
(22147010, 'Samuhú', 1),
(22147020, 'Villa Berthet', 1),
(22154010, 'Capitán Solari', 1),
(22154020, 'Colonia Elisa', 1),
(22154030, 'Colonias Unidas', 1),
(22154040, 'Ingeniero Barbet', 1),
(22154050, 'Las Garcitas', 1),
(22161010, 'Charadai', 1),
(22161020, 'Cote Lai', 1),
(22161030, 'Haumonia', 1),
(22161040, 'Horquilla', 1),
(22161050, 'La Sabana', 1),
(22168010, 'Colonia Aborigen', 1),
(22168020, 'Machagai', 1),
(22168030, 'Napalpí', 1);

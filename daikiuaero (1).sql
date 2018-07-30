-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2018 a las 03:27:40
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daikiuaero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuertos`
--

CREATE TABLE `aeropuertos` (
  `id_Aeropuerto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aeropuertos`
--

INSERT INTO `aeropuertos` (`id_Aeropuerto`, `nombre`) VALUES
(1, 'A. I. de la Ciudad de México'),
(2, 'A. I. de Cancún'),
(3, 'A. I. de Guadalajara'),
(4, 'A. I. de Monterrey'),
(5, 'A. I. de Tijuana'),
(6, 'A. I. de los Cabos'),
(7, 'A. I. de Puerto Vallarta'),
(8, 'A. I. de Mérida'),
(9, 'A. I. de Guanajuato'),
(10, 'A. I. de Culiacán'),
(11, 'A. l. de Hermosillo'),
(12, 'A. I. de Chihuahua'),
(13, 'A. I. de Veracruz'),
(14, 'A. I. de Tuxtla Gutiérrez'),
(15, 'A. I. de Villahermosa'),
(16, 'A. I. de Ciudad Juárez'),
(17, 'A. I. de Mazatlán'),
(18, 'A. I. de Oaxaca'),
(19, 'A. I. de La Paz'),
(20, 'A. I. de Querétaro'),
(21, 'A. I. de Villahermosa'),
(22, 'A. I. de Mexicali'),
(23, 'A. I. de Toluca'),
(24, 'A. I. de Acapulco'),
(25, 'A. I. de Aguascalientes'),
(26, 'A. I. de Mexicali'),
(27, 'A. I. de Mexicali');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id_Asiento` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `lugar` varchar(15) NOT NULL,
  `tipo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id_Asiento`, `nombre`, `lugar`, `tipo`) VALUES
(1, 'A1', 'Ventanilla', 1),
(2, 'A2', 'Pasillo', 1),
(3, 'A3', 'Pasillo', 1),
(4, 'A4', 'Ventanilla', 1),
(5, 'B1', 'Ventanilla', 1),
(6, 'B2', 'Pasillo', 1),
(7, 'B3', 'Pasillo', 1),
(8, 'B4', 'Ventanilla', 1),
(9, 'C1', 'Ventanilla', 1),
(10, 'C2', 'Pasillo', 1),
(11, 'C3', 'Pasillo', 1),
(12, 'C4', 'Ventanilla', 1),
(13, 'D1', 'Ventanilla', 1),
(14, 'D2', 'Pasillo', 1),
(15, 'D3', 'Pasillo', 1),
(16, 'D4', 'Ventanilla', 1),
(17, 'E1', 'Ventanilla', 1),
(18, 'E2', 'Pasillo', 1),
(19, 'E3', 'Pasillo', 1),
(20, 'E4', 'Ventanilla', 1),
(21, 'F1', 'Ventanilla', 1),
(22, 'F2', 'Pasillo', 1),
(23, 'F3', 'Pasillo', 1),
(24, 'F4', 'Ventanilla', 1),
(25, 'A1', 'Ventanilla', 2),
(26, 'A2', 'Pasillo', 2),
(27, 'A3', 'Pasillo', 2),
(28, 'A4', 'Ventanilla', 2),
(29, 'B1', 'Ventanilla', 2),
(30, 'B2', 'Pasillo', 2),
(31, 'B3', 'Pasillo', 2),
(32, 'B4', 'Ventanilla', 2),
(33, 'C1', 'Ventanilla', 2),
(34, 'C2', 'Pasillo', 2),
(35, 'C3', 'Pasillo', 2),
(36, 'C4', 'Ventanilla', 2),
(37, 'D1', 'Ventanilla', 2),
(38, 'D2', 'Pasillo', 2),
(39, 'D3', 'Pasillo', 2),
(40, 'D4', 'Ventanilla', 2),
(41, 'E1', 'Ventanilla', 2),
(42, 'E2', 'Pasillo', 2),
(43, 'E3', 'Pasillo', 2),
(44, 'E4', 'Ventanilla', 2),
(45, 'F1', 'Ventanilla', 2),
(46, 'F2', 'Pasillo', 2),
(47, 'F3', 'Pasillo', 2),
(48, 'F4', 'Ventanilla', 2),
(49, 'G1', 'Ventanilla', 2),
(50, 'G2', 'Pasillo', 2),
(51, 'G3', 'Pasillo', 2),
(52, 'G4', 'Ventanilla', 2),
(53, 'H1', 'Ventanilla', 2),
(54, 'H2', 'Pasillo', 2),
(55, 'H3', 'Pasillo', 2),
(56, 'H4', 'Ventanilla', 2),
(57, 'I1', 'Ventanilla', 2),
(58, 'I2', 'Pasillo', 2),
(59, 'I3', 'Pasillo', 2),
(60, 'I4', 'Ventanilla', 2),
(61, 'J1', 'Ventanilla', 2),
(62, 'J2', 'Pasillo', 2),
(63, 'J3', 'Pasillo', 2),
(64, 'j4', 'Ventanilla', 2),
(65, 'K1', 'Ventanilla', 2),
(66, 'K2', 'Pasillo', 2),
(67, 'K3', 'Pasillo', 2),
(68, 'K4', 'Ventanilla', 2),
(69, 'A1', 'Ventanilla', 3),
(70, 'A2', 'Pasillo', 3),
(71, 'A3', 'Pasillo', 3),
(72, 'A4', 'Ventanilla', 3),
(73, 'B1', 'Ventanilla', 3),
(74, 'B2', 'Pasillo', 3),
(75, 'B3', 'Pasillo', 3),
(76, 'B4', 'Ventanilla', 3),
(77, 'C1', 'Ventanilla', 3),
(78, 'C2', 'Pasillo', 3),
(79, 'C3', 'Pasillo', 3),
(80, 'C4', 'Ventanilla', 3),
(81, 'D1', 'Ventanilla', 3),
(82, 'D2', 'Pasillo', 3),
(83, 'D3', 'Pasillo', 3),
(84, 'D4', 'Ventanilla', 3),
(85, 'E1', 'Ventanilla', 3),
(86, 'E2', 'Pasillo', 3),
(87, 'E3', 'Pasillo', 3),
(88, 'E4', 'Ventanilla', 3),
(89, 'F1', 'Ventanilla', 3),
(90, 'F2', 'Pasillo', 3),
(91, 'F3', 'Pasillo', 3),
(92, 'F4', 'Ventanilla', 3),
(93, 'G1', 'Ventanilla', 3),
(94, 'G2', 'Pasillo', 3),
(95, 'G3', 'Pasillo', 3),
(96, 'G4', 'Ventanilla', 3),
(97, 'H1', 'Ventanilla', 3),
(98, 'H2', 'Pasillo', 3),
(99, 'H3', 'Pasillo', 3),
(100, 'H4', 'Ventanilla', 3),
(101, 'I1', 'Ventanilla', 3),
(102, 'I2', 'Pasillo', 3),
(103, 'I3', 'Pasillo', 3),
(104, 'I4', 'Ventanilla', 3),
(105, 'J1', 'Ventanilla', 3),
(106, 'J2', 'Pasillo', 3),
(107, 'J3', 'Pasillo', 3),
(108, 'j4', 'Ventanilla', 3),
(109, 'K1', 'Ventanilla', 3),
(110, 'K2', 'Pasillo', 3),
(111, 'K3', 'Pasillo', 3),
(112, 'K4', 'Ventanilla', 3),
(113, 'L1', 'Ventanilla', 3),
(114, 'L2', 'Pasillo', 3),
(115, 'L3', 'Pasillo', 3),
(116, 'L4', 'Ventanilla', 3),
(117, 'M1', 'Ventanilla', 3),
(118, 'M2', 'Pasillo', 3),
(119, 'M3', 'Pasillo', 3),
(120, 'M4', 'Ventanilla', 3),
(121, 'N1', 'Ventanilla', 3),
(122, 'N2', 'Pasillo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviones`
--

CREATE TABLE `aviones` (
  `id_Avion` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aviones`
--

INSERT INTO `aviones` (`id_Avion`, `modelo`, `capacidad`) VALUES
(1, 'Boeing 747', 122),
(2, 'Boeing 777', 122),
(3, 'Boeing 727', 122),
(4, 'Boeing 787', 122);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `id_Boleto` int(11) NOT NULL,
  `id_Vuelo_Ida` int(11) NOT NULL,
  `id_Vuelo_Regreso` int(11) DEFAULT NULL,
  `id_Clase` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido_Paterno` varchar(25) NOT NULL,
  `apellido_Materno` varchar(25) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `id_Asiento` int(11) NOT NULL,
  `importe_Servicio` int(11) NOT NULL,
  `importe_Boleto` int(11) NOT NULL,
  `importe_Total` int(11) NOT NULL,
  `folio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_Ciudad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_Aeropuerto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_Ciudad`, `nombre`, `id_Aeropuerto`) VALUES
(1, 'Ciudad de México', 1),
(2, 'Cancún', 2),
(3, 'Guadalajara', 3),
(4, 'Monterrey', 4),
(5, 'Tijuana', 5),
(6, 'Los Cabos', 6),
(7, 'Puerto Vallarta', 7),
(8, 'Mérida', 8),
(9, 'León', 9),
(10, 'Culiacán', 10),
(11, 'Hermosillo', 11),
(12, 'Chihuahua', 12),
(13, 'Veracruz', 13),
(14, 'Tuxtla Gutiérrez', 14),
(15, 'Villahermosa', 15),
(16, 'Ciudad Juárez', 16),
(17, 'Mazatlán', 17),
(18, 'Oaxaca', 18),
(19, 'La Paz', 19),
(20, 'Querétaro', 20),
(21, 'Veracruz', 21),
(22, 'Mexicali', 22),
(23, 'Toluca', 23),
(24, 'Acapulco', 24),
(25, 'Aguascalientes', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_Clase` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `costo_Clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_Clase`, `nombre`, `costo_Clase`) VALUES
(1, 'Preferente', 700),
(2, 'Ejecutiva', 400),
(3, 'Turistica', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `id_Fecha` int(11) NOT NULL,
  `fecha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`id_Fecha`, `fecha`) VALUES
(1, '27 / JULIO / 2018'),
(2, '28 / JULIO / 2018'),
(3, '29 / JULIO / 2018'),
(4, '30 / JULIO / 2018'),
(5, '31 / JULIO / 2018'),
(6, '01 / AGOSTO/ 2018'),
(7, '02 / AGOSTO/ 2018'),
(8, '03 / AGOSTO / 2018'),
(9, '04 / AGOSTO / 2018'),
(10, '05 / AGOSTO / 2018'),
(11, '06 / AGOSTO / 2018'),
(12, '07 / AGOSTO / 2018'),
(13, '08 / AGOSTO / 2018'),
(14, '09 / AGOSTO / 2018'),
(15, '10 / AGOSTO / 2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE `horas` (
  `id_Hora` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id_Hora`, `hora`) VALUES
(1, '8:00 hrs'),
(2, '9:30 hrs'),
(3, '11:00 hrs'),
(4, '13:30 hrs'),
(5, '14:00 hrs'),
(6, '16:30 hrs'),
(7, '17:30 hrs'),
(8, '18:00 hrs'),
(9, '19:30 hrs'),
(10, '20:00 hrs'),
(11, '21:00 hrs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_extras`
--

CREATE TABLE `servicios_extras` (
  `id_Servicio_Extra` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios_extras`
--

INSERT INTO `servicios_extras` (`id_Servicio_Extra`, `nombre`, `costo`) VALUES
(1, 'Alquilar silla de rueda', 0),
(2, 'Elegir asiento', 50),
(3, 'Seguro de avión', 50),
(4, 'Equipaje extra por kilo', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id_Vuelo` int(11) NOT NULL,
  `origen` int(11) NOT NULL,
  `destino` int(11) NOT NULL,
  `id_Fecha` int(11) NOT NULL,
  `id_Hora` int(11) NOT NULL,
  `id_Avion` int(11) NOT NULL,
  `costo_Vuelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id_Vuelo`, `origen`, `destino`, `id_Fecha`, `id_Hora`, `id_Avion`, `costo_Vuelo`) VALUES
(1, 14, 1, 1, 2, 1, 400),
(2, 1, 14, 2, 5, 1, 420),
(3, 13, 20, 1, 4, 1, 360),
(4, 2, 21, 2, 2, 1, 0),
(5, 12, 24, 1, 1, 1, 0),
(6, 2, 4, 1, 2, 2, 0),
(7, 16, 5, 1, 5, 2, 0),
(8, 3, 9, 5, 4, 2, 0),
(9, 3, 2, 5, 11, 2, 0),
(10, 6, 14, 2, 2, 2, 0),
(11, 8, 1, 3, 10, 3, 0),
(12, 6, 4, 3, 10, 3, 0),
(13, 10, 14, 1, 6, 3, 0),
(14, 21, 14, 4, 10, 3, 0),
(15, 25, 4, 5, 10, 3, 0),
(16, 17, 2, 3, 5, 4, 0),
(17, 7, 9, 1, 11, 4, 0),
(18, 10, 14, 3, 1, 4, 0),
(19, 15, 19, 5, 10, 4, 0),
(20, 18, 11, 2, 7, 4, 0),
(21, 20, 13, 1, 2, 1, 0),
(22, 21, 2, 2, 2, 1, 0),
(23, 24, 12, 1, 1, 1, 0),
(24, 4, 2, 1, 2, 2, 0),
(25, 5, 16, 1, 5, 2, 0),
(26, 9, 3, 5, 4, 2, 0),
(27, 2, 3, 5, 11, 2, 0),
(28, 14, 6, 2, 2, 2, 0),
(29, 1, 8, 3, 10, 3, 0),
(30, 4, 6, 3, 10, 3, 0),
(31, 14, 10, 1, 6, 3, 0),
(32, 14, 21, 4, 10, 3, 0),
(33, 4, 25, 5, 10, 3, 0),
(34, 2, 17, 3, 5, 4, 0),
(35, 9, 7, 1, 11, 4, 0),
(36, 14, 10, 3, 1, 4, 0),
(37, 19, 15, 5, 10, 4, 0),
(38, 11, 18, 2, 7, 4, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aeropuertos`
--
ALTER TABLE `aeropuertos`
  ADD PRIMARY KEY (`id_Aeropuerto`);

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id_Asiento`);

--
-- Indices de la tabla `aviones`
--
ALTER TABLE `aviones`
  ADD PRIMARY KEY (`id_Avion`);

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`id_Boleto`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_Ciudad`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_Clase`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id_Fecha`);

--
-- Indices de la tabla `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`id_Hora`);

--
-- Indices de la tabla `servicios_extras`
--
ALTER TABLE `servicios_extras`
  ADD PRIMARY KEY (`id_Servicio_Extra`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id_Vuelo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aeropuertos`
--
ALTER TABLE `aeropuertos`
  MODIFY `id_Aeropuerto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id_Asiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `aviones`
--
ALTER TABLE `aviones`
  MODIFY `id_Avion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `id_Boleto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_Ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_Clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id_Fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `id_Hora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios_extras`
--
ALTER TABLE `servicios_extras`
  MODIFY `id_Servicio_Extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id_Vuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

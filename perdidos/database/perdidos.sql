-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2018 a las 17:19:45
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perdidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `admin` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `PERSONAidPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desaparecidos`
--

CREATE TABLE `desaparecidos` (
  `idDes` int(11) NOT NULL,
  `lugarDes` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaDes` date NOT NULL,
  `edadDes` int(11) NOT NULL,
  `vestimentaDes` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huellas`
--

CREATE TABLE `huellas` (
  `idHuella` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `DESAPARECIDOSidDes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `CI` int(11) NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `sexo` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaNac` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `idPubli` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(10) NOT NULL,
  `DESAPARECIDOSidDes` int(11) NOT NULL,
  `USUARIOidUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimiento`
--

CREATE TABLE `reconocimiento` (
  `idRec` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `patron` text COLLATE utf8_spanish_ci NOT NULL,
  `json` text COLLATE utf8_spanish_ci NOT NULL,
  `DESAPARECIDOSidDes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `idTutoria` int(11) NOT NULL,
  `parentesco` text COLLATE utf8_spanish_ci NOT NULL,
  `PERSONAidPersona` int(11) NOT NULL,
  `DESAPARECIDOSidDes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `user` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `PERSONAidPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `FKADMINISTRA679969` (`PERSONAidPersona`);

--
-- Indices de la tabla `desaparecidos`
--
ALTER TABLE `desaparecidos`
  ADD PRIMARY KEY (`idDes`);

--
-- Indices de la tabla `huellas`
--
ALTER TABLE `huellas`
  ADD PRIMARY KEY (`idHuella`),
  ADD KEY `FKHUELLAS103831` (`DESAPARECIDOSidDes`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`idPubli`),
  ADD KEY `FKPUBLICACIO979820` (`USUARIOidUsuario`),
  ADD KEY `FKPUBLICACIO803485` (`DESAPARECIDOSidDes`);

--
-- Indices de la tabla `reconocimiento`
--
ALTER TABLE `reconocimiento`
  ADD PRIMARY KEY (`idRec`),
  ADD KEY `FKRECONOCIMI836941` (`DESAPARECIDOSidDes`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`idTutoria`),
  ADD KEY `FKTUTORIA956006` (`DESAPARECIDOSidDes`),
  ADD KEY `FKTUTORIA677408` (`PERSONAidPersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `FKUSUARIO541511` (`PERSONAidPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `desaparecidos`
--
ALTER TABLE `desaparecidos`
  MODIFY `idDes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `huellas`
--
ALTER TABLE `huellas`
  MODIFY `idHuella` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `idPubli` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reconocimiento`
--
ALTER TABLE `reconocimiento`
  MODIFY `idRec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `idTutoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `FKADMINISTRA679969` FOREIGN KEY (`PERSONAidPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `huellas`
--
ALTER TABLE `huellas`
  ADD CONSTRAINT `FKHUELLAS103831` FOREIGN KEY (`DESAPARECIDOSidDes`) REFERENCES `desaparecidos` (`idDes`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `FKPUBLICACIO803485` FOREIGN KEY (`DESAPARECIDOSidDes`) REFERENCES `desaparecidos` (`idDes`),
  ADD CONSTRAINT `FKPUBLICACIO979820` FOREIGN KEY (`USUARIOidUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `reconocimiento`
--
ALTER TABLE `reconocimiento`
  ADD CONSTRAINT `FKRECONOCIMI836941` FOREIGN KEY (`DESAPARECIDOSidDes`) REFERENCES `desaparecidos` (`idDes`);

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `FKTUTORIA677408` FOREIGN KEY (`PERSONAidPersona`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `FKTUTORIA956006` FOREIGN KEY (`DESAPARECIDOSidDes`) REFERENCES `desaparecidos` (`idDes`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FKUSUARIO541511` FOREIGN KEY (`PERSONAidPersona`) REFERENCES `persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

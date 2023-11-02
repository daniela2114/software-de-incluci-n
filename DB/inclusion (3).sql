-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 13:20:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inclusion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexo1`
--

CREATE TABLE `anexo1` (
  `fechaDiligenciamiento` date DEFAULT NULL,
  `lugarDiligenciamiento` varchar(255) DEFAULT NULL,
  `nombrePersonaDiligencia` varchar(255) DEFAULT NULL,
  `rolPersonaDiligencia` varchar(255) DEFAULT NULL,
  `institucionEducativa` varchar(255) DEFAULT NULL,
  `nombresEstudiante` varchar(255) DEFAULT NULL,
  `apellidosEstudiante` varchar(255) DEFAULT NULL,
  `tipoIdentificacion` tinyint(4) DEFAULT NULL,
  `idEst` int(11) DEFAULT NULL,
  `lugarNacimiento` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `gradoActual` varchar(255) DEFAULT NULL,
  `estuvoVinculadoEducacionAnterior` enum('Si','No') DEFAULT NULL,
  `departamentoVive` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `barrioVereda` varchar(255) DEFAULT NULL,
  `direccionVivienda` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correoElectronico` varchar(255) DEFAULT NULL,
  `victimaConflictoArmado` enum('Si','No') DEFAULT NULL,
  `registroVictima` varchar(20) DEFAULT NULL,
  `centroProteccion` enum('Si','No') DEFAULT NULL,
  `reconocimientoGrupoEtnico` enum('Si','No') DEFAULT NULL,
  `grupoEtnico` varchar(255) DEFAULT NULL,
  `capacidades` text DEFAULT NULL,
  `gustosIntereses` text DEFAULT NULL,
  `expectativasEstudiante` text DEFAULT NULL,
  `expectativasFamilia` text DEFAULT NULL,
  `redesApoyo` text DEFAULT NULL,
  `otras` text DEFAULT NULL,
  `afiliacionSalud` enum('Si','No') DEFAULT NULL,
  `sistemaSalud` enum('Contributivo','Subsidiado','Otro') DEFAULT NULL,
  `lugarAtencionEmergencia` varchar(255) DEFAULT NULL,
  `diagnosticoMedico` enum('Si','No') DEFAULT NULL,
  `cualDiagnostico` varchar(255) DEFAULT NULL,
  `atencionMedica` enum('Si','No') DEFAULT NULL,
  `cualAtencionMedica` varchar(255) DEFAULT NULL,
  `frecuenciaAtencionMedica` text DEFAULT NULL,
  `intervencionTerapeutica` enum('Si','No') DEFAULT NULL,
  `cualIntervencionTerapeutica` varchar(255) DEFAULT NULL,
  `frecuenciaIntervencionTerapeutica` text DEFAULT NULL,
  `consumeMedicamentos` enum('Si','No') DEFAULT NULL,
  `medicamentosFrecuencia` text DEFAULT NULL,
  `apoyosTecnicos` enum('Si','No') DEFAULT NULL,
  `cualesApoyosTecnicos` text DEFAULT NULL,
  `nombreMadre` varchar(255) DEFAULT NULL,
  `nombrePadre` varchar(255) DEFAULT NULL,
  `ocupacionMadre` varchar(255) DEFAULT NULL,
  `ocupacionPadre` varchar(255) DEFAULT NULL,
  `nivelEducativoMadre` enum('Prim','Bto','Téc','Tecn','univ') DEFAULT NULL,
  `nivelEducativoPadre` enum('Prim','Bto','Téc','Tecn','univ') DEFAULT NULL,
  `nombreCuidador` varchar(255) DEFAULT NULL,
  `nivelEducativoCuidador` enum('Prim','Bto','Téc','Tecn','univ') DEFAULT NULL,
  `telefonoCuidador` varchar(20) DEFAULT NULL,
  `parentescoEstudianteCuidador` varchar(255) DEFAULT NULL,
  `correoElectronicoCuidador` varchar(255) DEFAULT NULL,
  `numHermanos` int(11) DEFAULT NULL,
  `lugarOcupaHermanos` varchar(255) DEFAULT NULL,
  `apoyoCrianzaEstudiante` text DEFAULT NULL,
  `personasViveEstudiante` text DEFAULT NULL,
  `estadoUltimoGrado` enum('Aprobado','Sin terminar') DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `informePedagogico` enum('Si','No') DEFAULT NULL,
  `institucionInforme` varchar(255) DEFAULT NULL,
  `programasComplementarios` text DEFAULT NULL,
  `nombreFirmaDiligencia` varchar(255) DEFAULT NULL,
  `firmaAcudiente` varchar(255) DEFAULT NULL,
  `otro_tipo_identificacion` varchar(60) NOT NULL,
  `cualesMedicamentos` varchar(60) NOT NULL,
  `ultimogradoCursado` varchar(60) NOT NULL,
  `otraInstitucion` enum('Si','No','','') NOT NULL,
  `motivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anexo1`
--

INSERT INTO `anexo1` (`fechaDiligenciamiento`, `lugarDiligenciamiento`, `nombrePersonaDiligencia`, `rolPersonaDiligencia`, `institucionEducativa`, `nombresEstudiante`, `apellidosEstudiante`, `tipoIdentificacion`, `idEst`, `lugarNacimiento`, `edad`, `fechaNacimiento`, `gradoActual`, `estuvoVinculadoEducacionAnterior`, `departamentoVive`, `municipio`, `barrioVereda`, `direccionVivienda`, `telefono`, `correoElectronico`, `victimaConflictoArmado`, `registroVictima`, `centroProteccion`, `reconocimientoGrupoEtnico`, `grupoEtnico`, `capacidades`, `gustosIntereses`, `expectativasEstudiante`, `expectativasFamilia`, `redesApoyo`, `otras`, `afiliacionSalud`, `sistemaSalud`, `lugarAtencionEmergencia`, `diagnosticoMedico`, `cualDiagnostico`, `atencionMedica`, `cualAtencionMedica`, `frecuenciaAtencionMedica`, `intervencionTerapeutica`, `cualIntervencionTerapeutica`, `frecuenciaIntervencionTerapeutica`, `consumeMedicamentos`, `medicamentosFrecuencia`, `apoyosTecnicos`, `cualesApoyosTecnicos`, `nombreMadre`, `nombrePadre`, `ocupacionMadre`, `ocupacionPadre`, `nivelEducativoMadre`, `nivelEducativoPadre`, `nombreCuidador`, `nivelEducativoCuidador`, `telefonoCuidador`, `parentescoEstudianteCuidador`, `correoElectronicoCuidador`, `numHermanos`, `lugarOcupaHermanos`, `apoyoCrianzaEstudiante`, `personasViveEstudiante`, `estadoUltimoGrado`, `observaciones`, `informePedagogico`, `institucionInforme`, `programasComplementarios`, `nombreFirmaDiligencia`, `firmaAcudiente`, `otro_tipo_identificacion`, `cualesMedicamentos`, `ultimogradoCursado`, `otraInstitucion`, `motivo`) VALUES
('2023-10-20', 'neiva', 'javier', 'profe', 'ricardo borrero alvarez', 'dominy', 'cadena', 1, 1126449471, 'putumayo', 13, '2023-10-07', '1101', 'Si', 'huila', 'neiva', 'alamos', '#50num20b20', '321 479 9371', 'sexo@gmail.com', 'Si', 'Si', 'No', 'Si', 'WAKANDA', 'culeo como dios', 'monas y culonas', 'muy inteligente', 'no se sabe', 'mi mama', '', 'Si', '', 'medilaser', 'Si', 'especialmente vergon', 'Si', 'sapo', '3horas diarias', 'No', '', '', 'Si', 'todos los dias despues de culiar', 'No', '', 'mami', 'no hay', 'ama', 'cielo', 'Prim', '', 'hermano', 'univ', '321 479 9371', 'hermano', 'di@gmail.com', 5, 'medio', 'nadie', 'muchas', 'Aprobado', 'holi', 'Si', 'SENA', 'SENA', 'pepe', 'bicho', '', 'acetaminofen', '1101', 'No', ' porque no ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexo2`
--

CREATE TABLE `anexo2` (
  `Area` varchar(300) NOT NULL,
  `Barreras` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL,
  `apoyo` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `seguimiento` varchar(300) NOT NULL,
  `idEst` int(11) NOT NULL,
  `nomDocente` varchar(60) NOT NULL,
  `areaDocente` varchar(60) NOT NULL,
  `firmDocente` varchar(60) NOT NULL,
  `orientador` varchar(60) NOT NULL,
  `areaOrientador` varchar(60) NOT NULL,
  `firmOrientador` varchar(60) NOT NULL,
  `nomapoyoPedadogico` varchar(60) NOT NULL,
  `areapoyoPedadogico` varchar(60) NOT NULL,
  `firmpoyoPedadogico` varchar(60) NOT NULL,
  `nomcordinadorPedadogico` varchar(60) NOT NULL,
  `areacordinadorPedadogico` varchar(60) NOT NULL,
  `firmcordinadorPedadogica` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anexo2`
--

INSERT INTO `anexo2` (`Area`, `Barreras`, `tipo`, `apoyo`, `descripcion`, `seguimiento`, `idEst`, `nomDocente`, `areaDocente`, `firmDocente`, `orientador`, `areaOrientador`, `firmOrientador`, `nomapoyoPedadogico`, `areapoyoPedadogico`, `firmpoyoPedadogico`, `nomcordinadorPedadogico`, `areacordinadorPedadogico`, `firmcordinadorPedadogica`) VALUES
('jhfhhjyjytjtyjt', 'tujtujtj', 'ukuyktu', 'jtjtjtuju', 'u,yu,trm', 'kuym,rykmrjuet', 1126449471, 'jytjtj', ' tjtj', ' tktkt', ' ttjtj', 'tjt', 'tjt', 'kuku', 'tkt', 'tkt', ' tmt', 'tjtj', ' tjt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexo3`
--

CREATE TABLE `anexo3` (
  `idEst` int(11) DEFAULT NULL,
  `fecha_diligenciamiento` date DEFAULT NULL,
  `lugar_diligenciamiento` varchar(255) DEFAULT NULL,
  `nombre_diligencia` varchar(255) DEFAULT NULL,
  `rol_diligencia` varchar(255) DEFAULT NULL,
  `institucion_educativa` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `nombre_estudiante` varchar(255) DEFAULT NULL,
  `edad_estudiante` int(11) DEFAULT NULL,
  `grado_estudiante` varchar(255) DEFAULT NULL,
  `apoyo_requerido` text DEFAULT NULL,
  `nombre_actividad` varchar(255) DEFAULT NULL,
  `descripcion_estrategia` text DEFAULT NULL,
  `frecuencia` varchar(255) DEFAULT NULL,
  `firma_estudiante` varchar(255) DEFAULT NULL,
  `firma_acudiente` varchar(255) DEFAULT NULL,
  `Docente` varchar(60) NOT NULL,
  `directivoDocente` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anexo3`
--

INSERT INTO `anexo3` (`idEst`, `fecha_diligenciamiento`, `lugar_diligenciamiento`, `nombre_diligencia`, `rol_diligencia`, `institucion_educativa`, `sede`, `nombre_estudiante`, `edad_estudiante`, `grado_estudiante`, `apoyo_requerido`, `nombre_actividad`, `descripcion_estrategia`, `frecuencia`, `firma_estudiante`, `firma_acudiente`, `Docente`, `directivoDocente`) VALUES
(1126449471, '2023-09-29', ' neiva', 'pepe', ' profe', 'ricardo borrero alvarez', ' central', 'dominy', 16, ' 1101', 'sexo en exeso', 'actividad fisica', 'se lo meto ', 'Diaria', 'dominy', ' no tengo', '', 'culaquiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantess`
--

CREATE TABLE `estudiantess` (
  `idEst` int(11) NOT NULL,
  `nomEst` varchar(30) NOT NULL,
  `apeEst` varchar(30) NOT NULL,
  `idGrado` tinyint(4) NOT NULL,
  `idTipo` tinyint(4) NOT NULL,
  `idJornada` tinyint(4) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantess`
--

INSERT INTO `estudiantess` (`idEst`, `nomEst`, `apeEst`, `idGrado`, `idTipo`, `idJornada`, `Edad`) VALUES
(2, 'Ibarra', 'andres', 2, 1, 1, 2),
(7809, 't', '`p', 2, 2, 2, 12),
(900909, 'javier', 'clara', 2, 2, 1, 20),
(1126449471, 'Dominy', 'cadena', 2, 1, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `idGrado` tinyint(4) NOT NULL,
  `nomGrado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`idGrado`, `nomGrado`) VALUES
(1, '101'),
(2, '201');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornad`
--

CREATE TABLE `jornad` (
  `idJornada` tinyint(4) NOT NULL,
  `nomJornada` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jornad`
--

INSERT INTO `jornad` (`idJornada`, `nomJornada`) VALUES
(1, 'tarde'),
(2, 'mañana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` tinyint(4) NOT NULL,
  `nomRol` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`) VALUES
(1, 'Administrador'),
(2, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_id`
--

CREATE TABLE `tipos_id` (
  `idTipo` tinyint(4) NOT NULL,
  `descTipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_id`
--

INSERT INTO `tipos_id` (`idTipo`, `descTipo`) VALUES
(1, 'tarjeta de identidad'),
(2, 'cedula'),
(3, 'cedula extranjera'),
(4, 'registro civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nomUsuario` varchar(60) NOT NULL,
  `passUsuario` varchar(100) NOT NULL,
  `idRol` tinyint(4) NOT NULL,
  `idJornada` tinyint(4) NOT NULL,
  `fechaCedula` date NOT NULL,
  `apellidoUsuario` varchar(60) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nomUsuario`, `passUsuario`, `idRol`, `idJornada`, `fechaCedula`, `apellidoUsuario`, `idUsuario`) VALUES
('', '1234', 1, 1, '2023-10-04', 'cadena', 1),
('seso', '12345', 2, 1, '2023-08-11', 'pepe', 202),
('guerrero', '12345', 2, 1, '2023-09-13', 'santiago', 43433),
('Danie', '12345678', 2, 1, '2007-07-09', 'G', 1077228294),
('oscar', '4497687', 1, 1, '2005-09-23', 'puma', 1111123800),
('Dominy', '123', 1, 2, '2023-08-20', 'cadena', 1126449471);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anexo1`
--
ALTER TABLE `anexo1`
  ADD KEY `idEst` (`idEst`),
  ADD KEY `tipoIdentificacion` (`tipoIdentificacion`);

--
-- Indices de la tabla `anexo2`
--
ALTER TABLE `anexo2`
  ADD KEY `idEst` (`idEst`);

--
-- Indices de la tabla `anexo3`
--
ALTER TABLE `anexo3`
  ADD KEY `idEst` (`idEst`);

--
-- Indices de la tabla `estudiantess`
--
ALTER TABLE `estudiantess`
  ADD PRIMARY KEY (`idEst`),
  ADD KEY `idGrado` (`idGrado`),
  ADD KEY `idTipo` (`idTipo`),
  ADD KEY `idJornada` (`idJornada`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`idGrado`);

--
-- Indices de la tabla `jornad`
--
ALTER TABLE `jornad`
  ADD PRIMARY KEY (`idJornada`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tipos_id`
--
ALTER TABLE `tipos_id`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Rol` (`idRol`),
  ADD KEY `jornada` (`idJornada`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jornad`
--
ALTER TABLE `jornad`
  MODIFY `idJornada` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos_id`
--
ALTER TABLE `tipos_id`
  MODIFY `idTipo` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anexo1`
--
ALTER TABLE `anexo1`
  ADD CONSTRAINT `anexo1_ibfk_1` FOREIGN KEY (`idEst`) REFERENCES `estudiantess` (`idEst`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anexo1_ibfk_2` FOREIGN KEY (`tipoIdentificacion`) REFERENCES `tipos_id` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `anexo2`
--
ALTER TABLE `anexo2`
  ADD CONSTRAINT `anexo2_ibfk_1` FOREIGN KEY (`idEst`) REFERENCES `estudiantess` (`idEst`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `anexo3`
--
ALTER TABLE `anexo3`
  ADD CONSTRAINT `anexo3_ibfk_1` FOREIGN KEY (`idEst`) REFERENCES `estudiantess` (`idEst`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantess`
--
ALTER TABLE `estudiantess`
  ADD CONSTRAINT `estudiantess_ibfk_1` FOREIGN KEY (`idGrado`) REFERENCES `grados` (`idGrado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantess_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipos_id` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantess_ibfk_3` FOREIGN KEY (`idJornada`) REFERENCES `jornad` (`idJornada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idJornada`) REFERENCES `jornad` (`idJornada`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

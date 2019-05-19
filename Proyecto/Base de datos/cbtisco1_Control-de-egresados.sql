-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-05-2019 a las 09:31:25
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbtisco1_Control-de-egresados`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`cbtisco1`@`localhost` PROCEDURE `egresarGrupo` (IN `_id` INT(11))  NO SQL
BEGIN
START TRANSACTION;
CREATE TEMPORARY TABLE Alumnos
SELECT idusuario
FROM Alumno
WHERE idgrupo = _id;

UPDATE Grupo SET semestre = NULL WHERE idgrupo = _id;
UPDATE AlumnoEstatusOcupacion SET idestatus = 'EGRESADO' WHERE idestatus = 'ALUMNO' AND idusuario IN (SELECT idusuario FROM Alumnos);

COMMIT;
END$$

CREATE DEFINER=`cbtisco1`@`localhost` PROCEDURE `eliminarAlumno` (IN `_id` VARCHAR(14))  NO SQL
BEGIN
	START TRANSACTION;
	DELETE FROM Alumno WHERE idusuario = _id;
	DELETE FROM AlumnoEncuesta WHERE idusuario = _id;
	DELETE FROM AlumnoEstatusOcupacion WHERE idusuario = _id;
	DELETE FROM UsuarioRol WHERE idusuario = _id;
	DELETE FROM Usuario WHERE idusuario = _id;
	COMMIT;
END$$

CREATE DEFINER=`cbtisco1`@`localhost` PROCEDURE `eliminarGrupo` (IN `_id` INT(11))  NO SQL
BEGIN
START TRANSACTION;
CREATE TEMPORARY TABLE Alumnos
SELECT idusuario
FROM Alumno
WHERE idgrupo = _id;

CREATE TEMPORARY TABLE Ocupaciones
SELECT idocupacion
FROM AlumnoEstatusOcupacion
WHERE idusuario IN
(SELECT idusuario
 FROM
 Alumnos);


DELETE FROM AlumnoEstatusOcupacion WHERE idusuario IN (SELECT idusuario FROM Alumnos);
DELETE FROM Ocupacion WHERE idocupacion != 'DEFAULT' AND idocupacion IN(SELECT idocupacion FROM Ocupaciones);
DELETE FROM AlumnoEncuesta WHERE idusuario IN(SELECT idusuario FROM Alumnos);
DELETE FROM Alumno WHERE idusuario IN (SELECT idusuario FROM Alumnos);
DELETE FROM AlumnoEncuesta WHERE idusuario IN (SELECT idusuario FROM Alumnos);
DELETE FROM UsuarioRol WHERE idusuario IN (SELECT idusuario FROM Alumnos);
DELETE FROM Usuario WHERE idusuario IN (SELECT idusuario FROM Alumnos);
DELETE FROM Grupo WHERE idgrupo = _id;
COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `idusuario` varchar(14) NOT NULL,
  `fechanacimiento` datetime DEFAULT NULL,
  `telefonocasa` varchar(13) DEFAULT NULL,
  `areainteres` varchar(100) DEFAULT NULL,
  `gradoacademicoobtenido` varchar(50) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `idgrupo` int(11) DEFAULT NULL,
  `respuesta` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`idusuario`, `fechanacimiento`, `telefonocasa`, `areainteres`, `gradoacademicoobtenido`, `domicilio`, `idgrupo`, `respuesta`) VALUES
('00909823094809', '2019-05-05 00:00:00', '524564555555', 'DERECHO Y LEYES', 'PREPARATORIA', 'GUERRILLA 344', 2, 1),
('01234567893432', '1999-06-26 00:00:00', '524422132132', 'INGENIERIA', 'PREPARATORIA', 'CARRETAS', 1, 1),
('12345678900000', '1999-11-02 00:00:00', '524272748200', 'TECNOLOGIAS DE LA INFORMACION O SISTEMAS', 'PREPARATORIA', 'PARQUE PRIVADO NO 92 COLONIA CENTRO SAN JUAN DEL RIO QUERETARO', 5, 1),
('77823686237862', NULL, NULL, NULL, NULL, NULL, 3, 0),
('83894732987498', NULL, NULL, NULL, NULL, NULL, 1, 0),
('87678645534534', '1998-06-18 00:00:00', '524423243243', 'DERECHO Y LEYES', 'SECUNDARIA', 'SENDERO DEL VIENTO 18', 3, 1),
('87932698362498', '2000-05-09 00:00:00', '524422353253', 'EDUCACION', 'SECUNDARIA', 'EPIGMENIO GONZALEZ 13', 3, 1),
('88893423987239', '2002-10-04 00:00:00', '524422231936', 'CONTABILIDAD', 'SECUNDARIA', 'BAMBU 35 PASEOS DEL BOSQUE', 2, 1),
('98234897238972', '1999-12-07 00:00:00', '524272221321', 'LOGISTICA, TRANSPORTE Y DISTRIBUCION', 'PREPARATORIA', 'SAN JUAN', 2, 1),
('98732487239847', '2000-07-20 00:00:00', '527722328283', '', 'SECUNDARIA', 'SENDERO DEL HALAGO 21 MILENIO III', 3, 1),
('98748973894758', '2019-05-06 00:00:00', '524424324324', 'LOGISTICA, TRANSPORTE Y DISTRIBUCION', 'PREPARATORIA', 'CASCA', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AlumnoEstatusOcupacion`
--

CREATE TABLE `AlumnoEstatusOcupacion` (
  `idusuario` varchar(14) NOT NULL,
  `idestatus` varchar(25) NOT NULL,
  `idocupacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AlumnoEstatusOcupacion`
--

INSERT INTO `AlumnoEstatusOcupacion` (`idusuario`, `idestatus`, `idocupacion`) VALUES
('12345678900000', 'ALUMNO', 'DEFAULT'),
('77823686237862', 'ALUMNO', 'DEFAULT'),
('87678645534534', 'ALUMNO', 'DEFAULT'),
('87932698362498', 'ALUMNO', 'DEFAULT'),
('98732487239847', 'ALUMNO', 'DEFAULT'),
('00909823094809', 'EGRESADO', 'DEFAULT'),
('01234567893432', 'EGRESADO', 'DEFAULT'),
('83894732987498', 'EGRESADO', 'DEFAULT'),
('88893423987239', 'EGRESADO', 'DEFAULT'),
('98234897238972', 'EGRESADO', 'DEFAULT'),
('98748973894758', 'EGRESADO', 'DEFAULT'),
('12345678900000', 'PRACTICAS', '123456789000001558069287144'),
('87932698362498', 'PRACTICAS', '879326983624981558107879048'),
('98732487239847', 'PRACTICAS', '987324872398471558107522152'),
('00909823094809', 'TRABAJANDO', '009098230948091558066098582'),
('87678645534534', 'TRABAJANDO', '876786455345341558108596941'),
('88893423987239', 'TRABAJANDO', '888934239872391558107757936'),
('98748973894758', 'TRABAJANDO', '987489738947581558063620038'),
('00909823094809', 'UNIVERSIDAD', '009098230948091558066098575'),
('98748973894758', 'UNIVERSIDAD', '987489738947581558063620032');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta`
--

CREATE TABLE `Encuesta` (
  `idencuesta` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `activa` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Encuesta`
--

INSERT INTO `Encuesta` (`idencuesta`, `descripcion`, `activa`) VALUES
('Encuesta4oSemestre', 'ENCUESTA PARA ALUMNOS DE 4TO SEMESTRE', 1),
('Encuesta6oSemestre', 'ENCUESTA PARA ALUMNOS DE 6TO SEMESTRE', 1),
('EncuestaEgresados', 'ENCUESTA PARA EGRESADOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estatus`
--

CREATE TABLE `Estatus` (
  `idestatus` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Estatus`
--

INSERT INTO `Estatus` (`idestatus`, `descripcion`) VALUES
('ALUMNO', 'EL ALUMNO ESTUDIA EN LA INSTITUCION'),
('EGRESADO', 'EL ALUMNO EGRESO DE LA INSTITUCION'),
('PRACTICAS', 'EL ALUMNO SE ENCUENTRA REALIZANDO SUS PRACTICAS PROFESIONALES'),
('TRABAJANDO', 'EL ALUMNO SE ENCUENTRA TRABAJANDO'),
('UNIVERSIDAD', 'EL ALUMNO SE ENCUENTRA ESTUDIANDO EN LA UNIVERSIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Generacion`
--

CREATE TABLE `Generacion` (
  `idgeneracion` int(11) NOT NULL,
  `fechainicio` year(4) DEFAULT NULL,
  `fechafin` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Generacion`
--

INSERT INTO `Generacion` (`idgeneracion`, `fechainicio`, `fechafin`) VALUES
(1, 2016, 2019),
(2, 2017, 2020),
(3, 2018, 2021),
(4, 2019, 2022);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grupo`
--

CREATE TABLE `Grupo` (
  `idgrupo` int(11) NOT NULL,
  `nombre` char(1) DEFAULT NULL,
  `especialidad` varchar(30) DEFAULT NULL,
  `turno` char(1) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `idgeneracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Grupo`
--

INSERT INTO `Grupo` (`idgrupo`, `nombre`, `especialidad`, `turno`, `semestre`, `idgeneracion`) VALUES
(1, 'A', 'PROGRAMACION', 'M', NULL, 1),
(2, 'B', 'CONTABILIDAD', 'M', NULL, 2),
(3, 'C', 'ARQUITECTURA', 'M', 4, 4),
(4, 'A', 'ELECTROMECANICA', 'V', 4, 4),
(5, 'C', 'PROGRAMACION', 'V', 6, 1),
(6, 'A', 'PROGRAMACION', 'M', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ocupacion`
--

CREATE TABLE `Ocupacion` (
  `idocupacion` varchar(100) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `areaocupacion` varchar(100) DEFAULT NULL,
  `lugarocupacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ocupacion`
--

INSERT INTO `Ocupacion` (`idocupacion`, `nombre`, `descripcion`, `areaocupacion`, `lugarocupacion`) VALUES
('009098230948091558066098575', 'MAESTRIA', 'PRIMERO', 'DERECHO Y LEYES', 'YALE'),
('009098230948091558066098582', 'ABOGADO', 'MEDIO', 'DERECHO Y LEYES', 'LAWANDORDER'),
('123456789000001558069287144', 'ABOGADO', 'HONORARIOS', 'DERECHO Y LEYES', 'AUM'),
('1558063486566', 'PROFESIONAL', 'CUARTO', 'TECNOLOGIAS DE LA INFORMACION O SISTEMAS', 'TEC'),
('876786455345341558108596941', 'OTRO', 'MEDIO', 'DERECHO Y LEYES', 'NOTARIA 13'),
('879326983624981558107879048', 'PROFESOR', 'MEDIO', 'EDUCACION', 'COLEGIO REINA ELIZABETH'),
('888934239872391558107757936', 'ASESOR', 'HONORARIOS', 'CONTABILIDAD', 'FEMSA'),
('987324872398471558107522152', 'ENCARGADO', 'HONORARIOS', 'CREATIVIDAD, PRODUCCION Y DISENO COMERCIAL', 'ABAK'),
('987489738947581558063620032', 'PROFESIONAL', 'CUARTO', 'TECNOLOGIAS DE LA INFORMACION O SISTEMAS', 'TEC'),
('987489738947581558063620038', 'ASESOR', 'MEDIO', 'COMUNICACION', 'CABINA 11'),
('DEFAULT', NULL, NULL, NULL, 'CBTIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permiso`
--

CREATE TABLE `Permiso` (
  `idpermiso` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Permiso`
--

INSERT INTO `Permiso` (`idpermiso`, `descripcion`) VALUES
('CAMBIAR PRIVILEGIOS', 'EL USUARIO PUEDE MODIFICAR LOS PERMISOS DE LOS ADMINISTRADORES DE LA ORGANIZACIÓN.'),
('CONSULTAR ALUMNO', 'EL USUARIO PUEDE CONSULTAR, MODIFICAR Y ELIMINAR LA INFORMACIÓN DE LOS ALUMNOS'),
('CONSULTAR CUENTA', 'EL USUARIO PUEDE CONSULTAR Y MODIFICAR LA INFORMACIÓN DE SU CUENTA.'),
('CONSULTAR ENCUESTA', 'EL USUARIO PUEDE CONSULTAR, ACTIVAR Y DESACTIVAR LAS ENCUESTAS QUE SE ENCUENTRAN DENTRO DEL SISTEMA'),
('CONSULTAR GRUPO', 'EL USUARIO PUEDE CONSULTAR, MODIFICAR Y ELIMINAR LA INFORMACIÓN DE LOS GRUPOS'),
('CONSULTAR ORGANIZACION', 'EL USUARIO PUEDE CONSULTAR LOS USUARIOS QUE CONFORMAN A LA ORGANIZACIÓN.'),
('CONTESTAR ENCUESTA', 'EL USUARIO PUEDE CONTESTAR ENCUESTAS'),
('REGISTRAR ADMINISTRADOR', 'EL USUARIO PUEDE REGISTRAR ADMINISTRADORES AL SISTEMA'),
('REGISTRAR ALUMNO', 'EL USUARIO PUEDE REGISTRAR ALUMNOS AL SISTEMA'),
('REGISTRAR GRUPO', 'EL USUARIO PUEDE REGISTRAR GRUPOS AL SISTEMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `idrol` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Rol`
--

INSERT INTO `Rol` (`idrol`, `descripcion`) VALUES
('ADMINISTRADOR', 'DA ALTA/BAJA ENCUESTAS - REGISTRA ALUMNOS - REALIZA CONSULTAS/REPORTES'),
('ALUMNO', 'CONTESTA ENCUESTAS PARA OBTENER INFORMACIÓN'),
('DIRECTOR', 'REALIZA CONSULTAS/REPORTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RolPermiso`
--

CREATE TABLE `RolPermiso` (
  `idrol` varchar(25) NOT NULL,
  `idpermiso` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `RolPermiso`
--

INSERT INTO `RolPermiso` (`idrol`, `idpermiso`) VALUES
('DIRECTOR', 'CAMBIAR PRIVILEGIOS'),
('ADMINISTRADOR', 'CONSULTAR ALUMNO'),
('DIRECTOR', 'CONSULTAR ALUMNO'),
('ADMINISTRADOR', 'CONSULTAR CUENTA'),
('DIRECTOR', 'CONSULTAR CUENTA'),
('ADMINISTRADOR', 'CONSULTAR ENCUESTA'),
('DIRECTOR', 'CONSULTAR ENCUESTA'),
('ADMINISTRADOR', 'CONSULTAR GRUPO'),
('DIRECTOR', 'CONSULTAR GRUPO'),
('ADMINISTRADOR', 'CONSULTAR ORGANIZACION'),
('DIRECTOR', 'CONSULTAR ORGANIZACION'),
('ALUMNO', 'CONTESTAR ENCUESTA'),
('DIRECTOR', 'REGISTRAR ADMINISTRADOR'),
('ADMINISTRADOR', 'REGISTRAR ALUMNO'),
('DIRECTOR', 'REGISTRAR ALUMNO'),
('ADMINISTRADOR', 'REGISTRAR GRUPO'),
('DIRECTOR', 'REGISTRAR GRUPO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `idusuario` varchar(14) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apaterno` varchar(50) DEFAULT NULL,
  `amaterno` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idusuario`, `nombre`, `apaterno`, `amaterno`, `sexo`, `email`, `telefono`, `contrasena`) VALUES
('00909823094809', 'REBECA', 'ARANDA', 'CUELLAR', 'FEMENINO', 'micorreo@mail.com', '524644534543', '00909823094809'),
('01234567893432', 'ALONSO', 'OROPEZA', 'AREVALO', 'MASCULINO', 'alonso.oropeza@live.com.mx', '524424511689', '01234567893432'),
('12345678900000', 'ARIADNE', 'CHAVEZ', 'RAMIREZ', 'FEMENINO', 'maneroto58@gmail.com', '524271327515', '12345678900000'),
('77823686237862', 'EDUARDO', 'GARCIA', 'CABALLERO', 'MASCULINO', NULL, NULL, '77823686237862'),
('83894732987498', 'JAVIER', 'MENDEZ', 'MARTINEZ', 'MASCULINO', NULL, NULL, '83894732987498'),
('87678645534534', 'RICARDO', 'ALEJO', 'LOERA', 'MASCULINO', 'ricardo.alejo@gmail.com', '524422342352', '87678645534534'),
('87932698362498', 'ADRIAN', 'ARREOLA', 'PEREZ', 'MASCULINO', 'adrian.arreola@gmail.com', '524423435352', '87932698362498'),
('88893423987239', 'DARA FERNANDA', 'ESCOBAR', 'PEREZ', 'FEMENINO', 'darafernanda@gmail.com', '524425760524', '88893423987239'),
('98234897238972', 'EMMANUEL ANTONIO', 'HERRERA', 'RAMIREZ', 'MASCULINO', 'maeroto@hotmail.com', '524424511612', '98234897238972'),
('98732487239847', 'JOSE ALEJANDRO', 'FIGUEROA', 'NAJERA', 'MASCULINO', 'josealejandro06@htmail.com', '527726787363', '98732487239847'),
('98748973894758', 'IRVING ALAIN', 'AGUILAR', 'PEREZ', 'MASCULINO', 'irvingpercam@hotmail.com', '524422323432', '98748973894758'),
('HRRE7387Y8738', 'EMMANUEL ANTONIO', 'HERRERA', 'RAMIREZ', 'MASCULINO', 'mane@live.com', '524426367237', '$2y$10$xf3KftdAn1QRWqigwQhEPenz8rnQxUnTXSFUGiDjV4i3upNNLgL7W'),
('MDMR723876328', 'JAVIER', 'MENDEZ', 'MARTINEZ', 'MASCULINO', 'javi@live.com', '524428764873', '$2y$10$bg4cjx4SMakqE4f5ThXrNu57aD2UfpxLSkBBd3hjKJgW8OH8O7i7q'),
('PECCG38348348', 'ALAIN', 'AGUILAR', 'PEREZ', 'MASCULINO', 'irving6258@gmail.com', '524422660863', '$2y$10$a6QQHciygZhg82LCp19HgOy4HUtirn9egpQeODWC.ops9qt1Gk/NC'),
('REZC800329P45', 'CLAUDIA', 'REVUELTA', 'ZUNIGA', 'FEMENINO', 'maneroto@hotmail.com', '524426434222', '$2y$10$DFKAFSMs5p7Z2LLlJ69ydOqdegDelx3Ido2FjJ3aYJD685N55Ppya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuarioRol`
--

CREATE TABLE `UsuarioRol` (
  `idusuario` varchar(14) NOT NULL,
  `idrol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `UsuarioRol`
--

INSERT INTO `UsuarioRol` (`idusuario`, `idrol`) VALUES
('HRRE7387Y8738', 'ADMINISTRADOR'),
('MDMR723876328', 'ADMINISTRADOR'),
('PECCG38348348', 'ADMINISTRADOR'),
('00909823094809', 'ALUMNO'),
('01234567893432', 'ALUMNO'),
('12345678900000', 'ALUMNO'),
('77823686237862', 'ALUMNO'),
('83894732987498', 'ALUMNO'),
('87678645534534', 'ALUMNO'),
('87932698362498', 'ALUMNO'),
('88893423987239', 'ALUMNO'),
('98234897238972', 'ALUMNO'),
('98732487239847', 'ALUMNO'),
('98748973894758', 'ALUMNO'),
('REZC800329P45', 'DIRECTOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `AlumnoEstatusOcupacion`
--
ALTER TABLE `AlumnoEstatusOcupacion`
  ADD PRIMARY KEY (`idusuario`,`idestatus`,`idocupacion`),
  ADD KEY `idestatus` (`idestatus`),
  ADD KEY `idocupacion` (`idocupacion`);

--
-- Indices de la tabla `Encuesta`
--
ALTER TABLE `Encuesta`
  ADD PRIMARY KEY (`idencuesta`);

--
-- Indices de la tabla `Estatus`
--
ALTER TABLE `Estatus`
  ADD PRIMARY KEY (`idestatus`);

--
-- Indices de la tabla `Generacion`
--
ALTER TABLE `Generacion`
  ADD PRIMARY KEY (`idgeneracion`);

--
-- Indices de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  ADD PRIMARY KEY (`idgrupo`),
  ADD KEY `idgeneracion` (`idgeneracion`);

--
-- Indices de la tabla `Ocupacion`
--
ALTER TABLE `Ocupacion`
  ADD PRIMARY KEY (`idocupacion`);

--
-- Indices de la tabla `Permiso`
--
ALTER TABLE `Permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `RolPermiso`
--
ALTER TABLE `RolPermiso`
  ADD PRIMARY KEY (`idrol`,`idpermiso`),
  ADD KEY `idpermiso` (`idpermiso`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `UsuarioRol`
--
ALTER TABLE `UsuarioRol`
  ADD PRIMARY KEY (`idusuario`,`idrol`),
  ADD KEY `idrol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Generacion`
--
ALTER TABLE `Generacion`
  MODIFY `idgeneracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `Alumno_ibfk_2` FOREIGN KEY (`idgrupo`) REFERENCES `Grupo` (`idgrupo`);

--
-- Filtros para la tabla `AlumnoEstatusOcupacion`
--
ALTER TABLE `AlumnoEstatusOcupacion`
  ADD CONSTRAINT `AlumnoEstatusOcupacion_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `AlumnoEstatusOcupacion_ibfk_2` FOREIGN KEY (`idestatus`) REFERENCES `Estatus` (`idestatus`),
  ADD CONSTRAINT `AlumnoEstatusOcupacion_ibfk_3` FOREIGN KEY (`idocupacion`) REFERENCES `Ocupacion` (`idocupacion`);

--
-- Filtros para la tabla `Grupo`
--
ALTER TABLE `Grupo`
  ADD CONSTRAINT `Grupo_ibfk_1` FOREIGN KEY (`idgeneracion`) REFERENCES `Generacion` (`idgeneracion`);

--
-- Filtros para la tabla `RolPermiso`
--
ALTER TABLE `RolPermiso`
  ADD CONSTRAINT `RolPermiso_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `Rol` (`idrol`),
  ADD CONSTRAINT `RolPermiso_ibfk_2` FOREIGN KEY (`idpermiso`) REFERENCES `Permiso` (`idpermiso`);

--
-- Filtros para la tabla `UsuarioRol`
--
ALTER TABLE `UsuarioRol`
  ADD CONSTRAINT `UsuarioRol_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `UsuarioRol_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `Rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

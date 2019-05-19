-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 22:38:05
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `controlegresados`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`a01703171`@`%` PROCEDURE `eliminarAlumno`(IN `_id` VARCHAR(14))
BEGIN
	START TRANSACTION;
	DELETE FROM Alumno WHERE idusuario = _id;
	DELETE FROM AlumnoEncuesta WHERE idusuario = _id;
	DELETE FROM AlumnoEstatusOcupacion WHERE idusuario = _id;
	DELETE FROM UsuarioRol WHERE idusuario = _id;
	DELETE FROM Usuario WHERE idusuario = _id;
	COMMIT;
END$$

CREATE DEFINER=`a01703171`@`%` PROCEDURE `eliminarGrupo`(IN `_id` INT(11))
    NO SQL
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
-- Estructura de tabla para la tabla `AdministradorEncuesta`
--

CREATE TABLE IF NOT EXISTS `AdministradorEncuesta` (
  `idusuario` varchar(14) NOT NULL,
  `idencuesta` varchar(20) NOT NULL,
  `fechapublicacion` datetime DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuario`,`idencuesta`),
  KEY `idencuesta` (`idencuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `idusuario` varchar(14) NOT NULL,
  `fechanacimiento` datetime DEFAULT NULL,
  `telefonocasa` varchar(13) DEFAULT NULL,
  `areainteres` varchar(100) DEFAULT NULL,
  `gradoacademicoobtenido` varchar(50) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `idgrupo` int(11) DEFAULT NULL,
  `respuesta` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idusuario`),
  KEY `idgrupo` (`idgrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`idusuario`, `fechanacimiento`, `telefonocasa`, `areainteres`, `gradoacademicoobtenido`, `domicilio`, `idgrupo`, `respuesta`) VALUES
('00909823094809', NULL, NULL, NULL, NULL, NULL, 2, 0),
('01234567893432', NULL, NULL, NULL, NULL, NULL, 1, 0),
('77823686237862', NULL, NULL, NULL, NULL, NULL, 3, 0),
('83894732987498', NULL, NULL, NULL, NULL, NULL, 1, 0),
('87678645534534', NULL, NULL, NULL, NULL, NULL, 3, 0),
('87932698362498', NULL, NULL, NULL, NULL, NULL, 3, 0),
('88893423987239', NULL, NULL, NULL, NULL, NULL, 2, 0),
('98234897238972', NULL, NULL, NULL, NULL, NULL, 2, 0),
('98732487239847', NULL, NULL, NULL, NULL, NULL, 3, 0),
('98748973894758', NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AlumnoEncuesta`
--

CREATE TABLE IF NOT EXISTS `AlumnoEncuesta` (
  `idusuario` varchar(14) NOT NULL,
  `idencuesta` varchar(20) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idusuario`,`idencuesta`),
  KEY `idencuesta` (`idencuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AlumnoEncuesta`
--

INSERT INTO `AlumnoEncuesta` (`idusuario`, `idencuesta`, `estatus`) VALUES
('12345678902222', 'EncuestaEgresados', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AlumnoEstatusOcupacion`
--

CREATE TABLE IF NOT EXISTS `AlumnoEstatusOcupacion` (
  `idusuario` varchar(14) NOT NULL,
  `idestatus` varchar(25) NOT NULL,
  `idocupacion` varchar(100) NOT NULL,
  PRIMARY KEY (`idusuario`,`idestatus`,`idocupacion`),
  KEY `idestatus` (`idestatus`),
  KEY `idocupacion` (`idocupacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AlumnoEstatusOcupacion`
--

INSERT INTO `AlumnoEstatusOcupacion` (`idusuario`, `idestatus`, `idocupacion`) VALUES
('00909823094809', 'ALUMNO', 'DEFAULT'),
('01234567893432', 'ALUMNO', 'DEFAULT'),
('77823686237862', 'ALUMNO', 'DEFAULT'),
('83894732987498', 'ALUMNO', 'DEFAULT'),
('87678645534534', 'ALUMNO', 'DEFAULT'),
('87932698362498', 'ALUMNO', 'DEFAULT'),
('88893423987239', 'ALUMNO', 'DEFAULT'),
('98234897238972', 'ALUMNO', 'DEFAULT'),
('98732487239847', 'ALUMNO', 'DEFAULT'),
('98748973894758', 'ALUMNO', 'DEFAULT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elprueba`
--

CREATE TABLE IF NOT EXISTS `elprueba` (
  `idusuario` varchar(14) NOT NULL,
  `fechanacimiento` datetime DEFAULT NULL,
  `telefonocasa` varchar(13) DEFAULT NULL,
  `areainteres` varchar(100) DEFAULT NULL,
  `gradoacademicoobtenido` varchar(50) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `idgrupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `elprueba`
--

INSERT INTO `elprueba` (`idusuario`, `fechanacimiento`, `telefonocasa`, `areainteres`, `gradoacademicoobtenido`, `domicilio`, `idgrupo`) VALUES
('09876543217777', '1998-03-03 00:00:00', '4681123217', 'Tecnologías de la información o sistemas', 'Preparatoria', 'Tecnológico de Monterrey', 2),
('12323678654515', NULL, NULL, NULL, NULL, NULL, 2),
('13123231231231', NULL, NULL, NULL, NULL, NULL, 2),
('98986564649494', NULL, NULL, NULL, NULL, NULL, 2),
('99999999999999', NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta`
--

CREATE TABLE IF NOT EXISTS `Encuesta` (
  `idencuesta` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `activa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idencuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Encuesta`
--

INSERT INTO `Encuesta` (`idencuesta`, `descripcion`, `activa`) VALUES
('Encuesta4oSemestre', 'ENCUESTA PARA ALUMNOS DE 4TO SEMESTRE', 1),
('Encuesta6oSemestre', 'ENCUESTA PARA ALUMNOS DE 6TO SEMESTRE', 0),
('EncuestaEgresados', 'ENCUESTA PARA EGRESADOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estatus`
--

CREATE TABLE IF NOT EXISTS `Estatus` (
  `idestatus` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idestatus`)
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

CREATE TABLE IF NOT EXISTS `Generacion` (
  `idgeneracion` int(11) NOT NULL AUTO_INCREMENT,
  `fechainicio` year(4) DEFAULT NULL,
  `fechafin` year(4) DEFAULT NULL,
  PRIMARY KEY (`idgeneracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `Grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(1) DEFAULT NULL,
  `especialidad` varchar(30) DEFAULT NULL,
  `turno` char(1) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `idgeneracion` int(11) NOT NULL,
  PRIMARY KEY (`idgrupo`),
  KEY `idgeneracion` (`idgeneracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Grupo`
--

INSERT INTO `Grupo` (`idgrupo`, `nombre`, `especialidad`, `turno`, `semestre`, `idgeneracion`) VALUES
(1, 'A', 'PROGRAMACION', 'M', 6, 1),
(2, 'B', 'CONTABILIDAD', 'M', 4, 2),
(3, 'C', 'ARQUITECTURA', 'M', 2, 3),
(4, 'D', 'ELECTROMECANICA', 'V', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ocupacion`
--

CREATE TABLE IF NOT EXISTS `Ocupacion` (
  `idocupacion` varchar(100) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `areaocupacion` varchar(100) DEFAULT NULL,
  `lugarocupacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idocupacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ocupacion`
--

INSERT INTO `Ocupacion` (`idocupacion`, `nombre`, `descripcion`, `areaocupacion`, `lugarocupacion`) VALUES
('DEFAULT', NULL, NULL, NULL, 'CBTIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permiso`
--

CREATE TABLE IF NOT EXISTS `Permiso` (
  `idpermiso` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpermiso`)
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

CREATE TABLE IF NOT EXISTS `Rol` (
  `idrol` varchar(25) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
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

CREATE TABLE IF NOT EXISTS `RolPermiso` (
  `idrol` varchar(25) NOT NULL,
  `idpermiso` varchar(25) NOT NULL,
  PRIMARY KEY (`idrol`,`idpermiso`),
  KEY `idpermiso` (`idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `RolPermiso`
--

INSERT INTO `RolPermiso` (`idrol`, `idpermiso`) VALUES
('DIRECTOR', 'CAMBIAR PRIVILEGIOS'),
('ADMINISTRADOR', 'CONSULTAR ALUMNO'),
('DIRECTOR', 'CONSULTAR ALUMNO'),
('DIRECTOR', 'CONSULTAR CUENTA'),
('DIRECTOR', 'CONSULTAR ENCUESTA'),
('DIRECTOR', 'CONSULTAR GRUPO'),
('DIRECTOR', 'CONSULTAR ORGANIZACION'),
('ALUMNO', 'CONTESTAR ENCUESTA'),
('ADMINISTRADOR', 'REGISTRAR ADMINISTRADOR'),
('DIRECTOR', 'REGISTRAR ADMINISTRADOR'),
('ADMINISTRADOR', 'REGISTRAR ALUMNO'),
('DIRECTOR', 'REGISTRAR ALUMNO'),
('ADMINISTRADOR', 'REGISTRAR GRUPO'),
('DIRECTOR', 'REGISTRAR GRUPO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Temp`
--

CREATE TABLE IF NOT EXISTS `Temp` (
  `idusuario` varchar(14) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idusuario` varchar(14) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apaterno` varchar(50) DEFAULT NULL,
  `amaterno` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idusuario`, `nombre`, `apaterno`, `amaterno`, `sexo`, `email`, `telefono`, `contrasena`) VALUES
('00909823094809', 'REBECA', 'ARANDA', 'CUELLAR', 'FEMENINO', NULL, NULL, '00909823094809'),
('01234567893432', 'ALONSO', 'OROPEZA', 'AREVALO', 'MASCULINO', NULL, NULL, '01234567893432'),
('0987654321000', 'IRVING', 'AGUILAR', 'PEREZ', 'Masculino', 'a01703171@itesm.mx', '+524422660863', 'irving'),
('0987654321999', 'JAVIER', 'MENDEZ', 'MARTINEZ', 'Masculino', 'javierdrx1998@hotmail.com', '+524641123227', 'yo'),
('11111555554444', ' JAVIER', ' MENDEZ', ' HERNANDEZ', ' MASCULINO', NULL, NULL, '11111555554444'),
('1234567890000', 'EMMANUEL ANTONIO', 'RAMIREZ', 'HERRERA', 'Masculino', 'maneroto@hotmail.com', '+524271327515', 'director'),
('1234567890111', 'EMMANUEL ANTONIO', 'Ramírez', 'Herrrera', 'Masculino', 'maneroto@hotmail.com', '0444271327515', 'administrador'),
('12345678902222', 'EMMANUEL ANTONIO', 'RAMIREZ', 'HERRERA', 'MASCULINO', '', '52', '12345678902222'),
('1234567890888', 'ALONSO', 'Oropeza', 'Arévalo', 'Masculino', 'alonso.oropeza@live.com.mx', '0454424511689', 'administrador'),
('1234567890999', 'ALONSO', 'OROPEZA', 'AREVALO', 'Masculino', 'alonso.oropeza99@gmail.com', '52244511689', 'director'),
('44444444488888', 'TOPI', 'HERNANDEZ', 'RAMIREZ', 'MASCULINO', NULL, NULL, '44444444488888'),
('77823686237862', 'EDUARDO', 'GARCIA', 'CABALLERO', 'MASCULINO', NULL, NULL, '77823686237862'),
('83894732987498', 'JAVIER', 'MENDEZ', 'MARTINEZ', 'MASCULINO', NULL, NULL, '83894732987498'),
('87678645534534', 'RICARDO', 'ALEJO', 'LOERA', 'MASCULINO', NULL, NULL, '87678645534534'),
('87932698362498', 'ADRIAN', 'ARREOLA', 'PEREZ', 'MASCULINO', NULL, NULL, '87932698362498'),
('88893423987239', 'DARA FERNANDA', 'ESCOBAR', 'PEREZ', 'FEMENINO', NULL, NULL, '88893423987239'),
('98234897238972', 'EMMANUEL ANTONIO', 'HERRERA', 'RAMIREZ', 'MASCULINO', NULL, NULL, '98234897238972'),
('98732487239847', 'JOSE ALEJANDRO', 'FIGUEROA', 'NAJERA', 'MASCULINO', NULL, NULL, '98732487239847'),
('98748973894758', 'IRVING ALAIN', 'AGUILAR', 'PEREZ', 'MASCULINO', NULL, NULL, '98748973894758'),
('9876543210111', 'IRVING ALAIN', 'AGUILAR', 'PEREZ', 'MASCULINO', 'a01703171@itesm.mx', '+524422660863', '9876543210111'),
('REZC800329P45', 'CLAUDIA', 'REVUELTA', 'ZUNIGA', 'FEMENINO', 'asd@asd.com', '528696434365', '$2y$10$VkFC6kj7c/1CtV803Yp0.eoRAh6VqMVaXb9nFR5dZEillRgpUrYrO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuarioRol`
--

CREATE TABLE IF NOT EXISTS `UsuarioRol` (
  `idusuario` varchar(14) NOT NULL,
  `idrol` varchar(25) NOT NULL,
  PRIMARY KEY (`idusuario`,`idrol`),
  KEY `idrol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `UsuarioRol`
--

INSERT INTO `UsuarioRol` (`idusuario`, `idrol`) VALUES
('1234567890111', 'ADMINISTRADOR'),
('1234567890888', 'ADMINISTRADOR'),
('9876543210111', 'ADMINISTRADOR'),
('00909823094809', 'ALUMNO'),
('01234567893432', 'ALUMNO'),
('11111555554444', 'ALUMNO'),
('12345678902222', 'ALUMNO'),
('44444444488888', 'ALUMNO'),
('77823686237862', 'ALUMNO'),
('83894732987498', 'ALUMNO'),
('87678645534534', 'ALUMNO'),
('87932698362498', 'ALUMNO'),
('88893423987239', 'ALUMNO'),
('98234897238972', 'ALUMNO'),
('98732487239847', 'ALUMNO'),
('98748973894758', 'ALUMNO'),
('0987654321000', 'DIRECTOR'),
('0987654321999', 'DIRECTOR'),
('1234567890000', 'DIRECTOR'),
('1234567890999', 'DIRECTOR'),
('REZC800329P45', 'DIRECTOR');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `AdministradorEncuesta`
--
ALTER TABLE `AdministradorEncuesta`
  ADD CONSTRAINT `AdministradorEncuesta_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `AdministradorEncuesta_ibfk_2` FOREIGN KEY (`idencuesta`) REFERENCES `Encuesta` (`idencuesta`);

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `Alumno_ibfk_2` FOREIGN KEY (`idgrupo`) REFERENCES `Grupo` (`idgrupo`);

--
-- Filtros para la tabla `AlumnoEncuesta`
--
ALTER TABLE `AlumnoEncuesta`
  ADD CONSTRAINT `AlumnoEncuesta_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`idusuario`),
  ADD CONSTRAINT `AlumnoEncuesta_ibfk_2` FOREIGN KEY (`idencuesta`) REFERENCES `Encuesta` (`idencuesta`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

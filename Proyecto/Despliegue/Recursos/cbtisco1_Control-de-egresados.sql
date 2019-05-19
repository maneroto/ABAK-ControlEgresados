-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-05-2019 a las 17:39:42
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
-- Estructura de tabla para la tabla `AdministradorEncuesta`
--

CREATE TABLE `AdministradorEncuesta` (
  `idusuario` varchar(14) NOT NULL,
  `idencuesta` varchar(20) NOT NULL,
  `fechapublicacion` datetime DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('12345654321234', NULL, NULL, NULL, NULL, NULL, 7, 0),
('12345678907777', NULL, NULL, NULL, NULL, NULL, NULL, 0),
('20170325586022', NULL, NULL, NULL, NULL, NULL, 5, 0),
('20172202214056', NULL, NULL, NULL, NULL, NULL, 5, 0),
('55555444444444', NULL, NULL, NULL, NULL, NULL, 5, 0),
('88888999994444', NULL, NULL, '', NULL, NULL, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AlumnoEncuesta`
--

CREATE TABLE `AlumnoEncuesta` (
  `idusuario` varchar(14) NOT NULL,
  `idencuesta` varchar(20) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '0'
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

CREATE TABLE `AlumnoEstatusOcupacion` (
  `idusuario` varchar(14) NOT NULL,
  `idestatus` varchar(25) NOT NULL,
  `idocupacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AlumnoEstatusOcupacion`
--

INSERT INTO `AlumnoEstatusOcupacion` (`idusuario`, `idestatus`, `idocupacion`) VALUES
('12345654321234', 'ALUMNO', 'DEFAULT'),
('20170325586022', 'ALUMNO', 'DEFAULT'),
('20172202214056', 'ALUMNO', 'DEFAULT'),
('55555444444444', 'ALUMNO', 'DEFAULT'),
('88888999994444', 'ALUMNO', 'DEFAULT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elprueba`
--

CREATE TABLE `elprueba` (
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

CREATE TABLE `Encuesta` (
  `idencuesta` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `activa` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Encuesta`
--

INSERT INTO `Encuesta` (`idencuesta`, `descripcion`, `activa`) VALUES
('Encuesta4oSemestre', 'ENCUESTA PARA ALUMNOS DE 4TO SEMESTRE', 0),
('Encuesta6oSemestre', 'ENCUESTA PARA ALUMNOS DE 6TO SEMESTRE', 0),
('EncuestaEgresados', 'ENCUESTA PARA EGRESADOS', 0);

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
(5, 'B', 'PROGRAMACION', 'V', 6, 1),
(7, 'C', 'PROGRAMACION', 'V', 6, 1);

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
('DIRECTOR', 'CONSULTAR ENCUESTA'),
('DIRECTOR', 'CONSULTAR GRUPO'),
('DIRECTOR', 'CONSULTAR ORGANIZACION'),
('ALUMNO', 'CONTESTAR ENCUESTA'),
('DIRECTOR', 'REGISTRAR ADMINISTRADOR'),
('ADMINISTRADOR', 'REGISTRAR ALUMNO'),
('DIRECTOR', 'REGISTRAR ALUMNO'),
('ADMINISTRADOR', 'REGISTRAR GRUPO'),
('DIRECTOR', 'REGISTRAR GRUPO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Temp`
--

CREATE TABLE `Temp` (
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

CREATE TABLE `Usuario` (
  `idusuario` varchar(14) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apaterno` varchar(50) DEFAULT NULL,
  `amaterno` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idusuario`, `nombre`, `apaterno`, `amaterno`, `sexo`, `email`, `telefono`, `contrasena`) VALUES
('0987654321000', 'IRVING', 'AGUILAR', 'PEREZ', 'Masculino', 'a01703171@itesm.mx', '+524422660863', 'irving'),
('09876543217777', 'JAVIER', 'MÃ©ndez', 'MartÃ­nez', 'Masculino', 'javierdx1998@hotmail.com', '0454681123217', 'alumno'),
('0987654321999', 'JAVIER', 'MENDEZ', 'MARTINEZ', 'Masculino', 'javierdrx1998@hotmail.com', '+524641123227', 'yo'),
('11111555554444', ' JAVIER', ' MENDEZ', ' HERNANDEZ', ' MASCULINO', NULL, NULL, '11111555554444'),
('12345654321234', 'ARIADNE', 'CHAVEZ', 'RAMIREZ', 'FEMENINO', NULL, NULL, '12345654321234'),
('1234567890000', 'EMMANUEL ANTONIO', 'RAMIREZ', 'HERRERA', 'Masculino', 'maneroto@hotmail.com', '+524271327515', 'director'),
('1234567890111', 'EMMANUEL ANTONIO', 'Ramírez', 'Herrrera', 'Masculino', 'maneroto@hotmail.com', '0444271327515', 'administrador'),
('12345678902222', 'EMMANUEL ANTONIO', 'RAMIREZ', 'HERRERA', 'MASCULINO', '', '52', '12345678902222'),
('12345678907777', 'ALONSO', 'OROPEZA', 'AREVALO', 'MASCULINO', '', '52', '12345678907777'),
('1234567890999', 'ALONSO', 'OROPEZA', 'AREVALO', 'Masculino', 'alonso.oropeza99@gmail.com', '52244511689', 'director'),
('1234567891234', 'IGOR', 'IGOR', 'IGOR', 'MASCULINO', 'igor@igor.igor', '521601601604', '1234567891234'),
('20170325586022', ' MARIO', ' MALDONADO', ' PEREZ', ' MASCULINO', NULL, NULL, '20170325586022'),
('20172202214056', ' RAMIRO', ' ZAMORA', ' GALLEGOS', ' FEMENINO', '', '52', '20172202214056'),
('44444444488888', 'TOPI', 'HERNANDEZ', 'RAMIREZ', 'MASCULINO', NULL, NULL, '44444444488888'),
('55555444444444', ' MARIANA', ' SALAZAR', ' HERNANDEZ', ' FEMENINO', NULL, NULL, '55555444444444'),
('88888999994444', ' FRANCISCO JAVIER', ' FLORES', ' RAZO', ' MASCULINO', 'flores.razo@gmail.com', '524427889999', '88888999994444'),
('9876543210111', 'IRVING ALAIN', 'AGUILAR', 'PEREZ', 'MASCULINO', 'a01703171@itesm.mx', '+524422660863', '9876543210111');

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
('1234567890111', 'ADMINISTRADOR'),
('1234567891234', 'ADMINISTRADOR'),
('9876543210111', 'ADMINISTRADOR'),
('11111555554444', 'ALUMNO'),
('12345654321234', 'ALUMNO'),
('12345678902222', 'ALUMNO'),
('12345678907777', 'ALUMNO'),
('20170325586022', 'ALUMNO'),
('20172202214056', 'ALUMNO'),
('44444444488888', 'ALUMNO'),
('55555444444444', 'ALUMNO'),
('88888999994444', 'ALUMNO'),
('0987654321000', 'DIRECTOR'),
('0987654321999', 'DIRECTOR'),
('1234567890000', 'DIRECTOR'),
('1234567890999', 'DIRECTOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `AdministradorEncuesta`
--
ALTER TABLE `AdministradorEncuesta`
  ADD PRIMARY KEY (`idusuario`,`idencuesta`),
  ADD KEY `idencuesta` (`idencuesta`);

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `AlumnoEncuesta`
--
ALTER TABLE `AlumnoEncuesta`
  ADD PRIMARY KEY (`idusuario`,`idencuesta`),
  ADD KEY `idencuesta` (`idencuesta`);

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
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

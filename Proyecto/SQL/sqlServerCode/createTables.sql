CREATE TABLE Usuario
(
	idusuario varchar(14) NOT NULL,
	nombre varchar(50),
	apaterno varchar(50),
	amaterno varchar(50),
	sexo varchar(10),
	email varchar(100),
	telefono varchar(13)
);

CREATE TABLE Alumno
(
	idusuario varchar(14) NOT NULL,
	fechanacimiento datetime,
	telefonocasa varchar(13),
	areaintres varchar(100),
	encuesta bit
);

CREATE TABLE Grupo
(
	idgrupo numeric NOT NULL,
	nombre char(1),
	especialidad varchar(30),
	turno char(1),
	semestre numeric,
	idgeneracion numeric NOT NULL
);

CREATE TABLE Generacion
(
	idgeneracion numeric NOT NULL,
	fechainicio datetime,
	fechafin datetime
);

CREATE TABLE Encuesta
(
	idencuesta char(8) NOT NULL,
	descripcion varchar(100),
	activa bit,
	archivo varchar(100)
);

CREATE TABLE Reporte
(
	idreporte numeric NOT NULL,
	descripcion varchar(200),
	archivo varchar(100),
	fecha datetime,
	idusuario varchar(14) NOT NULL
);

CREATE TABLE Estatus
(
	idestatus numeric NOT NULL,
	nombre varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Ocupacion
(
	idocupacion numeric NOT NULL,
	nombre varchar(35),
	descripcion varchar(200),
	areaocupacion varchar(100),
	lugarocupacion varchar(100)
);

CREATE TABLE Rol
(
	idrol numeric NOT NULL,
	nombrerol varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Permiso
(
	idpermiso numeric NOT NULL,
	nombrepermiso varchar(25),
	descripcion varchar(100)
);

CREATE TABLE AlumnoEncuesta
(
	idusuario varchar(14) NOT NULL,
	idencuesta char(8) NOT NULL,
	fecha datetime
);

CREATE TABLE AdministradorEncuesta
(
	idusuario varchar(14) NOT NULL,
	idencuesta char(8) NOT NULL,
	fechapublicacion datetime,
	fechabaja datetime
);

CREATE TABLE AlumnoEstatus
(
	idusuario varchar(14) NOT NULL,
	idestatus numeric NOT NULL,
	fechaasignacion datetime
);

CREATE TABLE EstatusOcupacion
(
	idestatus numeric NOT NULL,
	idocupacion numeric NOT NULL,
	sueldo numeric
);

CREATE TABLE RolPermiso
(
	idrol numeric NOT NULL,
	idpermiso numeric NOT NULL,
	fechaasignacion datetime
);

CREATE TABLE UsuarioRol
(
	idusuario varchar(14) NOT NULL,
	idrol numeric NOT NULL,
	fechaasignacion datetime
);
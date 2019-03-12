CREATE TABLE Usuario
(
	idusuario varchar(14) NOT NULL,
	nombre varchar(50),
	apaterno varchar(50),
	amaterno varchar(50),
	sexo varchar(10),
	email varchar(100),
	telefono numeric(13)
);

CREATE TABLE Alumno
(
	idusuario varchar(14) NOT NULL,
	fechanacimiento smalldatetime,
	telefonocasa numeric(13),
	areainteres varchar(100),
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
	fechainicio smalldatetime,
	fechafin smalldatetime
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
	fecha smalldatetime,
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
	fecha smalldatetime
);

CREATE TABLE AdministradorEncuesta
(
	idusuario varchar(14) NOT NULL,
	idencuesta char(8) NOT NULL,
	fechapublicacion smalldatetime
);

CREATE TABLE AlumnoEstatus
(
	idusuario varchar(14) NOT NULL,
	idestatus numeric NOT NULL,
	fechaasignacion smalldatetime
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
	fechaasignacion smalldatetime
);

CREATE TABLE UsuarioRol
(
	idusuario varchar(14) NOT NULL,
	idrol numeric NOT NULL,
	fechaasignacion smalldatetime
);
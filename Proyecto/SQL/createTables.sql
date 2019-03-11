CREATE TABLE Usuario
(
	idusuario varchar(14),
	nombre varchar(50),
	apaterno varchar(50),
	amaterno varchar(50),
	sexo varchar(10),
	email varchar(100),
	telefono numeric(13)
);

CREATE TABLE Alumno
(
	idusuario varchar(14),
	fechanacimiento smalldatetime,
	telefonocasa numeric(13),
	areainteres varchar(100),
	encuesta bit
);

CREATE TABLE Grupo
(
	idgrupo numeric,
	nombre char(1),
	especialidad varchar(30),
	turno char(1),
	semestre numeric,
	idgeneracion numeric
);

CREATE TABLE Generacion
(
	idgeneracion numeric,
	fechainicio smalldatetime,
	fechafin smalldatetime
);

CREATE TABLE Encuesta
(
	idencuesta char(8),
	descripcion varchar(100),
	activa bit,
	archivo varchar(100)
);

CREATE TABLE Reporte
(
	idreporte numeric,
	descripcion varchar(200),
	archivo varchar(100),
	fecha smalldatetime,
	idusuario varchar(14)
);

CREATE TABLE Estatus
(
	idestatus numeric,
	nombre varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Ocupacion
(
	idocupacion numeric,
	nombre varchar(35),
	descripcion varchar(200),
	areaocupacion varchar(100),
	lugarocupacion varchar(100)
);

CREATE TABLE Rol
(
	idrol numeric,
	nombrerol varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Permiso
(
	idpermiso numeric,
	nombrepermiso varchar(25),
	descripcion varchar(100)
);

CREATE TABLE AlumnoEncuesta
(
	idusuario varchar(14),
	idencuesta char(8),
	fecha smalldatetime
);

CREATE TABLE AdministradorEncuesta
(
	idusuario varchar(14),
	idencuesta char(8),
	fechapublicacion smalldatetime
);

CREATE TABLE AlumnoEstatus
(
	idusuario varchar(14),
	idestatus numeric,
	fechaasignacion smalldatetime
);

CREATE TABLE EstatusOcupacion
(
	idestatus numeric,
	idocupacion numeric,
	sueldo numeric
);

CREATE TABLE RolPermiso
(
	idrol numeric,
	idpermiso numeric,
	fechaasignacion smalldatetime
);

CREATE TABLE UsuarioRol
(
	idusuario varchar(14),
	idrol numeric,
	fechaasignacion smalldatetime
);
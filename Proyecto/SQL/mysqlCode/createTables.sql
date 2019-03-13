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
	areainteres varchar(100),
	encuesta tinyint(1)
);

CREATE TABLE Grupo
(
	idgrupo int NOT NULL,
	nombre char(1),
	especialidad varchar(30),
	turno char(1),
	semestre int,
	idgeneracion int NOT NULL
);

CREATE TABLE Generacion
(
	idgeneracion int NOT NULL,
	fechainicio datetime,
	fechafin datetime
);

CREATE TABLE Encuesta
(
	idencuesta char(8) NOT NULL,
	descripcion varchar(100),
	activa tinyint(1),
	archivo varchar(100)
);

CREATE TABLE Reporte
(
	idreporte int NOT NULL,
	descripcion varchar(200),
	archivo varchar(100),
	fecha datetime,
	idusuario varchar(14) NOT NULL
);

CREATE TABLE Estatus
(
	idestatus int NOT NULL,
	nombre varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Ocupacion
(
	idocupacion int NOT NULL,
	nombre varchar(35),
	descripcion varchar(200),
	areaocupacion varchar(100),
	lugarocupacion varchar(100)
);

CREATE TABLE Rol
(
	idrol int NOT NULL,
	nombrerol varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Permiso
(
	idpermiso int NOT NULL,
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
	idestatus int NOT NULL,
	fechaasignacion datetime
);

CREATE TABLE EstatusOcupacion
(
	idestatus int NOT NULL,
	idocupacion int NOT NULL,
	sueldo int
);

CREATE TABLE RolPermiso
(
	idrol int NOT NULL,
	idpermiso int NOT NULL,
	fechaasignacion datetime
);

CREATE TABLE UsuarioRol
(
	idusuario varchar(14) NOT NULL,
	idrol int NOT NULL,
	fechaasignacion datetime
);
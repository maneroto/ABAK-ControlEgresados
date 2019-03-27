CREATE TABLE Usuario
(
	idusuario varchar(14) NOT NULL PRIMARY KEY,
	nombre varchar(50),
	apaterno varchar(50),
	amaterno varchar(50),
	sexo varchar(10),
	email varchar(100),
	telefono varchar(13),
	contrasena varchar(50),
	CHECK (DATALENGTH(idusuario) >= 13),
	CHECK (DATALENGTH(sexo) >= 8),
	CHECK (DATALENGTH(telefono) >= 10)
);

CREATE TABLE Alumno
(
	idusuario varchar(14) NOT NULL PRIMARY KEY,
	fechanacimiento datetime,
	telefonocasa varchar(13),
	areainteres varchar(100),
	encuesta4 tinyint(1),
	encuesta6 tinyint(1),
	encuestaE tinyint(1),
	FOREIGN KEY (idusuario) REFERENCES Usuario (idusuario),
	CHECK (DATALENGTH(telefonocasa) >= 10),
	CHECK (DATALENGTH(areainteres) >= 5)
);

CREATE TABLE Generacion
(
	idgeneracion int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fechainicio datetime,
	fechafin datetime,
	CHECK (fechafin > fechainicio)
);

CREATE TABLE Grupo
(
	idgrupo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre char(1),
	especialidad varchar(30),
	turno char(1),
	semestre int,
	idgeneracion int NOT NULL,
	FOREIGN KEY (idgeneracion) REFERENCES Generacion(idgeneracion),
	CHECK (DATALENGTH(especialidad)>= 10)
);

CREATE TABLE Encuesta
(
	idencuesta char(8) NOT NULL PRIMARY KEY,
	descripcion varchar(100),
	activa tinyint(1),
	archivo varchar(100)
);

CREATE TABLE Reporte
(
	idreporte int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descripcion varchar(200),
	archivo varchar(100),
	fecha datetime,
	idusuario varchar(14) NOT NULL,
	FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario)
);

CREATE TABLE Estatus
(
	idestatus int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(25),
	descripcion varchar(100),
	CHECK (DATALENGTH(nombre) >= 5)
);

CREATE TABLE Ocupacion
(
	idocupacion int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(35),
	descripcion varchar(200),
	areaocupacion varchar(100),
	lugarocupacion varchar(100),
	CHECK (DATALENGTH(nombre) >= 5),
	CHECK (DATALENGTH(areaocupacion) >= 5)
);

CREATE TABLE Rol
(
	idrol int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombrerol varchar(25),
	descripcion varchar(100)
);

CREATE TABLE Permiso
(
	idpermiso int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombrepermiso varchar(25),
	descripcion varchar(100)
);

CREATE TABLE AlumnoEncuesta
(
	idusuario varchar(14) NOT NULL,
	idencuesta char(8) NOT NULL,
	fecha datetime,
	PRIMARY KEY (idusuario, idencuesta),
	FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario),
	FOREIGN KEY (idencuesta) REFERENCES Encuesta(idencuesta),
	CHECK (fechabaja > fechapublicacion)
);

CREATE TABLE AdministradorEncuesta
(
	idusuario varchar(14) NOT NULL,
	idencuesta char(8) NOT NULL,
	fechapublicacion datetime,
	fechabaja datetime,
	PRIMARY KEY (idusuario, idencuesta),
	FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario),
	FOREIGN KEY (idencuesta) REFERENCES Encuesta(idencuesta)
);

CREATE TABLE AlumnoEstatus
(
	idusuario varchar(14) NOT NULL,
	idestatus int NOT NULL,
	fechaasignacion datetime,
	PRIMARY KEY (idusuario, idestatus),
	FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario),
	FOREIGN KEY (idestatus) REFERENCES Estatus(idestatus)
);

CREATE TABLE EstatusOcupacion
(
	idestatus int NOT NULL,
	idocupacion int NOT NULL,
	sueldo int,
	PRIMARY KEY (idestatus, idocupacion),
	FOREIGN KEY (idestatus) REFERENCES Estatus(idestatus),
	FOREIGN KEY (idocupacion) REFERENCES Ocupacion(idocupacion)
);

CREATE TABLE RolPermiso
(
	idrol int NOT NULL,
	idpermiso int NOT NULL,
	fechaasignacion datetime,
	PRIMARY KEY (idrol, idpermiso),
	FOREIGN KEY (idrol) REFERENCES Rol(idrol),
	FOREIGN KEY (idpermiso) REFERENCES Permiso(idpermiso)
);

CREATE TABLE UsuarioRol
(
	idusuario varchar(14) NOT NULL,
	idrol int NOT NULL,
	fechaasignacion datetime,
	PRIMARY KEY (idusuario, idrol),
	FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario),
	FOREIGN KEY (idrol) REFERENCES Rol(idrol)
);
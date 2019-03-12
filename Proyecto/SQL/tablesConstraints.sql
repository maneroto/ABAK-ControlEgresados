-- Llaves primarias

ALTER TABLE Usuario ADD CONSTRAINT llaveusuario PRIMARY KEY (idusuario);
--ALTER TABLE Alumno ADD CONSTRAINT llaveusuario PRIMARY KEY (idsuario);
ALTER TABLE Grupo ADD CONSTRAINT llavegrupo PRIMARY KEY (idgrupo);
ALTER TABLE Generacion ADD CONSTRAINT llavegeneracion PRIMARY KEY (idgeneracion);
ALTER TABLE Encuesta ADD CONSTRAINT llaveencuesta PRIMARY KEY (idencuesta);
ALTER TABLE Reporte ADD CONSTRAINT llavereporte PRIMARY KEY (idreporte);
ALTER TABLE Estatus ADD CONSTRAINT llaveestatus PRIMARY KEY (idestatus);
ALTER TABLE Ocupacion ADD CONSTRAINT llaveocupacion PRIMARY KEY (idocupacion);
ALTER TABLE Rol ADD CONSTRAINT llaverol PRIMARY KEY (idrol);
ALTER TABLE Permiso ADD CONSTRAINT llavepermiso PRIMARY KEY (idpermiso);



-- Llaves foráneas

--ALTER TABLE Alumno ADD CONSTRAINT 

ALTER TABLE Grupo ADD CONSTRAINT lfgrupoidgeneracion FOREIGN KEY (idgeneracion) REFERENCES Generacion(idgeneracion);

ALTER TABLE Reporte ADD CONSTRAINT lfreporteidusuario FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario);

ALTER TABLE AlumnoEncuesta ADD CONSTRAINT lfalumnoencuestaidusuario FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario);
ALTER TABLE AlumnoEncuesta ADD CONSTRAINT lfalumnoencuestaidencuesta FOREIGN KEY (idencuesta) REFERENCES Encuesta(idencuesta);

ALTER TABLE AdministradorEncuesta ADD CONSTRAINT lfadministradorencuestaidusuario FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario);
ALTER TABLE AdministradorEncuesta ADD CONSTRAINT lfadministradorencuestaidencuesta FOREIGN KEY (idencuesta) REFERENCES Encuesta(idencuesta);

ALTER TABLE AlumnoEstatus ADD CONSTRAINT lfalumnoestatusidusuario FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario);
ALTER TABLE AlumnoEstatus ADD CONSTRAINT lfalumnoestatusidestatus FOREIGN KEY (idestatus) REFERENCES Estatus(idestatus);

ALTER TABLE EstatusOcupacion ADD CONSTRAINT lfestatusocupacionidestatus FOREIGN KEY (idestatus) REFERENCES Estatus(idestatus);
ALTER TABLE EstatusOcupacion ADD CONSTRAINT lfestatusocupacionidocupacion FOREIGN KEY (idocupacion) REFERENCES Ocupacion(idocupacion);

ALTER TABLE RolPermiso ADD CONSTRAINT lfrolpermisoidrol FOREIGN KEY (idrol) REFERENCES Rol(idrol);
ALTER TABLE RolPermiso ADD CONSTRAINT lfrolpermisoidpermiso FOREIGN KEY (idpermiso) REFERENCES Permiso(idpermiso);

ALTER TABLE UsuarioRol ADD CONSTRAINT lfusuariorolidusuario FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario);
ALTER TABLE UsuarioRol ADD CONSTRAINT lfusuariorolidrol FOREIGN KEY (idrol) REFERENCES Rol(idrol);
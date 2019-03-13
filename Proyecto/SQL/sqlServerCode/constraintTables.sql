-- Llaves primarias

ALTER TABLE Usuario ADD CONSTRAINT llaveusuario PRIMARY KEY (idusuario);
ALTER TABLE Grupo ADD CONSTRAINT llavegrupo PRIMARY KEY (idgrupo);
ALTER TABLE Generacion ADD CONSTRAINT llavegeneracion PRIMARY KEY (idgeneracion);
ALTER TABLE Encuesta ADD CONSTRAINT llaveencuesta PRIMARY KEY (idencuesta);
ALTER TABLE Reporte ADD CONSTRAINT llavereporte PRIMARY KEY (idreporte);
ALTER TABLE Estatus ADD CONSTRAINT llaveestatus PRIMARY KEY (idestatus);
ALTER TABLE Ocupacion ADD CONSTRAINT llaveocupacion PRIMARY KEY (idocupacion);
ALTER TABLE Rol ADD CONSTRAINT llaverol PRIMARY KEY (idrol);
ALTER TABLE Permiso ADD CONSTRAINT llavepermiso PRIMARY KEY (idpermiso);
ALTER TABLE AdministradorEncuesta ADD CONSTRAINT llaveadministradorencuesta PRIMARY KEY (idusuario, idencuesta);
ALTER TABLE AlumnoEstatus ADD CONSTRAINT llavealumnoestatus PRIMARY KEY (idusuario, idestatus);
ALTER TABLE EstatusOcupacion ADD CONSTRAINT llaveestatusocupacion PRIMARY KEY (idestatus, idocupacion);
ALTER TABLE RolPermiso ADD CONSTRAINT llaverolpermiso PRIMARY KEY (idrol, idpermiso);
ALTER TABLE UsuarioRol ADD CONSTRAINT llaveusuariorol PRIMARY KEY (idusuario, idrol);


-- Auto incrementos

ALTER TABLE Grupo MODIFY idgrupo numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Generacion MODIFY idgeneracion numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Reporte MODIFY idreporte numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Estatus MODIFY idestatus numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Ocupacion MODIFY idocupacion numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Rol MODIFY idrol numeric NOT NULL AUTO_INCREMENT;
ALTER TABLE Permiso MODIFY idpermiso numeric NOT NULL AUTO_INCREMENT;

-- Llaves foráneas

ALTER TABLE Alumno ADD CONSTRAINT lfalumnoidusuario FOREIGN KEY (idusuario) REFERENCES Usuario (idusuario);

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


-- Constraints específicos de Usuario

ALTER TABLE Usuario ADD CONSTRAINT ckusuarioidusuario CHECK (DATALENGTH(idusuario) >= 13);
ALTER TABLE Usuario ADD CONSTRAINT ckusuariosexo CHECK (DATALENGTH(sexo) >= 8);
ALTER TABLE Usuario ADD CONSTRAINT ckusuariotelefono CHECK (DATALENGTH(telefono) >= 10);


-- Constraints específicos de Alumno

ALTER TABLE Alumno ADD CONSTRAINT ckalumnotelefonocasa CHECK (DATALENGTH(telefonocasa) >= 10);
ALTER TABLE Alumno ADD CONSTRAINT ckalumnoareainteres CHECK (DATALENGTH(areainteres) >= 5);


-- Constraints específicos de Grupo

ALTER TABLE Grupo ADD CONSTRAINT ckgrupoespecialidad CHECK (DATALENGTH(especialidad)>= 10);


-- Constraints específicos de Generacion

ALTER TABLE Generacion ADD CONSTRAINT ckgeneracionfechafin CHECK (fechafin > fechainicio);


-- Constraints específicos de Estatus

ALTER TABLE Estatus ADD CONSTRAINT ckestatusnombre CHECK (DATALENGTH(nombre) >= 5);


-- Constraints específicos de Ocupacion

ALTER TABLE Ocupacion ADD CONSTRAINT ckocupacionnombre CHECK (DATALENGTH(nombre) >= 5);
ALTER TABLE Ocupacion ADD CONSTRAINT ckocupacionareaocupacion CHECK (DATALENGTH(areaocupacion) >= 5);


-- Constraints específicos de AdministradorEncuesta

ALTER TABLE AdministradorEncuesta ADD CONSTRAINT ckadministradorencuestafechabaja CHECK (fechabaja > fechapublicacion);
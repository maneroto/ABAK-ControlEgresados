INSERT INTO Estatus VALUES
('ACTIVO','ES UN ALUMNO ACTIVO DE LA INSTITUCION'),
('TRABAJANDO','EL ALUMNO SE ENCUENTRA TRABAJANDO'),
('UNIVERSIDAD','EL ALUMNO SE ENCUENTRA ESTUDIANDO EN LA UNIVERSIDAD'),
('PRACTICAS','EL ALUMNO SE ENCUENTRA REALIZANDO SUS PRACTICAS PROFESIONALES'),
('EGRESADO','EL ALUMNO ES EGRESADO DE LA INSTITUCION PERO NO TRABAJA NI ESTUDIA');

INSERT INTO Rol VALUES
('ALUMNO','CONTESTA ENCUESTAS PARA OBTENER INFORMACIÓN'),
('ADMINISTRADOR','DA ALTA/BAJA ENCUESTAS - REGISTRA ALUMNOS - REALIZA CONSULTAS/REPORTES'),
('DIRECTOR','REALIZA CONSULTAS/REPORTES');

INSERT INTO Encuesta VALUES
('Encuesta4oSemestre','ENCUESTA PARA ALUMNOS DE 4TO SEMESTRE',0),
('Encuesta6oSemestre','ENCUESTA PARA ALUMNOS DE 5TO SEMESTRE',0),
('EncuestaEgresados','ENCUESTA PARA EGRESADOS',0);

INSERT INTO Permiso VALUES 
('INICIAR SESION','PERMITE INICIAR SESION'),
('CERRAR SESION','PERMITE CERRAR SESION'),
('CONTESTAR ENCUESTA','PERMITE CONTESTAR LA ENCUESTA ASIGNADA'),
('REGISTRAR ALUMNO','PERMITE REGISTRAR UN SOLO ALUMNO'),
('MODIFICAR INFO ALUMNO','PERMITE MODIFICAR INFORMACION DE UN ALUMNO'),
('ELIMINAR ALUMNO','PERMITE ELIMINAR UN ALUMNO DEL SISTEMA'),
('PUBLICA ENCUESTA','PERMITE PUBLICAR UNA ENCUESTA EN UN RANGO DE FECHAS'),
('CERRAR ENCUESTA','PERMITE CERRAR MANUALENTE UNA ENCUESTA ACTIVA'),
('CONSULTAR ENCUESTA','PERMITE CONSULTAR LAS ENCUESTAS CONTESTADAS'),
('MODIFICAR INFO CUENTA','PERMITE MODIFICAR INFORMACION DE LA CUENTA'),
('CAMBIAR CONTRASEÑA','PERMITE CAMBIAR LA CONTRASEÑA'),
('CONSULTAR REPORTES','PERMITE CONSULTAR REPORTES HISTORICOS Y GUARDADOS'),
('REALIZAR CONSULTAS','PERMITE CONSULTAR POR FILTROS'),
('ELIMINAR GRUPO','PERMITE ELIMINAR UN GRUPO'),
('REGISTRAR GRUPO','PERMITE REGISTAR UN GRUPO Y ALUMNOS'),
('MODIFICAR GRUPO','PERMITE ACTUALIZAR INFORMACION DEL GRUPO O CAMBIAR UN GRUPO DE SEMESTRE'),
('IMPRIMIR REPORTE','PERMITE IMPRIMIR UN REPORTE'),
('CONTACTAR ALUMNOS DE CONSULTA','PERMITE CONTACTAR ALUMNOS DE UNA CONSULTA'),
('REGISTRAR ADMIN','PERMITE REGISTRAR A UN ADMINISTRADOR'),
('ELIMINAR ADMIN','PERMITE ELIMINAR A UN ADMINISTRADOR'),
('BUSCAR ALUMNOS','PERMITE BUSCAR A UN ALUMNO POR NOMBRE O ID(NOCONTROL)'),
('GUARDAR CONSULTA','PERMITE GUARDAR CONSULTAS COMO REPORTES'),
('MODIFICAR REPORTE','PERMITE CAMBIAR INFORMACION DEL REPORTE'),
('ELIMINAR REPORTE','PERMITE ELIMINAR UN REPORTE');

INSERT INTO RolPermiso VALUES
('ALUMNO','CONTESTAR ENCUESTA'),
('DIRECTOR','INICIAR SESION'),
('DIRECTOR','CERRAR SESION'),
('DIRECTOR','REGISTRAR ALUMNO'),
('DIRECTOR','MODIFICAR INFO ALUMNO'),
('DIRECTOR','ELIMINAR ALUMNO'),
('DIRECTOR','PUBLICA ENCUESTA'),
('DIRECTOR','CERRAR ENCUESTA'),
('DIRECTOR','ELIMINAR GRUPO'),
('DIRECTOR','REGISTRAR GRUPO'),
('DIRECTOR','MODIFICAR GRUPO'),
('DIRECTOR','CONSULTAR ENCUESTA'),
('DIRECTOR','MODIFICAR INFO CUENTA'),
('DIRECTOR','CAMBIAR CONTRASEÑA'),
('DIRECTOR','CONSULTAR REPORTES'),
('DIRECTOR','REALIZAR CONSULTAS'),
('DIRECTOR','IMPRIMIR REPORTE'),
('DIRECTOR','CONTACTAR ALUMNOS DE CONSULTA'),
('DIRECTOR','REGISTRAR ADMIN'),
('DIRECTOR','ELIMINAR ADMIN'),
('DIRECTOR','BUSCAR ALUMNOS'),
('DIRECTOR','GUARDAR CONSULTA'),
('DIRECTOR','MODIFICAR REPORTE'),
('DIRECTOR','ELIMINAR REPORTE'),
('ADMINISTRADOR','INICIAR SESION'),
('ADMINISTRADOR','CERRAR SESION'),
('ADMINISTRADOR','REGISTRAR ALUMNO'),
('ADMINISTRADOR','MODIFICAR INFO ALUMNO'),
('ADMINISTRADOR','ELIMINAR ALUMNO'),
('ADMINISTRADOR','PUBLICA ENCUESTA'),
('ADMINISTRADOR','CERRAR ENCUESTA'),
('ADMINISTRADOR','CONSULTAR ENCUESTA'),
('ADMINISTRADOR','MODIFICAR INFO CUENTA'),
('ADMINISTRADOR','CAMBIAR CONTRASEÑA'),
('ADMINISTRADOR','REALIZAR CONSULTAS'),
('ADMINISTRADOR','ELIMINAR GRUPO'),
('ADMINISTRADOR','REGISTRAR GRUPO'),
('ADMINISTRADOR','MODIFICAR GRUPO'),
('ADMINISTRADOR','IMPRIMIR REPORTE'),
('ADMINISTRADOR','CONTACTAR ALUMNOS DE CONSULTA'),
('ADMINISTRADOR','BUSCAR ALUMNOS'),
('ADMINISTRADOR','GUARDAR CONSULTA');

INSERT INTO Generacion VALUES
(1, '2019/03/11','2022/03/11');

INSERT INTO Grupo VALUES
(1, 'A', 'Programación', 'V', 6, 1);

INSERT INTO Usuario VALUES
('1234567890000', 'Emmanuel Antonio', 'Ramírez', 'Herrrera', 'Masculino', 'maneroto@hotmail.com', '0444271327515', 'director'),
('1234567890111', 'Emmanuel Antonio', 'Ramírez', 'Herrrera', 'Masculino', 'maneroto@hotmail.com', '0444271327515', 'administrador'),
('12345678902222', 'Emmanuel Antonio', 'Ramírez', 'Herrrera', 'Masculino', 'maneroto@hotmail.com', '0444271327515', 'alumno'),
('1234567890999', 'Alonso', 'Oropeza', 'Arévalo', 'Masculino', 'alonso.oropeza@live.com.mx', '0454424511689', 'director'),
('1234567890888', 'Alonso', 'Oropeza', 'Arévalo', 'Masculino', 'alonso.oropeza@live.com.mx', '0454424511689', 'administrador'),
('12345678907777', 'Alonso', 'Oropeza', 'Arévalo', 'Masculino', 'alonso.oropeza@live.com.mx', '0454424511689', 'alumno'),
('0987654321000', 'Irving Alaín', 'Pérez', 'Aguilar', 'Masculino', 'irving6258@gmail.com', '0454422260863', 'director'),
('0987654321111', 'Irving Alaín', 'Pérez', 'Aguilar', 'Masculino', 'irving6258@gmail.com', '0454422260863', 'administrador'),
('09876543212222', 'Irving Alaín', 'Pérez', 'Aguilar', 'Masculino', 'irving6258@gmail.com', '0454422260863', 'alumno'),
('0987654321999', 'Javier', 'Méndez', 'Martínez', 'Masculino', 'javierdx1998@hotmail.com', '0454681123217', 'director'),
('0987654321888', 'Javier', 'Méndez', 'Martínez', 'Masculino', 'javierdx1998@hotmail.com', '0454681123217', 'administrador'),
('09876543217777', 'Javier', 'Méndez', 'Martínez', 'Masculino', 'javierdx1998@hotmail.com', '0454681123217', 'alumno');

INSERT INTO UsuarioRol VALUES
('1234567890000', 'DIRECTOR'),
('1234567890111', 'ADMINISTRADOR'),
('12345678902222', 'ALUMNO'),
('1234567890999', 'DIRECTOR'),
('1234567890888', 'ADMINISTRADOR'),
('12345678907777', 'ALUMNO'),
('0987654321000', 'DIRECTOR'),
('0987654321111', 'ADMINISTRADOR'),
('09876543212222', 'ALUMNO'),
('0987654321999', 'DIRECTOR'),
('0987654321888', 'ADMINISTRADOR'),
('09876543217777', 'ALUMNO');

INSERT INTO Alumno VALUES
('12345678902222','1998/03/03', '4271327515', 'Tecnologías de la información o sistemas', 'Preparatoria', 'Tecnológico de Monterrey', 1),
('12345678907777','1998/03/03', '4424511689', 'Tecnologías de la información o sistemas', 'Preparatoria', 'Tecnológico de Monterrey', 1),
('09876543212222','1998/03/03', '4422260863', 'Tecnologías de la información o sistemas', 'Preparatoria', 'Tecnológico de Monterrey', 1),
('09876543217777','1998/03/03', '4681123217', 'Tecnologías de la información o sistemas', 'Preparatoria', 'Tecnológico de Monterrey', 1);

INSERT INTO AlumnoEstatus VALUES
('12345678902222', 'TRABAJANDO'),
('12345678902222', 'EGRESADO'),
('12345678902222', 'UNIVERSIDAD'),
('12345678907777', 'EGRESADO'),
('12345678907777', 'UNIVERSIDAD'),
('09876543212222', 'EGRESADO'),
('09876543212222', 'UNIVERSIDAD'),
('09876543217777', 'EGRESADO'),
('09876543217777', 'UNIVERSIDAD');

INSERT INTO Ocupacion VALUES
('2222TrERHP', "Posicionart", "Desarrollo de aplicaciones web", "Tecnologías de la información o sistemas", "Bernardo Quintana, Querétaro, México"),
('2222UnERHI', "Ingeniería en sistemas computacionales", "Ingeniería en sistemas computacionales", "Tecnologías de la información o sistemas", "Tecnológico de Monterrey, Campus Querétaro"),
('7777UnAOAI', "Ingeniería en sistemas computacionales", "Ingeniería en sistemas computacionales", "Tecnologías de la información o sistemas", "Tecnológico de Monterrey, Campus Querétaro"),
('2222UnIPAI', "Ingeniería en sistemas computacionales", "Ingeniería en sistemas computacionales", "Tecnologías de la información o sistemas", "Tecnológico de Monterrey, Campus Querétaro"),
('7777UnJMMI', "Ingeniería en sistemas computacionales", "Ingeniería en sistemas computacionales", "Tecnologías de la información o sistemas", "Tecnológico de Monterrey, Campus Querétaro");

INSERT INTO AlumnoEstatusOcupacion VALUES
('12345678902222', 'TRABAJANDO', '2222TrERHP'),
('12345678902222', 'UNIVERSIDAD', '2222UnERHI'),
('12345678907777', 'UNIVERSIDAD', '7777UnAOAI'),
('09876543212222', 'UNIVERSIDAD', '2222UnIPAI'),
('09876543217777', 'UNIVERSIDAD', '7777UnJMMI');

INSERT INTO AlumnoEncuesta VALUES
('12345678902222', 'Encuesta4oSemestre', '2019/26/03'),
('12345678902222', 'Encuesta6oSemestre', '2019/26/03'),
('12345678902222', 'EncuestaEgresados', '2019/26/03'),
('12345678907777', 'Encuesta4oSemestre', '2019/26/03'),
('12345678907777', 'Encuesta6oSemestre', '2019/26/03'),
('12345678907777', 'EncuestaEgresados', '2019/26/03'),
('09876543212222', 'Encuesta4oSemestre', '2019/26/03'),
('09876543212222', 'Encuesta6oSemestre', '2019/26/03'),
('09876543212222', 'EncuestaEgresados', '2019/26/03'),
('09876543217777', 'Encuesta4oSemestre', '2019/26/03'),
('09876543217777', 'Encuesta6oSemestre', '2019/26/03'),
('09876543217777', 'EncuestaEgresados', '2019/26/03');
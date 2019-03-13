LOAD DATA INFILE 'e:\wwwroot\controlegresados\alumno.csv'
INTO TABLE controlegresados.Alumno
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\encuesta.csv'
INTO TABLE controlegresados.Encuesta
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\estatus.csv'
INTO TABLE controlegresados.Estatus
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\generacion.csv'
INTO TABLE controlegresados.Generacion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\grupo.csv'
INTO TABLE controlegresados.Grupo
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\ocupacion.csv'
INTO TABLE controlegresados.Ocupacion
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\permisos.csv'
INTO TABLE controlegresados.Permisos
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\reporte.csv'
INTO TABLE controlegresados.Reporte
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\rol.csv'
INTO TABLE controlegresados.Rol
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'

LOAD DATA INFILE 'e:\wwwroot\controlegresados\usario.csv'
INTO TABLE controlegresados.Usuario
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
BULK INSERT controlegresados.[Alumno]
   FROM 'e:\wwwroot\controlegresados\alumno.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Encuesta]
   FROM 'e:\wwwroot\controlegresados\encuesta.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Estatus]
   FROM 'e:\wwwroot\controlegresados\estatus.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Generacion]
   FROM 'e:\wwwroot\controlegresados\generacion.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Grupo]
   FROM 'e:\wwwroot\controlegresados\grupo.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Ocupacion]
   FROM 'e:\wwwroot\controlegresados\ocupacion.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Permisos]
   FROM 'e:\wwwroot\controlegresados\permisos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Reporte]
   FROM 'e:\wwwroot\controlegresados\reporte.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Rol]
   FROM 'e:\wwwroot\controlegresados\rol.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT controlegresados.[Usuario]
   FROM 'e:\wwwroot\controlegresados\usuario.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

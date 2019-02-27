BULK INSERT a1703442.[Proveedores]
   FROM 'e:\wwwroot\a1703442\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SELECT * FROM Proveedores
BULK INSERT a1703442.[Proyectos]
   FROM 'e:\wwwroot\a1703442\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SELECT * FROM Proyectos
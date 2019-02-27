BULK INSERT a1703442.[Materiales]
   FROM 'e:\wwwroot\a1703442\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SELECT * FROM Materiales
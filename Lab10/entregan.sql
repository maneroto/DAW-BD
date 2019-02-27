SET DATEFORMAT dmy
BULK INSERT a1703442.[Entregan]
   FROM 'e:\wwwroot\a1703442\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SELECT * FROM Entregan
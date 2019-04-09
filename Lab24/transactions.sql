BEGIN TRANSACTION PRUEBA1;
INSERT INTO ClienteBanca VALUES('001', 'Manuel Rios Maldonado', 9000); 
INSERT INTO ClienteBanca VALUES('002', 'Pablo Perez Ortiz', 5000); 
INSERT INTO ClienteBanca VALUES('003', 'Luis Flores Alvarado', 8000); 
COMMIT TRANSACTION PRUEBA1;

BEGIN TRANSACTION PRUEBA2 
INSERT INTO ClienteBanca VALUES('004','Ricardo Rios Maldonado',19000; 
INSERT INTO ClienteBanca VALUES('005','Pablo Ortiz Arana',15000); 
INSERT INTO ClienteBanca VALUES('006','Luis Manuel Alvarado',18000); 

SELECT * FROM ClienteBanca; 

SELECT * FROM ClienteBanca where nocuenta='001';

ROLLBACK TRANSACTION PRUEBA2;

SELECT * FROM ClienteBanca; 

BEGIN TRANSACTION PRUEBA3;
INSERT INTO TipoMovimiento VALUES('A','Retiro Cajero Automatico'); 
INSERT INTO TipoMovimiento VALUES('B','Deposito Ventanilla'); 
COMMIT TRANSACTION PRUEBA3;

BEGIN TRANSACTION PRUEBA4
INSERT INTO MovimientoBancario VALUES('001','A',GETDATE(),500); 
UPDATE ClienteBanca SET saldo = saldo - 500 
WHERE nocuenta='001' 
COMMIT TRANSACTION PRUEBA4

IF @@ERROR = 0 
COMMIT TRANSACTION PRUEBA4
ELSE 
BEGIN 
PRINT 'A transaction needs to be rolled back' 
ROLLBACK TRANSACTION PRUEBA4
END

BEGIN TRANSACTION PRUEBA5 
INSERT INTO ClienteBanca VALUES('005','Rosa Ruiz Maldonado',9000 
INSERT INTO ClienteBanca VALUES('006','Luis Camino Ortiz',5000); 
INSERT INTO ClienteBanca VALUES('001','Oscar Perez Alvarado',8000); 


IF @@ERROR = 0 
COMMIT TRANSACTION PRUEBA5 
ELSE 
BEGIN 
PRINT 'A transaction needs to be rolled back' 
ROLLBACK TRANSACTION PRUEBA5 
END 
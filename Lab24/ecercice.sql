IF EXISTS (SELECT name FROM sysobjects
WHERE name = 'RealizarRetiro' AND type = 'P')
	DROP PROCEDURE RealizarRetiro
GO

CREATE PROCEDURE RealizarRetiro
	@nocuenta varchar(5),
	@monto numeric(10,2)
AS
	BEGIN TRANSACTION Retiro
	INSERT INTO MovimientoBancario VALUES(@nocuenta,'A',GETDATE(),@monto); 
	UPDATE ClienteBanca SET saldo=saldo - @monto
	WHERE nocuenta=@nocuenta

	IF @@ERROR = 0 
	COMMIT TRANSACTION Retiro
	ELSE 
	BEGIN 
	PRINT 'A transaction needs to be rolled back' 
	ROLLBACK TRANSACTION Retiro 
	END 
GO

IF EXISTS (SELECT name FROM sysobjects
WHERE name = 'RealizarDeposito' AND type = 'P')
	DROP PROCEDURE RealizarDeposito
GO

CREATE PROCEDURE RealizarDeposito
	@nocuenta varchar(5),
	@monto numeric(10,2)
AS
	BEGIN TRANSACTION Deposito
	INSERT INTO MovimientoBancario VALUES(@nocuenta,'B',GETDATE(),@monto); 
	UPDATE ClienteBanca SET saldo=saldo + @monto
	WHERE nocuenta=@nocuenta

	IF @@ERROR = 0 
	COMMIT TRANSACTION Deposito
	ELSE 
	BEGIN 
	PRINT 'A transaction needs to be rolled back' 
	ROLLBACK TRANSACTION Deposito
	END 
GO
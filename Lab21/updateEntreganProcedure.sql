IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'modificaEntregan' AND type = 'P')
	DROP PROCEDURE modificaEntregan
GO

CREATE PROCEDURE modificaEntregan
	@uclave NUMERIC(5,0),
	@urfc char(13),
	@unumero NUMERIC(5,0),
	@ufecha DATETIME,
	@ucantidad NUMERIC(5,0)
AS
	UPDATE Entregan SET cantidad = @ucantidad
	WHERE clave = @uclave AND rfc = @urfc AND numero = @unumero AND fecha = @ufecha
GO
IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'creaEntregan' AND type = 'P')
	DROP PROCEDURE creaEntregan
GO

CREATE PROCEDURE creaEntregan
	@uclave NUMERIC (5,0),
	@urfc CHAR(13),
	@unumero NUMERIC(5,0),
	@ufecha DATETIME,
	@ucantidad NUMERIC(5,0)
AS
	INSERT INTO Entregan VALUES(@uclave, @urfc, @unumero, @ufecha, @ucantidad)
GO
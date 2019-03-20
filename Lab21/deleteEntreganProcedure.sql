IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'eliminaEntregan' AND type = 'P')
	DROP PROCEDURE eliminaEntregan
GO

CREATE PROCEDURE eliminaEntregan
	@uclave NUMERIC (5,0),
	@urfc char(13),
	@unumero NUMERIC (5,0)
AS
	DELETE FROM Entregan WHERE rfc = @urfc AND clave = @uclave AND numero = @unumero
GO
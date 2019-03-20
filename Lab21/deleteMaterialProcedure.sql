IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'eliminaMaterial' AND type = 'P')
	DROP PROCEDURE eliminaMaterial
GO

CREATE PROCEDURE eliminaMaterial
	@uclave NUMERIC(5,0)
AS
	DELETE FROM Materiales WHERE clave = @uclave
GO
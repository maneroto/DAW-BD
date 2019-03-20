IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'eliminaProyecto' AND type = 'P')
	DROP PROCEDURE eliminaProyecto
GO

CREATE PROCEDURE eliminaProyecto
	@unumero NUMERIC(5,0)
AS
	DELETE FROM Proyectos WHERE numero = @unumero
GO
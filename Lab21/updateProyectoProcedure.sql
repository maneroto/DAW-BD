IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'modificaProyecto' AND type = 'P')
	DROP PROCEDURE modificaProyecto
GO

CREATE PROCEDURE modificaProyecto
	@unumero NUMERIC(5,0),
	@udenominacion VARCHAR(50)
AS
	UPDATE Proyectos SET denominacion = @udenominacion
	WHERE numero = @unumero
GO
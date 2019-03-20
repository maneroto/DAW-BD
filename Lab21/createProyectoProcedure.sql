IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'creaProyecto' AND type = 'P')
	DROP PROCEDURE creaProyecto
GO

CREATE PROCEDURE creaProyecto
	@unumero NUMERIC(5,0),
	@udenominacion VARCHAR(50)
AS
	INSERT INTO Proyectos VALUES(@unumero, @udenominacion)
GO
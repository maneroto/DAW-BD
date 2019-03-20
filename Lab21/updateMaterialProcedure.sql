IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'modificaMaterial' AND type = 'P')
	DROP PROCEDURE modificaMaterial
GO

CREATE PROCEDURE modificaMaterial
	@uclave NUMERIC(5,0),
	@udescripcion VARCHAR(50),
	@ucosto NUMERIC(8,2),
	@uimpuesto NUMERIC(6,2)
AS
	UPDATE Materiales SET descripcion = @udescripcion, costo=@ucosto, porcentajeimpuesto=@uimpuesto
	WHERE clave = @uclave
GO
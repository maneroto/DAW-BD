IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'creaProveedor' AND type = 'P')
	DROP PROCEDURE creaProveedor
GO

CREATE PROCEDURE creaProveedor
	@urfc CHAR(13),
	@urazonsocial VARCHAR(50)
AS
	INSERT INTO Proveedores VALUES(@urfc, @urazonsocial)
GO
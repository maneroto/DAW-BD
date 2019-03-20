IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'modificaProveedor' AND type = 'P')
	DROP PROCEDURE modificaProveedor
GO

CREATE PROCEDURE modificaProveedor
	@urfc char(13),
	@urazonsocial VARCHAR(50)
AS
	UPDATE Proveedores SET razonsocial = @urazonsocial
	WHERE rfc = @urfc
GO
IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'eliminaProveedor' AND type = 'P')
	DROP PROCEDURE eliminaProveedor
GO

CREATE PROCEDURE eliminaProveedor
	@urfc char(13)
AS
	DELETE FROM Proveedores WHERE rfc = @urfc
GO
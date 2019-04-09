USE Examen2;

CREATE PROCEDURE  `selectIncident` ( ) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT fecha, nombre, descripcion
FROM incidente i, lugar l, tipo t
WHERE i.idlugar = l.idlugar
AND i.idtipo = t.idtipo
ORDER BY fecha DESC;

CREATE PROCEDURE  `insertIncident` ( IN  `plugar` INT, IN  `ptipo` INT ) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER INSERT INTO incidente( fecha, idlugar, idtipo ) 
VALUES (
NOW( ) , plugar, ptipo
);

CREATE PROCEDURE  `selectTipo` ( ) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT idtipo, descripcion
FROM tipo;

CREATE PROCEDURE  `selectLugar` ( ) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT idlugar, nombre
FROM lugar;
/*La suma de las cantidades e importe total de todas las entregas realizadas durante el 97. */
select m.Descripcion, sum(e.cantidad) as 'Total entregado', sum(e.cantidad)*m.costo as 'Importe'
from entregan e, materiales m
where e.clave = m.clave and e.fecha between '1997-01-01' and '1997-12-31'
group by m.descripcion, m.costo
order by 'Importe' asc;

/*Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe 
total de las entregas realizadas.*/
select p.razonsocial, count(p.rfc) as 'No entregas', sum(e.cantidad)*m.costo as 'Importe'
from proveedores p, entregan e, materiales m
where p.rfc = e.rfc and m.clave = e.clave
group by p.razonsocial, m.costo
order by 'Importe' asc;

/*Por cada material obtener la clave y descripción del material, la cantidad total entregada, 
la mínima cantidad entregada, la máxima cantidad entregada, el importe total de las entregas 
de aquellos materiales en los que la cantidad promedio entregada sea mayor a 400. */
select m.clave, m.descripcion,sum(e.cantidad) as 'Total entregado'
, min(e.cantidad) as 'Minimo entregado', max(e.cantidad) as 'Maximo entregado'
, sum(e.cantidad)*m.costo as 'Importe'
from materiales m, entregan e
where m.clave = e.clave
group by m.clave, m.descripcion, m.costo
having avg(e.cantidad) > 400

/*Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material 
entregado, detallando la clave y descripción del material, excluyendo aquellos proveedores para 
los que la cantidad promedio sea menor a 500. */
select p.razonsocial, avg(e.cantidad) as 'Cantidad promedio entregada', m.clave, m.descripcion
from proveedores p, materiales m, entregan e
where p.rfc = e.rfc and e.clave = m.clave
group by p.razonsocial, m.clave, m.descripcion
having avg(e.cantidad) >= 500;

/*Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos 
de proveedores: aquellos para los que la cantidad promedio entregada es menor a 370 y aquellos 
para los que la cantidad promedio entregada sea mayor a 450.*/
select p.razonsocial, avg(e.cantidad) as 'Cantidad promedio entregada', m.clave, m.descripcion
from proveedores p, materiales m, entregan e
where p.rfc = e.rfc and e.clave = m.clave
group by p.razonsocial, m.clave, m.descripcion
having avg(e.cantidad) < 370 or avg(e.cantidad) > 450
order by 'Cantidad promedio entregada' asc;

/*inserta 5 materiales*/
INSERT INTO materiales VALUES (10000, 'Tenedor', 827), (10001, 'Cuchara', 126),
(10002, 'Cuchillo', 27),(10003, 'Taza de baño',123)(10004, 'Espejo', 213);

/* Clave y descripción de los materiales que nunca han sido entregados. */
SELECT Clave, Descripción
FROM Materiales WHERE Clave not IN
(SELECT Clave FROM Entregan)

/*Razón social de los proveedores que han realizado entregas 
tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'*/
SELECT pr.RazonSocial
FROM Proveedores pr, Proyecto p, Entregan e
WHERE pr.RFC=e.RFC AND e.numero=p.numero
AND p.Denominacion LIKE 'Vamos México'
INTERSECT   
SELECT pr.razonsocial
FROM Proveedores pr, Proyecto p, Entregan e
WHERE pr.RFC=e.RFC AND e.numero=p.numero
AND p.denominacion LIKE 'Queretaro Limpio'

/*Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'*/
select M.Descripción
from Materiales M, Proyecto P, Entregan E
where M.Clave=E.Clave and E.Numero=P.Numero and M.Clave not in
(
select E.Clave
from Entregan E, Proyecto P
where E.Numero=P.Numero and P.Denominacion like 'CIT Yucatán'
)

/*Razón social y promedio de cantidad entregada de los proveedores 
cuyo promedio de cantidad entregada es mayor al promedio de la cantidad 
entregada por el proveedor con el RFC 'VAGO780901'. */
select P.RazonSocial, avg(E.Cantidad)
from Proveedores P, Entregan E
where P.RFC=E.RFC
group by P.RazonSocial
having avg(E.Entregan) >
(select P.RazonSocial, avg(E.Cantidad)
from Proveedores P, Entregan E
where P.RFC=E.RFC and RFC like 'VAGO780901'
group by P.RazonSocial)

/*RFC, razón social de los proveedores que participaron en el 
proyecto 'Infonavit Durango' y cuyas cantidades totales entregadas en el 2000
fueron mayores a las cantidades totales entregadas en el 2001.*/
select distinct P.RFC, P.RazonSocial
from Proveedores P, Entregan E, Proyectos Pr
where P.RFC=E.RFC and Pr.Numero=E.Numero and Pr.Denominacion like 'Infonavit Durango' and P.RfC in
(select distinct P.RFC, sum(E.Cantidad)
from Proveedores P, Entregan E
where P.RFC=E.RFC and Fecha between '2000-01-01' and '2000-12-31'
group by P.RFC
having sum(E.Cantidad) >
(select distinct P.RFC, sum(E.Cantidad)
from Proveedores P, Entregan E
where P.RFC=E.RFC and Fecha between '2001-01-01' and '2001-12-31'
group by P.RFC)
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
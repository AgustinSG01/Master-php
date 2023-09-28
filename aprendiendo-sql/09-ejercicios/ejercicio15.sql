/*
    15. Mostrar los dos clientes que mas pedidos han hecho y mostrar cuantos
*/

SELECT clientes.nombre AS "Cliente", COUNT(encargos.id) AS "Cantidad de encargos" FROM encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY encargos.cliente_id
ORDER BY COUNT(encargos.id) DESC
LIMIT 2;
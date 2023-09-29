/*
    25. Obtenes una lista de los nombres de los clientes con el importe de sus gastos acumulados
*/

SELECT clientes.nombre, SUM(coches.precio * encargos.cantidad) AS "importe" from encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
INNER JOIN coches ON coches.id = encargos.coche_id
GROUP BY clientes.nombre;
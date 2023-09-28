/*
    14. Mostrar las unidades vendidas de cada coche a cada cliente.
    Mostrando el nombre del producto, numero de cliente y la suma de unidades
*/

SELECT coches.modelo AS "Coche", clientes.nombre AS "Cliente", SUM(encargos.cantidad) FROM encargos
INNER JOIN coches ON coches.id = encargos.coche_id
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY encargos.coche_id, encargos.cliente_id;  
/*
    24. Listar los encargos con el nombre del cliente, la marca del coche y el nombre de la ciudad,
    pero solo cuando sean de Madrid
*/

SELECT clientes.nombre, coches.marca, clientes.ciudad FROM encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
INNER JOIN coches ON coches.id = encargos.coche_id
WHERE clientes.ciudad = "Madrid";
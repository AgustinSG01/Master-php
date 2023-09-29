/*
    Listar todos los encargos realizados, mostrando la marca del coche y el nombre del cliente
*/

SELECT clientes.nombre AS "Cliente", coches.marca AS "Coche" FROM encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
INNER JOIN coches ON coches.id = encargos.coche_id;
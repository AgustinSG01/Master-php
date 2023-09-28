/*
    18. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
*/

SELECT clientes.nombre FROM encargos
INNER JOIN clientes ON encargos.cliente_id = clientes.id
INNER JOIN coches ON coches.id = encargos.coche_id AND coches.modelo = "Mercedes Ranchera";
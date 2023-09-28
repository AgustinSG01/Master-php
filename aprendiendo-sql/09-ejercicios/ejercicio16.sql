/*
    1. Obtener listado de clientes atendidos por el vendedor "David Lopez"
*/

SELECT clientes.nombre AS "Cliente", vendedores.nombre AS "Vendedor" from clientes
INNER JOIN vendedores ON clientes.vendedor_id = vendedores.id AND vendedores.nombre = "David";
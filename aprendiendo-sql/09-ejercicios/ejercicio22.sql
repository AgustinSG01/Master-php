/*
    22. Mostrar listado de clientes (su id y nombre) y los de su vendedor
*/

SELECT clientes.id AS "ID de cliente", clientes.nombre AS "Nombre cliente", vendedores.id AS "ID de vendedor", vendedores.nombre AS "Nombre vendedor" FROM clientes
INNER JOIN vendedores ON vendedores.id = clientes.vendedor_id; 
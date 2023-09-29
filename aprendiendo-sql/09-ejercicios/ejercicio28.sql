/*
    28. Mostrar todos los vendedores y su numero de clientes, tengan o no
*/

SELECT CONCAT(vendedores.nombre, " ", vendedores.apellido) AS "Vendedor", COUNT(clientes.id) AS "Clientes" FROM vendedores
LEFT JOIN clientes ON vendedores.id = clientes.vendedor_id
GROUP BY vendedores.id
ORDER BY 2 DESC;
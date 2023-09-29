/*
    26. Sacar los vendedores que tienen jefe y el nombre de este
*/

SELECT CONCAT(v.nombre, " ", v.apellido) AS "Vendedor", CONCAT(j.nombre, " ", j.apellido) AS "Jefe" FROM vendedores v
INNER JOIN vendedores j ON v.jefe = j.id;
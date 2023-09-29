/*
    27. Mostrar los nombres de los clientes y la cantidad de encargos que han realizado, incluyendo
    quienes no hayan hecho ningun encargo
*/

SELECT clientes.nombre, COUNT(encargos.id) AS "encargos" from clientes
LEFT JOIN encargos ON clientes.id = encargos.cliente_id
GROUP BY 1
ORDER BY 2 DESC;
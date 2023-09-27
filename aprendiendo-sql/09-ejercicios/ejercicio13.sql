/*
    13. Sacar la media de sueldos entre todos los vendedores por grupo 
*/

SELECT ROUND(AVG(vendedores.sueldo), 2) AS "Media de grupo", grupos.nombre AS "Grupo" FROM vendedores 
INNER JOIN grupos ON vendedores.grupo_id = grupos.id
GROUP BY grupo_id;
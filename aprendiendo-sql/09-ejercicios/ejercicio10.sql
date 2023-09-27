/*
    10. Mostrar los apellidos de los vendedores, su fecha de alta y el numero de su grupo.
    Ordenados por fecha de alta y solo los 4 ultimos
*/

SELECT apellido, fecha_alta, grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;
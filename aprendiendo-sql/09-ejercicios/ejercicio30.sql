/*
    30. Mostrar al vendedor con más antiguedad en la tienda
*/

SELECT * FROM vendedores ORDER BY fecha_alta ASC limit 1;

/*
    30b. Obtener los coches con mas unidades vendidas
*/

SELECT * FROM coches WHERE id = (SELECT coche_id FROM encargos ORDER BY cantidad DESC LIMIT 1);
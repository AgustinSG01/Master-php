/*
    8. Mostrar todos los coches en cuya marca exista la letra "a" y cuyo modelo empiece por "f" 
*/

SELECT * FROM coches WHERE marca LIKE "%a%" AND modelo LIKE "f%";
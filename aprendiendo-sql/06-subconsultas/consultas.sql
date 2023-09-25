/*
    Subconsultas:
    consultas que se realizan dentro de otras.
    Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
    Jugando con las foreign keys
*/

-- Sacar los usuarios que tengan posts
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM posts);

-- Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT nombre, apellido FROM usuarios WHERE id IN (SELECT usuario_id FROM posts WHERE titulo LIKE "%GTA%");

-- Sacar todas las entradas de la categoria accion
SELECT titulo FROM posts WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = "Accion");

-- Mostrar las categorias con mas de 3 entradas
SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM posts GROUP BY categoria_id HAVING COUNT(categoria_id) > 3);

-- Mostrar los usuarios que crearon una entrada un lunes
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM posts WHERE DAYOFWEEK(fecha) = 2);

-- Mostrar el nombre del usuario que tengra mas entradas
SELECT nombre FROM usuarios WHERE id 
    = (SELECT usuario_id FROM posts GROUP BY usuario_id ORDER BY COUNT(id) desc LIMIT 1);


-- Mostrar las categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM posts);
/*
    Vistas:
    Las podemos definir como una consulta almacenada en la base de datos que 
    se utiliza como una tabla virtual.
    No almacena datos sino que utiliza asociaciones y los datos originales
    de las tablas, de forma que siempre se mantiene actualizada.
*/

CREATE VIEW posts_con_nombres AS
SELECT posts.id, posts.titulo, usuarios.nombre AS "Autor", categorias.nombre AS "Categoria"
FROM posts
INNER JOIN usuarios ON posts.usuario_id = usuarios.id
INNER JOIN categorias ON posts.categoria_id = categorias.id;
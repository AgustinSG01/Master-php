/*
    Consultas multitabla:
    Consultas que sirven para consultar varias tablas en una sola sentencia
*/

-- Mostrar las entradas con el nombre del usuario y el de la categoria
SELECT posts.id, posts.titulo, usuarios.nombre AS "Autor", categorias.nombre AS "Categoria"
FROM posts, usuarios, categorias
WHERE posts.usuario_id = usuarios.id AND posts.categoria_id = categorias.id;

-- INNER JOIN (Buena practica)
SELECT posts.id, posts.titulo, usuarios.nombre AS "Autor", categorias.nombre AS "Categoria"
FROM posts
INNER JOIN usuarios ON posts.usuario_id = usuarios.id
INNER JOIN categorias ON posts.categoria_id = categorias.id;

-- Mostrar el nombre de las categorias y cuantas entradas tienen
SELECT categorias.nombre AS "categoria", COUNT(posts.id) AS "posts" FROM categorias, posts
WHERE categorias.id = posts.categoria_id GROUP BY posts.categoria_id;

-- LEFT JOIN
SELECT categorias.nombre AS "Categoria", COUNT(posts.id) AS "posts" from categorias
LEFT JOIN posts ON posts.categoria_id = categorias.id
GROUP BY posts.categoria_id;

-- RIGHT JOIN
SELECT categorias.nombre AS "Categoria", COUNT(posts.id) AS "posts" from posts
RIGHT JOIN categorias ON posts.categoria_id = categorias.id
GROUP BY posts.categoria_id;

-- Mostrar el email de los usuarios y cuantas entradas tienen
SELECT usuarios.email AS "Usuario", COUNT(posts.id) AS "Posts" FROM usuarios, posts
WHERE usuarios.id = posts.usuario_id GROUP BY posts.usuario_id;
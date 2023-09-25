-- Consultas de agrupamiento 
SELECT COUNT(titulo) AS "Cantidad de posts", categoria_id FROM posts GROUP BY categoria_id; 

-- Consultas de agrupamiento con condiciones
SELECT COUNT(titulo) AS "Cantidad de posts", categoria_id 
FROM posts GROUP BY categoria_id HAVING COUNT(titulo) >= 4; 

/*
    AVG - Sacar la media
    COUNT - Contar numero de elementos
    MAX - Valor maximo del grupo
    MIN - valor minimo del grupo
    SUM - Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS "Media de entradas" FROM posts;
SELECT id, titulo FROM posts WHERE id = (SELECT MAX(id) FROM posts);
SELECT id, titulo FROM posts WHERE id = (SELECT MIN(id) FROM posts);
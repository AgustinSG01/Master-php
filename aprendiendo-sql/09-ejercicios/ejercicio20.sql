/*
    20. Mostrar el nombre del grupo con el vendedor de mayor salario
*/

SELECT * FROM grupos WHERE id =
(SELECT grupo_id FROM vendedores WHERE sueldo = (SELECT MAX(sueldo) FROM vendedores));


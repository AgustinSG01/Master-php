/*
    6. Mostrar en pantalla el nombre y apellido de los vendedores en una misma columna, su fecha de registro
    y el dia de la semana en que se registraron
*/

SELECT CONCAT(nombre, " ", apellido) AS "Nombre completo", fecha_alta, DAYNAME(fecha_alta) AS "Dia de ingreso" from vendedores;
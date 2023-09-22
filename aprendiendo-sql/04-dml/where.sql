-- Consulta con una condicion 
SELECT * FROM usuarios WHERE email = "admin@admin.com";

/*
    OPERADORES DE COMPARACION
    igual          =
    distinto       !=
    menor          <
    mayor          >
    menor o igual  <=
    mayor o igual  >=
    entre          between A and B
    En             in
    Es nulo        is null
    No nulo        is not null
    Como           like
    No es como     not like
*/ 

/*
    COMODINES   
    cualquier cantidad de caracteres: %
    Un caracter desconocido: _
*/

-- EJEMPLOS

-- 1. Mostrar nombre y apellido de los usuarios registrados en 2023
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) = 2023; 

-- 2. Mostrar nombre y apellido de los usuarios NO registrados en 2023
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2023; 

-- 3. Mostrar email de usuarios cuyo apellido contenga la letra A y su contraseña sea 3213asd
SELECT email FROM usuarios WHERE apellido LIKE "%a%" AND password = "3213asd";

-- 4. Sacar todos los registros mientras el año de la fecha sea PAR
SELECT * FROM usuarios WHERE (YEAR(fecha) % 2 = 0);

-- 5. Mostrat nombre y apellido de los usuarios cuyo nombre tenga mas de 5 letras, se hayan
-- registrado antes de 2023 y mostrar el nombre en mayusculas
SELECT UPPER(nombre) AS "nombre", apellido FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2023;
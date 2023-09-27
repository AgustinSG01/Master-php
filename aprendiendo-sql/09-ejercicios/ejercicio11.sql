/*
    11. Mostrar todos los cargos de los vendedores y el numero de vendedores con ese cargo
*/

SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo;
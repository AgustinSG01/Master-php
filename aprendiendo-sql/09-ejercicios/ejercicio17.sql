/*
    17. Mostrar un listado con los encargos realizados por "Fruteria boliviana"
*/

SELECT * FROM encargos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = "Fruteria boliviana");
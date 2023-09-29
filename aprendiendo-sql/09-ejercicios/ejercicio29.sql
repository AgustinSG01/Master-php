/*
    29. Crear una vista llamada vendedoresA que muestre todos los vendedores del grupo vendedores A
*/
CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN 
(SELECT id FROM grupos WHERE nombre = "Vendedores A");
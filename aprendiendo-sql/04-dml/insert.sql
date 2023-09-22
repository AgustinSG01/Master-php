-- Insertar nuevos registros
INSERT INTO usuarios VALUE(null, "Agustin", "Godoy", "1234@gmail.com", "abcd123", "2022-01-01");
INSERT INTO usuarios VALUE(null, "Juan", "Perez", "juan@gmail.com", "a1b2c3d4", "2023-09-22");
INSERT INTO usuarios VALUE(null, "Eduardo", "Gonzales", "eduardo@gmail.com", "3213asd", "2023-09-22");
INSERT INTO usuarios VALUE(null, "Admin", "Admin", "admin@admin.com", "admin", "2023-09-22");

-- Insertar registros solo con algunos campos
INSERT INTO usuarios(email, password) VALUE("email@gmail.com", "contraseña123");
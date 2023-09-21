-- Renombrar una tabla
ALTER TABLE usuarios RENAME TO usuarios_renomb;

-- Cambiar el nombre de una columna
ALTER TABLE usuarios_renomb CHANGE apellido apellidos varchar(100) null;

-- Modificar columna sin cambiar nombre
ALTER TABLE usuarios_renomb MODIFY apellidos char(50) not null;

-- Añadir columna
ALTER TABLE usuarios_renomb ADD website varchar(100) null;

-- Añadir restriccion a una columna
ALTER TABLE usuarios_renomb ADD CONSTRAINT uq_email UNIQUE(email); 

-- Borrar una columna
ALTER TABLE usuarios_renomb DROP website;
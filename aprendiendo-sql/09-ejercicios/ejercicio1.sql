/*
    1. Diseñar y crear la base de datos de un concesionario.
*/

CREATE DATABASE IF NOT EXISTS concesionario;
use concesionario;

CREATE TABLE coches(
    id INT(11) auto_increment NOT NULL,
    modelo varchar(100) NOT NULL,
    marca varchar(50),
    precio INT(20) NOT NULL,
    stock INT(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
);

CREATE TABLE grupos(
    id INT(11) auto_increment NOT NULL,
    nombre varchar(100) NOT NULL,
    ciudad varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
);

CREATE TABLE vendedores(
    id INT(11) auto_increment NOT NULL,
    grupo_id INT(11) NOT NULL,
    jefe INT(11),
    nombre varchar(100) NOT NULL,
    apellido varchar(150),
    cargo varchar(50),
    fecha_alta DATE,
    sueldo float(20, 2),
    comision float(10, 2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
);

CREATE TABLE clientes(
    id INT(11) auto_increment NOT NULL,
    vendedor_id INT(11),
    nombre varchar(150) NOT NULL,
    ciudad varchar(100),
    gastado FLOAT(50, 2),
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
);

CREATE TABLE encargos(
    id INT(11) auto_increment NOT NULL,
    cliente_id INT(11) NOT NULL,
    coche_id INT(11) NOT NULL,
    cantidad INT(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
);

-- RELLENAR BASE DE DATOS - INSERTS

-- COCHES
INSERT INTO coches VALUES(null, "Renault Clio", "Renault", 12000, 13);
INSERT INTO coches VALUES(null, "Seat Panda", "Seat", 10000, 10);
INSERT INTO coches VALUES(null, "Mercedes Ranchera", "Mercedes Benz", 32000, 24);
INSERT INTO coches VALUES(null, "Porche Cayene", "Porche", 65000, 5);
INSERT INTO coches VALUES(null, "Lambo Aventador", "Lamborghini", 170000, 2);
INSERT INTO coches VALUES(null, "Ferrare Spider", "Ferrari", 245000, 80);

-- GRUPOS
INSERT INTO grupos VALUES(null, "Vendedores A", "Madrid");
INSERT INTO grupos VALUES(null, "Vendedores B", "Madrid");
INSERT INTO grupos VALUES(null, "Directores mecanicos", "Madrid");
INSERT INTO grupos VALUES(null, "Vendedores A", "Bacelona");
INSERT INTO grupos VALUES(null, "Vendedores B", "Bacelona");
INSERT INTO grupos VALUES(null, "Vendedores A", "Torremolinos");
INSERT INTO grupos VALUES(null, "Vendedores B", "Torremolinos");
INSERT INTO grupos VALUES(null, "Vendedores A", "Guarroman");
INSERT INTO grupos VALUES(null, "Vendedores B", "Guarroman");

-- VENDEDORES
INSERT INTO vendedores Values(null, 1, null, "David", "Lopez", "Responsable de tienda", CURDATE(), 30000, 4);
INSERT INTO vendedores Values(null, 1, 1, "Francisco", "Gonzales", "Ayudante en tienda", CURDATE(), 23000, 2);
INSERT INTO vendedores Values(null, 2, null, "Florencia", "Hernandez", "Responsable de tienda", CURDATE(), 30000, 4);
INSERT INTO vendedores Values(null, 2, 3, "Jaime", "Altosano", "Ayudante en tienda", CURDATE(), 23000, 2);
INSERT INTO vendedores Values(null, 3, null, "Alex", "Dos Santos", "Mecanico jefe", CURDATE(), 50000, 2);
INSERT INTO vendedores Values(null, 4, null, "Maria", "Villafuerte", "Vendedor de recambios", CURDATE(), 15000, 8);
INSERT INTO vendedores Values(null, 5, null, "Sergio", "Reyes", "Vendedor experto", CURDATE(), 30000, 2);
INSERT INTO vendedores Values(null, 6, null, "Cinthya", "Roman", "Ejecutivo de cuentas", CURDATE(), 80000, 1);
INSERT INTO vendedores Values(null, 6, 8, "Juan", "Ramires", "Ayudante en tienda", CURDATE(), 23000, 2);

-- CLIENTES
INSERT INTO clientes VALUES(null, 1, "Construcciones joseju", "Madrid", 24000);
INSERT INTO clientes VALUES(null, 1, "Fruteria boliviana", "Fuengirola", 40000);
INSERT INTO clientes VALUES(null, 1, "Relojeria pipi", "Torremolinos", 64000);
INSERT INTO clientes VALUES(null, 1, "Imprenta tinta", "Albacete", 65000);
INSERT INTO clientes VALUES(null, 1, "Doff malvados y asociados", "Barcelona", 245000);
INSERT INTO clientes VALUES(null, 1, "Donald trompetas", "Malaga", 170000);
INSERT INTO clientes VALUES(null, 8, "Mercacoca", "Madrid", 0);

-- ENCARGOS
INSERT INTO encargos VALUES(null, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(null, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(null, 3, 3, 2, CURDATE());
INSERT INTO encargos VALUES(null, 4, 4, 1, CURDATE());
INSERT INTO encargos VALUES(null, 5, 6, 1, CURDATE());
INSERT INTO encargos VALUES(null, 6, 5, 1, CURDATE());

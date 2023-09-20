/*
    int(numero de caracteres) ENTERO
    integer(numero de caracteres) ENTERO (maximo 4294967295)
    varchar(numero de caracteres) STRING / ALFANUMERICO (maximo 255)
    char(numero de caracteres) STRING / ALFANUMERICO (maximo 255)
    float (numero de caracteres, numero de decimales) DECIMAL
    date, time, timestamp
    
    // String grandes
    TEXT 65535 caracteres
    MEDIUMTEXT 16m caracteres
    LONGTEXT  4b caracteres

    // enteros grandes
    MEDIUMINT
    BIGINT
*/

/*
    CREAR TABLA
*/
CREATE TABLE usuarios(
    id  int(11) auto_increment not null,
    nombre  varchar(100) not null,
    apellido varchar(225) default "Anon",
    email   varchar(100) not null,
    password varchar(225),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
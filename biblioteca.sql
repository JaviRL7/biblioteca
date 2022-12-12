DROP TABLE IF EXISTS lectores CASCADE;

CREATE TABLE lectores (
    id           bigserial    PRIMARY KEY,
    nombre       varchar(2)   NOT NULL UNIQUE,
    telefono     numeric(9)   NOT NULL
);



INSERT INTO lectores (nombre, telefono)
    VALUES ('Juan', 956112233),
           ('David', 956112234),
           ('Maria', 956112235),
           ('Julio', 956112236);

DROP TABLE IF EXISTS libros CASCADE;

CREATE TABLE libros (
    id           bigserial    PRIMARY KEY,
    isbn         numeric(5)   NOT NULL UNIQUE,
    titulo       varchar(255) NOT NULL
);


INSERT INTO libros (isbn, titulo)
    VALUES (10, 'Informática'),
           (20, 'Administrativo'),
           (30, 'Prevención'),
           (40, 'Laboratorio'),
           (50, 'Automoción');

DROP TABLE IF EXISTS prestamo CASCADE;

CREATE TABLE prestamo (
    id        bigserial    PRIMARY KEY,
    lector_id bigint       NOT NULL REFERENCES lectores (id),
    libro_id  bigint       NOT NULL REFERENCES libros (id),
    creado_en timestamp    NOT NULL,
    devuelto_en timestamp
);


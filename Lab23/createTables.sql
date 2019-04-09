CREATE DATABASE IF NOT EXISTS Examen2;
USE Examen2;

CREATE TABLE lugar (
    idlugar int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    nombre varchar(50)
);

INSERT INTO lugar (nombre) VALUES
('Centro turístico'), ('Laboratorios'), ('Restaurante'), 
('Centro operativo'), ('Triceratops'), ('Dilofosaurios'), 
('Velociraptors'), ('TRex'), ('Planicie de los herbívoros');

CREATE TABLE tipo (
    idtipo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descripcion varchar(50)
);

INSERT INTO tipo (descripcion) VALUES 
('Falla eléctrica'), ('Fuga de herbívoro'), ('Fuga de velociraptors'),
('Fuga de TRex'), ('Robo de ADN'), ('Auto descompuesto'), ('Visitantes en zona no autorizada');

CREATE TABLE incidente (
    idincidente int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha datetime,
    idlugar int,
    idtipo int,
    FOREIGN KEY (idlugar) REFERENCES lugar(idlugar),
    FOREIGN KEY (idtipo) REFERENCES tipo(idtipo)
);
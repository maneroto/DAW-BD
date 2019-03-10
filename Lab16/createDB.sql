CREATE DATABASE dbname;

CREATE TABLE Fruit
(
    name varchar(50) not null primary key,
    units numeric,
    quantity numeric,
    price numeric,
    country varchar(100)
);

INSERT INTO Fruit VALUES("Manzana", 4, 3, 5, "Uruguay");
INSERT INTO Fruit VALUES("Pera", 6, 2, 6, "México");
INSERT INTO Fruit VALUES("Papaya", 5, 2, 12, "Costa Rica");
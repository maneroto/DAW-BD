CREATE TABLE ClienteBanca 
(
	nocuenta varchar(5) NOT NULL PRIMARY KEY,
	nombre varchar(30),
	saldo numeric(10,2)
);

INSERT INTO ClienteBanca(nocuenta, nombre, saldo) VALUES 
('11111', 'Javier', 4700),
('22222', 'Alonso', 2424),
('33333', 'Irving', 5657),
('44444', 'Juan', 3895),
('55555', 'Emmanuel', 5000);

CREATE TABLE TipoMovimiento
(
	clavem varchar(2) NOT NULL PRIMARY KEY,
	descripcion varchar(30)
);

INSERT INTO TipoMovimiento(clavem, descripcion) VALUES
('m1', 'Deposito'),
('m2', 'Retiro'),
('m3', 'Consulta de saldo');

CREATE TABLE MovimientoBancario 
(
	nocuenta varchar(5),
	clavem varchar(2),
	fecha datetime,
	monto numeric(10,2),
	FOREIGN KEY (nocuenta) REFERENCES ClienteBanca(nocuenta),
	FOREIGN KEY (clavem) REFERENCES TipoMovimiento(clavem)
);
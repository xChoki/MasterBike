drop database MasterBike;
create database MasterBike;
	use MasterBike;
	
	create table producto(
		id_producto int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nombre varchar(100) NOT NULL,
		descripcion varchar(100) NOT NULL,
		fabricante varchar(100) NOT NULL,
		precio int(10) NOT NULL,
		stock int(10) NOT NULL
	);
	insert into producto(nombre, descripcion, fabricante, precio, stock) values ('producto 1', 'descripcion producto 1', 'fabricante producto 1', 1990, 5);
	insert into producto(nombre, descripcion, fabricante, precio, stock) values ('producto 2', 'descripcion producto 2', 'fabricante producto 2', 14990, 10);

	create table registros(
		id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nombre varchar(30) NOT NULL,
		apellido varchar(30) NOT NULL,
		correo varchar(100) NOT NULL,
		contrasena varchar(1000) NOT NULL,
		creado datetime NOT NULL
	);
	insert into registros values('01','Admin','MasterBike','admin@masterbike.cl','pass', NOW());

	




create database parqueadero;
USE parqueadero;

CREATE TABLE persona
(
cedula_persona int not null,
nombre varchar(30) not null,
apellido varchar(30) not null,
primary key(cedula_persona)
);

CREATE TABLE vehiculo
(
id_vehiculo int not null,
cedula_persona1 int not null,
marca varchar(30),
placa varchar(7),
primary key(id_vehiculo),
FOREIGN KEY (cedula_persona1) references persona (cedula_persona)
);

CREATE TABLE ubicacion
(
idUbicacion int not null,
nombre varchar(50) not null,
ubicacion varchar(50) not null,
primary key(idUbicacion)
);

CREATE TABLE bahia
(
idBahia int not null,
idUbicacion1 int not null,
primary key(idBahia),
FOREIGN KEY (idUbicacion1) references ubicacion (idUbicacion)
);

CREATE TABLE pago
(
idPago int not null,
idBahia1 int not null,
id_vehiculo1 int not null,
tiempo date,
costo float,
primary key(idPago),
FOREIGN KEY (idBahia1) references bahia (idBahia),
FOREIGN KEY (id_vehiculo1) references vehiculo (id_vehiculo)
);

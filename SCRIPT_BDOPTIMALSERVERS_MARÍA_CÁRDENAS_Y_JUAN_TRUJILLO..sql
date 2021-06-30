CREATE DATABASE BDoptimalServers;

USE BDoptimalServers;

CREATE TABLE Conectividad (
idConectividad int primary key auto_increment,
tipoConec varchar (10) not null,
protocoloConect varchar (20) not null,
topoRed varchar (15) not null
);

CREATE TABLE Hardware (
idHardware int primary key auto_increment,
board varchar (15) not null,
procesador varchar (20) not null,
discDuro varchar (15) not null,
puertos varchar (40) not null,
tipomemoria varchar (10) not null
);

CREATE TABLE Software (
idSoftware int primary key auto_increment,
nombreSoft varchar (20) not null,
versionSoft varchar (20) not null,
estadoSoft varchar (15) not null,
tipoSoft varchar (20) not null,
caracteristicas varchar (40) not null,
fechaInst date not null,
fechaLice date null,
caducidadSoft boolean not null,
observacion varchar (50) not null
);

CREATE TABLE Usuario (
idUsuario int primary key auto_increment,
nombreUsu varchar (20) not null,
apellidoUsu varchar (30) not null,
telefonoUsu varchar (15) not null,
tipoDocUsu varchar (20) not null,
numDocUsu int not null,
emailUsu varchar (20) not null,
contraUsu varchar (20) not null,
tipoUsuario  varchar (20) not null,
estadoUsu varchar (15) not null
);

CREATE TABLE Incidencia (
idIncidencia int primary key auto_increment,
fallaPre varchar (50) not null,
fechaRep date not null,
idUsuarioFK int
);

CREATE TABLE Hojadevida (
idHojadevida int primary key auto_increment,
ciudadHoja varchar (20) not null,
fechaRecHoja date not null,
fechaEntHoja date not null,
observacionHoja varchar (50) not null,
idConectividadFK int
);

CREATE TABLE Testentrada (
idTestentrada int primary key not null,
fechaReaTesten date not null,
fechaEntTesten date not null,
observacionTesten varchar (50) not null,
idEquipoFK int
);

CREATE TABLE Testsalida (
idTestsalida int primary key not null,
fechaReaTestsal date not null,
fechaEntTestsal date not null,
observacionTestsal varchar (50) not null,
idEquipoFK int
);

CREATE TABLE Bitacora (
idBitacora int primary key auto_increment,
tipoTareaBit varchar (40),
fechaReaBit date not null,
horaReaBit time not null,
procedReaBit varchar (50) not null,
observacionBit varchar (50) not null,
idHojadevidaFK int,
idUsuarioFK int
);

CREATE TABLE Equipo (
idEquipo int primary key auto_increment,
estadoEquip varchar (20) not null,
Marca varchar (15) not null,
Modelo varchar (15) not null,
idHojadevidaFK int,
idHardwareFK int,
idSoftwareFK int
);


ALTER TABLE Incidencia
ADD CONSTRAINT FKUsuarioIncidencia
FOREIGN KEY (idUsuarioFK)
REFERENCES Usuario (idUsuario);

ALTER TABLE Hojadevida
ADD CONSTRAINT FKConectividadHojadevida
FOREIGN KEY (idConectividadFK)
REFERENCES Conectividad (idConectividad);

ALTER TABLE Testentrada
ADD CONSTRAINT FKEquipoTestentrada
FOREIGN KEY (idEquipoFK)
REFERENCES Equipo (idEquipo);

ALTER TABLE Testsalida
ADD CONSTRAINT FKEquipoTestsalida
FOREIGN KEY (idEquipoFK)
REFERENCES Equipo (idEquipo);

ALTER TABLE Bitacora
ADD CONSTRAINT FKHojadevidaBitacora
FOREIGN KEY (idHojadevidaFK)
REFERENCES Hojadevida (idHojadevida);

ALTER TABLE Bitacora
ADD CONSTRAINT FKUsuarioBitacora
FOREIGN KEY (idUsuarioFK)
REFERENCES Usuario (idUsuario);

ALTER TABLE Equipo
ADD CONSTRAINT FKHojadevidaEquipo
FOREIGN KEY (idHojadevidaFK)
REFERENCES Hojadevida (idHojadevida);

ALTER TABLE Equipo
ADD CONSTRAINT FKHardwareEquipo
FOREIGN KEY (idHardwareFK)
REFERENCES Hardware (idHardware);

ALTER TABLE Equipo
ADD CONSTRAINT FKSoftwareEquipo
FOREIGN KEY (idSoftwareFK)
REFERENCES Software (idSoftware);







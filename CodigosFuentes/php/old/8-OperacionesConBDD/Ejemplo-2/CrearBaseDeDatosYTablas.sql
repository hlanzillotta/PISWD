
drop database IF EXISTS basededatos;
 
create database IF NOT EXISTS basededatos;

use BaseDeDatos;


create table Alumno (
			id smallint primary key,
			NyA varchar(50) not null,
			edad int not null
);

create table Materia (
			id smallint primary key,
			Nombre varchar(50) not null,
			anio int not null
);

create table Cursa (
			id_Alumno smallint,
			id_Materia smallint,
			primary key(id_Alumno,id_Materia), 
			foreign key (id_Alumno) references Alumno (id),
			foreign key (id_Materia) references Materia (id)
);



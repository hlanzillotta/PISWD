/*
	SENTENCIAS DDL (DATA DEFINITION LANGUAGE - LENGUAJE DE DEFINICIÓN DE DATOS)
    ---------------------------------------------------------------------------
     
    ESTAS SENTENCIAS PERMITEN CREAR LAS ESTRUCTURAS DEL ESQUEMA DE LA BASE DE DATOS.
    POR EJEMPLO : CREAR Y ELMINAR BASES DE DATOS, CREAR, ELIMINAR,MODIFICAR TABLAS,ETC.	

*******************************************************************************************/

--REFERENCIAS : LOS CARACTERES [ ] INDICAN OPCIONALIDAD.

--Crear base de datos.
create database <nombreBaseDeDatos>;

--Eliminar base de datos.
drop database <nombreBaseDeDatos>;

--Crear Tablas.
create table <nombreTabla> (
      
    <nombre campo1> <tipo de dato> [NULL/NOT NULL] [primary key],--clave primaria simple.
	<nombre campo2> <tipo de dato> [NULL/NOT NULL],
	<nombre campo3> <tipo de dato> [NULL/NOT NULL],
	<nombre campo4> <tipo de dato> [NULL/NOT NULL],
		.
		.
		.
	<nombre campoN> <tipo de dato> [NULL/NOT NULL],
	primary key(--campo/s--); --clave primaria simple o compuesta.
    FOREIGN KEY (Nombre campo) REFERENCES <tabla> (campo_tabla)--clave foránea simple
)

--Eliminar Tabla.
drop table <nombreTabla>;

--Agregar un campo a la tabla.
alter table <nombretabla> add <nombre del campo> <tipo de dato>;

--Modificar las propiedades de un campo de la tabla.
alter table <nombretabla> modify <nombre del campo> <tipo de dato>;

--Eliminar un campo de la tabla.
ALTER TABLE <nombretabla> DROP <nombre del campo>;


/*
	SENTENCIAS DML (DATA MANIPULATION LANGUAGE - LENGUAJE DE MANIPULACIÓN DE DATOS)
    -------------------------------------------------------------------------------
     
    ESTAS SENTENCIAS PERMITEN MANIPULAR LOS DATOS ALMACENADOS EN LAS TABLAS DE LA
    BASE DE DATOS.
    POR EJEMPLO : SELECCIONAR, INSERTAR, ELIMINAR Y MODIFICAR.	
	
*******************************************************************************************/

--REFERENCIAS : LOS CARACTERES [ ] INDICAN OPCIONALIDAD.


----------------------------------------SELCCIONAR DATOS DE UNA TABLA----------------------------------------
select  <campo1>,<campo2>,...,<campoN> | *  from <nombre tabla>
[where <condiciones> 
 inner join <tabla> on <condicion/es> 
 group by <campo/s>
 having <condiciones>
 order by <campo/s>
];

----------------------------------------INSERTAR DATOS EN UNA TABLA-------------------------------------------

--INSERTAR UN GRUPO DE VALORES.
insert into <nombreTabla> [<campo1>,<campo2>,...<campoN>] values (<valor1>,<valor2>,<valor3>,...,<valor N>);
--Nota : El número de orden de cada valor se corresponde con el número de orden del campo en la tabla.
--       Es decir que <valor1> se corresponde con el 1er campo de la tabla.
--                    <valor2> se corresponde con el 2do campo de la tabla.
--                    y así sucesivamente.

--INSERTAR VARIOS GRUPOS DE VALORES.
insert into <nombreTabla> values (<valor1>,<valor2>,<valor3>,...,<valor N>),
                                 (<valor1>,<valor2>,<valor3>,...,<valor N>),
								   .................................. 
                                 (<valor1>,<valor2>,<valor3>,...,<valor N>);

/*
  En el caso de que solo se desee insertar datos en algunos campos de la tabla ,y no en todos los campos,
  es obligatorio indicar los campos a los que se le insertará datos, en caso contrario no es necesario
  indicarlos.
  Ejemplo : insert into <NombreTabla> (campo1,campo2) values(<valor1>,<valor2>);
  
*/
								  
----------------------------------------MODIFICAR DATOS EN UNA TABLA-------------------------------------------

update <nombreTabla> set campo1=valor1, campo2=valor2,...,campoN=valorN where <condiciones>;

----------------------------------------ELIMINAR DATOS EN UNA TABLA-------------------------------------------

delete from <nombreTabla> where <condicion/es>;


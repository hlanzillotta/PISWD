use prueba;

DELIMITER $$

create procedure SelccionarTodasLasPersonasOrdEdadDesc()


    BEGIN 
    
       select * from persona order by edad DESC;
       
    END $$	

delimiter ;
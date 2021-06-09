delimiter //
create procedure search(IN departement varchar(3))
BEGIN
SELECT ville_nom FROM villes_france_free WHERE ville_departement = departement;
END //
delimiter ;
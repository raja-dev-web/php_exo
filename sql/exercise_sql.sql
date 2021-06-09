DELIMITER //
CREATE trigger suppression
BEFORE DELETE
on utilisateur
for each row
if old.id_utilisateur in (SELECT DISTINCT id_utilisateur FROM article) 
then
DELETE FROM article WHERE id_utilisateur = old.id_utilisateur;
end if//
DELIMITER ;

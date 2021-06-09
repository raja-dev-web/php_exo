DELIMITER //
CREATE trigger addPromo
AFTER INSERT
on client
for each row
INSERT INTO promo(code, id_Client) VALUES ('AZERT', New.id_Client);
DELIMITER ;

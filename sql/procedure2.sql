start transaction;

insert into student(prenom, nom) values ("Rebecca", "Jean");

savepoint jalon1;

insert into student(prenom, nom) values ("Adhavan", "Valan");

rollback to savepoint jalon1;

insert into student(prenom, nom) values ("Emmanuel", "Thomas");

commit;
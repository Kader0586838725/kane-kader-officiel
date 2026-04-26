CREATE DATABASE db_repertoire;
USE db_repertoire;

CREATE TABLE reseau(
   num int(2) not null auto_increment primary key,
   designation varchar(10) not null
)engine = innodb;

CREATE TABLE personne(
	id varchar(20) not null primary key,
	nom varchar(20) not null,
	prenom varchar(50) not null,
	date_naiss date
)engine = innodb;

CREATE TABLE numero(
  code int(11) not null auto_increment primary key,
  libelle varchar(12) not null unique,
  person_id varchar(20) not null,
  reseau_num int(2) not null,
  foreign key (person_id) references personne(id) on delete cascade on update cascade,
  foreign key (reseau_num) references reseau(num) on delete cascade
)engine= innodb;

INSERT INTO reseau(designation) VALUES("ORANGE");
INSERT INTO reseau(designation) VALUES("MTN");
INSERT INTO reseau(designation) VALUES("MOOV");

INSERT INTO personne(id,nom,prenom,date_naiss) VALUES("23451C","OUATTARA","RAMATOU","2002-09-08");


SELECT * FROM reseau;
SELECT * FROM personne;
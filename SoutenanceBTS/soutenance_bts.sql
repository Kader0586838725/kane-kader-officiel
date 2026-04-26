/*creation de la base de donnée */
CREATE DATABASE soutenance_bts;
/*Utilisation de la base de donnée*/
USE soutenance_bts;
/*Cretion de la table Etudiant*/
CREATE TABLE Etudiant(
    idetud int(11) primary key auto_increment,
    matricule varchar(100) not null unique,
    nom varchar(40) not null,
    prennom varchar(40) not null,
    datenaissance date not null,
    telephone varchar(20) not null unique,
    ville varchar(30) not null

)engine=innoDB;
/*Cretion de la table paiment*/

CREATE TABLE paiement(
    codpaie int(11) primary key,
    monatnt varchar(40) not null,
    idetud int(11) not null,
    constraint fk_etud foreign key (idetud) references Etudiant(idetud) on delete cascade
)engine = innoDB;
/*Cretion de la table rendez_vous*/

CREATE TABLE rendez_vous(
    idRDV int (12) primary key,
    libRDV varchar(40) not null,
    codpaie int(11) not null,
    constraint fk_paie foreign key(codpaie) references paiement(codpaie) on delete cascade
)engine = innoDB;
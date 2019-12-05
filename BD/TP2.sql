DROP TABLE IF EXISTS Membres ;
CREATE TABLE Membres (persnum SMALLINT  AUTO_INCREMENT NOT NULL,
persnom VARCHAR(50),
persprenom VARCHAR(50),
statut VARCHAR(16),
grade SMALLINT,
respequip BOOL,
equipnum INT,
PRIMARY KEY (persnum) ,
FOREIGN KEY (equipnum) REFERENCES Equipes (equipnum),
 );

DROP TABLE IF EXISTS Equipes ;
CREATE TABLE Equipes (equipnum INT  AUTO_INCREMENT NOT NULL,
equipnom VARCHAR(50),
datecreation DATE,
PRIMARY KEY (equipnum) ) ;

DROP TABLE IF EXISTS Projet ;
CREATE TABLE Projet (projnom VARCHAR(6)  AUTO_INCREMENT NOT NULL,
projdebut DATE,
projduree INT,
persnum SMALLINT,
domainnum INT,
PRIMARY KEY (projnom) ,
FOREIGN KEY (persnum) REFERENCES Membres (persnum) ,
FOREIGN KEY (domainnum) REFERENCES Domaines (domainnum) );

DROP TABLE IF EXISTS Domaines ;
CREATE TABLE Domaines (domainnum INT  AUTO_INCREMENT NOT NULL,
designation VARCHAR(50),
PRIMARY KEY (domainnum) ) ;

DROP TABLE IF EXISTS Contrat ;
CREATE TABLE Contrat (contnum SMALLINT  AUTO_INCREMENT NOT NULL,
contdebut DATE,
montant BIGINT,
projnom VARCHAR(6) NOT NULL,
PRIMARY KEY (contnum) ,
FOREIGN KEY (projnom) REFERENCES Projet (projnom) ) ;

DROP TABLE IF EXISTS Organisme ;
CREATE TABLE Organisme (codorg SMALLINT  AUTO_INCREMENT NOT NULL,
nomorg VARCHAR(16),
adorg VARCHAR(100),
qualif VARCHAR(16),
PRIMARY KEY (codorg) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Contacts ;
CREATE TABLE Contacts (idcontac INT  AUTO_INCREMENT NOT NULL,
civilcontact VARCHAR(8),
Nomcontac VARCHAR(50),
prencontac VARCHAR(50),
telcontac BIGINT,
faxcontac BIGINT,
mailcontac VARCHAR(100),
codorg SMALLINT NOT NULL,
PRIMARY KEY (idcontac) ,
 FOREIGN KEY (codorg) REFERENCES Organisme (codorg) );

DROP TABLE IF EXISTS Publications ;
CREATE TABLE Publications (publinum SMALLINT  AUTO_INCREMENT NOT NULL,
titre VARCHAR(50),
publidate DATE,
publitype VARCHAR(16),
projnom VARCHAR(6) NOT NULL,
PRIMARY KEY (publinum) ,
FOREIGN KEY (projnom) REFERENCES Projet (projnom) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Auteurs ;
CREATE TABLE Auteurs (persnum SMALLINT  AUTO_INCREMENT NOT NULL,
publinum SMALLINT NOT NULL,
Numordre SMALLINT,
PRIMARY KEY (persnum,
 publinum) ,
 FOREIGN KEY (persnum) REFERENCES Membres (persnum) ,
  FOREIGN KEY (publinum) REFERENCES Publications (publinum) );

DROP TABLE IF EXISTS Dev-Proj ;
CREATE TABLE Dev-Proj (equipnum INT  AUTO_INCREMENT NOT NULL,
projnom VARCHAR(6) NOT NULL,
porteur BOOL,
PRIMARY KEY (equipnum,
 projnom) ,
FOREIGN KEY (equipnum) REFERENCES Equipes (equipnum) ,
FOREIGN KEY (projnom) REFERENCES Projet (projnom)) ;

DROP TABLE IF EXISTS ParticpProj ;
CREATE TABLE ParticpProj (persnum SMALLINT  AUTO_INCREMENT NOT NULL,
projnom VARCHAR(6) NOT NULL,
tauxparticip SMALLINT,
PRIMARY KEY (persnum,
 projnom) ,
 FOREIGN KEY (persnum) REFERENCES Membres (persnum),
 FOREIGN KEY (projnom) REFERENCES Projet (projnom) ) ;

DROP TABLE IF EXISTS ContraSuivi ;
CREATE TABLE ContraSuivi (contnum SMALLINT  AUTO_INCREMENT NOT NULL,
idcontac INT NOT NULL,
PRIMARY KEY (contnum,
 idcontac) ,
FOREIGN KEY (contnum) REFERENCES Contrat (contnum) ,
 FOREIGN KEY (idcontac) REFERENCES Contacts (idcontac) ) ;

DROP TABLE IF EXISTS Financement ;
CREATE TABLE Financement (contnum SMALLINT  AUTO_INCREMENT NOT NULL,
codorg SMALLINT NOT NULL,
apport INT,
PRIMARY KEY (contnum,
 codorg) ,
 FOREIGN KEY (contnum) REFERENCES Contrat (contnum) ,
FOREIGN KEY (codorg) REFERENCES Organisme (codorg) ) ;

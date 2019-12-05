DROP TABLE IF EXISTS Publi_type ;
CREATE TABLE Publi_type(publitype INT ,
libelletype VARCHAR(25) ,
PRIMARY KEY (publitype) );



ALTER TABLE publications
ADD FOREIGN KEY (publitype) REFERENCES  Publi_type(publitype) ;



DROP TABLE IF EXISTS Conf_porte ;
CREATE TABLE Conf_porte(porteconf INT ,
libelleporte VARCHAR(20) ,
PRIMARY KEY  (porteconf) );



ALTER TABLE Conference
ADD FOREIGN KEY (porteconf) REFERENCES  Conf_porte(porteconf) ;



DROP TABLE IF EXISTS Particip_mode ;
CREATE TABLE Particip_mode(modeparticip INT ,
libellemode VARCHAR(20) ,
PRIMARY KEY  (modeparticip) );



DROP TABLE IF EXISTS Conference ;
CREATE TABLE Conference(codeconf INT ,
nomconf VARCHAR(100) ,
dateconf DATE ,
dureconf INT ,
webconf VARCHAR(200),
paysconf VARCHAR(50) ,
porteconf INT ,
PRIMARY KEY  (codeconf) ,
FOREIGN KEY (porteconf) REFERENCES Conf_porte (porteconf) ) ;



DROP TABLE IF EXISTS Publiconf ;
CREATE TABLE Publiconf(publinum INT ,
codeconf INT ,
PRIMARY KEY (publinum , codeconf) ,
FOREIGN KEY (publinum) REFERENCES publications (publinum) ,
FOREIGN KEY (codeconf) REFERENCES Conference (codeconf));



DROP TABLE IF EXISTS Participconf ;
CREATE TABLE Participconf(persnum INT ,
codeconf INT ,
modeparticip INT  ,
PRIMARY KEY (persnum , codeconf) ,
FOREIGN KEY (persnum) REFERENCES Membres (persnum)  ,
FOREIGN KEY (codeconf) REFERENCES Conference (codeconf) ,
FOREIGN KEY (modeparticip) REFERENCES Particip_mode (modeparticip) ) ;

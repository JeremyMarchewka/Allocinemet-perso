#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: film
#------------------------------------------------------------

CREATE TABLE film(
        Id_film         Int  Auto_increment  NOT NULL ,
        Nom_du_film     Varchar (100) NOT NULL ,
        Affiche_du_film Varchar (50) NOT NULL ,
        Trailer         Varchar (250) NOT NULL ,
        Date_de_sortie  Date NOT NULL ,
        Duree           Time NOT NULL ,
        Synopsis        Varchar (250) NOT NULL
	,CONSTRAINT film_PK PRIMARY KEY (Id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre
#------------------------------------------------------------

CREATE TABLE Genre(
        Id_genre Int  Auto_increment  NOT NULL ,
        Genre    Varchar (250) NOT NULL
	,CONSTRAINT Genre_PK PRIMARY KEY (Id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Identité
#------------------------------------------------------------

CREATE TABLE Identite(
        Id_identite Int  Auto_increment  NOT NULL ,
        Genre       Varchar (250) NOT NULL
	,CONSTRAINT Identite_PK PRIMARY KEY (Id_identite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        Id_user     Int  Auto_increment  NOT NULL ,
        Nom         Varchar (250) NOT NULL ,
        Prenom      Varchar (250) NOT NULL ,
        Mail        Varchar (250) NOT NULL ,
        Pseudo      Varchar (250) NOT NULL ,
        MDP         Varchar (250) NOT NULL ,
        Id_identite Int
	,CONSTRAINT User_PK PRIMARY KEY (Id_user)

	,CONSTRAINT User_Identite_FK FOREIGN KEY (Id_identite) REFERENCES Identite(Id_identite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartient
#------------------------------------------------------------

CREATE TABLE Appartient(
        Id_genre Int NOT NULL ,
        Id_film  Int NOT NULL
	,CONSTRAINT Appartient_PK PRIMARY KEY (Id_genre,Id_film)

	,CONSTRAINT Appartient_Genre_FK FOREIGN KEY (Id_genre) REFERENCES Genre(Id_genre)
	,CONSTRAINT Appartient_film0_FK FOREIGN KEY (Id_film) REFERENCES film(Id_film)
)ENGINE=InnoDB;


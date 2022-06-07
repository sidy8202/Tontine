CREATE TABLE utilisateur(
   Id_utilisateur INT,
   nom_util VARCHAR(50),
   prenom_util VARCHAR(50),
   phone VARCHAR(20),
   email VARCHAR(50),
   adresse VARCHAR(50),
   username VARCHAR(50),
   password VARCHAR(50),
   type_compte VARCHAR(50),
   PRIMARY KEY(Id_utilisateur)
);

CREATE TABLE programme(
   Id_programme INT,
   date_progra DATE,
   heure TIME,
   Id_utilisateur INT NOT NULL,
   PRIMARY KEY(Id_programme),
   FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur)
);

CREATE TABLE solde(
   Id_solde INT,
   montant_actu INT,
   Id_utilisateur INT NOT NULL,
   PRIMARY KEY(Id_solde),
   FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur)
);

CREATE TABLE cotisation(
   Id_cotisation INT,
   date_payement DATE,
   heure_payement TIME,
   mode_payement VARCHAR(50),
   montant_payé VARCHAR(50),
   Id_utilisateur INT NOT NULL,
   PRIMARY KEY(Id_cotisation),
   FOREIGN KEY(Id_utilisateur) REFERENCES utilisateur(Id_utilisateur)
);

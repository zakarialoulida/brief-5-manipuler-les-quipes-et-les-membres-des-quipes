create database mydata;
 
use mydata;

create table PERSONNEL(
 Membre_ID  int auto_increment ,  
 nom  varchar(200),
 prénom  varchar(200),
  email   varchar(200) ,
téléphone int ,
 rôle varchar(200) ,
 équipe_ID int   ,
 FOREIGN KEY (équipe_ID) REFERENCES EQUIPE (équipe_ID),
 primary key (Membre_ID ,email)
 );
create table EQUIPE(
équipe_ID int ,
Nom_Équipe  varchar(200),
Date_de_Création date ,
primary key (équipe_ID,Date_de_Création)
);
alter table PERSONNEL
add column statut varchar(200) ;
insert into EQUIPE(Nom_Équipe,Date_de_Création) values('firstequipo' ,'2023/01/10');
alter table EQUIPE
modify column équipe_ID int auto_increment ;

ALTER TABLE EQUIPE
MODIFY COLUMN équipe_ID INT AUTO_INCREMENT;
ALTER TABLE personnel
ADD CONSTRAINT personnel_ibfk_1 FOREIGN KEY (équipe_ID) REFERENCES EQUIPE(équipe_ID);
# to delete all rows from a table
SET SQL_SAFE_UPDATES = 0;
delete from PERSONNEL ;
#insertin table
 INSERT INTO PERSONNEL (nom, prénom, email, téléphone, rôle, équipe_ID,statut) VALUES
('Dupont', 'Alice', 'alice.dupont@example.com', 111222333, 'Analyste', 2,'active'),
('Dupont', 'Alice', 'alice.dupont@example.com', 111222333, 'Analyste', 3,'active'),
('Dupont', 'Alice', 'alice.dupont@example.com', 111222333, 'Analyste', 1,'active'),
('Martin', 'Éric', 'eric.martin@example.com', 444555666, 'Développeur', 2,'active'),
('Lefevre', 'Sophie', 'sophie.lefevre@example.com', 777888999, 'Designer', 1,'active'),
('Tremblay', 'Michel', 'michel.tremblay@example.com', 123456789, 'Manager', 2,'active'),
('Gagnon', 'Isabelle', 'isabelle.gagnon@example.com', 987654321, 'Développeur', 1,'active'),
('Doe', 'John', 'john.doe@example.com', 123456789, 'Manager', 3,'active'),
('Smith', 'Jane', 'jane.smith@example.com', 987654321, 'Developer', 3,'active');

use mydata;

SELECT *FROM EQUIPE;
SELECT *FROM PERSONNEL;

CREATE DATABASE pb;
USE pb;
CREATE TABLE cenik
(
    ID int AUTO_INCREMENT,
    Cena DOUBLE not null,
    Velikost int not null,
    Barva varchar(255),
    PRIMARY KEY (ID)
);
CREATE TABLE images (
	id_of_image int PRIMARY KEY AUTO_INCREMENT,
    image_link varchar(255) 
);
CREATE TABLE coments 
(
    id_coment int AUTO_INCREMENT PRIMARY KEY,
    ime varchar(255),
    priimek varchar(255),
    coment varchar(255)
);
INSERT INTO coments(ime, priimek, coment)
VALUES ("admin","admin","Test");
INSERT INTO images(image_link)
VALUES 
("luc.JPG"),
("luc-ravna.jpg"),
("elminluc.JPG"),
("Slika1.jpg"),
("ajdinminea.JPG"),
("lucoff.JPG");
INSERT INTO cenik(Cena,Velikost,Barva) VALUES
(19.99,30,"Rdeča"),
(25.99,50,"Črna"),
(32.99,80,"Zelena");


CREATE DATABASE uporabniki;
USE uporabniki;
CREATE table uporabniki(id int UNIQUE AUTO_INCREMENT, mail varchar(50), geslo varchar(50), ime varchar(50), priimek varchar(50));
INSERT INTO uporabniki(mail, geslo, ime, priimek) VALUES("admin","admin","admin","admin");
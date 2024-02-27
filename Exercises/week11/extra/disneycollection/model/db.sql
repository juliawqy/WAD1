drop database if exists week11disneycollection;

create database week11disneycollection;
use week11disneycollection;

create table if not exists DISNEY (
    id        INT            NOT NULL AUTO_INCREMENT,
    movie    VARCHAR(50) NOT NULL,
    year     VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO DISNEY (movie, year) VALUES ("Pinocchio", "1940");
INSERT INTO DISNEY (movie, year) VALUES ("The Little Mermaid", "1989");
INSERT INTO DISNEY (movie, year) VALUES ("Aladdin", "1992");
INSERT INTO DISNEY (movie, year) VALUES ("The Lion King", "1994");
INSERT INTO DISNEY (movie, year) VALUES ("Beauty and the Beast", "1991");

create table if not exists SOUNDTRACK(
    id        INT            NOT NULL AUTO_INCREMENT,
    movie	VARCHAR(50) NOT NULL,
    playlist	VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("Pinocchio", "When You Wish Upon a Star");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("The Little Mermaid", "Part of Your World");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("The Little Mermaid", "Fireworks");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("The Little Mermaid", "Under the Sea");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("Aladdin", "A Whole New World");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("The Lion King", "Be Prepared");
INSERT INTO SOUNDTRACK(movie, playlist)	VALUES ("The Lion King", "Can You Feel the Love Tonight");




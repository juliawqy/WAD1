drop database if exists week11;

create database week11;
use week11;

CREATE TABLE IF NOT EXISTS book (
    isbn        VARCHAR(128) NOT NULL,
    title       VARCHAR(128) NOT NULL,
    PRIMARY KEY(isbn)
);

INSERT INTO book (isbn, title) VALUES ('isbn1', 'I love SCIS');
INSERT INTO book (isbn, title) VALUES ('isbn2', 'SCIS loves me');
INSERT INTO book (isbn, title) VALUES ('isbn3', 'History of SMU');

CREATE TABLE IF NOT EXISTS person (
    id           INT NOT NULL AUTO_INCREMENT, 
    name        VARCHAR(10)  NOT NULL,
    gender      CHAR(2) NOT NULL,
    age   		INT NOT NULL CHECK (age < 200), 
    PRIMARY KEY(id)
);

INSERT INTO person (name, gender, age) VALUES ('Amy', 'F', '28');
INSERT INTO person (name, gender, age) VALUES ('Bill', 'M', '18');
INSERT INTO person (name, gender, age) VALUES ('Charles', 'M', '17');
INSERT INTO person (name, gender, age) VALUES ('Doraemon', 'F', '32');

CREATE TABLE IF NOT EXISTS course (
    id           INT NOT NULL AUTO_INCREMENT,
    title        VARCHAR(128)  NOT NULL,
    section      CHAR(3) NOT NULL,
    instructor   VARCHAR(128) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G1', 'Bob');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G2', 'Bob');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G3', 'Bob');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G4', 'John');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G5', 'Jane');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G6', 'Jane');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G7', 'Jane');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G8', 'Annie');
INSERT INTO course (title, section, instructor) VALUES ('Fun Course', 'G9', 'Annie');
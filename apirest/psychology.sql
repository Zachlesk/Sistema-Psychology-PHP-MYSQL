CREATE DATABASE psychology;

USE psychology;

CREATE TABLE psicologas (
    id_psicologas INT PRIMARY KEY auto_increment,
    nombre_psicologas VARCHAR(255) NOT NULL,
    edad_psicologas INT NOT NULL,
    especialidad VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL

)
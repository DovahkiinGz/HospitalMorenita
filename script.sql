CREATE TABLE Paciente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rut VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    edad INT NOT NULL
);

INSERT INTO Paciente (rut, nombre, apellido, edad)
VALUES ('12345678-9', 'Juan', 'Pérez', 35),
       ('98765432-1', 'María', 'Gómez', 28);

UPDATE Paciente
SET rut = '99999999-9', nombre = 'Pedro', apellido = 'Rodríguez', edad = 40
WHERE id = 1;

DELETE FROM Paciente
WHERE id = 2;

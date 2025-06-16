CREATE TABLE peliculas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  director VARCHAR(255) NOT NULL,
  anio INT NOT NULL
);

INSERT INTO peliculas (titulo, director, anio) VALUES
('El Padrino', 'Francis Ford Coppola', 1972),
('Pulp Fiction', 'Quentin Tarantino', 1994);

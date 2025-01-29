CREATE DATABASE agenda_contatos;

USE agenda_contatos;

CREATE TABLE contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100)
);

/*

USE agenda_contatos;

INSERT INTO contato (nome, telefone, email) VALUES
('Andre', '(11) 98765-4321', 'andre.sp@example.com'),
('Breno', '(21) 91234-5678', 'breno.rio@example.com'),
('Carol', '(31) 99876-5432', 'carlos.minas@example.com'),
('Diana', '(41) 97654-3210', 'diana.pr@example.com'),
('Eduardo', '(51) 92345-6789', 'edu.rs@example.com'),
('Fernanda', '(61) 93456-7890', 'fernanda.df@example.com'),
('Gabriel', '(71) 94567-8901', 'gabriel.ba@example.com'),
('Helena', '(81) 95678-9012', 'helena.pe@example.com'),
('Igor', '(91) 96789-0123', 'igor.pa@example.com'),
('Juliana', '(85) 97890-1234', 'juliana.ce@example.com');

*/
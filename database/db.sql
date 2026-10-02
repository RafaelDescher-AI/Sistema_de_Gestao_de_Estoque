CREATE DATABASE gestao_estoque;
USE gestao_estoque;

CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL
);

CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    data_validade DATE NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);

INSERT INTO categoria (descricao) VALUES 
('Laticínios'), 
('Hortifruti'), 
('Padaria'), 
('Bebidas');

INSERT INTO produto (categoria_id, nome, descricao, preco, quantidade, data_validade) VALUES
(1, 'Leite Integral 1L', 'Leite UHT integral', 4.50, 50, '2026-12-31'),
(2, 'Maçã Fuji 1kg', 'Maçãs vermelhas selecionadas', 8.90, 30, '2026-10-15'),
(3, 'Pão de Forma', 'Pão de forma tradicional 500g', 6.20, 20, '2026-10-20'),
(4, 'Suco de Laranja 1L', 'Suco natural sem conservantes', 9.50, 15, '2026-11-05');
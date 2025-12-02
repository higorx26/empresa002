CREATE TABLE empresa (
    cnpj VARCHAR(15) NOT NULL,
    razaoSocial VARCHAR(100) NOT NULL,
    endereco VARCHAR(300) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    situacao VARCHAR(20) NOT NULL,
    PRIMARY KEY (cnpj)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
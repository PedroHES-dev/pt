CREATE TABLE work_permits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    equipamento VARCHAR(255),
    area VARCHAR(255),
    localServico VARCHAR(255),
    dataInicio DATE,
    dataFim DATE,
    descricaoTrabalho TEXT,
    numeroPessoas INT,
    tipoAtividades TEXT,
    medidasPreventivas TEXT,
    analisePrevenção TEXT,
    bloqueioEnergia TEXT,
    nomeResponsavel VARCHAR(255),
    assinaturaResponsavel VARCHAR(255),
    dataLiberacao DATE,
    validade VARCHAR(255),
    status ENUM('Pendente', 'Aprovado', 'Rejeitado') DEFAULT 'Pendente'
);

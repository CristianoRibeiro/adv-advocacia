CREATE TABLE advogado (
  id_advogado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_advogado VARCHAR(255) NULL,
  oab_advogado VARCHAR(10) NULL,
  especialidade_advogado VARCHAR(25) NULL,
  PRIMARY KEY(id_advogado)
);

CREATE TABLE cliente (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_cliente VARCHAR(255) NULL,
  email_cliente VARCHAR(255) NULL,
  cpf_cliente VARCHAR(11) NULL,
  endereco_cliente VARCHAR(255) NULL,
  cidade_cliente VARCHAR(40) NULL,
  uf_cliente CHAR(2) NULL,
  fone_cliente VARCHAR(15) NULL,
  genero_cliente CHAR(1) NULL,
  data_nasc_cliente DATE NULL,
  PRIMARY KEY(id_cliente)
);

CREATE TABLE processo (
  numero_processo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  advogado_id_advogado INTEGER UNSIGNED NOT NULL,
  descricao_processo TEXT NULL,
  data_hora_processo DATETIME NULL,
  status_processo CHAR(1) NULL DEFAULT 0,
  PRIMARY KEY(numero_processo, cliente_id_cliente, advogado_id_advogado),
  INDEX cliente_has_advogado_FKIndex1(cliente_id_cliente),
  INDEX cliente_has_advogado_FKIndex2(advogado_id_advogado)
);



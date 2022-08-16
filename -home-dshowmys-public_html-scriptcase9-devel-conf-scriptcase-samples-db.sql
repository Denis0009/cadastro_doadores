-- Adminer 4.8.1 SQLite 3 3.26.0 dump

DROP TABLE IF EXISTS "doadores(1)";
CREATE TABLE "doadores(1)" (
  "id" integer NULL,
  "nome" text NULL,
  "email" blob NULL,
  "cpf" numeric NULL,
  "telefone" numeric NULL,
  "data_nascimento" integer NULL,
  "data_cadastro" integer NULL,
  "intervalo_doacao" text NULL,
  "valor_doacao" real NULL,
  "forma_pagamento" text NULL,
  "informacoes_conta" text NULL,
  "informacoes_cartao" text NULL,
  "endereco" text NULL, "tipo_pagamento" text NULL,
  FOREIGN KEY ("data_nascimento") REFERENCES "data_entry" ("chave"),
  FOREIGN KEY ("data_cadastro") REFERENCES "data_entry" ("chave")
);

INSERT INTO "doadores(1)" ("id", "nome", "email", "cpf", "telefone", "data_nascimento", "data_cadastro", "intervalo_doacao", "valor_doacao", "forma_pagamento", "informacoes_conta", "informacoes_cartao", "endereco", "tipo_pagamento") VALUES (4,	'wwwwwwwww',	'espboinabrasa@gmail.com',	32600030883,	33333333,	14111111,	111111,	'wwwwwww',	2.22,	'wwwwwww',	'wwwwwww',	'',	'',	NULL);
INSERT INTO "doadores(1)" ("id", "nome", "email", "cpf", "telefone", "data_nascimento", "data_cadastro", "intervalo_doacao", "valor_doacao", "forma_pagamento", "informacoes_conta", "informacoes_cartao", "endereco", "tipo_pagamento") VALUES (NULL,	'Denis',	'',	32600030883,	11949678516,	14111984,	11112011,	'',	22.22,	'www',	'www',	'2222',	'wwwwww',	NULL);
INSERT INTO "doadores(1)" ("id", "nome", "email", "cpf", "telefone", "data_nascimento", "data_cadastro", "intervalo_doacao", "valor_doacao", "forma_pagamento", "informacoes_conta", "informacoes_cartao", "endereco", "tipo_pagamento") VALUES (NULL,	'Denis',	'',	32600030883,	11949678516,	0,	0,	'',	0,	'Crédito',	'',	'',	'',	NULL);
INSERT INTO "doadores(1)" ("id", "nome", "email", "cpf", "telefone", "data_nascimento", "data_cadastro", "intervalo_doacao", "valor_doacao", "forma_pagamento", "informacoes_conta", "informacoes_cartao", "endereco", "tipo_pagamento") VALUES (NULL,	'Denis',	'',	0,	11949678516,	0,	0,	'Bimestral',	0,	'Crédito',	'',	'2222222222',	'',	NULL);
INSERT INTO "doadores(1)" ("id", "nome", "email", "cpf", "telefone", "data_nascimento", "data_cadastro", "intervalo_doacao", "valor_doacao", "forma_pagamento", "informacoes_conta", "informacoes_cartao", "endereco", "tipo_pagamento") VALUES (NULL,	'',	'',	0,	0,	0,	0,	'',	0,	'Crédito',	'eeeeeeddddwwzwwzwwwww',	'3333333333',	'33',	NULL);

DROP TABLE IF EXISTS "intervalo_doadores";
CREATE TABLE "intervalo_doadores" (
  "intervalo_doacao" text NULL
);

INSERT INTO "intervalo_doadores" ("intervalo_doacao") VALUES ('Único');
INSERT INTO "intervalo_doadores" ("intervalo_doacao") VALUES ('Bimestral');
INSERT INTO "intervalo_doadores" ("intervalo_doacao") VALUES ('Semestral');
INSERT INTO "intervalo_doadores" ("intervalo_doacao") VALUES ('Anual');
INSERT INTO "intervalo_doadores" ("intervalo_doacao") VALUES (NULL);

DROP TABLE IF EXISTS "tipo_pagamento";
CREATE TABLE "tipo_pagamento" (
  "forma_pagamento" text NOT NULL
);

INSERT INTO "tipo_pagamento" ("forma_pagamento") VALUES ('Crédito');
INSERT INTO "tipo_pagamento" ("forma_pagamento") VALUES ('Débito');

-- 

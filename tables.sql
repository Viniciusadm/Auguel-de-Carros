create database aluguel;

CREATE TABLE 'carros' (
	'id' int unsigned NOT NULL AUTO_INCREMENT,
	'marca' varchar(10) NOT NULL,
	'modelo' varchar(10) NOT NULL,
	'placa' varchar(7) NOT NULL,
	'alugado' int unsigned NOT NULL DEFAULT '1',
	PRIMARY KEY ('id'),
	UNIQUE KEY 'id_UNIQUE' ('id')
);

CREATE TABLE 'clientes' (
	'id' int unsigned NOT NULL AUTO_INCREMENT,
	'nome' varchar(45) NOT NULL,
	PRIMARY KEY ('id'),
	UNIQUE KEY 'id_UNIQUE' ('id')
);

CREATE TABLE 'usuarios' (
	'id' int unsigned NOT NULL AUTO_INCREMENT,
	'nome' varchar(10) NOT NULL,
	'usuario' varchar(10) NOT NULL,
	'senha' varchar(32) NOT NULL,
	PRIMARY KEY ('id'),
	UNIQUE KEY 'id_UNIQUE' ('id')
);

INSERT INTO 'usuarios' ('nome', 'usuario', 'senha') VALUES ('Usuário', 'user', '202cb962ac59075b964b07152d234b70');
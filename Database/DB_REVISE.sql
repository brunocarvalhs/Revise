create database db_revise;
use db_revise;


CREATE TABLE tb_status (
sg_status char(2)not null,
nm_status varchar(255),
CONSTRAINT pk_status
PRIMARY KEY(sg_status)
);

CREATE TABLE tb_medida(
sg_medida char(2) not null,
nm_medida varchar(45),
CONSTRAINT pk_medida
PRIMARY KEY(sg_medida)
);

CREATE TABLE tb_tipo_plano(
cd_tipo_plano int not null,
nm_tipo_plano varchar(255),
CONSTRAINT pk_tipo_plano
PRIMARY KEY(cd_tipo_plano)
);

CREATE TABLE tb_categoria(
cd_categoria int not null,
nm_categoria varchar(255),
CONSTRAINT pk_categoria
PRIMARY KEY(cd_categoria)
);

CREATE TABLE tb_marca(
cd_marca int not null,
nm_marca varchar(255),
CONSTRAINT pk_marca
PRIMARY KEY (cd_marca)
);

CREATE TABLE tb_tipo_modelo(
cd_tipo_modelo int not null,
nm_tipo_modelo varchar(255),
CONSTRAINT pk_tipo_modelo
PRIMARY KEY(cd_tipo_modelo)
);

CREATE TABLE tb_tipo_peca(
cd_tipo_peca int not null,
nm_tipo_peca varchar(255),
CONSTRAINT pk_tipo_peca
	PRIMARY KEY(cd_tipo_peca)
);

CREATE TABLE tb_uf(
sg_uf char(2) not null,
nm_uf varchar(255),
CONSTRAINT pk_uf
	PRIMARY KEY (sg_uf)
);

CREATE TABLE tb_tipo_usuario(
cd_tipo_usuario int not null,
nm_tipo_usuario VARCHAR(255),
CONSTRAINT pk_tipo_usuario
	PRIMARY KEY(cd_tipo_usuario)
);

CREATE TABLE tb_tipo_anuncio(
cd_tipo_anuncio int not null,
vl_anuncio decimal(5,2),
nm_tipo_anuncio varchar(255),
CONSTRAINT pk_tipo_anuncio
	PRIMARY KEY(cd_tipo_anuncio)
);



CREATE TABLE tb_plano(
cd_plano int not null,
nm_plano varchar(255),
ds_plano TEXT,
cd_tipo_plano int,
qt_anuncio int,
qt_veiculo int,
CONSTRAINT pk_plano
	PRIMARY KEY (cd_plano),
CONSTRAINT fk_tipo_plano
	FOREIGN KEY(cd_tipo_plano)
		REFERENCES tb_tipo_plano(cd_tipo_plano)
);

CREATE TABLE tb_usuario(
cd_usuario int not null,
nm_email varchar(255),
cd_senha varchar(255),
cd_plano int,
cd_tipo_usuario int,
CONSTRAINT pk_usuario
	PRIMARY KEY(cd_usuario),
CONSTRAINT fk_usuario_plano
	FOREIGN KEY(cd_plano)
		REFERENCES tb_plano(cd_plano),
CONSTRAINT fk_usuario_tipo
	FOREIGN KEY(cd_tipo_usuario)
		REFERENCES tb_tipo_usuario(cd_tipo_usuario)
);

create table tb_usuario_fisico(
cd_usuario_fisico int not null,
nm_usuario_fisico varchar(255),
cd_cpf varchar(13) not null,
cd_usuario int,
CONSTRAINT pk_usuario_fisico
	PRIMARY KEY(cd_usuario_fisico),
CONSTRAINT fk_fisico_usuario
	FOREIGN KEY(cd_usuario)
		REFERENCES tb_usuario(cd_usuario)
);

create table tb_usuario_juridico(
cd_usuario_juridico int not null,
nm_nome_fantasia varchar(255),
nm_razao_social VARCHAR(255),
cd_cnpj varchar(16) not null,
cd_usuario int,
CONSTRAINT pk_usuario_juridico
	PRIMARY KEY(cd_usuario_juridico),
CONSTRAINT fk_juridico_usuario
	FOREIGN KEY(cd_usuario)
		REFERENCES tb_usuario(cd_usuario)
);

CREATE TABLE tb_cidade(
cd_cidade int not null,
nm_cidade VARCHAR(255),
sg_uf char(2),
CONSTRAINT pk_cidade
	PRIMARY KEY(cd_cidade),
CONSTRAINT pk_cidade_uf
	FOREIGN KEY(sg_uf)
		REFERENCES tb_uf(sg_uf)
);

CREATE TABLE tb_bairro(
cd_bairro int not null,
nm_bairro varchar(255),
cd_cidade int,
CONSTRAINT pk_bairro
	PRIMARY KEY(cd_bairro),
CONSTRAINT pk_bairro_cidade
	FOREIGN KEY(cd_cidade)
		REFERENCES tb_cidade(cd_cidade)
);

CREATE TABLE tb_peca(
cd_peca int not null,
nm_peca varchar(255),
qt_medida int,
sg_medida char(2),
cd_tipo_peca int,
CONSTRAINT pk_peca
	PRIMARY KEY(cd_peca),
CONSTRAINT fk_peca_unidade
	FOREIGN KEY(sg_medida)
		REFERENCES tb_medida(sg_medida),
CONSTRAINT fk_peca_tipo
	FOREIGN KEY (cd_tipo_peca)
		REFERENCES tb_tipo_peca(cd_tipo_peca)
);

CREATE TABLE tb_logradouro(
cd_logradouro int not null,
nm_logradouro varchar(255),
cd_usuario_juridico int,
cd_bairro int,
CONSTRAINT pk_logradouro
	PRIMARY KEY (cd_logradouro),
CONSTRAINT fk_logradouro_usuario
	FOREIGN KEY(cd_usuario_juridico)
		REFERENCES tb_usuario_juridico(cd_usuario_juridico),
CONSTRAINT fk_logradouro_bairro
	FOREIGN KEY(cd_bairro)
		REFERENCES tb_bairro(cd_bairro)
);

CREATE TABLE tb_anuncio(
cd_anuncio int not null,
nm_titulo varchar(255),
ds_anuncio TEXT,
in_pago BOOLEAN,
vl_pagar int,
cd_usuario_juridico int,
cd_tipo_anuncio int,
CONSTRAINT pk_anuncio
	PRIMARY KEY(cd_anuncio),
CONSTRAINT fk_anuncio_usuario
	FOREIGN KEY(cd_usuario_juridico)
		REFERENCES tb_usuario_juridico(cd_usuario_juridico),
CONSTRAINT fk_anuncio_tipo
	FOREIGN KEY (cd_tipo_anuncio)
		REFERENCES tb_tipo_anuncio(cd_tipo_anuncio)
);

CREATE TABLE tb_modelo(
cd_modelo int not null,
nm_modelo VARCHAR(255),
aa_modelo INT,
cd_tipo_modelo int,
cd_categoria int,
cd_marca int,
CONSTRAINT pk_modelo
	PRIMARY KEY(cd_modelo),
CONSTRAINT fk_modelo_tipo
	FOREIGN KEY(cd_tipo_modelo)
		REFERENCES tb_tipo_modelo(cd_tipo_modelo),
CONSTRAINT fk_categoria
	FOREIGN KEY(cd_categoria)
		REFERENCES tb_categoria(cd_categoria),
CONSTRAINT fk_marca
	FOREIGN KEY(cd_marca)
		REFERENCES tb_marca(cd_marca)
);

CREATE TABLE tb_veiculo(
cd_veiculo int not null,
nm_cor varchar(255),
cd_placa varchar(8),
cd_usuario int,
cd_modelo int,
CONSTRAINT pk_veiculo
	PRIMARY KEY (cd_veiculo),
CONSTRAINT fk_veiculo_usuario
	FOREIGN KEY(cd_usuario)
		REFERENCES tb_usuario(cd_usuario),
CONSTRAINT fk_veiculo_modelo
	FOREIGN KEY(cd_modelo)
		REFERENCES tb_modelo(cd_modelo)
); 

CREATE TABLE tb_check(
cd_check int not null,
dt_check timestamp, 
cd_veiculo int,
sg_status char(2),
cd_peca int,
CONSTRAINT pk_usuario
	PRIMARY KEY(cd_check),
CONSTRAINT fk_check_veiculo	
	FOREIGN KEY(cd_veiculo)
		REFERENCES tb_veiculo(cd_veiculo),
CONSTRAINT fk_check_status
	FOREIGN KEY(sg_status)
		REFERENCES tb_status(sg_status),
CONSTRAINT fk_check_peca
	FOREIGN KEY(cd_peca)
		REFERENCES tb_peca(cd_peca)
);
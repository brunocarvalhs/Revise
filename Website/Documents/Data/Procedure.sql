-- ################# OFICIAIS ##########################

-- Seleciona Anuncio
delimiter $
create procedure sp_selectAnuncio(in id int)
begin
	declare idIndice int;
    declare vlIndice int;
    declare idAnuncio int;
    IF(SELECT cd_anuncio FROM tb_anuncio WHERE cd_anuncio = id)
	THEN
		set idAnuncio = (SELECT cd_anuncio FROM tb_anuncio WHERE cd_anuncio = id);
		IF(SELECT cd_indice FROM tb_indice WHERE cd_anuncio = id)
			THEN
				set vlIndice = (SELECT max(vl_indice)+1 FROM tb_indice WHERE cd_anuncio = id);
				UPDATE tb_indice SET vl_indice =  vlIndice WHERE cd_anuncio = id;
            ELSE
				set idIndice = (SELECT count(cd_indice) + 1 FROM tb_indice);
				INSERT INTO tb_indice VALUES
				(idIndice,1,idAnuncio);
            END IF;
	END IF;
    SELECT
        tb_anuncio.cd_anuncio as ID,
        tb_anuncio.nm_titulo as Titulo,
		tb_anuncio.ds_publicacao as Descricao,
        tb_anuncio.vl_anunciado as Valor,
		tb_anuncio.dt_publicacao as Data,
        tb_tipo_anuncio.nm_tipo_anuncio as Tipo,
		tb_usuario_juridico.nm_nome_fantasia as Empresa,
        tb_logradouro.nm_logradouro as Endereco,
        tb_bairro.nm_bairro as Bairro,tb_cidade.nm_cidade as Cidade,
		tb_uf.sg_uf as Estado
			FROM tb_anuncio
				INNER JOIN tb_tipo_anuncio ON tb_anuncio.cd_tipo_anuncio = tb_tipo_anuncio.cd_tipo_anuncio
				INNER JOIN tb_usuario_juridico ON tb_usuario_juridico.cd_usuario_juridico = tb_anuncio.cd_usuario_juridico
				INNER JOIN tb_logradouro ON tb_logradouro.cd_usuario_juridico = tb_usuario_juridico.cd_usuario_juridico
				INNER JOIN tb_bairro ON tb_bairro.cd_bairro = tb_logradouro.cd_bairro
				INNER JOIN tb_cidade ON tb_cidade.cd_cidade = tb_bairro.cd_cidade
				INNER JOIN tb_uf ON tb_uf.sg_uf = tb_cidade.sg_uf
					WHERE tb_anuncio.cd_anuncio = id;
end $


-- Lista de veiculos
delimiter $
create procedure sp_listaVeiculo(in idUser int)
begin
    SELECT tb_veiculo.cd_veiculo as id,tb_veiculo.cd_placa as placa,tb_modelo.nm_modelo as modelo, count(tb_check.cd_check) as Notificacao FROM tb_veiculo
        inner join tb_modelo on tb_veiculo.cd_modelo = tb_modelo.cd_modelo
        inner join tb_usuario on tb_usuario.cd_usuario = tb_veiculo.cd_usuario
        left Join tb_check on tb_veiculo.cd_veiculo = tb_check.cd_veiculo
        where tb_veiculo.cd_usuario = idUser group by tb_veiculo.cd_veiculo;
end $


-- procedimento de notificacao de peça
delimiter $
create procedure notificacao(in sigla char(2))
begin

  select
		p.nm_peca as 'PEÇA',
        v.cd_placa as 'PLACA',
        s.nm_status as 'STATUS',
        c.dt_check as 'DATA'
			from tb_check as c
				inner join
					tb_veiculo as v on v.cd_veiculo = c.cd_veiculo
                    join tb_status as s
                    join tb_peca as p on p.cd_peca = c.cd_peca
						order by sigla;

end $


-- Calcular cobrança do tipo de anuncio
delimiter $
create procedure calcularAnuncio(in quantidade int, in tipo varchar(12))
begin

	SELECT quantidade * vl_anuncio as 'Cobrança' from tb_tipo_anuncio where nm_tipo_anuncio = tipo;

end $

--








-- Login do usuario juridico(Read - tb_usuario_juridico)
delimiter $
create procedure sp_SignInJuridico(in cnpj varchar(14),in senha varchar(255))
begin
SELECT * FROM tb_usuario AS user, tb_usuario_juridico AS userj WHERE userj.cd_cnpj = cnpj AND user.cd_senha = senha AND userj.cd_usuario = user.cd_usuario;
end $

-- Login do usuario Fisico(Read - tb_usuario_Fisico)
delimiter $
create procedure sp_SignInFisico(in cpf varchar(11),in senha varchar(255))
begin
SELECT * FROM tb_usuario AS user, tb_usuario_fisico AS userf WHERE userf.cd_cpf = cpf AND user.cd_senha = senha AND userf.cd_usuario = user.cd_usuario;
end $

-- Cadastrar Usuario Fisico, Veiculo e Usuario(Read - tb_usuario_Fisico, Read - tb_usuario, Read - tb_veiculo, Create - tb_usuario_Fisico, Create - tb_usuario, Create - tb_veiculo)
delimiter $
create procedure sp_CadastroFisico(in idUser int,in idUserFisico int, in cpf varchar(11),in email varchar(255),in senha varchar(255),in plano char(1),in nascimento date,in nome varchar(255),placa varchar(8),in idVeiculo int,in cor varchar(255), in ano int, in modelo int)
begin
if(SELECT count(*) FROM tb_usuario AS user,  tb_usuario_fisico AS userf WHERE user.nm_email = email AND user.cd_usuario = userf.cd_usuario)=0 then
if(SELECT count(*) FROM tb_usuario AS user,  tb_usuario_fisico AS userf WHERE userf.cd_cpf = cpf AND user.cd_usuario = userf.cd_usuario)=0 then
if(select count(*) from tb_veiculo WHERE cd_placa = placa)=0 then
INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES (idUser,email,senha,plano,1);
INSERT INTO tb_usuario_fisico(cd_usuario_fisico,nm_usuario_fisico,cd_cpf,cd_usuario,dt_nascimento) VALUES (idUserFisico,nome,cpf,idUser,nascimento);
INSERT INTO tb_veiculo(cd_veiculo,nm_cor,aa_veiculo,cd_placa,cd_usuario,cd_modelo) VALUES (idVeiculo,cor,ano,placa,idUser,modelo);
SELECT 'Usuário Cadastrado Com Sucesso.' as 'Mensagem';
ELSE
SELECT 'Placa já Cadastrado no Sistema.' as 'Mensagem';
end if;
ELSE
SELECT 'CPF já Cadastrado No Sistema.' as 'Mensagem';
end if;
ELSE
SELECT 'E-mail já Cadastrado No Sistema.' as 'Mensagem';
end if;
end $

-- Cadastrar Usuario Juridico e Usuario(Create - tb_usuario_juridico, Create - tb_usuario)
delimiter $
create procedure sp_CadastroJuridico(in idUserJuridico int,in nome varchar(255),in razao varchar(255),in cnpj varchar(14),in idUser int,in email varchar(255),in senha varchar(255), in plano int)
begin
INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES (idUser,email,senha,plano,1);
INSERT INTO tb_usuario_juridico(cd_usuario_juridico,nm_nome_fantasia,nm_razao_social,cd_cnpj,cd_usuario) VALUES (idUserJuridico,nome,razao,cnpj,idUser);
end $

-- Deleta um veículo(Delete - tb_veiculo)
delimiter $
create procedure sp_deletarVeiculo(in idVeiculo int)
begin
DELETE FROM tb_veiculo WHERE cd_veiculo = idVeiculo;
end $

-- Altera Placa de veículo(Update - tb_veiculo)
delimiter $
create procedure sp_AlterarPlaca(in placa varchar(255),in placaNova varchar(255))
begin
UPDATE tb_veiculo SET cd_placa = placaNova WHERE cd_placa = placa;
end $

-- Deletar conta de usuário(Delete - tb_usuario)
delimiter $
create procedure sp_DeletarConta(in idUser int)
begin
DELETE FROM tb_usuario WHERE cd_usuario = idUser;
end $

-- Alterar dados do usuario(Update - tb_usuario)
delimiter $
create procedure sp_DadosUsuario(in idUser int,in email varchar(255),in senha varchar(255))
begin
UPDATE tb_usuario SET nm_email = email, cd_senha = senha WHERE cd_usuario = idUser;
end $

-- Deleta um usuario fisico(Delete - tb_usuario_fisico)
delimiter $
create procedure sp_DeletarUsuarioFisico(in idUserFisico int)
begin
DELETE FROM tb_usuario_fisico WHERE cd_usuario_fisico = idUserFisico;
end $

-- Deleta um juridico(Delete - tb_Usuario_Juridico)
delimiter $
create procedure sp_DeletarUsuarioJuridico(in idUserJuridico int)
begin
DELETE FROM tb_usuario_juridico WHERE cd_usuario_juridico = idUserJuridico;
end $

-- Alterar dados do Usuario Fisico(Update - tb_usuario_fisico)
delimiter $
create procedure sp_DadosUsuariofisico(in idUserFisico int,in nome varchar(255),in cpf varchar(13),in userId int,in nascimento DATE)
begin
UPDATE tb_usuario_fisico SET nm_usuario_fisico = nome, cd_cpf = cpf, cd_usuario = userId, dt_nascimento = nascimento WHERE cd_usuario_fisico = idUserFisico;
end $

-- Alterar dados do Usuario Juridico(Update - tb_usuario_juridico)
delimiter $
create procedure sp_DadosUsuariojuridico(in idJuridico int,in nome varchar(255),in razao(255),in cnpj varchar(14),in cd_usuario int)
begin
UPDATE sp_DadosUsuariofisico SET nm_nome = nome,nm_razao_social = razao,cd_cnpj = cnpj, idUser = cd_usuario WHERE cd_usuario_juridico = idJuridico;
end $








-- Login do usuario FIsico

delimiter $
create procedure SignInFisico(in cpf int, in senha varchar(255))
begin

	SELECT
		f.nm_usuario_fisico as 'NOME',
		u.nm_email as 'E-MAIL',
        p.nm_plano as 'PLANO',
        v.cd_placa as 'PLACA',
        m.nm_modelo as 'MODELO',
        v.nm_cor as 'COR'
			FROM tb_usuario as u
				 join
					tb_usuario_fisico as f on f.cd_cpf = cpf
                    join tb_plano as p on p.cd_plano = u.cd_plano
                    join tb_veiculo as v on v.cd_usuario = u.cd_usuario
                    join tb_modelo as m on m.cd_modelo = v.cd_modelo where  u.cd_senha = senha;


end $




-=-----------------------------------------------------------

-- Login do usuario juridico(Read - tb_usuario_juridico)
delimiter $
create procedure sp_SignInJuridico(in cnpj varchar(14),in senha varchar(255))
begin
SELECT * FROM tb_tipo_usuario AS TipoUser, tb_usuario AS User, tb_usuario_juridico AS UserJuridico WHERE TipoUser.cd_tipo_usuario = 2 AND TipoUser.cd_tipo_usuario = User.cd_tipo_usuario AND UserJuridico.cd_usuario = User.cd_usuario AND UserJuridico.cd_cnpj = cnpj AND User.cd_senha = senha;
end $

-- Login do usuario Fisico(Read - tb_usuario_Fisico)
delimiter $
create procedure sp_SignInFisico(in cpf varchar(11),in senha varchar(255))
begin
SELECT * FROM tb_tipo_usuario AS TipoUser, tb_usuario AS User, tb_usuario_fisico AS UserFisico WHERE TipoUser.cd_tipo_usuario = 1 AND TipoUser.cd_tipo_usuario = User.cd_tipo_usuario AND UserFisico.cd_usuario = User.cd_usuario AND UserFisico.cd_cpf = cpf AND User.cd_senha = senha;
end $

-- Cadastrar Usuario Fisico e Usuario
delimiter $
create procedure sp_CadastrarUsuario(in IdUsuario int,in email varchar(255),in senha varchar(255),in IdUsuarioFisico int,in nome varchar(255),in cpf varchar(13), in nascimento DATE)
begin
INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_tipo_usuario) VALUES (IdUsuario,email,senha,1);
INSERT INTO tb_usuario_fisico(cd_usuario_fisico,nm_usuario_fisico,cd_cpf,cd_usuario,dt_nascimento) VALUES (IdUsuarioFisico,nome,cpf,IdUsuario,nascimento);
end $

-- Cadastrar Veiculo
delimiter $
create procedure sp_CadastroVeiculo(in id int,in cor varchar(255),in placa varchar(8),in idUsuario int,in modelo varchar(255),in ano int)
begin
INSERT INTO tb_veiculo(cd_veiculo,nm_cor,cd_placa,cd_usuario,cd_modelo, aa_veiculo, qt_quilometragem) VALUES (id,cor,placa,idUsuario,modelo,ano,null);
end $

-- Validação de Cadastro Fisico
delimiter $
create procedure sp_VerificarCadastro(in email varchar(255),in cpf varchar(11),in placa varchar(255))
begin
if(SELECT COUNT(*) FROM tb_usuario WHERE nm_email = email)=0 then
if(SELECT COUNT(*) FROM tb_usuario_fisico WHERE cd_cpf = cpf)=0 then
if(SELECT COUNT(*) FROM tb_veiculo WHERE cd_placa = placa)=0 then
SELECT 'true' AS 'RES';
ELSE
SELECT 'placa' AS 'RES';
end if;
ELSE
SELECT 'cpf' AS 'RES';
end if;
ELSE
SELECT 'email' AS 'RES';
end if;
end $

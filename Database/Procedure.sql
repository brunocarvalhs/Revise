
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

















select * from tb_peca;
select * from tb_check;
select * from tb_veiculo;
select * from tb_usuario;
select * from tb_usuario_fisico;
select * from tb_tipo_anuncio;

call calcularAnuncio(9,'Serviço');


-=-----------------------------------------------------------

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

-- Cadastrar Usuario Fisico
delimiter $
create procedure sp_CadastroUsuarioFisico(in id int,in nome varchar(255),in cpf varchar(11),in nascimento date,in idUsuario int)
begin
INSERT INTO tb_usuario_fisico(cd_usuario_fisico,nm_usuario_fisico,cd_cpf,cd_usuario,dt_nascimento) VALUES (id,nome,cpf,idUsuario,nascimento);
end $

-- Cadastrar Veiculo
delimiter $
create procedure sp_CadastroVeiculo(in id int,in cor varchar(255),in placa varchar(8),in idUsuario int,in modelo varchar(255),in ano int)
begin
INSERT INTO tb_veiculo(cd_veiculo,nm_cor,cd_placa,cd_usuario,cd_modelo, aa_veiculo, qt_quilometragem) VALUES (id,cor,placa,idUsuario,modelo,ano,null);
end $

-- Cadastarr Usuario
delimiter $
create procedure sp_CadastrarUsuario(in id int,in email varchar(255),in senha varchar(255),in plano int,in tipo int)
begin
INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES (id,email,senha,plano,tipo);
end $

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
-- Login do usuario juridico

delimiter $
create procedure sp_SignInJuridico(in cnpj varchar(14),in senha varchar(255))
begin
SELECT * FROM tb_usuario AS user, tb_usuario_juridico AS userj WHERE userj.cd_cnpj = cnpj AND user.cd_senha = senha AND userj.cd_usuario = user.cd_usuario;
end $

-- Login do usuario Fisico
delimiter $
create procedure sp_SignInFisico(in cpf varchar(11),in senha varchar(255))
begin
SELECT * FROM tb_usuario AS user, tb_usuario_fisico AS userf WHERE userf.cd_cpf = cpf AND user.cd_senha = senha AND userf.cd_usuario = user.cd_usuario;
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









delimiter $
create procedure sp_test(in cpf varchar(11),in email varchar(255),in senha varchar(255),in plano char(1),in nascimento date,in nome varchar(255))
begin

if(SELECT count(*) FROM tb_usuario AS user,  tb_usuario_fisico AS userf WHERE user.nm_email = email AND user.cd_usuario = userf.cd_usuario)=0 then

if(SELECT count(*) FROM tb_usuario AS user,  tb_usuario_fisico AS userf WHERE userf.cd_cpf = cpf AND user.cd_usuario = userf.cd_usuario)=0 then
INSERT INTO tb_usuario(cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES ((SELECT MAX(cd_usuario + 1) FROM tb_usuario),email,senha,plano,1);
INSERT INTO tb_usuario_fisico(cd_usuario_fisico,nm_usuario_fisico,cd_cpf,cd_usuario,dt_nascimento) VALUES ((SELECT MAX(cd_usuario_fisico + 1) FROM tb_usuario_fisico),nome,cpf,(SELECT MAX(cd_usuario)),nascimento);
SELECT true as 'Mensagem';
ELSE
SELECT false as 'Mensagem';
end if;
ELSE
SELECT false as 'Mensagem';
end if;
end $














select * from tb_peca;
select * from tb_check;
select * from tb_veiculo;
select * from tb_usuario;
select * from tb_usuario_fisico;
select * from tb_tipo_anuncio;

call calcularAnuncio(9,'Serviço');
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

-- Login do usuario juridico
delimiter $
create procedure SignInJuridico(in cnpj int, in senha text)
begin 

	select j.nm_nome_fantasia, u.nm_email from tb_usuario as u inner join tb_usuario_juridico as j on j.cd_cnpj = cnpj and u.cd_senha = senha;
	
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
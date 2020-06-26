-- DOIS
CREATE VIEW peca_completa as select cd_peca, nm_peca as nome, nm_tipo_peca as tipo from tb_peca join tb_tipo_peca on tb_peca.cd_tipo_peca = tb_tipo_peca.cd_tipo_peca;
-- SELECT * FROM peca_completa;
CREATE VIEW login_usuario_fisico as select tb_usuario_fisico.cd_usuario as codigo_geral, cd_usuario_fisico as num_fisico, nm_usuario_fisico as nome,  
cd_cpf as cpf  from tb_usuario join tb_usuario_fisico on tb_usuario.cd_usuario = tb_usuario_fisico.cd_usuario;
-- SELECT * FROM login_usuario_fisico;
CREATE VIEW login_usuario_juridico as select tb_usuario_juridico.cd_usuario as codigo_geral, cd_usuario_juridico as num_juridico, 
nm_razao_social as razao_social ,nm_nome_fantasia as nome_fantasia,  cd_cnpj as cpf  from tb_usuario join tb_usuario_juridico on tb_usuario.cd_usuario = tb_usuario_juridico.cd_usuario;
-- SELECT * FROM login_usuario_juridico;
CREATE VIEW cidade_estado as select nm_cidade as nome_cidade, tb_cidade.sg_uf as sigla from tb_cidade join tb_uf on tb_cidade.sg_uf = tb_uf.sg_uf;
-- SELECT * FROM cidade_estado;



-- TRES
CREATE VIEW usuario_plano as select tb_usuario.cd_usuario as num_usuario, nm_plano as plano, tb_usuario_fisico.nm_usuario_fisico as nome_usuario from tb_usuario join tb_usuario_fisico on tb_usuario.cd_usuario = tb_usuario_fisico.cd_usuario join tb_plano on tb_usuario.cd_plano = tb_plano.cd_plano;
-- SELECT * FROM usuario_plano order by num_usuario asc;
CREATE VIEW empresa_plano as select geral.cd_usuario as num_usuario, plan.nm_plano as plano, qt_anuncio as qtd_de_anuncio, nm_nome_fantasia as nome_fantasia, nm_razao_social as razao_social from tb_usuario as geral join tb_usuario_juridico as juridico on geral.cd_usuario = juridico.cd_usuario join tb_plano as plan on geral.cd_plano = plan.cd_plano;
-- SELECT * FROM empresa_plano;
 CREATE VIEW bai_cid_uf as SELECT nm_bairro as bairro, nm_cidade as cidade, tb_uf.sg_uf as estado FROM tb_uf join tb_cidade on tb_uf.sg_uf = tb_cidade.sg_uf join tb_bairro on tb_bairro.cd_cidade = tb_cidade.cd_cidade;
-- SELECT * FROM bai_cid_uf;

-- QUATRO
CREATE VIEW carro_semi_completo as SELECT nm_categoria as cateogria, nm_tipo_modelo as versão, nm_modelo as modelo, nm_marca as marca from tb_modelo join tb_marca on tb_modelo.cd_marca=tb_marca.cd_marca join tb_categoria on tb_categoria.cd_categoria = tb_modelo.cd_categoria join tb_tipo_modelo on tb_tipo_modelo.cd_tipo_modelo = tb_modelo.cd_tipo_modelo;
-- SELECT * FROM carro_semi_completo;
CREATE VIEW usuario_geral_login as SELECT tb_usuario.cd_usuario as codgio_geral, nm_usuario_fisico as nome_fisico, nm_razao_social as razao_social, nm_email as email, cd_senha as senha from tb_usuario left join tb_usuario_fisico on tb_usuario.cd_usuario = tb_usuario_fisico.cd_usuario join tb_usuario_juridico on  tb_usuario.cd_usuario = tb_usuario_juridico.cd_usuario;
-- SELECT * FROM usuario_geral_login;

-- CINCO 
CREATE VIEW carro_dono as SELECT nm_email  as email, cd_placa as placa , nm_cor as cor_veiculo, nm_modelo as modelo, nm_marca as marca from tb_usuario as us  join tb_veiculo v on us.cd_usuario = v.cd_usuario join tb_modelo as mo on mo.cd_modelo= v.cd_modelo join tb_categoria as cat on cat.cd_categoria = mo.cd_categoria join tb_marca as m on mo.cd_marca = m.cd_marca;
-- select * from carro_dono;
CREATE VIEW endereco_juridico as SELECT nm_razao_social as razao, nm_nome_fantasia as nome_fantasia, nm_logradouro as endereco, nm_bairro as bairro, nm_cidade as cidade, uf.sg_uf as estado FROM tb_usuario_juridico jud join tb_logradouro log on log.cd_usuario_juridico = jud.cd_usuario_juridico join tb_bairro as b on log.cd_bairro = b.cd_bairro join tb_cidade as cc on b.cd_cidade = cc.cd_cidade join tb_uf as uf on cc.sg_uf = uf.sg_uf;
-- SELECT * FROM endereco_juridico;
CREATE VIEW carro_completo as SELECT cd_placa as placa, nm_cor as cor, nm_modelo as modelo, nm_tipo_modelo as versao, nm_categoria as categoria, nm_marca as marca from tb_veiculo as v join tb_modelo as mo on v.cd_modelo = mo.cd_modelo join tb_categoria as cat on mo.cd_categoria = cat.cd_categoria join tb_tipo_modelo as tp on tp.cd_tipo_modelo = mo.cd_tipo_modelo join tb_marca as m on mo.cd_marca = m.cd_marca;
-- SELECT * FROM carro_completo;
CREATE VIEW plano_codigo_qt as SELECT cd_placa as placa, nm_email as email, qt_veiculo as total_disponivel, tpu.nm_tipo_usuario as tipo, nm_plano as plano from tb_usuario as us join tb_plano as pl on us.cd_plano = pl.cd_plano join tb_tipo_plano as tpp on tpp.cd_tipo_plano = pl.cd_tipo_plano join tb_tipo_usuario as tpu on tpu.cd_tipo_usuario = us.cd_tipo_usuario join tb_veiculo as v on v.cd_usuario = us.cd_usuario;
-- select * from plano_codigo_qt;
    /**
     * SELECT DAS NOTIFICAÇÔES
     */
    SELECT  s.nm_status AS 'Status', p.nm_peca AS 'Peça',  p.cd_tipo_peca AS 'Tipo', mp.qt_medida AS 'Medida', m.nm_medida AS 'Grandeza', c.dt_check AS 'Check', v.qt_quilometragem AS 'Km', v.cd_placa AS 'Placa', mo.nm_modelo AS 'Veiculo'
	FROM tb_medida_peca AS mp 
    INNER JOIN tb_peca AS p ON mp.cd_peca = p.cd_peca 
	INNER JOIN tb_medida AS m ON mp.sg_medida = m.sg_medida
    INNER JOIN tb_check AS c ON c.cd_peca = p.cd_peca
    INNER JOIN tb_veiculo AS v ON v.cd_veiculo = c.cd_veiculo
    INNER JOIN tb_modelo AS mo ON v.cd_modelo = mo.cd_modelo
    INNER JOIN tb_status AS s ON c.sg_status = s.sg_status
	AND v.qt_quilometragem >= mp.qt_medida 
    OR DATEDIFF(CURDATE(), c.dt_check) >= mp.qt_medida
    WHERE v.cd_veiculo = 1
    GROUP BY  p.nm_peca, m.nm_medida; 
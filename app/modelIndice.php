<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class modelIndice extends Model
{
    public function IndiceAcesso($id){
        $indice = DB::select("SELECT
        sum(i.vl_indice) AS 'Visualizacao',
        ta.nm_tipo_anuncio AS 'Tipo'
        FROM tb_indice AS i
        INNER JOIN tb_anuncio AS a ON i.cd_anuncio = a.cd_anuncio
        INNER JOIN tb_tipo_anuncio AS ta ON ta.cd_tipo_anuncio = a.cd_tipo_anuncio
        INNER JOIN tb_usuario_juridico AS uj ON uj.cd_usuario_juridico = a.cd_usuario_juridico
        WHERE uj.cd_usuario_juridico = ? group by ta.nm_tipo_anuncio", [$id]);

        if($indice == []){
            $indice = [["Visualizacao" => 0,"Tipo" => 'Produto'],["Visualizacao" => 0,"Tipo" => 'Serviço']];
        }
        $indice = json_encode($indice);
        return ($indice);
    }

    public function IndiceAnuncios($id){
        $indiceAnuncios = DB::select("SELECT
        i.vl_indice AS 'Visualizacao',
        a.nm_titulo AS 'Anuncio'
        FROM tb_indice AS i
        INNER JOIN tb_anuncio AS a ON i.cd_anuncio = a.cd_anuncio
        INNER JOIN tb_tipo_anuncio AS ta ON ta.cd_tipo_anuncio = a.cd_tipo_anuncio
        INNER JOIN tb_usuario_juridico AS uj ON uj.cd_usuario_juridico = a.cd_usuario_juridico
        WHERE uj.cd_usuario_juridico = ? ",[$id]);

        if($indiceAnuncios == []){
            $indiceAnuncios = [["Visualizacao" => 0,"Tipo" => 'Anuncio']];
        }
        $indiceAnuncios = json_encode($indiceAnuncios,JSON_UNESCAPED_UNICODE);
        return ($indiceAnuncios);
    }
}

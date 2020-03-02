<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Assistido extends Model
{
    protected $table = "assistidos";

    protected $fillable = [
        "nome","email","foto","cpf","rg","orgao_emissor","endereco","bairro","cidade","cep","uf","naturalidade",
        "nome_da_mae","nome_do_pai","nome_do_responsavel","sexo","nascimento","civil","escolaridade","ocupacao",
        "renda_familiar_total","doenca","beneficio_social","tel1","tel2","cel1","cel2","como_conheceu_projeto",
        "observacao","user_id"
    ];

    public function search($data){

        $result = $this->where(function ($query) use ($data){
             if(isset($data["nome"]))
                $query->where("nome","LIKE","%".$data["nome"]."%");
             if(isset($data["renda_ini"]) AND !isset($data["renda_fin"]))
                 $query->where("renda_familiar_total",">=",$data["renda_ini"]);
             if(!isset($data["renda_ini"]) AND isset($data["renda_fin"]))
                $query->where("renda_familiar_total","<=",$data["renda_fin"]);
             if(isset($data["renda_ini"]) AND isset($data["renda_fin"]))
                $query->whereBetween("renda_familiar_total",[$data["renda_ini"],$data["renda_fin"]]);

        })->paginate(15);

        return $result;
    }
}

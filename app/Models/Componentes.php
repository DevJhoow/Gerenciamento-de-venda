<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    use HasFactory;

    public function formatacaoMascaraDinheiroDecimal($valorParaFormatar)
    {
        $tamanho = strlen($valorParaFormatar);
        $dados = str_replace(',', '.', $valorParaFormatar);
        if($tamanho <= 6) {
            $dados = str_replace(',', '.', $valorParaFormatar);
        } else {
            if($tamanho >= 8 && $tamanho <= 10) {
                $retiraVirgulaPorPonto = str_replace(',', '.', $valorParaFormatar);
                $separaPoIndice = explode('.', $retiraVirgulaPorPonto);
                $dados = $separaPoIndice[0] . $separaPoIndice[1];
            }
        }
        return $dados ; 
    }
}

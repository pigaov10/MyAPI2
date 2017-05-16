<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampanhaEntradaBloco extends Model
{
    protected $table = 'DIM_ENTRADA_CAMPANHA_BLOCO';
    protected $connection = 'etl';
}

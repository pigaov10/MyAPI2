<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampanhaEntrada extends Model
{
    protected $table = 'DIM_ENTRADA_CAMPANHA';
    protected $connection = 'etl';
}

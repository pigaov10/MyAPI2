<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FatoEntradaCampanha extends Model
{
    protected $table = 'FATO_ENTRADA_CAMPANHA';
    protected $connection = 'etl';
}

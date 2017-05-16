<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'DIM_COLABORADOR';
    protected $connection = 'etl';
}

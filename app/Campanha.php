<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $table = 'DIM_CAMPANHA';
    protected $connection = 'etl';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origem extends Model
{
    protected $table = 'DIM_ORIGEM';
    protected $connection = 'etl';
}

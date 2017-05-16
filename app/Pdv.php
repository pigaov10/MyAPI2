<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdv extends Model
{
    protected $table = 'DIM_PDV';
    protected $connection = 'etl';
}

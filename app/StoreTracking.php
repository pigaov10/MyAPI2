<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreTracking extends Model
{
    protected $table = 'DIM_STORETRACKING';
    protected $connection = 'etl';
}

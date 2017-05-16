<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FatoVisita extends Model
{
    protected $table = 'FACT_VISIT';
    protected $connection = 'etl';

    public function campanha()
    {
        return $this->belongsTo('App\Campanha', 'sk_campanha', 'sk_campanha');
    }

    public function pdv()
    {
        return $this->belongsTo('App\Pdv', 'sk_pdv', 'sk_pdv');
    }

    public function colaborador()
    {
        return $this->belongsTo('App\Colaborador', 'sk_colaborador', 'sk_colaborador');
    }

    public function origem()
    {
        return $this->belongsTo('App\Origem', 'sk_origem', 'sk_origem');
    }

}

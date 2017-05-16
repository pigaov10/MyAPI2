<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class FacadeDatabase extends Controller
{
    private $databaseName;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function handle($user_id)
    {
        $conn = DB::connection('credentials');
        $dado = $conn->select('select * from oauth_clients where id = '.$user_id);
        $this->databaseName = $dado[0]->name;

        config(['database.connections.etl.database' => 'BI_'.$this->databaseName]);

        return $this;
    }

}

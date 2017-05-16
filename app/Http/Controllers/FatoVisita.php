<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use LucaDegasperi\OAuth2Server\Authorizer;
use Unlu\Laravel\Api\QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\FacadeDatabase as Fb;

class FatoVisita extends Controller
{
    public $mapper = [];

    public function __construct(Authorizer $authorizer)
    {
        $this->mapper = ['campanha','pdv','colaborador'];

        $user_id = $authorizer->getClientId();

        $db_facade = new Fb();
        $db_facade->handle($user_id);
    }


    public function index(Request $request)
    {

        $data = new \App\FatoVisita;
        $data = $data->with($this->mapper)->limit(1);

        $json = [
            '_links' => $request->route()->getName(),
            '_embedded' => $data->get()
        ];

        return \Response::json($json,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

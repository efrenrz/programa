<?php

namespace programa\Http\Controllers;

use Illuminate\Http\Request;

use programa\Http\Requests;
use programa\Http\Controllers\Controller;
use programa\Escuelas;

class EscuelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $escuelas = \DB::table('escuelas')->get(['id', 'nombre', 'titular' , 'tiempo_en_cargo']);
        return view('escuelas',compact('escuelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $escuela = Escuelas::findOrFail($id);
        $nombre = $escuela->nombre;
        $escuela->delete();
        return ['message' => 'deleted', 'name' => $nombre];
    }
}

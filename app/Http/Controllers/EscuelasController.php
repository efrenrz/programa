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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $escuela = new Escuelas($request->all());

        if($request->file('organigrama') != null){
            $file_1 =   $request->file('organigrama')->getFilename() . "_" .$request->file('organigrama')->getClientOriginalName();
            $request->file('organigrama')->move(base_path() . '/public/uploads/' , $file_1);
            $escuela->organigrama = $file_1;
        }

        if($request->file('nomina_administrativa') != null){
            $file_2 =   $request->file('nomina_administrativa')->getFilename() . "_" .$request->file('nomina_administrativa')->getClientOriginalName();
            $request->file('nomina_administrativa')->move(base_path() . '/public/uploads/' , $file_2);
            $escuela->nomina_administrativa = $file_2;
        }

        if($request->file('nomina_academica_plaza') != null){
            $file_3 =   $request->file('nomina_academica_plaza')->getFilename() . "_" .$request->file('nomina_academica_plaza')->getClientOriginalName();
            $request->file('nomina_academica_plaza')->move(base_path() . '/public/uploads/' , $file_3);
            $escuela->nomina_academica_plaza = $file_3;
        }

        if($request->file('nomina_honorarios') != null){
            $file_4 =   $request->file('nomina_honorarios')->getFilename() . "_" .$request->file('nomina_honorarios')->getClientOriginalName();
            $request->file('nomina_honorarios')->move(base_path() . '/public/uploads/' , $file_4);
            $escuela->nomina_honorarios = $file_4;
        }

        $escuela->save();

        return redirect()->route('escuelas.index');



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
        $convenios = \programa\Convenios::get()->where('id_escuela',$id);
        $licitaciones = \programa\Licitaciones::get()->where('id_escuela',$id);
        $asuntos = \programa\Asuntos::get()->where('id_escuela',$id);
        $representaciones = \programa\Representaciones::get()->where('id_escuela',$id);
        $becas = \programa\Becas::get()->where('id_escuela',$id);
        $eventos = \programa\Eventos::get()->where('id_escuela',$id);
        $oferta = \programa\Oferta::get()->where('id_escuela',$id);
        $reforma = \programa\Reforma::get()->where('id_escuela',$id);

        $escuela = Escuelas::findOrFail($id);
        return view('edit',compact('escuela','convenios','licitaciones','asuntos','representaciones','becas','eventos','oferta','reforma'));
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
        $escuela = Escuelas::findOrFail($id);

        $organigrama = $escuela->organigrama;
        $nomina_administrativa = $escuela->nomina_administrativa;
        $nomina_academica_plaza = $escuela->nomina_academica_plaza;
        $nomina_honorarios = $escuela->nomina_honorarios;

        $escuela->fill($request->all());

        if($request->file('organigrama') != null){
            $file_1 =   $request->file('organigrama')->getFilename() . "_" .$request->file('organigrama')->getClientOriginalName();
            $request->file('organigrama')->move(base_path() . '/public/uploads/' , $file_1);
            $escuela->organigrama = $file_1;
        }
        else{
            $escuela->organigrama = $organigrama;
        }

        if($request->file('nomina_administrativa') != null){
            $file_2 =   $request->file('nomina_administrativa')->getFilename() . "_" .$request->file('nomina_administrativa')->getClientOriginalName();
            $request->file('nomina_administrativa')->move(base_path() . '/public/uploads/' , $file_2);
            $escuela->nomina_administrativa = $file_2;
        }
        else{
            $escuela->nomina_administrativa = $nomina_administrativa;
        }

        if($request->file('nomina_academica_plaza') != null){
            $file_3 =   $request->file('nomina_academica_plaza')->getFilename() . "_" .$request->file('nomina_academica_plaza')->getClientOriginalName();
            $request->file('nomina_academica_plaza')->move(base_path() . '/public/uploads/' , $file_3);
            $escuela->nomina_academica_plaza = $file_3;
        }
        else{
            $escuela->nomina_academica_plaza = $nomina_academica_plaza;
        }

        if($request->file('nomina_honorarios') != null){
            $file_4 =   $request->file('nomina_honorarios')->getFilename() . "_" .$request->file('nomina_honorarios')->getClientOriginalName();
            $request->file('nomina_honorarios')->move(base_path() . '/public/uploads/' , $file_4);
            $escuela->nomina_honorarios = $file_4;
        }
        else{
            $escuela->nomina_honorarios = $nomina_honorarios;
        }

        $escuela->save();

        return redirect()->route('escuelas.index');
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

    public function observaciones(Request $request,$id)
    {
        $type = 'observaciones_' . $request->obsType;
        $escuela = Escuelas::findOrFail($id);

        $escuela->$type = $request->$type;

        $escuela->save();

        return ['message' => $id];
    }
}

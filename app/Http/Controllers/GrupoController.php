<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Province;
use App\Location;


class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //dd($request->province);
        $hoy = Carbon::now(); 
        $dia = $hoy->subDay();      
        $desde = Carbon::parse($request->desde)->format('Y-m-d');
        $hasta = Carbon::parse($request->hasta)->format('Y-m-d');
        if($desde<$dia||$hasta<$dia){
            flash("la fecha de partida o llegada no puede ser anterior a la fecha actual")->error();
            return redirect(route('home'));
        }
        if($hasta<$desde){
            flash("la fecha de llegada no puede ser anterior a la fecha de partida")->error();
            return redirect(route('home'));
        }
        $provincia = Province::find($request->province);
        $localidad = Location::find($request->location);
        if($localidad->name=="Oran"||$localidad->name=="San Salvador de Jujuy"){
            return view('admin.nuevo')
            ->with('request',$request)
            ->with('provincia',$provincia)
            ->with('localidad',$localidad);
        }
        else{
        return view('admin.tipoA')
        ->with('request',$request)
        ->with('provincia',$provincia)
        ->with('localidad',$localidad);
    }
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

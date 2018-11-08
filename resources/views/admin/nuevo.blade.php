@extends('admin.template.main')
@section('title','Nuevo Grupo')
@section('content')
@section('grupo','active')
<h3>Destino: {{$provincia->name}}-{{$localidad->name}} en {{$request->transporte}} por {{$request->motivo}} </h3>
<p><h4>Felicidades!!! Eres el primer integrante del grupo, solo debes aguardar al resto o cambiar los parametros de la busqueda.</h4></p>
<div class="col-xs-12">
<div class="table-responsive">
  <table class="table table-bordered table-condensed table-striped table-responsive table-hover">
    <thead>
      <th>GRUPO</th>
      <th>PERSONAS</th>
      <th>ACCION</th>
    </thead>
    <tbody>
                  <tr>
                    <td>GRUPO 1</td>
                    <td>1/{{$request->personas}}</td>
                    <td>
                    </td>
                  </tr>         
             </tbody>
           </table>
           </div>
           </div>
@endsection
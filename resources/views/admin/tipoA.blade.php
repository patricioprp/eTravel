@extends('admin.template.main')
@section('title','Grupos Encontrados')
@section('content')
@section('grupo','active')
<h3>Destino: {{$provincia->name}}-{{$localidad->name}} en {{$request->transporte}} por {{$request->motivo}} </h3>
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
                    <td><a href="/home" onclick="return confirm('Ya te uniste a un grupo 1 de viaje!')" class="btn btn-primary" title="Unirse">Unirme</a>
                    </td>
                  </tr> 
                  <tr>
                        <td>GRUPO 2</td>
                        <td>2/{{$request->personas}}</td>
                        <td><a href="/home" onclick="return confirm('Ya te uniste a un grupo 2 de viaje!')" class="btn btn-primary" title="Unirse">Unirme</a>
                        </td>
                      </tr>  
                    <tr>
                            <td>GRUPO 3</td>
                            <td>3/{{$request->personas}}</td>
                            <td><a href="/home" onclick="return confirm('Ya te uniste a un grupo 3 de viaje!')" class="btn btn-primary" title="Unirse">Unirme</a>
                            </td>
                          </tr>          
             </tbody>
           </table>
           </div>
           </div>
@endsection

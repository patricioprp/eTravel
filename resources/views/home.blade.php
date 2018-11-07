
@extends('admin.template.main')
@section('title','Buscar Grupos')
@section('content')
@section('viaje','active')
{!! Form::open(['route' => 'grupo.store','method'=>'POST']) !!}
<div class="form-group">
    <div class="row">
        <div class="col-lg-2">
                {!! Form::label('transporte','Transporte',['class'=>'control-label']) !!}
              </div>
                <div class="col-lg-2">
                {!! Form::select('transporte',['' => 'Seleccione el Transporte', 'tren'=>'Tren','Avion'=>'Avion'],null,['class'=>'form-control select-transporte']) !!}
                </div>
                <div class="col-lg-2">
                        {!! Form::label('personas','Personas por Grupo',['class'=>'control-label']) !!}
                </div>
                <div class="col-lg-2">
                        {!! Form::select('personas',['' => 'Seleccione la Cantidad', '1'=>'1','2'=>'2','3'=>'3'],null,['class'=>'form-control select-persona']) !!}
                </div>
                <div class="col-lg-2">
                    {!! Form::label('alojamiento','Alojamiento',['class'=>'control-label']) !!}
                </div>
                <div class="col-lg-2">
                    {!! Form::select('alojamiento',['' => 'Seleccione el Alojamiento', 'Hotel'=>'Hotel','Pension'=>'Pension','Otro'=>'Otro'],null,['class'=>'form-control select-alojamiento']) !!}
            </div>
    </div>
<hr/>
 
    <div class="row">
        <div class="col-lg-2">
          {!! Form::label('desde','Desde',['class'=>'control-label']) !!}   
        </div>
        <div class="col-lg-2">
           {!! Form::date('desde',null,['class' => 'form-control desde', 'placeholder'=>'dd-mm-aaaa','required']) !!}
        </div>
         <div class="col-lg-2">
                {!! Form::label('hasta','Hasta',['class'=>'control-label']) !!}   
         </div>
         <div class="col-lg-2">
                 {!! Form::date('hasta',null,['class' => 'form-control hasta', 'placeholder'=>'dd-mm-aaaa','required']) !!}
        </div>
    </div>
<hr/>
<div class="row">
    <div class="col-lg-2">
        {!! Form::select('province',['placeholder'=>'Seleccion una Provincia'],null,['class'=>'form-control select-provincia','id'=>'province'])!!}
    </div>
    <div class="col-lg-2">
        {!! Form::select('location',['placeholder'=>'Selecciona una Localidad'],null,['class'=>'form-control','id'=>'location'])!!}
    </div>
</div>
    <div class="row">
            <div class="col-lg-2">
                    {!! Form::submit('Buscar Grupos',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
</div>
{!! Form::close() !!}
@endsection

@extends('adminlte::page')
@section('title', 'Editar marca')
@section('content_header')
<h1 class="text-primary"><i class="fas fa-marker"></i>Editar marca</h1>
@stop
@section('content')
{!! Form::model($marca,['route'=>['inventarios.marcas.update',$marca->id],'method'=>'put']) !!}
<div class="row">
    <div class="col-sm-12 col-md-7 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h3><i class="fa-solid fa-input-text"></i>Editar marca</h3>
            </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">
                            <i class="fas fa-marker"></i>Nombre
                        </label>
                        {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"> Guardar</i>
            </button>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop

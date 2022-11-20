@extends('adminlte::page')

@section('title', 'Gúnther el Chúcaro')

@section('content_header')
@stop

@section('content')
    <div class="card">
        <div class="class-header">
            <h1 class="card-tittle">Crear nuevo rol</h1>
        </div>
        <div class="card-body">
        @if($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>¡Revise los campos!</strong>
            @foreach($errors->all() as $error)
            <span class="badge badge-danger">{{$error}}</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" arian-label="close">
                   <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

            {!! Form::open(array('route'=>'roles.store','method'=>'POST')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Nombre del rol</label>
                        {!! Form::text('name', null, array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Permisos para este Rol:</label>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]',$value->id, false, array('class'=>'name')) }}
                            {{$value->name}}</label>
                            <br/>
                        @endforeach
                    </div>
                </div>
            </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            {!! Form::close() !!}
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

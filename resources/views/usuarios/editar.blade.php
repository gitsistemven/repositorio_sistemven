@extends('adminlte::page')

@section('title', 'Gúnther el Chúcaro')

@section('content_header')
@stop

@section('content')
    <div class="card">
        <div class="class-header">
            <h1 class="card-tittle">Editar usuario</h1>
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
            
            {!! Form::model($user,['method'=>'PUT','route'=>['usuarios.update',$user->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {!! Form::text('name', null, array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Email</label>
                        {!! Form::text('email', null, array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Password</label>
                        {!! Form::password('password', array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Confirmar Password</label>
                        {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="name">Roles</label>
                        {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
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

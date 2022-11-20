@extends('adminlte::page')

@section('title', 'Gúnther el Chúcaro')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="class-header">
            <h1 class="card-tittle">hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit temporibus excepturi, deserunt libero labore nulla incidunt explicabo fuga voluptatum quae ut consequuntur optio eaque error voluptatibus quas architecto beatae magni!</p>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop

@yield('js')



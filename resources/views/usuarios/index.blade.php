@extends('adminlte::page')

@section('title', 'Gúnther el Chúcaro')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="class-header">
            <h1 class="card-tittle">Usuarios</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>

            <table class="table table-striped mt-2">
                <thead style="background-color:#6777ef;">
                    <th style="display:none;">ID</th>
                    <th style="color:#fff;">Nombre</th>
                    <th style="color:#fff;">E-mail</th>
                    <th style="color:#fff;">Rol</th>
                    <th style="color:#fff;">Acciones</th>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td style="display:none;">{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            @if(!empty($usuario->getRoleNames()))
                                @foreach($usuario->getRoleNames() as $rolName)
                                <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{route('usuarios.edit', $usuario->id) }}">Editar</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['usuarios.destroy',$usuario->id], 'class'=>'formulario_eliminar' , 'style'=>'display:inline']) !!}
                             {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination justify-content-end">
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @if(session('eliminar') == 'Ok')
    <script>
        Swal.fire(
            'Eliminado',
            'El objeto seleccionado se elimino correctamente.',
            'success'
        )
    </script>
    @endif

    <script>
        $('.formulario_eliminar').submit(function(e){
        e.preventDefault()
        Swal.fire({
            title:'Esta seguro de eliminar?',
            text: "el objeto seleccionado sera eliminado permanentemente",
            icon: 'warning',
            showCancelButton:true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor:'#d33',
            confirmButtonText:'!Si, eliminar¡',
            cancelButtonText:'Cancelar'

        }).then((result)=>{
            if(result.value){
                
            this.submit();
                
            }
        })

    });
    </script>


@endsection
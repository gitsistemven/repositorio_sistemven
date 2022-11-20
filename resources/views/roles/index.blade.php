@extends('adminlte::page')
@section('title', 'Gúnther el Chúcaro')
@section('content_header')
@stop
@section('content')
    <div class="card">
        <div class="class-header">
            <h1 class="card-tittle">Lista de roles</h1>
        </div>
        <div class="card-body">
            @can('crear-rol')
            <a class="btn btn-warning" href="{{route('roles.create')}}">Nuevo</a>
            @endcan
            <table class="table table-striped mt-2">
                <thead style="background-color:#6777ef;">
                    <th style="color:#fff;">Rol</th>
                    <th style="color:#fff;">Acciones</th>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>
                        @can('editar-rol')
                            <a class="btn btn-primary" href="{{route('roles.edit',$role->id) }}">Editar</a>
                        @endcan

                        @can('borrar-rol')
                        {!! Form::open(['method'=>'DELETE','route'=>['roles.destroy',$role->id], 'class'=>'formulario_eliminar' , 'style'=>'display:inline']) !!}
                             {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination justify-content-end">
                {!! $roles->links() !!}
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

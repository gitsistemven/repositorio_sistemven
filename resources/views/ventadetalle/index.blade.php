@extends('layouts.app')

@section('template_title')
    Ventadetalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ventadetalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventadetalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Venta</th>
										<th>Id Producto</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Descuento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventadetalles as $ventadetalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ventadetalle->id_venta }}</td>
											<td>{{ $ventadetalle->id_producto }}</td>
											<td>{{ $ventadetalle->cantidad }}</td>
											<td>{{ $ventadetalle->precio }}</td>
											<td>{{ $ventadetalle->descuento }}</td>

                                            <td>
                                                <form action="{{ route('ventadetalles.destroy',$ventadetalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventadetalles.show',$ventadetalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventadetalles.edit',$ventadetalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ventadetalles->links() !!}
            </div>
        </div>
    </div>
@endsection

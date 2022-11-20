@extends('layouts.app')

@section('template_title')
    Compradetalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compradetalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compradetalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Compra</th>
										<th>Id Insumo</th>
										<th>Unidadporempaque</th>
										<th>Cantidad</th>
										<th>Total</th>
										<th>Fecha Caducidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compradetalles as $compradetalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compradetalle->id_compra }}</td>
											<td>{{ $compradetalle->id_insumo }}</td>
											<td>{{ $compradetalle->unidadporempaque }}</td>
											<td>{{ $compradetalle->cantidad }}</td>
											<td>{{ $compradetalle->total }}</td>
											<td>{{ $compradetalle->fecha_caducidad }}</td>

                                            <td>
                                                <form action="{{ route('compradetalles.destroy',$compradetalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compradetalles.show',$compradetalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compradetalles.edit',$compradetalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $compradetalles->links() !!}
            </div>
        </div>
    </div>
@endsection

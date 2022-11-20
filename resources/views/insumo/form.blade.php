<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $insumo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_categoria') }}
            {{ Form::select('id_categoria',$catinsumos, $insumo->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_unidadmedida') }}
            {{ Form::select('id_unidadmedida',$unidadmedidas, $insumo->id_unidadmedida, ['class' => 'form-control' . ($errors->has('id_unidadmedida') ? ' is-invalid' : ''), 'placeholder' => 'U/M']) }}
            {!! $errors->first('id_unidadmedida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidadporempaque') }}
            {{ Form::text('unidadporempaque', $insumo->unidadporempaque, ['class' => 'form-control' . ($errors->has('unidadporempaque') ? ' is-invalid' : ''), 'placeholder' => 'Unidad por empaque']) }}
            {!! $errors->first('unidadporempaque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $insumo->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('minimo_inventario') }}
            {{ Form::text('minimo_inventario', $insumo->minimo_inventario, ['class' => 'form-control' . ($errors->has('minimo_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Minimo Inventario']) }}
            {!! $errors->first('minimo_inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_caducidad') }}
            {{ Form::date('fecha_caducidad', $insumo->fecha_caducidad, ['class' => 'form-control' . ($errors->has('fecha_caducidad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Caducidad']) }}
            {!! $errors->first('fecha_caducidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
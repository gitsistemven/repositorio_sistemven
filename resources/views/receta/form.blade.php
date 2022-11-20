<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_insumo') }}
            {{ Form::text('id_insumo', $receta->id_insumo, ['class' => 'form-control' . ($errors->has('id_insumo') ? ' is-invalid' : ''), 'placeholder' => 'Insumo']) }}
            {!! $errors->first('id_insumo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_unidadmedida') }}
            {{ Form::text('id_unidadmedida', $receta->id_unidadmedida, ['class' => 'form-control' . ($errors->has('id_unidadmedida') ? ' is-invalid' : ''), 'placeholder' => 'U/M']) }}
            {!! $errors->first('id_unidadmedida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $receta->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_consumida') }}
            {{ Form::text('cantidad_consumida', $receta->cantidad_consumida, ['class' => 'form-control' . ($errors->has('cantidad_consumida') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Consumida']) }}
            {!! $errors->first('cantidad_consumida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
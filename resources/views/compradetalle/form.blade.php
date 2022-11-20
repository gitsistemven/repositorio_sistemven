<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_compra') }}
            {{ Form::text('id_compra', $compradetalle->id_compra, ['class' => 'form-control' . ($errors->has('id_compra') ? ' is-invalid' : ''), 'placeholder' => 'Id Compra']) }}
            {!! $errors->first('id_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_insumo') }}
            {{ Form::text('id_insumo', $compradetalle->id_insumo, ['class' => 'form-control' . ($errors->has('id_insumo') ? ' is-invalid' : ''), 'placeholder' => 'Id Insumo']) }}
            {!! $errors->first('id_insumo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidadporempaque') }}
            {{ Form::text('unidadporempaque', $compradetalle->unidadporempaque, ['class' => 'form-control' . ($errors->has('unidadporempaque') ? ' is-invalid' : ''), 'placeholder' => 'Unidadporempaque']) }}
            {!! $errors->first('unidadporempaque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $compradetalle->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $compradetalle->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_caducidad') }}
            {{ Form::text('fecha_caducidad', $compradetalle->fecha_caducidad, ['class' => 'form-control' . ($errors->has('fecha_caducidad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Caducidad']) }}
            {!! $errors->first('fecha_caducidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
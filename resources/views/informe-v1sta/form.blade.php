<div class="box box-info padding-1">
    <div class="box-body">
    
        <div class="form-group">
            {{ Form::label('propietario') }}
            {{ Form::text('propietario', $informeEnsayo->propietario, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
            {!! $errors->first('propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Fecha de Recepcion') }}
                    {{ Form::date('fecha_recepcion', $informeEnsayo->fecha_recepcion, ['class' => 'form-control' . ($errors->has('fecha_recepcion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Recepcion']) }}
                    {!! $errors->first('fecha_recepcion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                {{ Form::label('Fecha de Informe') }}
                    {{ Form::date('fecha_informe', $informeEnsayo->fecha_informe, ['class' => 'form-control' . ($errors->has('fecha_informe') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Informe']) }}
                    {!! $errors->first('fecha_informe', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
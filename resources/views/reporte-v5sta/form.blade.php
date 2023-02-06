<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre y/o Firma de revision') }}
                    {{ Form::text('nombre_firma_revision', $reporteMuestreo->nombre_firma_revision, ['class' => 'form-control' . ($errors->has('nombre_firma_revision') ? ' is-invalid' : ''), 'placeholder' => 'nombre y/o firma de revision']) }}
                    {!! $errors->first('nombre_firma_revision', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre y Firma de encargado de obra') }}
                    {{ Form::text('nombre_firma_encargado', $reporteMuestreo->nombre_firma_encargado, ['class' => 'form-control' . ($errors->has('nombre_firma_encargado') ? ' is-invalid' : ''), 'placeholder' => 'nombre y firma del encargado de obra']) }}
                    {!! $errors->first('nombre_firma_encargado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Hora de salida del muestreador') }}
                    {{ Form::time('hora_salida_muestreador', $reporteMuestreo->hora_salida_muestreador, ['class' => 'form-control' . ($errors->has('hora_salida_muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida Muestreador']) }}
                    {!! $errors->first('hora_salida_muestreador', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Entrega del laboratorista') }}
                    {{ Form::text('entrega_laboratorista', $reporteMuestreo->entrega_laboratorista, ['class' => 'form-control' . ($errors->has('entrega_laboratorista') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Laboratorista']) }}
                    {!! $errors->first('entrega_laboratorista', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre del transportista') }}
                    {{ Form::text('transportista_2', $reporteMuestreo->transportista_2, ['class' => 'form-control' . ($errors->has('transportista_2') ? ' is-invalid' : ''), 'placeholder' => 'Transportista 2']) }}
                    {!! $errors->first('transportista_2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Firma del transportista') }}
                    {{ Form::text('firma_transportista_2', $reporteMuestreo->firma_transportista_2, ['class' => 'form-control' . ($errors->has('firma_transportista_2') ? ' is-invalid' : ''), 'placeholder' => 'Firma Transportista 2']) }}
                    {!! $errors->first('firma_transportista_2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre del laboratorista') }}
                    {{ Form::text('laboratorista', $reporteMuestreo->laboratorista, ['class' => 'form-control' . ($errors->has('laboratorista') ? ' is-invalid' : ''), 'placeholder' => 'Laboratorista']) }}
                    {!! $errors->first('laboratorista', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Firma del laboratorista') }}
                    {{ Form::text('firma_laboratorista', $reporteMuestreo->firma_laboratorista, ['class' => 'form-control' . ($errors->has('firma_laboratorista') ? ' is-invalid' : ''), 'placeholder' => 'Firma Laboratorista']) }}
                    {!! $errors->first('firma_laboratorista', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
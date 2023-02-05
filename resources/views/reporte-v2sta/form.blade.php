<div class="box box-info padding-1">
    <div class="box-body">    
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('hora_llegada_muestreador') }}
                    {{ Form::time('hora_llegada_muestreador', $reporteMuestreo->hora_llegada_muestreador, ['class' => 'form-control' . ($errors->has('hora_llegada_muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Hora Llegada Muestreador']) }}
                    {!! $errors->first('hora_llegada_muestreador', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('entrega_transportista') }}
                    {{ Form::text('entrega_transportista', $reporteMuestreo->entrega_transportista, ['class' => 'form-control' . ($errors->has('entrega_transportista') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Transportista']) }}
                    {!! $errors->first('entrega_transportista', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre del muestreador') }}
                    {{ Form::text('muestreador', $reporteMuestreo->muestreador, ['class' => 'form-control' . ($errors->has('muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Muestreador']) }}
                    {!! $errors->first('muestreador', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Firma del muestreador') }}
                    {{ Form::text('firma_muestreador', $reporteMuestreo->firma_muestreador, ['class' => 'form-control' . ($errors->has('firma_muestreador') ? ' is-invalid' : ''), 'placeholder' => 'Firma Muestreador']) }}
                    {!! $errors->first('firma_muestreador', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Nombre del transportista') }}
                    {{ Form::text('transportista_1', $reporteMuestreo->transportista_1, ['class' => 'form-control' . ($errors->has('transportista_1') ? ' is-invalid' : ''), 'placeholder' => 'Transportista 1']) }}
                    {!! $errors->first('transportista_1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Firma del transportista') }}
                    {{ Form::text('firma_transportista_1', $reporteMuestreo->firma_transportista_1, ['class' => 'form-control' . ($errors->has('firma_transportista_1') ? ' is-invalid' : ''), 'placeholder' => 'Firma Transportista 1']) }}
                    {!! $errors->first('firma_transportista_1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
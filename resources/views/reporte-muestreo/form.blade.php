<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Modulo 1') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('resistencia', $reporteMuestreo->resistencia, ['class' => 'form-control' . ($errors->has('resistencia') ? ' is-invalid' : ''), 'placeholder' => 'Resistencia (f´c) MPa (kg/cm²)']) }}
                    {!! $errors->first('resistencia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('tipo_aditivo', $reporteMuestreo->tipo_aditivo, ['class' => 'form-control' . ($errors->has('tipo_aditivo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Aditivo']) }}
                    {!! $errors->first('tipo_aditivo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('tipo_concreto', $reporteMuestreo->tipo_concreto, ['class' => 'form-control' . ($errors->has('tipo_concreto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Concreto']) }}
                    {!! $errors->first('tipo_concreto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('tipo_agregado', $reporteMuestreo->tipo_agregado, ['class' => 'form-control' . ($errors->has('tipo_agregado') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Agregado']) }}
                    {!! $errors->first('tipo_agregado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('premezcadora', $reporteMuestreo->premezcadora, ['class' => 'form-control' . ($errors->has('premezcadora') ? ' is-invalid' : ''), 'placeholder' => 'Premezcadora']) }}
                    {!! $errors->first('premezcadora', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('edad_ensayo', $reporteMuestreo->edad_ensayo, ['class' => 'form-control' . ($errors->has('edad_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'Edad de Ensayo']) }}
                    {!! $errors->first('edad_ensayo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <br><br>
        <div class="form-group">
            {{ Form::label('Modulo 2') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('revenimiento', $reporteMuestreo->revenimiento, ['class' => 'form-control' . ($errors->has('revenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Revenimiento']) }}
                    {!! $errors->first('revenimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('tipo_cemento', $reporteMuestreo->tipo_cemento, ['class' => 'form-control' . ($errors->has('tipo_cemento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Cemento']) }}
                    {!! $errors->first('tipo_cemento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('tamano_agregado_maximo', $reporteMuestreo->tamano_agregado_maximo, ['class' => 'form-control' . ($errors->has('tamano_agregado_maximo') ? ' is-invalid' : ''), 'placeholder' => 'T.M.A (mm)']) }}
                    {!! $errors->first('tamano_agregado_maximo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('dosificacion', $reporteMuestreo->dosificacion, ['class' => 'form-control' . ($errors->has('dosificacion') ? ' is-invalid' : ''), 'placeholder' => 'Dosificacion']) }}
                    {!! $errors->first('dosificacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('marca_cemento', $reporteMuestreo->marca_cemento, ['class' => 'form-control' . ($errors->has('marca_cemento') ? ' is-invalid' : ''), 'placeholder' => 'Marca Cemento']) }}
                    {!! $errors->first('marca_cemento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('volumen_colado', $reporteMuestreo->volumen_colado, ['class' => 'form-control' . ($errors->has('volumen_colado') ? ' is-invalid' : ''), 'placeholder' => 'Volumen Colado']) }}
                    {!! $errors->first('volumen_colado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
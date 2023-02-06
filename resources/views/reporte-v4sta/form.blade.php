<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('temperatura_humedad') }}
                    {{ Form::text('temperatura_humedad', $reporteMuestreo->temperatura_humedad, ['class' => 'form-control' . ($errors->has('temperatura_humedad') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Humedad']) }}
                    {!! $errors->first('temperatura_humedad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('id_termometro') }}
                    {{ Form::text('id_termometro', $reporteMuestreo->id_termometro, ['class' => 'form-control' . ($errors->has('id_termometro') ? ' is-invalid' : ''), 'placeholder' => 'Id Termometro']) }}
                    {!! $errors->first('id_termometro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('id_varilla') }}
                    {{ Form::text('id_varilla', $reporteMuestreo->id_varilla, ['class' => 'form-control' . ($errors->has('id_varilla') ? ' is-invalid' : ''), 'placeholder' => 'Id Varilla']) }}
                    {!! $errors->first('id_varilla', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('id_cono') }}
                    {{ Form::text('id_cono', $reporteMuestreo->id_cono, ['class' => 'form-control' . ($errors->has('id_cono') ? ' is-invalid' : ''), 'placeholder' => 'Id Cono']) }}
                    {!! $errors->first('id_cono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('condicion_ambiental_muestreo') }}
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" value="Vientos" id="condicion_ambiental_muestreo" value="option1">
                <label class="form-check-label" for="condicion_ambiental_muestreo">Vientos</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" value="Lluvia" id="condicion_ambiental_muestreo" value="option2" required>
                <label class="form-check-label" for="condicion_ambiental_muestreo">Lluvia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicion_ambiental_muestreo" value="Ninguna que afecte" id="condicion_ambiental_muestreo" value="option3" checked>
                <label class="form-check-label" for="condicion_ambiental_muestreo">Ninguna que afecte</label>
            </div>
            {!! $errors->first('condicion_ambiental_muestreo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Desviaciones y exclusiones') }}
            {{ Form::textarea('desviaciones_exclusiones', $reporteMuestreo->desviaciones_exclusiones, ['class' => 'form-control', 'rows' => '3' . ($errors->has('desviaciones_exclusiones') ? ' is-invalid' : ''), 'placeholder' => 'Desviaciones y exclusiones que se presentaron']) }}
            {!! $errors->first('desviaciones_exclusiones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones a considerar') }}
            {{ Form::textarea('observaciones_considerar', $reporteMuestreo->observaciones_considerar, ['class' => 'form-control', 'rows' => '3' . ($errors->has('observaciones_considerar') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones Considerar']) }}
            {!! $errors->first('observaciones_considerar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
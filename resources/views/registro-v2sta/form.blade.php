<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Prensa') }}
                    {{ Form::text('prensa', $registroCilindro->prensa, ['class' => 'form-control' . ($errors->has('prensa') ? ' is-invalid' : ''), 'placeholder' => 'Prensa']) }}
                    {!! $errors->first('prensa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Regla') }}
                    {{ Form::text('regla', $registroCilindro->regla, ['class' => 'form-control' . ($errors->has('regla') ? ' is-invalid' : ''), 'placeholder' => 'Regla']) }}
                    {!! $errors->first('regla', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Bascula') }}
                    {{ Form::text('bascula', $registroCilindro->bascula, ['class' => 'form-control' . ($errors->has('bascula') ? ' is-invalid' : ''), 'placeholder' => 'Bascula']) }}
                    {!! $errors->first('bascula', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Termometro') }}
                    {{ Form::text('termometro', $registroCilindro->termometro, ['class' => 'form-control' . ($errors->has('termometro') ? ' is-invalid' : ''), 'placeholder' => 'Termometro']) }}
                    {!! $errors->first('termometro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Temperatura Ambiental') }}
                    {{ Form::text('temperatura_ambiental', $registroCilindro->temperatura_ambiental, ['class' => 'form-control' . ($errors->has('temperatura_ambiental') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura Ambiental']) }}
                    {!! $errors->first('temperatura_ambiental', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
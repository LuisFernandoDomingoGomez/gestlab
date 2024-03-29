<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Hora de Inicio de Cabeceo') }}
                    {{ Form::time('hora_inicio_cabeceo', $registroCilindro->hora_inicio_cabeceo, ['class' => 'form-control' . ($errors->has('hora_inicio_cabeceo') ? ' is-invalid' : ''), 'placeholder' => 'hora_inicio_cabeceo']) }}
                    {!! $errors->first('hora_inicio_cabeceo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Hora de Final de Cabeceo') }}
                    {{ Form::time('hora_final_cabeceo', $registroCilindro->hora_final_cabeceo, ['class' => 'form-control' . ($errors->has('hora_final_cabeceo') ? ' is-invalid' : ''), 'placeholder' => 'hora_final_cabeceo']) }}
                    {!! $errors->first('hora_final_cabeceo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row g-3">
                <div class="col">
                    {{ Form::label('Hora Inicio de Ensayo') }}
                    {{ Form::time('hora_inicio_ensayo', $registroCilindro->hora_inicio_ensayo, ['class' => 'form-control' . ($errors->has('hora_inicio_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'hora_inicio_ensayo']) }}
                    {!! $errors->first('hora_inicio_ensayo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::label('Hora FIn de Ensayo') }}
                    {{ Form::time('hora_final_ensayo', $registroCilindro->hora_final_ensayo, ['class' => 'form-control' . ($errors->has('hora_final_ensayo') ? ' is-invalid' : ''), 'placeholder' => 'hora_final_ensayo']) }}
                    {!! $errors->first('hora_final_ensayo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
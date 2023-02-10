<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $registroCilindro->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
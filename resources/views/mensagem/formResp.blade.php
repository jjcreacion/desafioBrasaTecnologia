
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('aluno') }} : {{$mensagem->aluno}}</label>
    {{ Form::hidden('idm', $mensagem->id, ['class' => 'form-control' .
        ($errors->has('aluno') ? ' is-invalid' : ''), 'placeholder' => 'Aluno']) }}
</div>
<div class="form-group mb-3">
    <label class="form-label">  {{ Form::label('mensagem') }} : {{$mensagem->mensagem}}</label>
</div>
<div class="form-group mb-3">
    <label class="form-label"> Resposta </label>
    <div>
        {{ Form::textarea('mensagem', '', ['class' => 'form-control' .
        ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Resposta']) }}
        {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>

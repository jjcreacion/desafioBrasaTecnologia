
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('idp') }}</label>
    <div>
        {{ Form::text('idp', $mensagem->idp, ['class' => 'form-control' .
        ($errors->has('idp') ? ' is-invalid' : ''), 'placeholder' => 'Idp']) }}
        {!! $errors->first('idp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>idp</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('aluno') }}</label>
    <div>
        {{ Form::text('aluno', $mensagem->aluno, ['class' => 'form-control' .
        ($errors->has('aluno') ? ' is-invalid' : ''), 'placeholder' => 'Aluno']) }}
        {!! $errors->first('aluno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>aluno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $mensagem->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>email</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('whatsapp') }}</label>
    <div>
        {{ Form::text('whatsapp', $mensagem->whatsapp, ['class' => 'form-control' .
        ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
        {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>whatsapp</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('mensagem') }}</label>
    <div>
        {{ Form::text('mensagem', $mensagem->mensagem, ['class' => 'form-control' .
        ($errors->has('mensagem') ? ' is-invalid' : ''), 'placeholder' => 'Mensagem']) }}
        {!! $errors->first('mensagem', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>mensagem</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('data') }}</label>
    <div>
        {{ Form::text('data', $mensagem->data, ['class' => 'form-control' .
        ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
        {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>data</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $mensagem->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">mensagem <b>status</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>

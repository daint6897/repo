<!-- Ten San Pham Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten_san_pham', 'Ten San Pham:') !!}
    {!! Form::text('ten_san_pham', null, ['class' => 'form-control']) !!}
</div>

<!-- Gia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gia', 'Gia:') !!}
    {!! Form::text('gia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sanphams.index') !!}" class="btn btn-default">Cancel</a>
</div>

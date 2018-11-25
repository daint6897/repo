<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sanpham->id !!}</p>
</div>

<!-- Ten San Pham Field -->
<div class="form-group">
    {!! Form::label('ten_san_pham', 'Ten San Pham:') !!}
    <p>{!! $sanpham->ten_san_pham !!}</p>
</div>

<!-- Gia Field -->
<div class="form-group">
    {!! Form::label('gia', 'Gia:') !!}
    <p>{!! $sanpham->gia !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $sanpham->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $sanpham->updated_at !!}</p>
</div>


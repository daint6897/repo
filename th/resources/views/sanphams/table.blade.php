<table class="table table-responsive" id="sanphams-table">
    <thead>
        <tr>
            <th>Ten San Pham</th>
        <th>Gia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sanphams as $sanpham)
        <tr>
            <td>{!! $sanpham->ten_san_pham !!}</td>
            <td>{!! $sanpham->gia !!}</td>
            <td>
                {!! Form::open(['route' => ['sanphams.destroy', $sanpham->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sanphams.show', [$sanpham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sanphams.edit', [$sanpham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
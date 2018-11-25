@extends('admin.master')
@section('content')
@section('title','list')
<table class="list_table">
            <tr class="list_heading">
                <td class="id_col">STT</td>
                <td>Danh Mục</td>
                <td class="action_col">Quản lý?</td>
            </tr>
            
            <?php menuList($data) ?>
            
            
        </table>
@endsection()
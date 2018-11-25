<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }} " />
	<title>Admin Area :: Login</title>
</head>
<body>
<div id="layout">
    <div id="top">
        Admin Area :: Login
    </div>
    @if(count($errors)>0)
            @foreach ($errors->all() as $value )
                <p>{{$value}}</p>
            @endforeach          
        @endif
    <div id="main">
		<form action="{{route('postLogin11')}}" method="POST" style="width: 650px; margin: 30px auto;">
            {{ csrf_field() }}
            <fieldset>
                <legend>Thông Tin Đăng Nhập</legend>                
				<table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span class="form_label">Username:</span>
                            <span class="form_item">
                                <input type="text" name="txtUser" class="textbox" />
                            </span><br />
                            <span class="form_label">Password:</span>
                            <span class="form_item">
                                <input type="password" name="txtPass" class="textbox" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng nhập" class="button" />
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <div id="bottom">
        
</div>

</body>
</html>
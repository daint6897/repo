<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}} " />
	<title>Admin Area :: @yield('title')</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Admin Area :: @yield('title')

    </div>
    @include('admin.notification.flash')
	<div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="">Trang chính</a> | <a href="{{url('admin/user/list')}}">Quản lý user</a> | <a href="">Quản lý danh mục</a> | <a href="">Quản lý tin</a>
				</td>
				<td align="right">
					Xin chào {{Auth::user()->username}} | <a href="{{ url('dangNhap/getLogout') }}">Logout</a>
				</td>
			</tr>
		</table>
	</div>

    <div id="main">

		  @yield('content')
	</div>

    <div id="bottom">
      ahihi
    </div>
</div>
</body>
</html>
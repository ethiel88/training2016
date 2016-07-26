<html>
	<head>
		<title>Registro - @yield('title')</title>
	</head>
	<body>
		<div class="sidebar">
			<h3>Operaciones</h3>
			<ul>
				<li>Home</li>
				@section('operaciones')
				@show
			</ul>
		</div>
		<h1>@yield('h1')</h1>
		<div class="">
			@yield('content')
		</div>
	</body>
</html>
<html>
<head>
	<title>
		App Name - @yield('title')
	</title>

	@section("css")
		<p>CSS Files here</p>
	@show
</head>
<body>


    @section("header")
    	<p>Parent Template Header</p>
    @show


    @section("nav_bar")
    	<p>Parent Navbar </p>
    @show


    @section("slider")
    	<p>Parent Slider</p>
    @show


    @yield('content')


    @section("footer")
    	<p>Parent Footer</p>
    @show


    @section("js")
    	<p>JS Files here</p>
    @show
</body>
</html>
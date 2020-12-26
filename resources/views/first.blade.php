<html>
	<head>
	</head>
	<body>

		<h1>First Blade Template Lecture</h1>
		<!-- Comment in Blade -->
		{{-- $name_full --}}


		<!-- <?php //echo $name_full; ?> -->
		{{ $name_full }}
		with
		<p>{{ $name }}</p>
		<hr/>

		<!-- Way to rendar variable as html value rather than string -->
		{!! $html_var !!}



		<!-- Global Share View Data -->

		{{ $global_data }}
	</body>
</html>
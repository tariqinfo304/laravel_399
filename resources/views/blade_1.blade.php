<html>
<head>
	<title>First Blade Lecture</title>
	<script type="text/javascript">
		function show()
		{
			
		}
	</script>
</head>
<body>
	

{{ time() }}
<hr/>
{{ $name }}
<hr/>
<!-- the @
 expression will remain untouched by the Blade engine, allowing it to be rendered by your JavaScript framework.
-->
@{{ name }}
<hr/>

<!-- The  Directive -->

@verbatim
    <div class="container">
        Hello, {{ name }}.
        Hello, {{ name1 }}.
        Hello, {{ name2 }}.

    </div>
@endverbatim

<hr/>


@isset($name)

	@if($name == "evs")
		<p>EVS</p>
	@else
		<p>Not EVS</p>
	@endif

@endisset
<hr/>

@isset($name)
	<p>Exist </p>
@endisset

<hr/>

@empty($name)
	<p>Empty </p>
@endempty

<hr/>

@switch($name)

    @case('evs')
        First case...
        @break
    @case('admin')
        Second case...
        @break
    @default
        Default case...
@endswitch

<hr/>

<h2>While Loop</h2>
@if(!empty($arr))

	@php($i=0)
	@php($count = count($arr))

	@while($i<$count)
		
		{{ $arr[$i] }}

		@php($i++)

	@endwhile

@endif

<hr/>

@if(!empty($count))

<h2>For Loop</h2>
@for($i=0;$i<$count;$i++)

	{{ $arr[$i] }}

@endfor

@endif

<hr/>

<h2>Foreach</h2>

@foreach($arr as  $key => $row)
	{{ $key }} => {{ $row }}
@endforeach

<hr/>
<h2>forelse Loop</h2>

@forelse ($arr as $user)
    <li>{{ $user }}</li>
@empty
    <p>No users</p>
@endforelse

<hr/>

<h2>Break,Continue</h2>

@foreach ($arr as $user)
    @if ($user == 1)
        @continue
    @endif

    <li>{{ $user }}</li>

    @if ($user == 3)
        @break
    @endif
@endforeach

<hr/>

<h2>Short Form Break,Continue</h2>

@foreach ($arr as $user)

    @continue($user == 1)

    <li>{{ $user }}</li>

    @break($user == 3)

@endforeach


<hr/>

<h2>Loop variables</h2>


@foreach ($arr as $user)
	

	@foreach ($arr as $user)

	 {{-- 	@php(dd($loop)) --}}

		    {{-- $loop->first --}}
		    {{-- $loop->last --}}

		    <li>{{ $loop->index }} => {{ $user }}</li>

	@endforeach

@endforeach


<hr/>

<h2>Including Subviews</h2>

 @include("show_error")

<hr/>


<h2>Including Subviews with passing Arguments</h2>

 @include("show_error",
 				[
 					"error_no"	=>	404, 
 					"desc" 		=> 	"Page not found!"
 				])

<hr/>

<h2>Conditional Including Subviews</h2>
<p>IF view exist then it will load else not</p>
 @includeIf("show_error1")

 <hr/>

<h2>Conditional Including Subviews with expression </h2>

@includeWhen(1, 'show_success', [
 					"title"	=>	"Student", 
 					"desc" 		=> 	"Page found!"
 				])

@includeUnless(0, 'show_error', [
 					"error_no"	=>	404, 
 					"desc" 		=> 	"Page not found!"
 				])

<hr/>

<h2>Rendering Views For Collections like array</h2>

	<ul>
		@each("listing",$arr,"row",'404_page')
	</ul>

<hr/>

@once
    @push('scripts')
        <script>
            let name="tariq";
        </script>
    @endpush
@endonce

<hr/>







</body>
</html>
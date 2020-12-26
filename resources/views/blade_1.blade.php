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

@if($name == "evs")
	<p>EVS</p>
@else
	<p>Not EVS</p>
@endif

<hr/>

@isset($name)
	<p>Exist </p>
@else
	<p>Not Exist</p>
@endif

<hr/>

@empty($name)
	<p>Empty </p>
@else
	<p>Not Empty</p>
@endif

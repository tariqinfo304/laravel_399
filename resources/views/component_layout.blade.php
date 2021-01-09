
<x-layout>
	<x-slot name="c_title">
        {{ $title }}
    </x-slot>

    <ul>
	    @foreach ($arr as $row)
	        <li>{{ $row }}</li>
	    @endforeach
	</ul>
</x-layout>
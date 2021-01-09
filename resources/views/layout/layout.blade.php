<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        
        <!-- Alert component Render you can pass any type of data  but when youwill pass php data then you will pass by :varname  -->

        <!-- kebab-case should be used when referencing the argument names in your HTML attributes  -->
        <!--  camelCase should be used in Compoenent Constructor to fetch data  -->
        <x-alert data-name="use for sending html attribute" type="text" class="alert" title-value="error" :message="$message">

        	<!-- this conent will be accessed by using name field in component -->
        	<x-slot name="title_slot">
		        <!--Server Error-->
		        {{ $component->setTitleSlot() }}

		    </x-slot>

        	<!-- This inside HTML content fo to slot variable to Compoenent class -->
        	<strong>Whoops!</strong> Something went wrong!

       	</x-alert>

        <hr/>

        <!-- Form Input component Render -->
        <x-forms.input/>

        <hr/>

        <x-alert-inline/>

        <hr/>

        <x-anonymous type="button" data-name="tariq" class="tariq" :data="$message"/>

        <hr/>

        <h2>Dynamic Components</h2>

        <!-- Sometimes you may need to render a component but not know which component should be rendered until runtime -->
        <x-dynamic-component :component="$componentName" class="mt-4" />

    </body>
</html>
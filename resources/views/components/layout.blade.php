<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>
        <h1>{{ $c_title }}</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>
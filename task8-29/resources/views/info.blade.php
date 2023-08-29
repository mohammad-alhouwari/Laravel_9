<html>
    <body>
        <h1>Hello,  {{$name}} </h1>
        <ul>
            @foreach ($adds as $add)
                <li>{{ $add }}</li>
            @endforeach
        </ul>

    </body>
</html>
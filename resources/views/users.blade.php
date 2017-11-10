<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>{{$title}}</h1>
    @if (! empty($users))
    <ul>
        @foreach ($users as $user)
        <li>{{$user}}</li> 
        @endforeach
    </ul>
    @else
    <p>No hay usuarios registrados</p>
    @endif

    {{time()}}
</body>
</html>
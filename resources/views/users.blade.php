@extends('layout')

@section('content')
    
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
@endsection

@section ('sidebar')
    @parent 
    <!--Respeta el código puesto en sidebar-->
    <h2>Barra Lateral Personalizada (sobreescrita)</h2>
    <!--Se sobreescribe el tento de la etiqueta H2-->
@endsection
    
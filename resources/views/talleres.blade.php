@extends('layout')

@section('title','Talleres')

@section('content')
    <h2>Talleres</h2>
    <ul>
        @if($talleres)
            @foreach($talleres as $item)
                <li>{{ $item }}</li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </ul>
@endsection
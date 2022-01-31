@extends('layouts.main-layout')
@section('content')

    <h3>
        <a href="{{ route('create')}}"> CREATE NEW</a>
    </h3>

    <h1>Lista fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('show', $comic -> id)}}">
                    {{ $comic -> title }} - {{ $comic -> author }} - {{ $comic -> release_date }}
                </a> | 
                <a href="{{ route('edit', $comic -> id)}}">EDIT</a> | 
                <a href="{{ route('delete', $comic -> id)}}">DELETE</a>
            </li>
        @endforeach
    </ul>
    
@endsection
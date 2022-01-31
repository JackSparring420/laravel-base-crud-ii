@extends('layouts.main-layout')
@section('content')

    <h1>Modifica fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $comic -> id)}}" method="POST">

        @method('post')
        @csrf

            <label for="title">Titolo:</label>
            <input type="text" name="title" placeholder="titolo" value="{{$comic -> title}}"> <br>

            <label for="subtitle">Sottotitolo:</label>
            <input type="text" name="subtitle" placeholder="sottotitolo" value="{{$comic -> subtitle}}"> <br>

            <label for="author">Autore:</label>
            <input type="text" name="author" placeholder="Autore" value="{{$comic -> author}}"> <br>

            <label for="release_date">Data uscita:</label>
            <input type="date" name="release_date" value="{{$comic -> release_date}}"> <br>

            <label for="pages">Numero pagine:</label>
            <input type="number" name="pages" value="{{$comic -> pages}}"> <br>

            <input type="submit" value="UPDATE">
    </form>
@endsection
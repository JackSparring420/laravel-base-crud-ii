@extends('layouts.main-layout')
@section('content')

    <h1>Crea nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store')}}" method="POST">

        @method('post')
        @csrf

            <label for="title">Titolo:</label>
            <input type="text" name="title" placeholder="titolo"> <br>

            <label for="subtitle">Sottotitolo:</label>
            <input type="text" name="subtitle" placeholder="sottotitolo"> <br>

            <label for="author">Autore:</label>
            <input type="text" name="author" placeholder="Autore"> <br>

            <label for="release_date">Data uscita:</label>
            <input type="date" name="release_date"> <br>

            <label for="pages">Numero pagine:</label>
            <input type="number" name="pages"> <br>

            <input type="submit" value="CREATE">
    </form>
@endsection
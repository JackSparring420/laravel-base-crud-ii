@extends('layouts.main-layout')@section('content')
<h1>{{$comic -> title}}</h1>
<h2>{{$comic -> subtitle}}</h2>
<h3>{{$comic -> author}}</h3>
<h3>{{$comic -> release_date}}</h3>

<button>
    <a href="{{ route('home')}}">home</a>
</button>

@endsection
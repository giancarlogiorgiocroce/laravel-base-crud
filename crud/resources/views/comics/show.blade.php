@extends('layouts.main')

@section('title', 'Show')
@section('content')
    <h1>Show</h1>
    <h3>Eccoti ulteriori informazioni fasulle su fumetto nr {{ $comic->id }}</h3>
    <h5>{{ $comic->title }}</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolorum quo iure perferendis cumque voluptate dolor sunt, tempore quibusdam cum aut quasi repellat dolores? Aliquam at fuga natus. Perspiciatis, nostrum.</p>
@endsection

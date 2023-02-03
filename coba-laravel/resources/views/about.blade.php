@extends('layouts.main')


@section('container')
    <h1>Halaman About</h1>
    <h3>me, {{ $name }}</h3>
    <p>{{ $email }} </p>
    <p>this is me <img src="" alt="{{ $name }}"></p>
@endsection

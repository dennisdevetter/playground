@extends('layouts.app')

@section('content')
    <h1> Index </h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection

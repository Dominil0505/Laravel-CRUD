@extends('layout')
@section('content')
    <h1>Test</h1>
    @foreach ($students as $item)
        <h5>{{ $item }}</h5>
    @endforeach
@endsection

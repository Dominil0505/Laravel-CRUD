@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Show Page</div>
    <div class="card-body">
        <div class="card-body">
            <h4 class="card-title">Name: {{ $student-> name}}</h4>
            <p class="card-text">Address: {{ $student->address }}</p>
            <p class="card-text">Mobile: {{ $student->mobile }}</p>
        </div>
        <hr>
    </div>
</div>
@endsection

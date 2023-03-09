@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="/edit/{{ $student->id }}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}">
            <label>Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{$student->mobile}}">
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@endsection

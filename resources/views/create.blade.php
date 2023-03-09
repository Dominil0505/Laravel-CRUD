@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header"><h2>Create new stundent</h2></div>

        <div class="card-body">
            <form action="/create" method="POST">
                @csrf
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <label>Address</label>
                <input type="text" name="address" id="address" class="form-control">
                <label>Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control">
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>

    </div>
@endsection

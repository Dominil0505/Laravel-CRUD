@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>LARAVEL 10 CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('create') }}" class="btn btn-success" title="Add new Student"> Add new </a>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }} </td>
                                        <td>{{ $item->mobile }}</td>
                                    <td>
                                        <a href="/show/{{ $item->id }}" title="View student" class="btn btn-info"> <i class="bi bi-eye-fill" aria-hidden="true"></i> View</a>
                                        <a href="/edit/{{ $item->id }}" title="Edit student" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <a href="/delete/{{ $item->id }}" title="Delete student" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

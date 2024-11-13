@extends('layouts.main', ['title' => 'Crud index'])
@section('head')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student data <a class="float-end" href="{{ url('crud/add') }}">Add Student Data</a></h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @forelse ($cruds as $crud)
                    <tr>
                        <td>{{ $crud->id }}</td>
                        <td>{{ $crud->name }}</td>
                        <td>{{ $crud->email }}</td>
                        <td>{{ $crud->phone }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('crud/edit') }}?id=1">Edit</a>
                            <a class="btn btn-danger" href="deletestudent.php?id=1"
                                onclick="return confirm('Are you sure to Delete?')">Delete</a>
                        </td>
                    @empty
                        <h3>no list found</h3>
                @endforelse
                </tr>
            </table>
            {{ $cruds->onEachSide(3)->links() }}

        </div>
    </div>
@endsection

@section('rightbar')
    <hr>
    @parent
    <ul>
        <li>link</li>
        <li>link</li>
        <li>link</li>
        <li>link</li>
        <li>link</li>
        <li>link</li>
    </ul>
@endsection

@section('navlink')
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Nur</a>
    </li>
@endsection

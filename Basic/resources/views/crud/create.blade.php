@extends('layouts.main', ['title' => 'Crud create'])
@section('head')
@endsection

@section('content')
    <div class="card-header">
        <h2>Add Student <a class="float-end" href="{{url('crud')}}">Back</a></h2>
    </div>
    <div class="card-body">
        <form action="{{route('crud.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nam">Student Name:</label>
                <input class="form-control" type="text" name="name" id="nam"/>
            </div>

            <div class="form-group">
                <label for="email">Student Email:</label>
                <input class="form-control" type="text" name="email" id="email"/>
            </div>

            <div class="form-group">
                <label for="phone">Student Phone:</label>
                <input class="form-control" type="text" name="phone" id="phone"/>
            </div>

            <div class="form-group">
                <input type="hidden" name="action" value="add" />
                <input class="btn btn-primary" type="submit"/>
            </div>

        </form>
    </div>
@endsection

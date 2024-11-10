@extends('layouts.main', ['title' => 'Crud index'])
@section('head')
@endsection

@section('content')
<div class="card-header">
    <h2>Update Student Data<a class="float-end" href="{{url('crud')}}">Back</a></h2>
</div>
<div class="card-body">
    <form action="lib/process_student.php" method="post">
        <div class="form-group">
            <label for="name">Student Name:</label>
            <input class="form-control" type="text" name="name" id="name" required="1" value="Nurmohammad" />
        </div>

        <div class="form-group">
            <label for="email">Student Email:</label>
            <input class="form-control" type="text" name="email" id="email" required="1" value="nur@gmail.com"/>
        </div>

        <div class="form-group">
            <label for="phone">Student Phone:</label>
            <input class="form-control" type="text" name="phone" id="phone" required="1" value="01677772333"/>
        </div>

        <div class="form-group">
            <input type="hidden" name="id" value="1"/>
            <input type="hidden" name="action" value="edit"/>
            <input class="btn btn-primary" type="submit" name="name" value="Update Student Data"/>
        </div>

    </form>
</div>
@endsection

@extends('layouts.main', ['title' => 'Single Category'])

@section('content')
    <div class="card">
        <div class="mt-4">
            <h1 class="text-center">Single Category
            </h1>
        </div>

        <hr>
        <h1>Categories Info</h1>
        <h3>{{ $category->name }}</h3>
        <h3>{{ $category->slug }}</h3>
        <p>{{ $category->description }}</p>
        <p>{{ $category->image }}</p>
        <p>{{ $category->status }}</p>
        <p>{{ $category->created_at }}</p>
        <p>{{ $category->updated_at }}</p>
        <div class="div">
            <a href="{{ url()->previous() }}" class="btn btn-primary bi bi-arrow-left">
                Back
            </a>
        </div>
    </div>
@endsection

@extends('layouts.main', ['title' => 'Subcategories index'])

@section('content')
    <div class="card">

        <div class="card-header">
            <h1 class="text-center">Sub Categories Table <a class="float-end btn btn-primary"
                    href="{{ route('subcategories.create') }}">Subcategory Create</a></h1>

        </div>
        <div class="table-responsive">
            <div class="card-body">
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $subcategory->name }}</td>
                                <td>{{ $subcategory->category }}</td>
                                <td>{{ $subcategory->slug }}</td>
                                <td><img src="{{ asset('storage/' . $subcategory->image) }}" width="100px"></td>
                                <td>{{ $subcategory->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('subcategories.edit', $subcategory->id) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this data?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('subcategories.show', $subcategory->id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <hr>
        {{ $subcategories->links() }}
    </div>
@endsection

@extends('layouts.main', ['title' => 'Subcategories create'])

@section('content')
<h1>Subcategories Create</h1>
 {{ html()->form()->route('subcategories.store')->open() }}

 @include('subcategories.form')


    {{ html()->submit('Submit')->class('btn btn-primary') }}

{{ html()->form()->close() }}
{{-- {{ html()->form()->route('subcategories.store')->open() }}

    {{ html()->text('name')->class('form-control') }}
    {{ html()->select('category_id', $categories)->class('form-select') }}
    {{ html()->submit('Submit')->class('btn btn-primary') }}

{{ html()->form()->close() }} --}}

@endsection

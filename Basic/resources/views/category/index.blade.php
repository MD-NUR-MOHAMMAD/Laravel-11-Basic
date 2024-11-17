@extends('layouts.main', ['title' => 'Crud index'])
@section('head')
@endsection

@section('content')

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

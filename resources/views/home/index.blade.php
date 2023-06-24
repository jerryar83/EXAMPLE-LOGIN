
@extends('layouts.app-master')
@section('content')

@auth
    <div class='jumbotron jumbotron-fluid'>
        <div class="container">
            <h1 class="display-4">Aplicación Laravel User Authentication</h1>
            <p class='lead'> This is a modified jumbotron that </p>
        </div>
    </div>
@endauth

@guest
    <div class='jumbotron jumbotron-fluid'>
        <div class="container">
            <h1 class="display-4">Aplicación Laravel</h1>
            <p class='lead'> This is a modified jumbotron that </p>
        </div>
    </div>
@endguest
@endsection
@extends('layouts.app-master')
@section('content')

<form method="post" action="{{route('auth.perform')}}">
    @csrf

    <h1>Login</h1>
    @include('layouts.partials.massages')
        <div class="form-goup">
            <input type="text" class="form-control" name="username" 
            placeholder="username" required ="required">

            <label for ="">Usuario o Email </label>
                @if ($errors ->has('username'))
                    <div class ="alert alert-danger" role="alert">
                        {{$errors->firts('username')}}
                    </div>
                @endif
            
        </div>
        <div class="form-goup">
            <input type="password" class="form-control" name="password" 
            placeholder="Password" required ="required">
            <label for ="">Password </label>
                @if($errors->has('password'))
                <div class ="alert alert-danger" role="alert">
                    {{$errors->firts('password')}}
                </div>

                @endif
                
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    
@endsection
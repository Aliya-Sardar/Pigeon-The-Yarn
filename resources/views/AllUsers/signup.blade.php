
<!-- Link to external css for signin page -->
<head>
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
</head>

@extends('Template.app')

@section('main_Content')
    <div class="signup-container rounded mx-auto my-5 py-5">
        <h1 align='center'>Sign Up</h1>
        <div class="form-container mt-5">
            <form action="{{ route('Registration') }}" method="POST">
                @csrf                                           <!--csrf token--> 
                <div class="form-group">
                    <input type="text" class="form-control my-1" name="name" placeholder="Name" />
                    <br/>
                    <input type="email" class="form-control my-1" name="email" placeholder="Email" />
                </div>
                <br>
                <div class="form-group" id="Password">
                    <input type="password" class="form-control my-1" name="password" placeholder="Password"/>
                    <input type="password" class="form-control my-1" name="password_confirmation" placeholder="Confirm"/>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Signup</button>
            </form>
        </div>

    </div>
@endsection
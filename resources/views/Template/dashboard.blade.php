
<!-- link to external css for dashboard -->
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

@extends('Template.app')

@section('main_Content')
    <div>
        <div class="container div-Content">
            <h1>Hello {{ Auth::user()->name }} !</h1>
            <p class="para">Nice to see you!!</p>
        </div>

        <div class="div-Content">
            @yield('dashboard_Content')
        </div>
        
    </div>
@endsection


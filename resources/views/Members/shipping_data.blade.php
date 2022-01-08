@extends('Template.dashboard')

@section('dashboard_Content')
    <div class="container div-Content">
        <!-- Shipping data of user -->
        <h2>Shipping Data</h2>
        <br>
        @foreach ($userInfo as $info)
            <div>
                <h4>Address:</h4>
                <p class="para">{{ $info->Address }}</p>
            </div>
            <br>
            <div>
                <h4>Phone Number:</h4>
                <p class="para">{{ $info->Phone_Number }}</p>  
            </div>
        @endforeach
    </div>
    
@endsection
@extends('Template.dashboard')

@section('dashboard_Content')
    <div class="container">
        <form action="{{ route('store_info') }}" method="POST">
            @csrf                                               <!--csrf token--> 
            <!-- Address -->
            <div class="form-group">
                <textarea class="form-control" name="address" rows="4" placeholder="Address"></textarea>
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <input type="text" class="form-control" name="phoneNumber" size="11" placeholder="Phone Number"/>
            </div>

            <!-- Sign in Button -->
            <br/><br/>
            <div>
                <button type="submit" class="btn btn-primary Button">Submit</button>
            </div>
        </form>
    </div>
@endsection

<!-- link to external css for About Page only -->
<head>
    <link rel="stylesheet" href="{{ asset('css\about.css') }}">
</head>

@extends('Template.app')

@section('main_Content')

    <div class="container">
        <br>
        <h1>Who are we?</h1>

        <!-- First row  -->
        <div class="row div-Content">
            <div class="col-md-6 m-auto">
                <h2>Pigeon The Yarn</h2>
                <br>
                <p class="para">We are here to provide you with hand knitted products that feel homely,
                    warm and cozy. Our pledge is to deliver the best to you, so you can feel comfortable
                    anywhere and at anytime. Our products will give you the warmth you need in this
                    cold world.</p>
            </div>

            <div class="col-md-6">
                <img src="images\Logo.png" alt="Logo" class="img-fluid image rounded">
            </div>
        </div>

        <br>

        <!-- Second row  -->
        <div class="row div-Content">
            <div class="col-md-6">
                <img src="images\Warm.jpg" alt="Warm and Cozy" class="img-fluid image rounded">
            </div>

            <div class="col-md-6 m-auto">
                <h2>Goal</h2>
                <br>
                <p class="para">Our goal is to provide you with the warmest and softest products. 
                    So, even in the coldest weather you can stay warm and enjoy the day. </p>
            </div>
        </div>

        <br>
        <!-- Third row  -->
        <div class="row div-Content">
            <div class="col-md-6 m-auto">
                <h2>Customization</h2>
                <br>
                <p class="para">All your imaginations will be created into reality by our 
                    best knitters. We make custom products to you liking. From the design to the colors 
                    everything will be as you wish.</p>
            </div>

            <div class="col-md-6">
                <img src="images\Work_Progress.jpg" alt="Custom" class="img-fluid image rounded">
            </div>
        </div>
    </div>
    
@endsection
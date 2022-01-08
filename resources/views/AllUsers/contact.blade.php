
<!-- Link to external css for contact page -->
<head>
    <link rel="stylesheet" href="{{ asset('css\contact.css') }}">
</head>

@extends('Template.app')

@section('main_Content')
    <div class="contact-div d-flex my-5 rounded ">
        <div class="p-3 my-4 content" align='center'>
            <h1>Get in Touch</h1>
            <br>
            <p>We would love to hear from you.</p>
            <br>
            <div id="whatsapp">
                <p>
                    <i class="fab fa-whatsapp"></i>
                    +92 033 1234567
                </p>
            </div>

            <div id="email">
                <p>
                    <i class="far fa-envelope"></i>
                    pigeontheyarn@gmail.com
                </p>
            </div>
        </div>

        <div class="p-3 mr-3 my-4 content">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                    <br>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                    <br>
                    <textarea class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </form>
        </div>

    </div>
@endsection